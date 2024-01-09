<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController22 extends Controller
{ 
  public function index(){
    $data['route'] = 'dashboard';
      return view('admin.dashboard', $data);
  }
}
