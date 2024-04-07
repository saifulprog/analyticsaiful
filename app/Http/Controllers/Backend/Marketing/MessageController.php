<?php

namespace App\Http\Controllers\Backend\Marketing;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use Auth;

class MessageController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }


    public function index()
    {
        // Gate::authorize('users-edit');
        $qItems = Message::paginate(15);
        
        return view('backend.marketing.message-template.message-template', compact('qItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $this->validate($request, [
                'txtTitle' => 'string|max:255|required',
                'txtSubject' => 'string|max:255|required',
                'txtMessage' => 'string|required'
            ]);

            Message::create([
                'title' => $request->txtTitle,
                'subject' => $request->txtSubject,
                'message' => $request->txtMessage,
                'publish' => $request->chkPublish,
                'remember_token' => $request->_token,
            ]);

            $sMessage = 'Message information added successfully.';

        }catch(\Exception $exception){
            $sMessage = $exception->getMessage();
        }

        $request->session()->flash('alert-warning', "$sMessage");

        return redirect('message-template');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $this->validate($request, [
                'txtTitle' => 'string|max:255|required',
                'txtSubject' => 'string|max:255|required',
                'txtMessage' => 'string|required'
            ]);

            Message::where('id',$id)->update([
                'title' => $request->txtTitle,
                'subject' => $request->txtSubject,
                'message' => $request->txtMessage,
                'publish' => $request->chkPublish,
                'remember_token' => $request->_token,
            ]);

            $sMessage = 'Message information updated successfully.';

        }catch(\Exception $exception){
            $sMessage = $exception->getMessage();
        }

        $request->session()->flash('alert-warning', "$sMessage");

        return redirect('message-template');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
