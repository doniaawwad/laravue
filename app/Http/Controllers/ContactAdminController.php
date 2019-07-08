<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Validator;
class ContactAdminController extends Controller
{
    public function index(){
        $count = Contact::count();
        if($count==0){
            $contact = new Contact();
        }else{
            $contact = Contact::all()->first();
        }
        return view('admin/contact', ['contact'=>$contact]);
    }

   

   

    public function store(Request $request){
        
        
        
        $validator = Validator::make($request->all(), [
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required'
        ]);
        
		if($validator->fails()){
			return redirect('/admin/contact')
			->withErrors($validator)
			->withInput();
        }
        
        $contact = Contact::where('id', 1)->first();
        if($contact==null){
            $contact = new Contact();
        
        }
        $contact->phone = $request['phone'];
        $contact->email = $request['email'];
        $contact->address = $request['address'];
        $contact->save();
       
        
        return redirect('/admin/contact');

    }
}
