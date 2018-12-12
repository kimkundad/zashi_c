@extends('layouts.template')

@section('title')
TEENEEJJ - ตลาดนัดสวนจตุจักร
@stop

@section('stylesheet')


@stop('stylesheet')
@section('content')

<div class="page-banner">
        <div class="hvrbox">
            <img src="{{url('assets/images/about_head.png')}}" alt="Mountains" class="hvrbox-layer_bottom">
            <div class="hvrbox-layer_top">
                <div class="container">
                    <div class="overlay-text text-left">
                        <h3>Blog</h3>
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                          </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    function DateThai($strDate)
    {
    $strYear = date("Y",strtotime($strDate))+543;
    $strMonth= date("n",strtotime($strDate));
    $strDay= date("j",strtotime($strDate));
    $strHour= date("H",strtotime($strDate));
    $strMinute= date("i",strtotime($strDate));
    $strSeconds= date("s",strtotime($strDate));
    $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
    $strMonthThai=$strMonthCut[$strMonth];
    return "$strDay $strMonthThai $strYear";
    }
     ?>


    <div class="blog-1x blog-1x-no-bg">
		<div class="container">
			<div class="row">

        @if($blog)
        @foreach($blog as $blogs)

				<div class="col-md-4">
					<div class="blog-single">
						<img src="{{url('assets/image/blog/'.$blogs->blog_img)}}" alt="{{$blogs->blog_title}}" style="min-height:230px; max-height:230px;">

						<div class="blog-single-content" style="padding: 10px 20px;">
							<a href="{{url('blog_single/'.$blogs->id)}}" style="font-size: 16px;"> {{$blogs->blog_title}} </a>

							<h3>
								<i class="far fa-calendar-check"></i> <?php echo DateThai($blogs->created_at); ?>
								<span><i class="far fa-heart"></i> {{$blogs->blog_view}} </span>
							</h3>
						</div>
					</div>
				</div>

        @endforeach
      @endif


				<div class="col-md-12">

          @include('pagination.default', ['paginator' => $blog])


				</div>

			</div>
		</div>
	</div>

  <div class="cta-1x">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="cta-content">
						<h3>คุณพร้อมเรียนภาษาญี่ปุ่น หรือยัง?</h3>
						<p>ระหว่างเรียนมีฟังก์ชั่นไลฟ์แชทและฟังก์ชั่นแบบทดสอบ วิเคราะห์ผลคะแนนออกมาเป็นกราฟ <br> พร้อม Startdard Report รายงานคะแนนสอบ โปรแกรมประเมินโอกาสสอบผ่านและสอบติด Admission และ TCAS </p>
						<a href="#" class="btn-small">เริ่มเรียนรู้</a>

					</div>
				</div>
			</div>
		</div>
	</div>



@endsection

@section('scripts')


@stop('scripts')
