<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use Validator;
use Response;
use Redirect;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cat = blog::all();
        $data['objs'] = $cat;
        $data['datahead'] = "จัดการบทความ";
      return view('admin.blog.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      $data['datahead'] = 'เพิ่มบทความ';
      $data['method'] = 'post';
      $data['url'] = url('admin/blog/');
      return view('admin.blog.create',$data);
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
             'blog_title' => 'required',
             'blog_detail' => 'required'
         ]);


        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

        $destinationPath = asset('assets/image/blog/');
        $img = Image::make($image->getRealPath());
        $img->resize(988, 660, function ($constraint) {
        $constraint->aspectRatio();
      })->save('assets/image/blog/'.$input['imagename']);


       $package = new blog();
       $package->blog_title = $request['blog_title'];
       $package->blog_img = $input['imagename'];
       $package->blog_detail = $request['blog_detail'];
       $package->blog_status = 1;
       $package->save();

       $the_id = $package->id;

       return redirect(url('admin/blog/'.$the_id.'/edit'))->with('add_success','คุณทำการเพิ่มอสังหา สำเร็จ');
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
        $blog = blog::find($id);
        $data['blog'] = $blog;
        $data['method'] = "put";
        $data['url'] = url('admin/blog/'.$id);
        $data['datahead'] = "แก้ไข blog ";
        return view('admin.blog.edit', $data);
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
             'blog_title' => 'required',
             'blog_detail' => 'required'
         ]);

         if($image == NULL){

           $package = blog::find($id);
           $package->blog_title = $request['blog_title'];
           $package->blog_detail = $request['blog_detail'];
           $package->blog_status = 1;
           $package->save();

         }else{

           $objs = DB::table('blogs')
           ->select(
              'blogs.*'
              )
           ->where('id', $id)
           ->first();

           $file_path = 'assets/image/blog/'.$objs->blog_img;
           unlink($file_path);


           $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

           $destinationPath = asset('assets/image/blog/');
           $img = Image::make($image->getRealPath());
           $img->resize(988, 660, function ($constraint) {
           $constraint->aspectRatio();
         })->save('assets/image/blog/'.$input['imagename']);


         $package = blog::find($id);
         $package->blog_title = $request['blog_title'];
         $package->blog_img = $input['imagename'];
         $package->blog_detail = $request['blog_detail'];
         $package->blog_status = 1;
         $package->save();

         }

         return redirect(url('admin/blog/'.$id.'/edit'))->with('edit_success','คุณทำการเพิ่มอสังหา สำเร็จ');
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
        $objs = DB::table('blogs')
            ->select(
               'blogs.*'
               )
            ->where('id', $id)
            ->first();

        $file_path = 'assets/image/blog/'.$objs->blog_img;
        unlink($file_path);


        $obj = blog::find($id);
        $obj->delete();
        return redirect(url('admin/blog/'))->with('delete','คุณทำการลบอสังหา สำเร็จ');
    }
}
