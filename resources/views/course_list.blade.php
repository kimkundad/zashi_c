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
                        <h3>{{$cat->cat_name}}</h3>
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$cat->cat_name}}</li>
                          </ol>
                        </nav>
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
                      @if($cat_list)
                        @foreach($cat_list as $u)
											<li><a href="{{url('course_list/'.$u->id)}}"><img src="{{url('assets/images/arrow-right.png')}}" alt="Image"> {{$u->cat_name}} <span>{{$u->option}}</span></a></li>
											  @endforeach
                      @endif
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

							</div>
							<div class="col-md-6">
								<div class="course-tab">
									<p>เรียนภาษาญี่ปุ่นออนไลน์</p>
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

                  @if($course)
                  @foreach($course as $coursed)

									<div class="media">
										<div class="media-left-image">
											<div class="hvrbox">
												<img src="{{url('assets/image/product/'.$coursed->c_image)}}" alt="{{$coursed->c_name}}" class="hvrbox-layer_bottom">
												<div class="hvrbox-layer_top hvrbox-text">
													<div class="hvrbox-text">
														<a href="{{$coursed->youtube_course}}" class="btn-circle video"><i class="fas fa-play"></i></a><br>
														<a href="{{url('course_single/'.$coursed->id_p)}}">ดูรายละเอียด</a>
													</div>
												</div>
											</div>
										</div>
										<div class="media-body">
											<h2><a href="course-single-one.html"> {{$coursed->c_name}}</a></h2>
											<h5>{{$coursed->c_title}}</h5>
											<h4 style="font-size: 24px;">฿ {{$coursed->c_price}} @if($coursed->c_discount != 0)
  										<del>฿ {{$coursed->c_discount}}</del>
  										@endif</h4>
											<a href="{{url('course_single/'.$coursed->id_p)}}" class="btn-bordered"> ดูรายละเอียด </a>
											<h3>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i> (5)
												<span>นักเรียน: {{$coursed->c_student}} <i class="far fa-heart"></i></span>
											</h3>
										</div>
									</div>

                  @endforeach
                @endif



									<div class="course-pagination">
										@include('pagination.default', ['paginator' => $course])
									</div>

								</div>
						  </div>

						  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="course-1x all-course-grid">
								<div class="container">
									<div class="row">

											<div class="all-course">
												<div class="row">


                          @if($course)
                          @foreach($course as $courses)

												  <div class="col-md-4 tile web">
													<div class="single-course">
														<div class="hvrbox">
															<img src="{{url('assets/image/product/'.$coursed->c_image)}}" alt="{{$coursed->c_name}}" class="hvrbox-layer_bottom">
															<div class="hvrbox-layer_top hvrbox-text">
																<div class="hvrbox-text">
																	<a href="{{$coursed->youtube_course}}" class="btn-circle video"><i class="fas fa-play"></i></a><br>
																	<a href="{{url('course_single/'.$coursed->id_p)}}">ดูรายละเอียด</a>
																</div>
															</div>
														</div>
														<div class="single-course-content">
															<a href="{{url('course_single/'.$coursed->id_p)}}">{{$coursed->c_name}}</a>
															<p>{{$coursed->c_title}} <span>@if($coursed->c_discount != 0)
          										<del>฿ {{$coursed->c_discount}}</del>
          										@endif<
                               <b>฿ {{$coursed->c_price}}</b></span></p>
															<h3>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i> (4)
																<span>นักเรียน: {{$coursed->c_student}}</span>
															</h3>
														</div>
													</div>
												  </div>


                          @endforeach
                        @endif





 													<div class="col-md-12">


                            @include('pagination.default', ['paginator' => $course])


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
