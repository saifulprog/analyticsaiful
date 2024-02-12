<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Mail\SendSingaleEmail;
use Mail;
use DB;

class SingaleMailController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function singaleMail(Request $request, $id)
    {
        try{
            $this->validate($request, [
                'txtSubject' => 'required|max:255',
                'txtHiddenEmailId' => 'required'
            ]);

            $mailData = [
                'title' => $request->txtSubject,
                'body' => $request->txtMessage??$request->txtHidenMessag
            ];
            
            Mail::to($request->txtHiddenEmailId)->send(new SendSingaleEmail($mailData));

            $sMessage = 'Email is sent successfully.';

        }catch(\Exception $exception){
            $sMessage = $exception->getMessage();
        }
           
        $request->session()->flash('alert-warning', "$sMessage");

        return redirect('targeted-audience');
    }
}
