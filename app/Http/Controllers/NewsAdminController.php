<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Validator;
class NewsAdminController extends Controller
{
    public function index(){
        $news = News::all();
        return view('admin/news', ['news'=>$news]);
    }

    public function form($id = 0){

        if($id==0){
            
            $news = new News();
        }else{
            $news = News::where('id', $id)->first();
        }
        return view('admin/news_form', ['news'=>$news]);
    }

    public function delete($id){
        $news = News::where('id', $id)->first();
        $news->delete();
        return redirect('/admin/news');
    }

    public function store(Request $request, $id = 0){
        
        $imageName = '';
        if($id==0){
            $validator = Validator::make($request->all(), [
                'title'=>'required',
                'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'description'=>'required'
            ]);
            $news = new News();
        }else{
            $validator = Validator::make($request->all(), [
                'title'=>'required',
                'description'=>'required'
            ]);
            $news = News::where('id', $id)->first();
        }
        
		if($validator->fails()){
			return redirect('/admin/newsform'.($id>0?$id:''))
			->withErrors($validator)
			->withInput();
        }
        
        if($request->hasFile('image')){
            $image = $request['image'];
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $file = $image->storeAs('uploads/', $imageName, 'public');

        }
        $news->title = $request['title'];
        $news->description = $request['description'];
        if($imageName!=''){
            $news->image = '/storage/uploads/'.$imageName;
        }
        $news->save();
        return redirect('/admin/news');

    }
}
