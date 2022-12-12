<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userregistrations;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class reg_user extends Controller
{
    public function insertdata(Request $req) {
        try{
                // $name = $req->get('uname');
                // $mobile = $req->get('umobile');
                // $email = $req->get('uemail');
                // $password = $req->get('upassword');ss
                // $regtype = $req->get('uregtype');
                // $image = $req->file('image')->getClientOriginalName();
                // $req->image->move(public_path('image'),$image);
                
                $register = new userregistrations(); 
                $register->user_name=$req->user_name;
                $register->user_email=$req->user_email;
                $register->user_mobile=$req->user_mobile;
                $register->user_pass=$req->Hash::make($user_pass);
                $register->user_reg_type=$req->user_reg_type;
                $register->created_at=Carbon::now();
                $register->updated_at =Carbon::now();

                $register->save(); 

                return response()->json([
                     'message'=>'register Successfully',
                     'user'=>$register,
                     'status'=>200
                ]);
                
    
        } catch(\Exception $e){
                
             return response()->json([
                    'message'=>'Not Registered',
                    'user'=>$register,
                    'status'=>201,
                    '4'=> $e
             ]);

        }

    }
            
}
