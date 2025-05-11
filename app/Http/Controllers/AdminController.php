<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Process;
use App\Models\Module;
use App\Models\Request as Req;
use App\Models\Part;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        
        $processes = Process::All();
        $modules = Module::All();
        $requests = Req::All();
        $categories = Part::select('category')->distinct()->pluck('category');
        $parts = Part::orderBy('category')->get()->groupBy('category');

        return view('admin', compact('processes', 'modules', 'requests', 'categories', 'parts'));
    }

    public function addModule(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'link' => 'required|string',
        ]);

        Module::create($validated);

        return back()->with('success', 'Module added successfully!');
    }

    public function addProcess(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'link' => 'required|string',
        ]);

        Process::create($validated);

        return back()->with('success', 'Process added successfully!');
    }

    public function addPart(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'desc' => 'required|string',
            'image' => 'required|image|mimes:png|max:2048'
        ]);

        // Create the part first
        $part = Part::create([
            'name' => $validated['name'],
            'category' => $validated['category'],
            'desc' => $validated['desc']
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $category = ucwords(strtolower($validated['category'])); // Convert to Title Case
            $directory = public_path('assets/images/parts/' . $category);
            
            // Create directory if it doesn't exist
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }

            // Store the image
            $request->file('image')->move(
                $directory,
                $validated['name'] . '.png'
            );
        }

        return back()->with('success', 'Part added successfully!');
    }

    public function updateRequest(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'status' => 'required|string'
        ]);
    
        $item = Req::find($request->id);
        $item->status = $request->status;
        $item->save();
    
        return response()->json(['success' => true]);
    }

    public function updateProcess(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'link' => 'required|string'
        ]);
    
        $item = Process::find($request->id);
        $item->link = $request->link;
        $item->save();
    
        return response()->json(['success' => true]);
    }

    public function updateModule(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'link' => 'required|string'
        ]);
    
        $item = Module::find($request->id);
        $item->link = $request->link;
        $item->save();
    
        return response()->json(['success' => true]);
    }

    public function deleteProcess(Request $request){
        $process = Process::find($request->id);
        if ($process) {
            $process->delete();
            return back()->with('success', 'Process deleted successfully.');
            
        }
        return back()->with('error', 'Process not found.');
    }

    public function deleteModule(Request $request){
        $module = Module::find($request->id);

        if ($module) {
            $module->delete();
            return back()->with('success', 'Module deleted successfully.');
        }
    
        return back()->with('error', 'Module not found.');
    }

    public function deletePart(Request $request){
        $part = Part::find($request->id);

        if ($part) {
            // Delete the image file
            $imagePath = public_path('assets/images/parts/' . ucwords(strtolower($part->category)) . '/' . $part->name . '.png');
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            // Delete the part record
            $part->delete();
            return back()->with('success', 'Part deleted successfully.');
        }
    
        return back()->with('error', 'Part not found.');
    }
}
