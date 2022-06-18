<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteCheckout;

class WebsiteCheckoutController extends Controller
{
    public function website_store(Request $request)
    {        
        // dd($request); 

        $add = new WebsiteCheckout;
        $add->url=$request->url;
        if(!empty( auth()->user()->id) === true ){
            $add->user_id=auth()->user()->id;
        } 
        $add->save();

        return back()->with([
            'website_success' => 'website_success'
        ]);   
    }

}
