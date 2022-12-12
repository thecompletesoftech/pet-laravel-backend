<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reg_hostels;
use Carbon\Carbon;

class hostel extends Controller
{
    public function hosteladd(Request $req) {
        try{
                
                $hostel = new reg_hostels(); 
                $hostel->hostel_name=$req->hostel_name;
                $hostel->hostet_gst_no=$req->hostet_gst_no;
                $hostel->hostel_owner_name=$req->hostel_owner_name;
                $hostel->hostel_address=$req->hostel_address;
                $hostel->hostel_contact_number=$req->hostel_contact_number;
                $hostel->hostel_about=$req->hostel_about;
                $hostel->hostel_logo=$req->hostel_logo;
                $hostel->hostel_photo=$req->hostel_photo;
                $hostel->hostel_location=$req->hostel_location;
                $hostel->created_at=Carbon::now();
                $hostel->updated_at =Carbon::now();

                $hostel->save(); 

                return response()->json([
                     'message'=>'Add Successfully',
                     'hostel'=>$hostel,
                     'status'=>200
                ]);
                
    
        } catch(\Exception $e){
                
             return response()->json([
                    'message'=>'Not Add',
                    'hostel'=>$hostel,
                    'status'=>201,
                    '4'=> $e
             ]);

        }

    }
}
