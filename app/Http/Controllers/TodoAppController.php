<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\TodoApp;
use Illuminate\Http\Request;

class TodoAppController extends Controller
{
  public function index()
  {
    
    return view('welcome', [
      
    ]);
  }  
  public function store()
  {
$attributes = request()->validate(
    [
        'title'=> 'requred',
        'description'=> 'nullable'
    ]);
    TodoApp::create($attributes);

    return redirect('/');
  }

}
