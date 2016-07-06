<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
use App\Http\Requests;

class AreaController extends Controller
{
    public function index(){
    	$area = Area::All();
    	return view('area.index', compact('area'));
    }

    public function create(){
    	return view('area.create');
    }

    public function store(Request $request){
        Area::create([   
            'name' => $request['name'],
            'description' => $request['description'],
            'status' => $request['status'],
            'abbrev' => $request['abbrev']         
            ]);
        
    }

    public function edit($id){
    	$area = Area::find($id);

    	return view('area.edit' , compact('area'));

        
    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }
}
