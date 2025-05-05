<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Process;
use App\Models\Module;
use App\Models\Request as Req;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        
        $processes = Process::All();
        $modules = Module::All();
        $requests = Req::All();

        return view('admin', compact('processes', 'modules', 'requests'));
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
}
