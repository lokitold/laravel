<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use File;
use Image;
class AlbumController extends Controller
{
    public function index(){
      $album = Album::All();
      return view('album.index',compact('album'));
    }

    public function create(){
      return view('album.create');
    }

    public function store(Request $request){
        $file =  $request->file('image')->getClientOriginalName();

        var_dump($file);


    }
}
