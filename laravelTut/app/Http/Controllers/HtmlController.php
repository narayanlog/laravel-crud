<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlController extends Controller
{
    public function home(){
        $names = ["Rahul","Amir","Bijay"];
        return view("html.home",compact("names"));

    }

    public function aboutus(){
        return view("html.aboutus");

    }

    public function services(){
        return view("html.services");
    }

    public function blog(){
        return view("html.blog");

    }
    public function contactus(){
        return view("html.contactus");

    }


}
