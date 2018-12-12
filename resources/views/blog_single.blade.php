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


     <div class="blog-single-1x">
 		<div class="container">
 			<div class="row">
 				<div class="col-md-8 offset-md-2">
 					<div class="blog-author">
 						<div class="media">
 						  <img src="{{url('assets/images/15965494_10206213152167039_5353071833653529827_n.jpg')}}" alt="ครูพี่โฮม">
 						  <div class="media-body">
 						    <h4 style="font-size: 18px;"><b>ครูพี่โฮม</b></h4>
 						    <h4>สอนภาษาญี่ปุ่น . <?php echo DateThai($blog->created_at); ?></h4>
 						  </div>
 						</div>
 					</div>
 				</div>
 				<div class="col-md-8 offset-md-2">
 					<div class="row">
 						<div class="col-md-1">
 							<div class="social-link">
 								<ul>
 									<li class="facebook"><a href="https://www.facebook.com/JLPTOnline/"> <i class="fab fa-facebook-f"></i> </a></li>
 									<li class="pinterest"><a href="#"> <i class="fab fa-pinterest"></i> </a></li>
 									<li class="instagram"><a href="#"> <i class="fab fa-instagram"></i> </a></li>
 									<li class="twitter"><a href="#"> <i class="fab fa-twitter"></i> </a></li>
 								</ul>
 							</div>
 						</div>
 						<div class="col-md-11">
 							<div class="blog-single-left-content">
 								<div class="blog-single-body">
                  <div class="fb-share-button" data-href="https://za-shi.org/" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fza-shi.org%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">แชร์</a></div>
 									<h2 style="font-size: 38px;">{{$blog->blog_title}}</h2>

                  <img src="{{url('assets/image/blog/'.$blog->blog_img)}}" alt="{{$blog->blog_title}}" style="width:100%">
                  <br />
                  <br />
                  {!! $blog->blog_detail !!}

                  <br />

                  </div>





 							</div>
 						</div>
 					</div>

 				</div>

 			</div>
 		</div>
 	</div>
  <br />
  <br />
  <br />

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

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.2&appId=203219603796007&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


@stop('scripts')
