<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use App\Http\Requests;
use Redirect;

class AuthorController extends Controller
{
    public function index(){
    	$autor = Author::All();
    	return view('author.index', compact('autor'));
    }

    public function create(){
    	return view('author.create');
    }

    public function store(Request $request){
        Author::create([
          'name' => $request['name'],
          'lastnamep' => $request['lastnamep'],
          'lastnamem' => $request['lastnamem'],
          'phone_number' => $request['phone_number'],
          'description' => $request['description'],
          'status'  => $request['status']
        ]);

        return Redirect::to('/authors');
    }

    public function edit($id){
        $autor = Author::find($id);
        return view('author.edit', compact('autor'));
    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }
}
