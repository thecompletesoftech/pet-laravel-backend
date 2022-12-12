<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pet_categorys;
use Carbon\Carbon;

class petcategory extends Controller {

    public function addpetcategory(Request $req) {

        try {

            $category = new pet_categorys();
            $category->pet_type = $req->pet_type;
            $category->pet_no_of_set = $req->pet_no_of_set;
            $category->hostel_id = $req->hostel_id;
            $category->hostel_hourly_fees = $req->hostel_hourly_fees;
            $category->hostel_fullday_fees = $req->hostel_fullday_fees;
            $category->created_at = Carbon::now();
            $category->updated_at = Carbon::now();
            $category->save();

            return response()->json([
                'message'=>'Add Successfully',
                'category'=>$category,
                'status'=>200
            ]);

        } catch( \Exception $e ) {

            return response()->json([
                'message'=>'Not category',
                'category'=>$category,
                'status'=>201,
                '4'=> $e
            ]);

        }

    }
}
