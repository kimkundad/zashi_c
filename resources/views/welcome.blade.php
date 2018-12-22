@extends('layouts.template')

@section('title')
Zashi (ครูพี่โฮม) ภาษาญี่ปุ่นออนไลน์ ติว PAT ญี่ปุ่น JLPT, PAT
@stop


@section('og_tag')
<meta property="og:url"           content="{{get_website()}}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{get_fb_title()}}" />
<meta property="og:image"         content="https://piccurated.com/assets/image/facebook_cover.png?v2" />
<meta property="og:description"   content="{{get_fb_detail()}}" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="314" />
<meta property="fb:app_id" content="2268218253415224">
<meta property="fb:admins" content="100002037238809">
@stop

@section('stylesheet')

<link href="{{url('assets/css/owl.carousel.min.css')}}" rel="stylesheet">
@stop('stylesheet')
@section('content')


<!--<div class="main-banner">
        <div class="hvrbox">
            <img src="{{url('assets/images/banner-1.png')}}" alt="Mountains" class="hvrbox-layer_bottom">
            <div class="hvrbox-layer_top">
                <div class="container">
                    <div class="overlay-text text-center">
                        <h3>The Future Begins Here!</h3>
                        <p>Working collaboratively to ensure every student achieves academically,<br> socially, and emotionally.</p>
                        <div class="col-md-8 offset-md-2">
							<div class="input-group">
							  <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Enter Your Search Here">
							  <div class="input-group-append styleSelect">
							      <select id="inputGroupSelect01">
								    <option selected>All Categories</option>
								    <option value="1">One</option>
								    <option value="2">Two</option>
								    <option value="3">Three</option>
								  </select>
							  </div>
							  <div class="input-group-append">
							    <button class="btn btn-search" type="button"><img src="{{url('assets/images/search.png')}}" alt="Image"></button>
							  </div>
							</div>
						</div>

						<div class="slider-feature">
							<ul>
								<li><img src="{{url('assets/images/book.png')}}" alt="Mountains"> 2502 Course</li>
								<li><img src="{{url('assets/images/cap.png')}}" alt="Mountains"> 32052 Students</li>
								<li><img src="{{url('assets/images/man.png')}}" alt="Mountains"> 459 Teachers</li>
							</ul>
						</div>
                    </div>
            	</div>
        	</div>
        </div>
    </div> -->


    <!-- Slider Two Area Start -->
	    <div class="slider-area">
	        <div class="slider-wrapper owl-carousel carousel-style-dot">

					@if($slide)
					@foreach($slide as $slider)
					<div class="single-slide" style="background-image: url('{{url('assets/image/slide/'.$slider->image_slide)}}');">
						<div class="container">
								<div class="slider-banner" >
										<h1 style="color:{{$slider->text_slide3}}">{{$slider->text_slide1}}</h1>

										<p style="color:{{$slider->text_slide3}}">{{$slider->text_slide2}}</p>
										<br />
										<a href="{{$slider->btn_url}}" class="btn-small">{{$slider->btn_slide}}</a>
								</div>
						</div>
						</div>
						@endforeach
					@endif

	        </div>
	    </div>
	    <!-- Slider Two Area End    -->





    <div class="course-category-1x">
		<div class="container">
			<div class="row">
				@if(isset($blog[0]))
				<div class="col-md-6">
					<div class="category-left left-image">
						<div class="hvrbox">
							<img src="{{url('assets/image/blog/'.$blog[0]->blog_img)}}" alt="{{$blog[0]->blog_title}}" class="hvrbox-layer_bottom">
							<div class="hvrbox-layer_top">
								<div class="hvrbox-text">
									<a href="{{url('blog_single/'.$blog[0]->id)}}" style="font-size: 18px;">{{$blog[0]->blog_title}}</a>

									<a href="{{url('blog_single/'.$blog[0]->id)}}" class="btn-small">อ่านเพิ่มเติม</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endif

				<div class="col-md-6">
					<div class="row">

						@if(isset($blog[1]))
						<div class="col-md-6">
							<div class="category-left right-image">
								<div class="hvrbox">
									<img src="{{url('assets/image/blog/'.$blog[1]->blog_img)}}" alt="{{$blog[1]->blog_title}}" class="hvrbox-layer_bottom">
									<div class="hvrbox-layer_top hvrbox-text">
										<div class="hvrbox-text">
											<a href="{{url('blog_single/'.$blog[1]->id)}}" style="font-size: 16px;">{{$blog[1]->blog_title}}</a>

											<a href="{{url('blog_single/'.$blog[1]->id)}}" class="btn-small">อ่านเพิ่มเติม</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endif


						@if(isset($blog[2]))
						<div class="col-md-6">
							<div class="category-left right-image">
								<div class="hvrbox">
									<img src="{{url('assets/image/blog/'.$blog[2]->blog_img)}}" alt="{{$blog[2]->blog_title}}" class="hvrbox-layer_bottom">
									<div class="hvrbox-layer_top hvrbox-text">
										<div class="hvrbox-text">
											<a href="{{url('blog_single/'.$blog[2]->id)}}" style="font-size: 16px;">{{$blog[2]->blog_title}}</a>

											<a href="{{url('blog_single/'.$blog[2]->id)}}" class="btn-small">อ่านเพิ่มเติม</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endif


						@if(isset($blog[3]))
						<div class="col-md-6">
							<div class="category-left right-image">
								<div class="hvrbox">
									<img src="{{url('assets/image/blog/'.$blog[3]->blog_img)}}" alt="{{$blog[3]->blog_title}}" class="hvrbox-layer_bottom">
									<div class="hvrbox-layer_top hvrbox-text">
										<div class="hvrbox-text">
											<a href="{{url('blog_single/'.$blog[3]->id)}}" style="font-size: 16px;">{{$blog[3]->blog_title}}</a>

											<a href="{{url('blog_single/'.$blog[3]->id)}}" class="btn-small">อ่านเพิ่มเติม</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endif


						@if(isset($blog[4]))
						<div class="col-md-6">
							<div class="category-left right-image">
								<div class="hvrbox">
									<img src="{{url('assets/image/blog/'.$blog[4]->blog_img)}}" alt="{{$blog[4]->blog_title}}" class="hvrbox-layer_bottom">
									<div class="hvrbox-layer_top hvrbox-text">
										<div class="hvrbox-text">
											<a href="{{url('blog_single/'.$blog[4]->id)}}" style="font-size: 16px;">{{$blog[4]->blog_title}}</a>

											<a href="{{url('blog_single/'.$blog[4]->id)}}" class="btn-small">อ่านเพิ่มเติม</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endif



					</div>
				</div>




				<div class="category-feature">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4">
								<div class="single-feature">
									<img src="{{url('assets/images/man-2.png')}}" alt="slide 1">
									<h4>ครูพี่โฮม กวดวิชาภาษาญี่ปุ่น</h4>
									<p>หนึ่งเดียวที่ได้รับเชิญจากสื่อชั้นนำ GMM Channel, TRUE VISIONS, PLOOK, ETV, Dek-D  </p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-feature">
									<img src="{{url('assets/images/clock.png')}}" alt="slide 1">
									<h4>เรียนได้ทุกที่ 24 ชม.</h4>
									<p>za-shi.com และระบบสอนออนไลน์ ระบบ live streaming เรียนรู้เองจากที่บ้าน </p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-feature">
									<img src="{{url('assets/images/pc.png')}}" alt="slide 1">
									<h4>เฉลยข้อสอบ ภาษาญี่ปุ่นล่าสุด</h4>
									<p>ติวสอบวัดระดับภาษาญี่ปุ่น N1 N2 N3 N4 N5 ผู้นำการเรียนภาษาญี่ปุ่นออนไลน์ ครูพี่โฮมและเอ็ตจัง  </p>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>






  <div class="course-1x">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-middle">
						<h2>คอร์สเรียนภาษาญี่ปุ่น</h2>
					</div>
				</div>

				<div class="col-md-12">
					<div id="filters" class="course-menu">
					  <button class="filter active"  data-filter="all">ทั้งหมด</button>

						@if(get_cat())
						@foreach(get_cat() as $k)

						<button class="filter" data-rel="web{{$k->id}}" data-filter=".web{{$k->id}}">{{$k->cat_name}}</button>
						@endforeach
						@endif


					</div>
				</div>

				<div class="col-md-12">
					<div class="all-course">
						<div class="row">

							@if(isset($course))
							@foreach($course as $coursed)
						  <div class="col-md-3 tile web{{$coursed->id_catss}}">
							<div class="single-course">
								<div class="hvrbox">
									<img src="{{url('assets/image/product/'.$coursed->c_image)}}" alt="slide 1" class="hvrbox-layer_bottom">
									<div class="hvrbox-layer_top hvrbox-text">
										<div class="hvrbox-text">
											<a href="{{$coursed->youtube_course}}" class="btn-circle video"><i class="fas fa-play"></i></a>
											<a href="{{url('course_single/'.$coursed->id_p)}}">{{$coursed->c_name}}</a>
										</div>
									</div>
								</div>
								<div class="single-course-content">
									<a href="{{url('course_single/'.$coursed->id_p)}}">{{$coursed->c_name}} </a>
									<p>{{$coursed->c_title}} <span>
										@if($coursed->c_discount != 0)
										<del>฿ {{$coursed->c_discount}}</del>
										@endif
										<b>฿ {{$coursed->c_price}}</b></span></p>
									<h3>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i> (5)
										<span>นักเรียน: {{$coursed->c_student}}</span>
									</h3>
								</div>
							</div>
						  </div>
							@endforeach
							@endif







							<div class="col-md-12 text-center">
								<a href="#" class="btn-small"> ดูทั้งหมด </a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>







  <div class="achive-goals-1x">
  		<div class="container">
  			<div class="col-md-12">
  				<div class="title-middle">
  					<h2>พรหมเทพ ชัยกิตติวณิชย์ (ครูพี่โฮม ZA-SHI)</h2>
  					<p>สถาบันติว PAT ญี่ปุ่นและภาษาญี่ปุ่น ZA-SHI ภาษาญี่ปุ่น (ครูพี่โฮม) คนแรกและคนเดียวที่ได้ PAT ญี่ปุ่น 300 คะแนนเต็ม เกียรตินิยมอันดับ 1 (เหรียญทอง) อักษรศาสตร์ จุฬาลงกรณ์มหาวิทยาลัย</p>
  				</div>
  			</div>

  			<div class="col-md-12">
  				<div class="row">
  					<div class="col-md-4">
  						<div class="single-goals">
  							<img src="{{url('assets/images/icon-1.png')}}" alt="slide 1">
  							<h4>ติวสอบวัดระดับภาษาญี่ปุ่น</h4>
  							<p>ติว N1 ติว N2 ติว N3 ติว N4 ติว N5 คันจิ ศัพท์ ไวยากรณ์ การฟัง การอ่าน</p>
  						</div>
  					</div>
  					<div class="col-md-4">
  						<div class="single-goals">
  							<img src="{{url('assets/images/icon-2.png')}}" alt="slide 1">
  							<h4>ชุมชนการเรียนรู้ภาษาญี่ปุ่น</h4>
  							<p>สำหรับศิลป์-ญี่ปุ่นและคนที่ไม่ได้เรียนศิลป์-ญี่ปุ่น ภาษาญี่ปุ่นสำหรับคนทำงาน</p>
  						</div>
  					</div>
  					<div class="col-md-4">
  						<div class="single-goals">
  							<img src="{{url('assets/images/icon-4.png')}}" alt="slide 1">
  							<h4>วิเคราะห์ผลคะแนนออกมา</h4>
  							<p>รู้จุดอ่อนจุดแข็งและประเมินโอกาสสอบผ่าน เรียนภาษาญี่ปุ่นออนไลน์กับครูพี่โฮม </p>
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
<script src="{{url('assets/js/owl.carousel.min.js')}}"></script>

<script>
$('.slider-wrapper').owlCarousel({
        loop:true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 2500,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        items:1,
        nav:false,
        dots: true
    });
</script>

@stop('scripts')
