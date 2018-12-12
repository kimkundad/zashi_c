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
                        <h3>About Us</h3>
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                          </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="about-us-2x">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="about-us-left">
						<h2>Coursecity Story</h2>
						<p>A conference is a meeting of people who "confer" about a topic. Conference types include: Convention (meeting), meeting of a, usually large.</p>
						<p>A conference is a meeting of people who "confer" about a topic. Conference types include: Convention (meeting), meeting of a, usually large.</p>
						<a href="#" class="btn-small"> Read More </a>
					</div>
				</div>
				<div class="col-md-6 offset-md-1">
					<div class="about-us-right with-video">
						<a href="https://www.youtube.com/watch?v=zfeak_THR6E" class="btn-circle video"><i class="fas fa-play"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>


  <div class="about-us-2x only-description">
  <div class="container">
    <div class="row">
      <div class="col-md-6 padding-right">
        <div class="about-us-left container-out-left">
          <h2>Why coursecity <span>is the best?</span></h2>
          <p>A conference is a meeting of people who "confer" about a topic. Conference types include: Convention (meeting), meeting of a, usually large.</p>
          <p>A conference is a meeting of people who "confer" about a topic. Conference types include: Convention (meeting), meeting of a, usually large.</p>
        </div>
      </div>
      <div class="col-md-6 padding-left">
        <div class="about-us-left container-out-right">
          <h2>Coursecity <span> online courses </span></h2>
          <p>A conference is a meeting of people who "confer" about a topic. Conference types include: Convention (meeting), meeting of a, usually large.</p>
          <p>A conference is a meeting of people who "confer" about a topic. Conference types include: Convention (meeting), meeting of a, usually large.</p>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="event-speakers best-instructor">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-middle">
						<h2>Our Best Instructor</h2>
						<p> The speaker bio is typically used in the programs at conferences, they may be used on the <br>  organization's website when promoting the event. </p>
					</div>
				</div>

				<div class="col-md-12">
					<div class="ddoctors-slider">
						<div class="row">

              <div class="col-md-3">
              </div>
							<div class="col-md-3">
								<div class="single-speaker">
									<div class="hvrbox">
										<img src="{{url('assets/images/15965494_10206213152167039_5353071833653529827_n.jpg')}}" alt="ครูพี่โฮม" class="hvrbox-layer_bottom">
										<div class="hvrbox-layer_top hvrbox-text">
											<div class="hvrbox-text">
				                               <ul>
													<li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
													<li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
													<li><a href="#"> <i class="fab fa-instagram"></i> </a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="speaker-details text-center" >
										<h2>ครูพี่โฮม</h2>
										<p>สอนภาษาญี่ปุ่น</p>
									</div>

								</div>
							</div>
							<div class="col-md-3">
								<div class="single-speaker">
									<div class="hvrbox">
										<img src="{{url('assets/images/15965494_10206213152167039_535307183365352982_n.jpg')}}" alt="เอ็ตจัง" class="hvrbox-layer_bottom">
										<div class="hvrbox-layer_top hvrbox-text">
											<div class="hvrbox-text">
				                               <ul>
													<li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
													<li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
													<li><a href="#"> <i class="fab fa-instagram"></i> </a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="speaker-details text-center">
										<h2>เอ็ตจัง</h2>
										<p>สอนภาษาญี่ปุ่น</p>
									</div>

								</div>
							</div>
              <div class="col-md-3">
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
