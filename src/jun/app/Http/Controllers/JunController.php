<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Checkbox;

class JunController extends Controller
{
  function index()
  {
    //$checkbox_arr = DB::select('select name, icon_path from checkboxes WHERE enable = 1');
    //return view('index', ['checkboxes' => $checkbox_arr]);
    return view('index');
  }

  function result(Request $request)
  {
    $checkbox_arr = $request->input('checkbox_arr');
    // $BG[Ns!a(Bcheckbox$B$NL>A0$r$b$H$K(Bcheckboxes->name$B$r(BWHERE SELECT
    // $BG[Ns$NCf(Bforeach
      // ifselect$B$7$FHV9f$,$"$k$d$D$O%+%i!<$N%"%$%3%s$rI=<($9$k(B
      // $BHV9f$,$J$$$d$D$O%b%N%/%m$N%"%$%3%s$rI=<($9$k(B


    //$checkboxes = Checkbox::all();
    $checkboxes = Checkbox::all();
    return view('result.index', ['checkboxes' => $checkboxes]);
  }

  public function addRoom()
  {
    $checkbox_arr = DB::select('select name, icon_path from checkboxes WHERE enable = 1');
    return view('room.add', ['checkboxes' => $checkbox_arr]);
  }

  public function createRoom(Request $request)
  {
    $param = [
      'zipcode' => $request->zipcode,
      'address' => $request->address,
      'facillity' => $request->facillity,
      'floor' => $request->floor,
      'lat' => $request->lat,
      'lng' => $request->lng,
    ];

    DB::table('rooms')->insert($param);

    return redirect('/addroom');
  }

}
