<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Validator;
use App\Lead;
class LeadsAdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leads = Lead::all();
        return view('admin/leads', ['leads'=>$leads]);
    }

    

   
}
