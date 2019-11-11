<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JunController extends Controller
{
  function index()
  {
    $checkbox_arr = DB::select('select name, icon_path from checkboxes WHERE enable = 1');
    return view('index', ['checkboxes' => $checkbox_arr]);
  }

  function result(Request $request)
  {
    $checkbox_arr = $request->input('checkbox_arr');

    return view('/result/index', ['checkboxes' => $checkbox_arr]);
  }
}
