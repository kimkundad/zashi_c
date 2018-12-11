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




    <div class="blog-1x blog-1x-no-bg">
		<div class="container">
			<div class="row">



				<div class="col-md-4">
					<div class="blog-single">
						<img src="{{url('assets/images/2.png')}}" alt="slide 1">

						<div class="blog-single-content">
							<a href="blog-single.html"> Why coursecity is the best online learning institute? </a>
							<p>Coursecity is an educational resource for children the teachers. curriculum classroom software is perfect.</p>

							<h3>
								<i class="far fa-calendar-check"></i> 8 July, 2018
								<span><i class="far fa-heart"></i> 8 </span>
							</h3>
						</div>
					</div>
				</div>


				<div class="col-md-12">
					<div class="course-pagination">


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


@stop('scripts')
