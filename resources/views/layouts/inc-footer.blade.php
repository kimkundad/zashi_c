



<footer class="footer-section-1x">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-top">
						<div class="row">
							<div class="col-md-4">
								<div class="footer-top-right">
								   <img src="{{url('assets/image/logo_website/'.get_logo())}}" alt="Za-shi logo website">
								   	<p>ติวเตอร์ภาษาญี่ปุ่นอันดับ 1 ผู้ก่อตั้งสถาบันสอนภาษาญี่ปุ่น Za-shi, Learnsabuy มีสถิติติวลูกศิษย์ที่ติดอักษรศาสตร์ จุฬาลงกรณ์มหาวิทยาลัย ได้มากที่สุด </p>
	                               <ul>
	                               		<li>{{get_phone()}}</li>
	                               		<li>{{get_email()}}</li>
									</ul>

									<div class="footer-social-link">
										<ul>
											<li><a href="https://www.facebook.com/JLPTOnline/"> <i class="fab fa-facebook-f"></i> </a></li>
											<li><a href="#"> <i class="fab fa-instagram"></i> </a></li>
											<li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
											<li><a href="#"> <i class="fab fa-google-plus-g"></i> </a></li>
										</ul>
									</div>

								</div>
							</div>

							<div class="col-md-8">
								<div class="footer-top-left">
									<div class="row">
										<div class="col-md-4">
											<div class="single-link">
												<h3>Company</h3>
												<ul>
													<li><a href="{{url('about')}}">   เกี่ยวกับ ZA-SHI</a></li>
													<li><a href="{{url('experience')}}">  ประวัติคุณครูและผลงาน </a></li>
													<li><a href="#">  สาขาและสมัครเรียน </a></li>
													<li><a href="{{url('contact')}}">  ติดต่อเรา </a></li>
												</ul>
											</div>
										</div>
										<div class="col-md-4">
											<div class="single-link">
												<h3>Help Links</h3>
												<ul>
													<li><a href="#">  จากครูสู่ศิษย์ </a></li>
													<li><a href="#">  ผลงานนักเรียน </a></li>


												</ul>
											</div>
										</div>
										<div class="col-md-4">
											<div class="single-link">
												<h3>Course</h3>
												<ul>

													@if(get_cat())
													@foreach(get_cat() as $k)
													<li><a href="{{url('course_list/'.$k->id)}}">{{$k->cat_name}}</a></li>
													@endforeach
													@endif


												</ul>
											</div>
										</div>
										<div class="col-md-8 offset-md-4">
											<div class="footer-subscriber">
												<div class="input-group">
												  <input type="text" class="form-control" placeholder="Enter Your Email" aria-label="Recipient's username">
												  <div class="input-group-append">
												    <button class="btn btn-subscriber" type="button"> <i class="far fa-paper-plane"></i> </button>
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

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<p>© <a href="#">za-shi.com</a> All Rights Reserved </p>
					</div>
					<div class="col-md-7">
						<ul>
							<li><a href="{{url('about')}}">   เกี่ยวกับ ZA-SHI</a></li>
							<li><a href="{{url('privacy_policy')}}">  Privacy Policy </a></li>
							<li><a href="{{url('help_center')}}">  Help Center </a></li>
							<li><a href="{{url('terms_of_service')}}">  Terms </a></li>

						</ul>
					</div>
				</div>
			</div>
		</div>

	</footer>
