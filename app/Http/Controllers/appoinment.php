<?php

namespace App\Http\Controllers;
use App\Models\pet_appoinments;
use Carbon\Carbon;
use Illuminate\Http\Request;

class appoinment extends Controller
{
            public function addappoinment(Request $req){
                try {

                    $appoinment = new pet_appoinments();
                    $appoinment->user_id = $req->user_id;
                    $appoinment->hostel_id = $req->hostel_id;
                    $appoinment->pet_type = $req->pet_type;
                    $appoinment->date_time = $req->date_time;
                    $appoinment->transaction_id = $req->transaction_id;
                    $appoinment->created_at = Carbon::now();
                    $appoinment->updated_at = Carbon::now();
                    $appoinment->save();
        
                    return response()->json([
                        'message'=>'Add Successfully',
                        'appoinment'=>$appoinment,
                        'status'=>200
                    ]);
        
                } catch( \Exception $e ) {
        
                    return response()->json([
                        'message'=>'Not appoinment',
                        'appoinment'=>$appoinment,
                        'status'=>201,
                        '4'=> $e
                    ]);
        
                }
            }
}
