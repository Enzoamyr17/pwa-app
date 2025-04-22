<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Request as Req;

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

    public function store_request($request){
        
    }
}
