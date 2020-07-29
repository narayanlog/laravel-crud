<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BankModel;

class BankController extends Controller
{
    public function index(){
    	return view('idbi_bank');
    }

    public function store(Request $request){
        $request->validate([
        'name'=>'required',
        'account_num'=>'required',
        'address'=>'required',
        'mobile'=>'required',

        ]);

        $bank= new BankModel();
        $bank->name =  $request->name;
         $bank->account_num =  $request->account_num;
          $bank->address =  $request->address;
           $bank->mobile =  $request->mobile;
        $bank->save();

        return view('idbi_bank');
    }
}
