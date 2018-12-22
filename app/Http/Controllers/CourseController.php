<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;
use App\category;
use Validator;
use Response;
use Redirect;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = DB::table('courses')->select(
              'courses.*',
              'courses.id as id_p',
              'courses.created_at as create',
              'categories.*'
              )
              ->leftjoin('categories', 'categories.id',  'courses.cat_id')
              ->get();


        $data['objs'] = $cat;
        $data['datahead'] = "สินค้าทั้งหมด";

        return view('admin.course.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sub_category = category::all();
        $data['category'] = $sub_category;
        $data['datahead'] = 'เพิ่มบทเรียน';
        $data['method'] = 'post';
        $data['url'] = url('admin/course/');
        return view('admin.course.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $image = $request->file('image');
        $this->validate($request, [
             'image' => 'required|max:8048',
             'c_name' => 'required',
             'c_detail' => 'required',
             'c_course' => 'required',
             'c_video' => 'required',
             'c_price' => 'required',
             'c_student' => 'required',
             'url_course' => 'required',
             'youtube_course' => 'required'
         ]);


        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

        $destinationPath = asset('assets/image/product/');
        $img = Image::make($image->getRealPath());
        $img->resize(500, 313, function ($constraint) {
        $constraint->aspectRatio();
      })->save('assets/image/product/'.$input['imagename']);


      $package = new course();
       $package->c_name = $request['c_name'];
       $package->cat_id = $request['cat_id'];
       $package->c_title = $request['c_title'];
       $package->c_detail = $request['c_detail'];
       $package->c_course = $request['c_course'];
       $package->c_video = $request['c_video'];
       $package->c_price = $request['c_price'];
       $package->c_discount = $request['c_discount'];
       $package->c_image = $input['imagename'];
       $package->c_time_study = $request['c_time_study'];
       $package->c_student = $request['c_student'];
       $package->url_course = $request['url_course'];
       $package->youtube_course = $request['youtube_course'];
       $package->save();

       return redirect(url('admin/course/'))->with('add_success','คุณทำการเพิ่มอสังหา สำเร็จ');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $sub_category = category::all();
        $data['category'] = $sub_category;
        $cat = DB::table('courses')->select(
              'courses.*',
              'courses.id as id_q',
              'courses.created_at as create',
              'categories.*'
              )
              ->leftjoin('categories', 'categories.id',  'courses.cat_id')
              ->where('courses.id', $id)
              ->first();

              $data['objs'] = $cat;
              $data['datahead'] = "แก้ไขข้อมูลคอร์สเรียน";
              $data['url'] = url('admin/course/'.$id);
              $data['method'] = "put";

            return view('admin.course.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $image = $request->file('image');
        $this->validate($request, [
             'c_name' => 'required',
             'c_detail' => 'required',
             'c_course' => 'required',
             'c_video' => 'required',
             'c_price' => 'required',
             'c_student' => 'required',
             'url_course' => 'required',
             'youtube_course' => 'required'
         ]);

         if($image == null){

           $package = course::find($id);
           $package->c_name = $request['c_name'];
           $package->cat_id = $request['cat_id'];
           $package->c_title = $request['c_title'];
           $package->c_detail = $request['c_detail'];
           $package->c_course = $request['c_course'];
           $package->c_video = $request['c_video'];
           $package->c_price = $request['c_price'];
           $package->c_student = $request['c_student'];
           $package->c_time_study = $request['c_time_study'];
           $package->url_course = $request['url_course'];
           $package->youtube_course = $request['youtube_course'];
           $package->save();

         }else{

           $objs = DB::table('courses')
            ->select(
               'courses.*'
               )
          ->where('id', $id)
          ->first();

          $file_path = 'assets/image/product/'.$objs->c_image;
          unlink($file_path);

          $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

          $destinationPath = asset('assets/image/product/');
          $img = Image::make($image->getRealPath());
          $img->resize(500, 313, function ($constraint) {
          $constraint->aspectRatio();
          })->save('assets/image/product/'.$input['imagename']);


          $package = course::find($id);
          $package->c_name = $request['c_name'];
          $package->cat_id = $request['cat_id'];
          $package->c_title = $request['c_title'];
          $package->c_detail = $request['c_detail'];
          $package->c_course = $request['c_course'];
          $package->c_video = $request['c_video'];
          $package->c_price = $request['c_price'];
          $package->c_discount = $request['c_discount'];
          $package->c_student = $request['c_student'];
          $package->c_time_study = $request['c_time_study'];
          $package->c_image = $input['imagename'];
          $package->url_course = $request['url_course'];
          $package->youtube_course = $request['youtube_course'];
          $package->save();


         }

         return redirect(url('admin/course/'.$id.'/edit'))->with('edit_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $objs = DB::table('courses')
          ->select(
             'courses.*'
             )
          ->where('id', $id)
          ->first();

      $file_path = 'assets/image/product/'.$objs->c_image;
      unlink($file_path);

      $obj = course::find($id);
      $obj->delete();
      return redirect(url('admin/course/'))->with('delete','คุณทำการลบอสังหา สำเร็จ');

    }
}
