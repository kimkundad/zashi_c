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

        <form  method="POST" action="{{$url}}" enctype="multipart/form-data">
                    {{ method_field($method) }}
                    {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputUsername1">หัวข้อ slide</label>
            <input type="text" class="form-control" name="text_1" value="{{$objs->text_slide1}}" placeholder="ช่างปูน..">
          </div>


          <div class="form-group">
            <label for="exampleInputUsername1">รายละเอียด</label>
            <textarea class="form-control" rows="4" name="text_2" placeholder="ใส่ข้อมูลรายละเอียดเบื้องต้น..." >{{$objs->text_slide2}}</textarea>
          </div>

          <div class="form-group">
            <label for="exampleInputUsername1">สีตัวอัพษร</label>
            <select name="text_3" class="form-control mb-md" required>

                    <option value="#252531" @if( $objs->text_slide3 == "#252531")
                      selected='selected'
                      @endif>-- สีดำ --</option>
                    <option value="#fff" @if( $objs->text_slide3 == "#fff")
                      selected='selected'
                      @endif>-- สีขาว --</option>

                  </select>
          </div>

          <div class="form-group">
            <label for="exampleInputUsername1">Text Btn</label>
            <input type="text" class="form-control" name="text_btn" value="{{$objs->btn_slide}}" placeholder="ช่างปูน..">
          </div>

          <div class="form-group">
            <label for="exampleInputUsername1">Url Btn</label>
            <input type="text" class="form-control" name="url_btn" value="{{$objs->btn_url}}" placeholder="www.000.com">
          </div>


          <div class="form-group row">
            <label class="col-sm-2 col-form-label">รูปภาพ</label>

            <div class="col-sm-10">
              <img class="img-fluid rounded" style="width:50%" src="{{url('assets/image/slide/'.$objs->image_slide)}}" >
            </div>
          </div>

          <div class="form-group">
            <label>รูปภาพ</label>
            <input type="file" name="image" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
              </span>
            </div>
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


@stop('scripts')
