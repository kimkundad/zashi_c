<?php

use Illuminate\Support\Facades\DB;

function get_logo(){

  $cat = DB::table('settings')->select(
        'settings.*'
        )
        ->where('id', 1)
        ->first();
  return $cat->logo_img;
}

function get_cat(){

  $cat1 = DB::table('categories')->select(
        'categories.*'
        )
        ->get();
      //  dd($cat1);

  return $cat1;
}



function get_phone(){

  $cat = DB::table('settings')->select(
        'settings.*'
        )
        ->where('id', 1)
        ->first();
  return $cat->phone;
}


function get_email(){

  $cat = DB::table('settings')->select(
        'settings.*'
        )
        ->where('id', 1)
        ->first();
  return $cat->email;
}
