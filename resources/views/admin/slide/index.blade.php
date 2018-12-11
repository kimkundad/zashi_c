@extends('admin.layouts.template')

@section('stylesheet')



@stop('stylesheet')


@section('admin.content')



<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">{{$datahead}} <button type="button" onclick="window.location.href='{{url('admin/slide/create')}}'"
           class="btn btn-outline-success btn-rounded btn-fw" style="margin-left:15px;"><i class="icon-plus"></i> New</button></h4>
        <div class="row">
          <div class="col-12 table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                    <th>#</th>
                    <th>title</th>
                    <th>สถานะ</th>

                    <th>จัดการ</th>
                </tr>
              </thead>
              <tbody>
                @if($objs)
                   @foreach($objs as $u)

                <tr id="{{$u->id}}">
                    <td><img src="{{url('assets/image/slide/'.$u->image_slide)}}" class=" img-fluid rounded" style="height:120px; width:auto" /></td>
                    <td>{{$u->text_slide1}}</td>
                    <td><div class="form-check">
                             <label class="form-check-label">
                               <input type="checkbox" class="form-check-input" @if($u->slide_status == 1)
                               checked
                               @endif>

                             </label>
                           </div></td>


                    <td >


                      <button type="button" style="float: left;padding: 10px; margin-left: 10px;" onclick="window.location.href='{{url('admin/slide/'.$u->id.'/edit')}}'"  class="btn btn-icons btn-rounded btn-outline-warning"><i class="icon-settings"></i></button>
                      <form  action="{{url('admin/slide/'.$u->id)}}" method="post" onsubmit="return(confirm('Do you want Delete'))">
                          <input type="hidden" name="_method" value="DELETE">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <button type="submit" style="margin-left: 10px;float: left; padding: 10px;" class="btn btn-icons btn-rounded btn-outline-secondary"><i class="icon-trash"></i></button>
                      </form>


                    </td>
                  </tr >
               @endforeach
            @endif

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>


<br />
<br />
<br />
<br />
<br />
<br />



@stop



@section('scripts')
<script src="{{url('back/assets/js/data-table.js')}}"></script>


<script type="text/javascript">
$(document).ready(function(){
  $("input:checkbox").change(function() {
    var user_id = $(this).closest('tr').attr('id');

    $.ajax({
            type:'POST',
            url:'{{url('api/api_slide_status')}}',
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            data: { "user_id" : user_id },
            success: function(data){
              if(data.data.success){


                $.toast({
                  heading: 'ทำรายการสำเร็จ',
                  text: 'ยินดีด้วย ได้ทำการเปลี่ยนข้อมูล สำเร็จเรียบร้อยแล้วค่ะ.',
                  showHideTransition: 'slide',
                  icon: 'success',
                  loaderBg: '#f96868',
                  position: 'top-right'
                })



              }
            }
        });
    });
});
</script>

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
