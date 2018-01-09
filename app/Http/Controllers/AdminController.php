<?php

namespace domun\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    //
    public function CheckarLogin()
    {
      return view('admin.index');
    }
}
