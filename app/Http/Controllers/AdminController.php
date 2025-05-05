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
}
