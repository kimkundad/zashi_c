@extends('admin.layouts.template')
<meta name="csrf-token" content="{{ csrf_token() }}" />
@section('stylesheet')


@stop('stylesheet')


@section('admin.content')



<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">{{$datahead}} </h4>
        <div class="row">
          <div class="col-12 ">

            <form class="cmxform" id="commentForm" novalidate="novalidate" method="POST" action="{{$url}}" enctype="multipart/form-data">
                        {{ method_field($method) }}
                        {{ csrf_field() }}

                        <div class="row">
                          <div class="col-md-12">

                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">ชื่อคอร์สเรียน</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control " name="c_name" value="{{ $objs->c_name}}" placeholder="หัวข้อเรื่อง" required/>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">หลักสูตร</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control " name="c_title" value="{{ $objs->c_title}}" placeholder="Dream 1, N1" required/>
                              </div>
                            </div>


                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Youtube Video คอร์สเรียน</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control " name="youtube_course" value="{{ $objs->youtube_course}}" placeholder="https://www.youtube.com/watch?v=2Ga7atYDjTg" required/>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Url ไปยัง learnsbuy คอร์สเรียน</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control " name="url_course" value="{{ $objs->url_course}} " placeholder="https://learnsbuy.com/courseinfo/14" required/>
                              </div>
                            </div>


                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">ราคาคอร์สเรียน</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control " name="c_price" value="{{ $objs->c_price}}" placeholder="1000" required/>
                              </div>
                            </div>


                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">ส่วนลดคอร์สเรียน <br /><span style="font-size:10px; color:red">(*ใส่หรือไม่ก็ได้ ไม่ใส่จะไม่แสดง)</span> </label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control " name="c_discount" value="{{ $objs->c_discount}}" placeholder="1000"/>
                              </div>
                            </div>


                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">จำนวนนักเรียนที่ลงทะเบียน</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control " name="c_student" value="{{ $objs->c_student}}" placeholder="500" required/>
                              </div>
                            </div>


                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">เลือกหลวดหมู่</label>
                              <div class="col-sm-10">
                                <select name="cat_id" class="form-control mb-md" required>

                                        <option value="">-- เลือกหมวดหมู่ --</option>
  								                        @foreach($category as $categorys)
  													                 <option value="{{$categorys->id}}" @if( $objs->cat_id == $categorys->id)
                                               selected='selected'
                                               @endif>{{$categorys->cat_name}}</option>
  													              @endforeach
  								                    </select>
                              </div>
                            </div>


                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">รูปภาพ</label>

                              <div class="col-sm-10">
                                <img class="img-fluid rounded" style="width:50%" src="{{url('assets/image/product/'.$objs->c_image)}}" >
                              </div>
                            </div>



                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">รูปภาพ</label>

                              <div class="col-sm-10">
                                <input type="file" name="image" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" required>
                                  <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                  </span>
                                </div>
                              </div>
                            </div>



                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">รายละเอียดคอร์ส</label>
                              <div class="col-sm-10">
                                <textarea class="form-control" id="summernote" rows="4" name="c_detail" placeholder="ใส่ข้อมูลรายละเอียดเบื้องต้น..." rows="8" >{{ $objs->c_detail}}</textarea>
                              </div>
                            </div>


                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">เนื้อหาคอร์ส</label>
                              <div class="col-sm-10">
                                <textarea class="form-control" id="summernote2" rows="4" name="c_course" placeholder="ใส่ข้อมูลเนื้อหาคอร์ส..." rows="8" >{{ $objs->c_course}}</textarea>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Video คอร์ส</label>
                              <div class="col-sm-10">
                                <textarea class="form-control" id="summernote3" rows="4" name="c_video" placeholder="ใส่ข้อมูล Video คอร์ส..." rows="8" >{{ $objs->c_video}}</textarea>
                              </div>
                            </div>
                          </div>





                        </div>



            <br />
            <div class="col-12 mx-auto text-center">
            <button type="submit" class="btn btn-primary mr-2">บันทึกข้อมูล</button>
            <button class="btn btn-light">ยกเลิก</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>





@stop



@section('scripts')




<script type="text/javascript">
$(document).ready(function() {
  $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
  $('#summernote').summernote({
    toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']]
  ],
    fontNames: ['Prompt' ,'Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
    disableDragAndDrop: true,            // set editor height
    placeholder: 'เนื้อหาบทความ',
    minHeight: 300,
    tabsize: 2              // set focus to editable area after initializing summernote
  });

  $('#summernote2').summernote({
    toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']]
  ],
    fontNames: ['Prompt' ,'Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
    disableDragAndDrop: true,            // set editor height
    placeholder: 'เนื้อหาบทความ',
    minHeight: 300,
    tabsize: 2              // set focus to editable area after initializing summernote
  });

  $('#summernote3').summernote({
    toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']]
  ],
    fontNames: ['Prompt' ,'Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
    disableDragAndDrop: true,            // set editor height
    placeholder: 'เนื้อหาบทความ',
    minHeight: 300,
    tabsize: 2              // set focus to editable area after initializing summernote
  });
});

</script>


  <script src="{{url('back/assets/js/formpickers.js')}}"></script>
  <script src="{{url('back/assets/js/form-addons.js')}}"></script>
@if ($message = Session::get('edit_success'))
<script>

  $.toast({
    heading: 'ทำรายการสำเร็จ',
    text: 'ยินดีด้วย ได้ทำการเพิ่มข้อมูล สำเร็จเรียบร้อยแล้วค่ะ.',
    showHideTransition: 'slide',
    icon: 'success',
    loaderBg: '#f96868',
    position: 'top-right'
  })

</script>
@endif

@if ($message = Session::get('delete'))
<script>

  $.toast({
    heading: 'ทำรายการสำเร็จ',
    text: 'ยินดีด้วย ได้ทำการลบข้อมูล สำเร็จเรียบร้อยแล้วค่ะ.',
    showHideTransition: 'slide',
    icon: 'success',
    loaderBg: '#f96868',
    position: 'top-right'
  })

</script>
@endif

@stop('scripts')
