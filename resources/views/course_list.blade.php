@extends('layouts.template')

@section('title')
TEENEEJJ - ตลาดนัดสวนจตุจักร
@stop

@section('stylesheet')


@stop('stylesheet')
@section('content')


<div class="main-banner course-list-banner">
      <div class="hvrbox">
          <img src="{{url('assets/images/about_head.png')}}" alt="Mountains" class="hvrbox-layer_bottom">
          <div class="hvrbox-layer_top">
              <div class="container">
                  <div class="overlay-text text-center">
                      <h3><b>2,579</b> Online Course & Video Tutorials!</h3>
                      <div class="col-md-8 offset-md-2">
            <div class="input-group">
              <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Enter Your Search Here">
              <div class="input-group-append">
                <button class="btn btn-search" type="button"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
                  </div>
            </div>
        </div>
      </div>
  </div>



  <div class="course-header-1x">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
          <div class="course-header-left-top">
        <p><img src="{{url('assets/images/cross.png')}}" alt="Image"> Remove Filter</p>
        </div>
					<div class="course-header-left">
						<div id="accordion">
						  <div class="card">
						    <div class="card-header" id="headingOne">
						        <a href="#" class="icon-right" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          <h3>Category</h3>
						        </a>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
						      <div class="card-body">
									<div class="category">
										<ul>
											<li><a href="#"><img src="{{url('assets/images/arrow-right.png')}}" alt="Image"> All Categories <span>45</span></a></li>
											<li><a href="#"><img src="{{url('assets/images/arrow-right.png')}}" alt="Image"> Wordpress <span>30</span></a></li>
											<li><a href="#"><img src="{{url('assets/images/arrow-right.png')}}" alt="Image"> Landing Page	 <span>20</span></a></li>
											<li><a href="#"><img src="{{url('assets/images/arrow-right.png')}}" alt="Image"> Photography <span>15</span></a></li>

										</ul>
									</div>
						      </div>
						    </div>
						  </div>


						</div>
					</div>
				</div>






				<div class="col-md-9">
					<div class="course-header-right">
						<div class="row">
							<div class="col-md-6">
								<div class="search-box d-flex flex-row">
								  <p>Sort by : </p>
								  <select class="form-control styleSelect">
								    <option selected="">All Categories</option>
								    <option value="1">Wordpress</option>
								    <option value="2">HTML</option>
								    <option value="3">Javascript</option>
								    <option value="3">Photoshop</option>
								  </select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="course-tab">
									<p>All prices are in USD</p>
									<ul class="nav nav-tabs" id="myTab" role="tablist">
									  <li class="nav-item">
									    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-list"></i></a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-th"></i></a>
									  </li>
									</ul>

								</div>
							</div>
						</div>
					</div>

					<div class="course-grid-list">
						<div class="tab-content" id="myTabContent">
						  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								<div class="all-course-list">

									<div class="media">
										<div class="media-left-image">
											<div class="hvrbox">
												<img src="{{url('assets/images/1537158008.png')}}" alt="slide 1" class="hvrbox-layer_bottom">
												<div class="hvrbox-layer_top hvrbox-text">
													<div class="hvrbox-text">
														<a href="https://www.youtube.com/watch?v=zfeak_THR6E" class="btn-circle video"><i class="fas fa-play"></i></a><br>
														<a href="course-single-one.html">Preview Course</a>
													</div>
												</div>
											</div>
										</div>
										<div class="media-body">
											<h2><a href="course-single-one.html"> Learn Photoshop CC With Nir Eyal Complete Course </a></h2>
											<h5>By Nir Eyal</h5>
											<h4>$49 <del>$69</del></h4>
											<a href="course-single-one.html" class="btn-bordered"> View Course </a>
											<h3>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i> (4)
												<span>Enroll: 128 <i class="far fa-heart"></i></span>
											</h3>
										</div>
									</div>



									<div class="course-pagination">
										<ul class="pagination">
											<li class="page-item active"><span class="page-link">1</span></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#">4</a></li>
											<li class="page-item"><a class="page-link" href="#">5</a></li>
											<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
										</ul>
									</div>

								</div>
						  </div>

						  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="course-1x all-course-grid">
								<div class="container">
									<div class="row">

											<div class="all-course">
												<div class="row">



												  <div class="col-md-4 tile web">
													<div class="single-course">
														<div class="hvrbox">
															<img src="{{url('assets/images/1537158008.png')}}" alt="slide 1" class="hvrbox-layer_bottom">
															<div class="hvrbox-layer_top hvrbox-text">
																<div class="hvrbox-text">
																	<a href="https://www.youtube.com/watch?v=zfeak_THR6E" class="btn-circle video"><i class="fas fa-play"></i></a><br>
																	<a href="course-single-one.html">Preview Course</a>
																</div>
															</div>
														</div>
														<div class="single-course-content">
															<a href="course-single-one.html">Learn Photoshop With Eyal Complete Course</a>
															<p>Nir Eyal <span><del>$169</del> <b>$149</b></span></p>
															<h3>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i> (4)
																<span>Student: 128</span>
															</h3>
														</div>
													</div>
												  </div>





 													<div class="col-md-12">
														<div class="course-pagination">
															<ul class="pagination">
																<li class="page-item active"><span class="page-link">1</span></li>
																<li class="page-item"><a class="page-link" href="#">2</a></li>
																<li class="page-item"><a class="page-link" href="#">3</a></li>
																<li class="page-item"><a class="page-link" href="#">4</a></li>
																<li class="page-item"><a class="page-link" href="#">5</a></li>
																<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
															</ul>
														</div>
													</div>

												</div>
											</div>


									</div>
								</div>
							</div>
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