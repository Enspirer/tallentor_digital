<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteCheckout;
use DataTables;

class WebsiteCheckoutController extends Controller
{
   
    public function index()
    {
        return view('backend.webiste_checkout.index');
    }

    public function getDetails(Request $request)
    {
        $data = WebsiteCheckout::get();
        return DataTables::of($data)            
            ->addColumn('action', function($data){
                
                $button = '<a href="'.route('admin.webiste_checkout.view',$data->id).'" name="view" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-info-circle"></i> View </a>';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                return $button;
            })
           
            ->rawColumns(['action'])
            ->make(true);
            
        return back();
    }

    public function view($id)
    {
        $webiste_checkout = WebsiteCheckout::where('id',$id)->first();                 
        
        return view('backend.webiste_checkout.view',[
            'webiste_checkout' => $webiste_checkout         
        ]);  
    }

  
    public function destroy($id)
    {        
        $data = WebsiteCheckout::findOrFail($id);
        $data->delete();   
    }


}
