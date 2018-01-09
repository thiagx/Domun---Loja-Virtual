<?php

namespace domun\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{
    //
    public function mostrarIndex()
    {

      return view('vitrine.index');
    }
}
