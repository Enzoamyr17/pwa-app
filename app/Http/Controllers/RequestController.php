<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Request as Req;
use App\Models\Draft;
use Illuminate\Support\Carbon;

class RequestController extends Controller
{

    public function list_my_requests(Request $request)
    {
        $token = $request->query('token');
    
        if (!$token) {
            return redirect('/')->with('error', 'No token found. Please try again.');
        }
    
        $requests = Req::where('token', $token)
                        ->orderBy('requested_at', 'desc')
                        ->get();
    
        return view('request.list', compact('requests'));
    }
    

    public function view_request($id){
        $request = Req::findorfail($id);

        return view('request.view', compact('request'));

    }

    public function view_draft(Request $request){
        $token = $request->query('token');
    
        if (!$token) {
            return redirect('/')->with('error', 'No token found. Please try again.');
        }
    
        $draft = Draft::where('token', $token)->first();

        return view('request.draft', compact('draft'));

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
            'token' => 'required|string|max:255'
        ]);

        $data['requested_at'] = now()->toDateString();

        $requestEntry = Req::create($data);

        return redirect()->route('req.list', ['token' => $request->token])
        ->with('success', 'Request submitted!');
    }

    public function store_draft(Request $request){
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
            'token' => 'required|string|max:255'
        ]);

        $data['requested_at'] = now()->toDateString();

        // Check if the token already exists
        $existingDraft = Draft::where('token', $request->token)->first();
    
        if ($existingDraft) {
            // If it exists, update the draft
            $existingDraft->update($data);
            $message = 'Draft Updated Successfully!';
        } else {
            // If it doesn't exist, create a new one
            Draft::create($data);
            $message = 'Draft Saved Successfully!';
        }
    
        return redirect()->route('req.index', ['token' => $request->token])
            ->with('success', $message);

    }
}
