<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Process;
use App\Models\Module;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){

        $processes = Process::All();
        $modules = Module::All();

        return view('dashboard', compact('processes', 'modules'));
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
}
