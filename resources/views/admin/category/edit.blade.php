@extends('admin.layouts.template')

@section('stylesheet')



@stop('stylesheet')


@section('admin.content')

<br />

<div class="row">
  <div class="col-md-6 mx-auto grid-margin stretch-card">

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">{{$datahead}}</h4>
        <p class="card-description text-muted card-text">
          แก้ไขประเภท ใส่ชื่อประเภท รูปภาพประกอบถ้าไม่แก้ไข ไม่ต้องใส่เพิ่ม
        </p>
        <form  method="POST" action="{{$url}}" enctype="multipart/form-data">
                    {{ method_field($method) }}
                    {{ csrf_field() }}

          <div class="form-group">
            <label for="exampleInputUsername1">ชื่อประเภทงาน</label>
            <input type="text" class="form-control" name="cat_name" value="{{$objs->cat_name}}" placeholder="ช่างปูน..">
          </div>



          <br />
          <button type="submit" class="btn btn-primary mr-2">บันทึกข้อมูล</button>
          <button class="btn btn-light">ยกเลิก</button>
        </form>
      </div>
    </div>

  </div>
</div>





@stop



@section('scripts')
<script src="{{url('back/assets/js/data-table.js')}}"></script>



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
