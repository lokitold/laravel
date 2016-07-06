<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CatalogedController extends Controller
{
    public function index(){
      return view('cataloged.index');
    }
}
