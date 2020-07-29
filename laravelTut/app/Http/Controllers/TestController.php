<?php

namespace App\Http\Controllers;
// use App\Http\Requests\MyRequst;
use Illuminate\Http\Request;
use Validator;
// use DB;
// use App\Product;
// use App\Author;

class TestController extends Controller
{

	public function myform(){
		return view("form.myform");
	}

	public function submitmyform(Request  $request){

		$validator = validator::make($request->all(),[

            "name"=>"required",
			"email"=>"required|max:20|min:8|email|unique:authors",
			"age"=>"required"


		],[

           "name.required"=>"Name should be filled",
           "email.required"=>"Email should be filled",
           "email.min"=>"Length should be more than 8"

		])->validate();

		print_r($request->all());

		/*if($validator->fails()){
           return redirect("form")->withErrors($validator);
		}else{
			print_r($request->all());
		}*/



		/*$this->validate($request,[
			"name"=>"required",
			"email"=>"required|max:20|min:8|email|unique:authors",
			"age"=>"required"
		],[
           "name.required"=>"Name should be filled",
           "email.required"=>"Email should be filled",
           "email.min"=>"Length should be more than 8"
		]);*/

		

		// die("Form Submitted");
	}

}


	// public function selectmodel(){
	// 	$author = new Author;

		// $data = $author->find([2,3,4]);
		// print_r($data);

		// $data = $author->find(2);
  //       $data->delete();

		/*$data->name = "Rakesh Kumar";
		$data->email = "rakesh@gmail.com";
		$data->save();*/

		// print_r($data);

	// }


	// public function insertorm(){

		// $product = new Product([
		// 	"name"=>"Demo product 15",
		// 	"quantity"=>30,
		// 	"description"=>"Hi test description"
		// ]);


		// $product = Author::create([
		// 	"name"=>"Kisore",
		//      "email"=>"kisore@gmail.com"
		//  ]);

		// $product->save();
		// print_r($product);



		// $product->name = "Demo Product 2";
		// $product->quantity = 15;
		// $product->description = "This is my sample description text";
		// $data = $product->save();
		// print_r($product['id']);


	// }




	// public function queryrun(){
		// $data = DB::table("students")->insert(
		// 	      ["name"=>"Google","email"=>"google@gmail.com"]
		// 	     );
		// echo "$data";

		// $data = DB::table("students")->insert(
		// 	[
		// 	    ["name"=>"Twitter","email"=>"twitter@gmail.com"],
	 //            ["name"=>"Linkedin","email"=>"linkedin@gmail.com"]

		//     ],
	 //           );

		// echo "$data";

		// $data = DB::table("students")->orderBy("id","desc")->get();

		// $data = DB::table("students")->where(["id"=>7])->first();

        // echo $data =  DB::table("students")->where(["id"=>6])->delete();


        // echo $data =  DB::table("students")->where(["id"=>8])->update(["name"=>"Youtube",
        // 	"email"=>"youtube@gmail"]);

        // $data = DB::table("students")->select(DB::raw('count(*) as students_count,location'))->where('location','<>',1)->groupBy('location')->get();
        // print_r($data);

		// return view("query",compact("data"));

		// $data = DB::table("students")->get();
		// return view("query",compact(data));

	//}


    // public function conditional(){

    //     $name = "Online Web Tutorial";
    //     $names = ["Amit","Rahul","Vikash","Ram"];

    //     return view("test.conditional",compact("name","names"));
    // }




    // public function aboutus(){
    //     return view("test.aboutus");
    // }

    // public function index(){
    // 	return view("user.user");
    // }

