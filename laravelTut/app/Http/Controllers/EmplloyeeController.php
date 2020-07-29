<?php

namespace App\Http\Controllers;
use App\Emplloyee;
use DB;
use Illuminate\Http\Request;

class EmplloyeeController extends Controller
{
    public function index(){
        $emps = Emplloyee::orderBy('id', 'DESC')->paginate(10);
        return view('student/index',compact('emps'));
        
    }

    public function create(){
        return view('student/create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email' =>'required|unique:emplloyees']);

            $emps = new Emplloyee();
            $emps->name = $request->name;
            $emps->email = $request->email;
            $emps->save();
            return redirect('student')->with('success', 'data has been sent succeefully');

            
    }

    public function edit($id){
        $emps = Emplloyee::find($id);
        return view('student/edit',compact('emps'));
    }


    public function update(Request $request, $id){

        $request->validate([
            'name'=>'required',
            'email' =>'required']);

            $emps = Emplloyee::find($id);
            $emps->name = $request->get('name');
            $emps->email = $request->get('email');
            $emps->save();
            return redirect('student')->with('success', 'data has been updated succeefully');

    }

    public function destroy($id){
        $emps = DB::table('emplloyees')->where('id',$id)->delete();
        return redirect()->back();
    }
}
