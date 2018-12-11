@extends('admin.layouts.template')

@section('stylesheet')



@stop('stylesheet')


@section('admin.content')



<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">{{$datahead}} <button type="button" onclick="window.location.href='{{url('admin/course/create')}}'"
           class="btn btn-outline-success btn-rounded btn-fw" style="margin-left:15px;"><i class="icon-plus"></i> New</button></h4>
        <div class="row">
          <div class="col-12 table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr <?php $s = 1; ?>>
                    <th>#</th>
                    <th>บทเรียน</th>
                    <th>หมวดหมู่</th>
                    <th>จำนวนเข้าชม</th>
                    <th>จัดการ</th>
                </tr>
              </thead>
              <tbody>
                @if($objs)
                   @foreach($objs as $u)

                <tr>
                    <td>{{$s}}</td>
                    <td>{{$u->c_name}}</td>
                    <td>{{$u->cat_name}}</td>
                    <td>{{$u->c_view}}</td>

                    <td >


                      <button type="button" style="float: left;padding: 10px; margin-left: 10px;" onclick="window.location.href='{{url('admin/course/'.$u->id.'/edit')}}'"  class="btn btn-icons btn-rounded btn-outline-warning"><i class="icon-settings"></i></button>
                      <form  action="{{url('admin/course/'.$u->id)}}" method="post" onsubmit="return(confirm('Do you want Delete'))">
                          <input type="hidden" name="_method" value="DELETE">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <button type="submit" style="margin-left: 10px;float: left; padding: 10px;" class="btn btn-icons btn-rounded btn-outline-secondary"><i class="icon-trash"></i></button>
                      </form>


                    </td>
                  </tr {{$s++}}>
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


@stop



@section('scripts')
<script src="{{url('back/assets/js/data-table.js')}}"></script>

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
