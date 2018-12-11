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
                        <h3>Contact</h3>
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                          </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="contact-us-1x">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<div class="title-left">
    						<h2>Get in touch</h2>
    					</div>
    				</div>
    				<div class="col-md-7">
    					<div class="contact-form">
    						<form>
    							<div class="row">
    								<div class="col-md-12">
    									<div class="single-input">
    										<div class="form-group">
    											<input type="text" class="form-control" placeholder="Name*" aria-label="Name">
    										</div>
    									</div>
    								</div>
    								<div class="col-md-12">
    									<div class="single-input">
    										<div class="form-group">
    										    <input type="email" class="form-control" placeholder="Email*">
    										</div>
    								  	</div>
    								</div>
    								<div class="col-md-12">
    									<div class="single-input">
    										<div class="form-group">
    											<textarea class="form-control" placeholder="Message*" rows="5"></textarea>
    										</div>
    									</div>
    								</div>
    								<div class="col-md-12">
    									<a href="#" class="btn-small"> Submit Now </a>
    								</div>
    							</div>

    						</form>
    					</div>
    				</div>
    				<div class="col-md-4 offset-md-1">
    					<div class="contact-address">
    						<ul>
                           		<li>
    								<div class="media">
    									<img src="{{url('assets/images/location.png')}}" alt="Mountains">
    								  <div class="media-body">
    									35A, Sliver Town, Road No-3 London, England
    								  </div>
    								</div>
                           		</li>
                           		<li>
    								<div class="media">
    									<img src="{{url('assets/images/phone.png')}}" alt="Mountains">
    								  <div class="media-body">
    									+91 254 587 475<br>+91 254 587 475
    								  </div>
    								</div>
                           		</li>
                           		<li>
    								<div class="media">
    									<img src="{{url('assets/images/message.png')}}" alt="Mountains">
    								  <div class="media-body">
    									coursity@info.com
    								  </div>
    								</div>
                           		</li>
    						</ul>

    						<div class="footer-social-link">
    							<ul>
    								<li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
    								<li><a href="#"> <i class="fab fa-instagram"></i> </a></li>
    								<li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
    								<li><a href="#"> <i class="fab fa-google-plus-g"></i> </a></li>
    							</ul>
    						</div>
    					</div>
    				</div>

    			</div>
    		</div>
    	</div>


      <div class="client_map">
      		<div id="map"></div>
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


<!-- Google map js -->
	<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCa6w23do1qZsmF1Xo3atuFzzMYadTuTu0"></script>
	<script src="{{url('assets/js/map.js')}}"></script>


@stop('scripts')
