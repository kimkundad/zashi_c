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
                              <label class="col-sm-2 col-form-label">หัวข้อเรื่อง</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control " name="blog_title" value="{{ $blog->blog_title }}" placeholder="หัวข้อเรื่อง" required/>
                              </div>
                            </div>


                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">รูปภาพ</label>

                              <div class="col-sm-10">
                                <img class="img-fluid rounded" style="width:50%" src="{{url('assets/image/blog/'.$blog->blog_img)}}" >
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
                              <label class="col-sm-2 col-form-label">เนื้อหาบทความ</label>
                              <div class="col-sm-10">
                                <textarea class="form-control" id="summernote" rows="4" name="blog_detail" placeholder="ใส่ข้อมูลรายละเอียดของช่างเบื้องต้น..." rows="8" required>{{ $blog->blog_detail }}</textarea>
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
});
var postForm = function() {
var content = $('textarea[name="blog_detail"]').html($('#summernote').code());
}
</script>


  <script src="{{url('back/assets/js/formpickers.js')}}"></script>
  <script src="{{url('back/assets/js/form-addons.js')}}"></script>
@if ($message = Session::get('add_success'))
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

@if ($message = Session::get('edit_success'))
<script>

  $.toast({
    heading: 'ทำรายการสำเร็จ',
    text: 'ยินดีด้วย ได้ทำการแก้ไขข้อมูล สำเร็จเรียบร้อยแล้วค่ะ.',
    showHideTransition: 'slide',
    icon: 'success',
    loaderBg: '#f96868',
    position: 'top-right'
  })

</script>
@endif

@stop('scripts')
