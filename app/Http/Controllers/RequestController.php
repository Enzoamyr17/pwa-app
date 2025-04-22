<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Request as Req;
use Illuminate\Support\Carbon;

class RequestController extends Controller
{
    public function list_all_requests(){
        $requests = Req::orderBy('timeper', 'asc')->get();

        return view('request.list', compact('requests'));

    }

    public function view_request($id){
        $request = Req::findorfail($id);

        return view('request.view', compact('request'));

    }

    public function store_request(Request $request){
        $data = $request->validate([
            'partname' => 'nullable|string|max:255',
            'partnum' => 'nullable|string|max:255',
            'drawnum' => 'nullable|string|max:255',
            'posnum' => 'nullable|string|max:255',
            'matnum' => 'nullable|string|max:255',
            'impa' => 'nullable|string|max:255',
            'artnum' => 'nullable|string|max:255',
            'specs' => 'nullable|string|max:1000',
            'timeper' => 'nullable|in:0,1,2,3,4,5,6,7',
        ]);

        $data['requested_at'] = now()->toDateString();

        $requestEntry = Req::create($data);

        return redirect()->route('req.list')->with('success', 'Request submitted!');

    }
}
