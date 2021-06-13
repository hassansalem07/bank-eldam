<?php

namespace App\Http\Controllers;

use App\Models\BloodType;
use App\Models\Category;
use App\Models\City;
use App\Models\Client;
use App\Models\Contact;
use App\Models\DonationRequest;
use App\Models\Governorate;
use App\Models\Notification;
use App\Models\Post;
use App\Models\Setting;
use Illuminate\Http\Request;

class apiController extends Controller
{


    private function apiResponse($status , $message , $data=null){
        $response = [

            "status" => $status,
            "message" => $message,
            "data" => $data,

          ];

          return response()->json($response);


    }


 function governorates(){

  $governorates =  governorate::all();

  return $this->apiResponse(1 , "success" , $governorates );

}

function cities (Request $request){
    $cities = City::where(function($query) use($request){
if($request->has("governorate_id")){

    $query->where("governorate_id" , $request->governorate_id);
}
    })->get();
    return $this->apiResponse(1 , "success" , $cities);
}

function bloodTypes()
{

    $bloodTypes =  BloodType::all();

    return $this->apiResponse(1 , "success" , $bloodTypes );

  }
  function categories(){

    $categories =  Category::all();

    return $this->apiResponse(1 , "success" , $categories );

  }

  function clients(){

    $clients =  Client::all();

    return $this->apiResponse(1 , "success" , $clients );

  }
  function contacts(){

    $contacts =  Contact::all();

    return $this->apiResponse(1 , "success" , $contacts );

  }

  function donation_requests(){

    $donations =  DonationRequest::all();

    return $this->apiResponse(1 , "success" , $donations );

  }

  function notifications(){

    $notifications =  Notification::all();

    return $this->apiResponse(1 , "success" , $notifications );

  }


  function settings(){

    $settings =  Setting::all();

    return $this->apiResponse(1 , "success" , $settings );

  }

  function posts (Request $request){
    $posts = post::where(function($query) use($request){
if($request->has("category_id")){

    $query->where("category_id" , $request->category_id);
}
    })->get();
    return $this->apiResponse(1 , "success" , $posts);
}










}
