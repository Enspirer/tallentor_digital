<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Contact\SendContactRequest;
use App\Mail\Frontend\Contact\SendContact;
use Illuminate\Http\Request;
use DB;
use App\Models\ContactUs;
use App\Models\PartnershipInqiries;
use Mail;
use \App\Mail\ContactUsMail;
use \App\Mail\PartnershipInqiriesMail;
use App\Models\Auth\User;

/**
 * Class ContactController.
 */
class ContactController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.contact');
    }

    public function store(Request $request)
    {        
        // dd($request); 

        if($request->get('g-recaptcha-response') == null){
            return back()->with('error', 'Error!.....Please fill reCAPTCHA!');
        }  
   
        $add = new ContactUs;

        $add->name=$request->name;
        $add->email=$request->email;
        $add->phone_number=$request->contact;
        $add->message=$request->message;
        $add->status='Pending'; 

        $add->save();

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->contact,
            'message' => $request->message
        ];

        \Mail::to([$request->email,'nihsaan.enspirer@gmail.com'])->send(new ContactUsMail($details));
       
        return back()->with([
            'success' => 'success'
        ]);   
    }

    public function contact_us_sidebar_store(Request $request)
    {        
        // dd($request); 

        if($request->get('g-recaptcha-response') == null){
            return back()->with('error_sidebar', 'Error!.....Please fill reCAPTCHA!');
        }  
   
        $add = new ContactUs;

        $add->name=$request->name;
        $add->email=$request->email;
        $add->phone_number=$request->contact;
        $add->message=$request->message;
        $add->status='Pending'; 

        $add->save();

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->contact,
            'message' => $request->message
        ];

        \Mail::to([$request->email,'nihsaan.enspirer@gmail.com'])->send(new ContactUsMail($details));
       
        return back()->with([
            'success' => 'success'
        ]);   
    }

    
    public function partnership_store(Request $request)
    {        
        // dd($request); 

        if($request->get('g-recaptcha-response') == null){
            return back()->with('error_partnership', 'Error!.....Please fill reCAPTCHA!');
        }  
   
        $add = new PartnershipInqiries;

        $add->name=$request->name;
        $add->email=$request->email;
        $add->phone_number=$request->contact;
        $add->message=$request->message;
        $add->status='Pending'; 

        $add->save();

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->contact,
            'message' => $request->message
        ];

        \Mail::to([$request->email,'nihsaan.enspirer@gmail.com'])->send(new PartnershipInqiriesMail($details));
       
        return back()->with([
            'success' => 'success'
        ]);   
    }


    /**
     * @param SendContactRequest $request
     *
     * @return mixed
     */
    public function send(SendContactRequest $request)
    {
        Mail::send(new SendContact($request));

        return redirect()->back()->withFlashSuccess(__('alerts.frontend.contact.sent'));
    }
}
