<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\PartnershipInqiries;

class PartnershipInqiriesController extends Controller
{
    
    public function index()
    {
        return view('backend.partnership_inqiries.index');
    }

    public function getDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = PartnershipInqiries::get();
            return DataTables::of($data)            
                ->addColumn('action', function($data){
                    
                    $button = '<a href="'.route('admin.partnership_inqiries.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-info-circle"></i> View </a>';
                    $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                    return $button;
                })
                
                ->editColumn('status', function($data){
                    if($data->status == 'Pending'){
                        $status = '<span class="badge badge-warning">Pending</span>';
                    }
                    else{
                        $status = '<span class="badge badge-success">Seen</span>';
                    }   
                    return $status;
                })
                
                ->rawColumns(['action','status'])
                ->make(true);
        }
        return back();
    }

    public function edit($id)
    {
        $partnership_inqiries = PartnershipInqiries::where('id',$id)->first();                 
        
        return view('backend.partnership_inqiries.edit',[
            'partnership_inqiries' => $partnership_inqiries         
        ]);  
    }

    public function update(Request $request)
    {    
        // dd($request);     
   
        $up_contactus = new PartnershipInqiries;

        $up_contactus->status='Seen';        
        
        PartnershipInqiries::whereId($request->hidden_id)->update($up_contactus->toArray());

        return redirect()->route('admin.partnership_inqiries.index')->withFlashSuccess('Updated Successfully');                             

    }

    public function destroy($id)
    {        
        $data = PartnershipInqiries::findOrFail($id);
        $data->delete();   
    }

}
