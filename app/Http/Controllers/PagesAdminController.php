<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Validator;
class PagesAdminController extends Controller
{
    public function index(){
        $pages = Page::all();
        return view('admin/pages', ['pages'=>$pages]);
    }

    public function form($id = 0){

        if($id==0){

            $page = new Page();
        }else{
            $page = Page::where('id', $id)->first();
        }
        return view('admin/page_form', ['page'=>$page]);
    }

    public function delete($id){
        $page = Page::where('id', $id)->first();
        $page->delete();
        return redirect('/admin/pages');
    }

    public function store(Request $request, $id = 0){

        $imageName = '';
        if($id==0){
            $validator = Validator::make($request->all(), [
                'title'=>'required',
                'description'=>'required'
            ]);
            $page = new Page();
        }else{
            $validator = Validator::make($request->all(), [
                'title'=>'required',
                'description'=>'required'
            ]);
            $page = Page::where('id', $id)->first();
        }

		if($validator->fails()){
			return redirect('/admin/page'.($id>0?$id:''))
			->withErrors($validator)
			->withInput();
        }

        if($request->hasFile('image')){
            $image = $request['image'];
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $file = $image->storeAs('uploads/', $imageName, 'public');

        }
        $page->title = $request['title'];
        $page->description = $request['description'];
        if($imageName!=''){
            $page->image = '/storage/uploads/'.$imageName;
        }
        $page->save();
        return redirect('/admin/pages');

    }
}
