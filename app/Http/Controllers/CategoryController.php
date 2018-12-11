<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\category;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $cat = DB::table('categories')->select(
            'categories.*'
            )
            ->get();

            foreach($cat as $u){

              $count = DB::table('courses')->select(
                    'courses.*'
                    )
                    ->where('cat_id', $u->id)
                    ->count();

                    $u->option = $count;
            }
        //
        $s = 1;
        $data['s'] = $s;
        $data['objs'] = $cat;
        $data['datahead'] = "หมวดหมู่ คอร์สเรียน";
        return view('admin.category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      $data['method'] = "post";
      $data['url'] = url('admin/category');
      $data['datahead'] = "สร้างหมวดหมู่ ";
      return view('admin.category.create', $data);
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

      $this->validate($request, [
       'cat_name' => 'required'
      ]);




      $package = new category();
      $package->cat_name = $request['cat_name'];
      $package->save();
      return redirect(url('admin/category'))->with('add_success','เพิ่ม เสร็จเรียบร้อยแล้ว');
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
      $obj = category::find($id);
      $data['url'] = url('admin/category/'.$id);
      $data['datahead'] = "แก้ไขหมวดหมู่";
      $data['method'] = "put";
      $data['objs'] = $obj;
      return view('admin.category.edit', $data);
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

        $this->validate($request, [
         'cat_name' => 'required'
        ]);



          $package = category::find($id);
          $package->cat_name = $request['cat_name'];
          $package->save();



        return redirect(url('admin/category/'.$id.'/edit'))->with('edit_success','คุณทำการเพิ่มอสังหา สำเร็จ');
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

      $obj = category::find($id);
      $obj->delete();
      return redirect(url('admin/category/'))->with('delete','คุณทำการลบอสังหา สำเร็จ');
    }
}
