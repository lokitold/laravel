<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UncatalogedController extends Controller
{
    public function index(){
      return view('uncataloged.index');
    }

    public function create(){
      return view('uncataloged.create');
    }
}
