<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\News;
use App\Contact;
use Auth;
class HomeController extends Controller
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
        $message = session()->get('message');

        $pages = Page::orderBy('id', 'desc')->take(5)->get();
        $news = News::orderBy('id', 'desc')->take(3)->get();
        $contact = Contact::where('id', 1)->first();
        if($contact == null){
            $contact = new Contact();
        }
        return view('home', ['pages'=>$pages, 'news'=>$news, 'contact'=>$contact, 'message'=>$message]);
    }

    public function signOut(){
        Auth::logout();
        return redirect('/home');
    }
}
