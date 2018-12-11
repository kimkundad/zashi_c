<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $course = DB::table('courses')->select(
            'courses.*',
            'courses.id as id_p',
            'courses.created_at as create',
            'categories.*',
            'categories.id as id_catss'
            )
            ->leftjoin('categories', 'categories.id',  'courses.cat_id')
            ->get();
      $data['course'] = $course;

      $blogs = DB::table('blogs')->select(
            'blogs.*'
            )
            ->where('blog_status', 1)
            ->limit(5)
            ->get();
      $data['blog'] = $blogs;

    //  dd($blogs);

      $slide = DB::table('slide_shows')->select(
            'slide_shows.*'
            )
            ->where('slide_status', 1)
            ->get();
      $data['slide'] = $slide;
        return view('welcome', $data);
    }

    public function about(){
      return view('about');
    }

    public function blog(){
      return view('blog');
    }


    public function contact(){
      return view('contact');
    }

    public function course_list(){
      return view('course_list');
    }
}
