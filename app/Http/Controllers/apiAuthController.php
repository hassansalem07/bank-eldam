<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class apiAuthController extends Controller
{
    public function register(Request $request){

        $validation = validator()->make($request->all() , [

            "name" => "required",
            "phone" => "required",
            "password" => "required",
            "mail" => "required",
            "birth_date" => "required",
            "last_donation_date" => "required",
            "blood_type_id" => "required",
            "city_id" => "required",

        ]);

        if($validation->fails()){

         return response()->json(["message"=>"invalid key"], 403);
        }

        $request->merge(["password" => bcrypt($request->password)]);
        $client = Client::create($request->all());
        $client->api_token = str_random(40);
        $client->save();
        return response()->json(["message"=>"success"] ,[

            "api_token" => $client->api_token,
            "client" => $client
        ]);

    }


    public function login(Request $request){

        $validation = validator()->make($request->all() , [

            "phone" => "required",
            "password" => "required",

        ]);

        if($validation->fails()){
            return response()->json(["message"=>"invalid key"], 403);

        }

        $auth = auth()->guard("api")->validate($request->all());

        return response()->json($auth);
}


}
