<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Validator;
use App\Lead;
class LandingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //o$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        return view('landing');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'email'=>'required',
            'notes'=>'required'
        ]);
        if($validator->fails()){
			return redirect('/landing')
			->withErrors($validator)
			->withInput();
        }
        $lead = new Lead();
        $lead->name = $request['name'];
        if($request->has('phone')){
            $lead->phone = $request['phone'];
        }else{
            $lead->phone= '';
        }
        if($request['address']!=null){
            $lead->address = $request['address'];
        }else{
            $lead->address= '';
        }
        $lead->email = $request['email'];
        $lead->notes = $request['notes'];
        $lead->save();

        return redirect('/')->with(['message'=>'You have successfully submitted the registration form']);
    }

   
}
