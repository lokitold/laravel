<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Http\Requests;
use Redirect;

class TagController extends Controller
{
    public function index(){
    	$tag = Tag::All();
    	return view('tag.index' , compact('tag'));
    }

    public function create(){
    	return view('tag.create');
    }

    public function store(Request $request){
        Tag::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'status' => $request['status']
            ]);

        return Redirect::to('/tags');
    }

    public function edit($id){
    	$tag = Tag::find($id);
    	return view('tag.edit', compact('tag'));
    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }
}
