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

function get_website(){

  $cat = DB::table('settings')->select(
        'settings.*'
        )
        ->where('id', 1)
        ->first();
  return $cat->website;
}

function get_fb_title(){

  $cat = DB::table('settings')->select(
        'settings.*'
        )
        ->where('id', 1)
        ->first();
  return $cat->fb_title;
}

function get_fb_detail(){

  $cat = DB::table('settings')->select(
        'settings.*'
        )
        ->where('id', 1)
        ->first();
  return $cat->fb_detail;
}

function get_email(){

  $cat = DB::table('settings')->select(
        'settings.*'
        )
        ->where('id', 1)
        ->first();
  return $cat->email;
}
