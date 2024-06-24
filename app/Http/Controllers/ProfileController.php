<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index($id) {
        //variables
        $name = "Donal Trump";
        $age = "75";

        //array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        //set your cookie variables stated in the question

        $name = "access_token";
        $value = "123-XYZ";
        $minutes = 1;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        return response($data)->cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);


    }
}
