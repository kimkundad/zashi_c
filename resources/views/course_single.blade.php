@extends('layouts.template')

@section('title')
TEENEEJJ - ตลาดนัดสวนจตุจักร
@stop

@section('stylesheet')

<style>
@media (max-width: 767px){
.course-details-1x {
    background: #fff;
    padding: 10px;
    box-shadow: 0 10px 75px 0 rgba(46, 61, 73, 0.07);
}
}

</style>


@stop('stylesheet')
@section('content')

<div class="page-banner">
        <div class="hvrbox">
            <img src="{{url('assets/images/about_head.png')}}" alt="Mountains" class="hvrbox-layer_bottom">
            <div class="hvrbox-layer_top">
                <div class="container">
                    <div class="overlay-text text-left">
                        <h3>{{$course->c_name}}</h3>
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$course->c_name}}</li>
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






     <div class="course-single-body">
 		<div class="container">
 			<div class="course-info-1x course-info-2x">
 				<div class="row">
 					<div class="col-md-4">
 						<div class="course-info-left">
 							<div class="media">
 							  <img src="{{url('assets/image/product/'.$course->c_image)}}" alt="Image">
 							  <div class="media-body">
 							  	<h3>{{$course->c_name}}</h3>
 								<p>{{$course->c_title}}</p>
 							  </div>
 							</div>
 						</div>
 					</div>
 					<div class="col-md-3">
 						<div class="course-info-middle">
 							<p>
 								<i class="fas fa-star"></i>
 								<i class="fas fa-star"></i>
 								<i class="fas fa-star"></i>
 								<i class="fas fa-star"></i>
 								<i class="fas fa-star"></i>
 								&nbsp; 4.9 (66 ratings)
 							</p>
 							<h4>{{$course->c_student}} นักเรียนที่ลงทะเบียน </h4>
 						</div>
 					</div>
 					<div class="col-md-2">
 						<div class="course-info-left">
 							<div class="media">
 							  <div class="media-body">
 							  	<h4>Course Duration</h4>
 								<p>{{$course->c_time_study}}</p>
 							  </div>
 							</div>
 						</div>
 					</div>
 					<div class="col-md-3">
 						<div class="course-info-right">
 							<h3>
                @if($course->c_discount != 0)
              <del>฿ {{$course->c_discount}}</del>
              @endif
              ฿ {{$course->c_price}}</h3>
 							<a href="{{$course->url_course}}" class="btn-small">ซื้อคอร์ส</a>
 						</div>
 					</div>

 				</div>
 			</div>
 		</div>

 		<div class="container">
 			<div class="course-details-1x">
 				<div class="row">
 					<div class="col-md-8">
 						<div class="course-details-left">
 							<div class="course-video" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{url('assets/image/product/'.$course->c_image)}});">
 								<a href="{{$course->youtube_course}}" class="btn-circle video"><i class="fas fa-play"></i></a>
 								<h3>Preview Course</h3>
 							</div>


 							<div class="course-menu-nav">
 								<ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
 								  <li class="nav-item">
 								    <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true"> <i class="far fa-file-alt"></i>  รายละเอียด</a>
 								  </li>
 								  <li class="nav-item">
 								    <a class="nav-link" id="curriculum-tab" data-toggle="tab" href="#curriculum" role="tab" aria-controls="curriculum" aria-selected="false"><i class="fas fa-cube"></i> เนื้อหา</a>
 								  </li>
 								  <li class="nav-item">
 								    <a class="nav-link" id="instructor-tab" data-toggle="tab" href="#instructor" role="tab" aria-controls="instructor" aria-selected="false"><i class="far fa-user"></i> Video Course</a>
 								  </li>
 								  <li class="nav-item">
 								    <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false"><i class="far fa-comment"></i> Review</a>
 								  </li>
 								</ul>
 								<div class="tab-content course-menu-tab" id="myTabContent">
 								  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">


                    {!! $course->c_detail !!}



 								  </div>
 								  <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">

                    {!! $course->c_course !!}



 								  </div>
 								  <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">

                    {!! $course->c_video !!}

 								  </div>
 								  <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">


                      <div class="fb-comments" data-href="https://za-shi.org/course_single/{{$course->id_p}}" data-width="100%" data-numposts="10"></div>

 								  </div>
 								</div>
 							</div>

 						</div>
 					</div>
 					<div class="col-md-4">
 						<div class="course-details-sidebar">
 							<div class="course-feature">
 								<h2>Course Features</h2>
 								<ul>

 									<li><i class="far fa-user"></i> Students <span> {{$course->c_student}} </span></li>
 									<li><i class="fas fa-certificate"></i> Certificate  <span> Yes </span></li>

 									<li><i class="far fa-bookmark"></i> Category   <span> {{$course->cat_name}} </span></li>
 								</ul>
 							</div>
 							<div class="footer-social-link">
 								<h2>Share Course</h2>
                <div class="fb-share-button" data-href="https://za-shi.org/" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fza-shi.org%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">แชร์</a></div>

 							</div>

 						</div>
 					</div>
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

   <div id="fb-root"></div>
   <script>(function(d, s, id) {
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) return;
     js = d.createElement(s); js.id = id;
     js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.2&appId=203219603796007&autoLogAppEvents=1';
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));</script>


   @stop('scripts')
