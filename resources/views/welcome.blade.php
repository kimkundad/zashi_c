@extends('layouts.template')

@section('title')
TEENEEJJ - ตลาดนัดสวนจตุจักร
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
									<h4>Expert Instructors</h4>
									<p>We rigorously screen and train our instructors ensure that they meet </p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-feature">
									<img src="{{url('assets/images/clock.png')}}" alt="slide 1">
									<h4>Lifetime Access</h4>
									<p>We rigorously screen and train our instructors ensure that they meet </p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-feature">
									<img src="{{url('assets/images/pc.png')}}" alt="slide 1">
									<h4>Learn Anywhere</h4>
									<p>We rigorously screen and train our instructors ensure that they meet </p>
								</div>
							</div>
							<div class="col-md-12">
								<div class="single-feature">
									<a href="#" class="btn-small">Get Started For Free</a>
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
						<h2>Coursecity Top Courses</h2>
					</div>
				</div>

				<div class="col-md-12">
					<div id="filters" class="course-menu">
					  <button class="filter active"  data-filter="all">All Courses</button>

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
								<a href="#" class="btn-small"> View more </a>
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
  					<h2>Achieve Your Goals</h2>
  					<p>Find subjects you're passionate about by browsing our online course categories. Start <br> learning with top courses Built With Industry Experts</p>
  				</div>
  			</div>

  			<div class="col-md-12">
  				<div class="row">
  					<div class="col-md-4">
  						<div class="single-goals">
  							<img src="{{url('assets/images/icon-1.png')}}" alt="slide 1">
  							<h4>Develope Skill</h4>
  							<p>These goals will assist them in achieving their ultimate career position </p>
  						</div>
  					</div>
  					<div class="col-md-4">
  						<div class="single-goals">
  							<img src="{{url('assets/images/icon-2.png')}}" alt="slide 1">
  							<h4>Learning Community</h4>
  							<p>These goals will assist them in achieving their ultimate career position </p>
  						</div>
  					</div>
  					<div class="col-md-4">
  						<div class="single-goals">
  							<img src="{{url('assets/images/icon-4.png')}}" alt="slide 1">
  							<h4>Real Life Project</h4>
  							<p>These goals will assist them in achieving their ultimate career position </p>
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
						<h3>Ready to Begin?</h3>
						<p>Find subjects you're passionate about by browsing our online course categories. Start <br> learning with top courses Built With Industry Experts.</p>
						<a href="#" class="btn-small">Start Teaching</a>
						<a href="#" class="btn-small">Start Learning</a>
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
