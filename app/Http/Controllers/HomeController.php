<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\contact;
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
      $blogs = DB::table('blogs')->select(
            'blogs.*'
            )
            ->where('blog_status', 1)
            ->paginate(12);

      $data['blog'] = $blogs;

      return view('blog', $data);
    }

    public function blog_single($id){

      $blogs = DB::table('blogs')->select(
            'blogs.*'
            )
            ->where('id', $id)
            ->first();

      $data['blog'] = $blogs;

      return view('blog_single', $data);
    }


    public function course_single($id){

      $course = DB::table('courses')->select(
            'courses.*',
            'courses.id as id_p',
            'courses.created_at as create',
            'categories.*',
            'categories.id as id_catss'
            )
            ->leftjoin('categories', 'categories.id',  'courses.cat_id')
            ->where('courses.id', $id)
            ->first();
      $data['course'] = $course;

      return view('course_single', $data);
    }


    public function contact(){


      $cat = DB::table('settings')->select(
            'settings.*'
            )
            ->where('id', 1)
            ->first();


      $data['objs'] = $cat;

      return view('contact', $data);
    }

    public function course_list($id){

      $cat_list = DB::table('categories')->select(
            'categories.*'
            )
            ->where('id', $id)
            ->get();

            foreach($cat_list as $u){

              $course_count = DB::table('courses')
                    ->where('cat_id', $u->id)
                    ->count();

              $u->option = $course_count;

            }

      $data['cat_list'] = $cat_list;

      $cat = DB::table('categories')->select(
            'categories.*'
            )
            ->where('id', $id)
            ->first();
      $data['cat'] = $cat;


      $course = DB::table('courses')->select(
            'courses.*',
            'courses.id as id_p',
            'courses.created_at as create',
            'categories.*',
            'categories.id as id_catss'
            )
            ->leftjoin('categories', 'categories.id',  'courses.cat_id')
            ->where('categories.id', $id)
            ->paginate(12);
      $data['course'] = $course;

      return view('course_list', $data);
    }

    public function contact_us(Request $request){

      $this->validate($request, [
           'name' => 'required',
           'email' => 'required',
           'comments' => 'required'
       ]);

       $package = new contact();
       $package->name = $request['name'];
       $package->email = $request['email'];
       $package->comments = $request['comments'];
       $package->save();

      // dd($package);

       return redirect(url('email_success'))->with('add_success','คุณทำการเพิ่มอสังหา สำเร็จ');

    }


    public function email_success(){


      return view('email_success');
    }





}
