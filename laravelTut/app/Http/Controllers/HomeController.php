<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index() {

        echo "This is our first controller";
    }


    public function call(){

        $users = ["Rahul", "Amit", "Aman", "Gopal"];

        $name = "DevOpsSchool";


        // return view("call",array("users"=>$users, "name"=>$name));

        // return view("call", compact("users","name"));

        // return view("call")->with(["users"=>$users, "name"=>$name]);

        return view("call")->withUsers($users)->withName($name);


    }

    public function services(){
        
        return view("home.services");
    }

    public function products(){
        
        return view("home.products");
    }
    
    public function team(){
        
        return view("home.team");
    }



}

?>