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
    						<h2>ติดต่อครูพี่โฮม</h2>
    					</div>
    				</div>
    				<div class="col-md-7">
    					<div class="contact-form">
                <form method="post" id="my_form" action="{{url('contact_us')}}" name="contactform" autocomplete="on">
						{{ csrf_field() }}
    							<div class="row">
    								<div class="col-md-12">
    									<div class="single-input">
    										<div class="form-group">
    											<input type="text" class="form-control"  name="name" value="{{ old('name') }}" placeholder="ชื่อ-นามสกุล" aria-label="Name">
    										</div>
    									</div>
    								</div>
    								<div class="col-md-12">
    									<div class="single-input">
    										<div class="form-group">
    										    <input name="email" type="email" id="email" value="{{ old('email') }}" placeholder="อีเมล์" class="form-control" >
    										</div>
    								  	</div>
    								</div>
    								<div class="col-md-12">
    									<div class="single-input">
    										<div class="form-group">
    											<textarea name="comments" class="form-control" placeholder="ข้อความ*" rows="5">{{ old('comments') }}</textarea>
    										</div>
    									</div>
    								</div>
    								<div class="col-md-12">
    									<a href="javascript:{}" onclick="document.getElementById('my_form').submit();" class="btn-small"> Submit Now </a>
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
    									{{$objs->address}}
    								  </div>
    								</div>
                           		</li>
                           		<li>
    								<div class="media">
    									<img src="{{url('assets/images/phone.png')}}" alt="Mountains">
    								  <div class="media-body">
    									{{$objs->phone}}
    								  </div>
    								</div>
                           		</li>
                           		<li>
    								<div class="media">
    									<img src="{{url('assets/images/message.png')}}" alt="Mountains">
    								  <div class="media-body">
    									{{$objs->email}}
    								  </div>
    								</div>
                           		</li>
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


<!-- Google map js -->
	<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCa6w23do1qZsmF1Xo3atuFzzMYadTuTu0"></script>

	<script>

  /*************************************************************
  				google map js activation
  **************************************************************/
  google.maps.event.addDomListener(window, 'load', init);

  function init() {
  	var mapOptions = {
  		zoom: 11,
  		scrollwheel: false,


  		// The latitude and longitude to center the map (always required)
  		center: new google.maps.LatLng({{$objs->lat}}, {{$objs->lng}}),

  		styles:
  			[
  				{
  					"featureType": "administrative",
  					"elementType": "labels.text.fill",
  					"stylers": [
  						{
  							"color": "#444444"
  						}
  					]
  				},
  				{
  					"featureType": "landscape",
  					"elementType": "all",
  					"stylers": [
  						{
  							"color": "#eff1f5"
  						}
  					]
  				},
  				{
  					"featureType": "poi",
  					"elementType": "all",
  					"stylers": [
  						{
  							"visibility": "off"
  						}
  					]
  				},
  				{
  					"featureType": "road",
  					"elementType": "all",
  					"stylers": [
  						{
  							"saturation": -100
  						},
  						{
  							"lightness": 45
  						}
  					]
  				},
  				{
  					"featureType": "road.highway",
  					"elementType": "all",
  					"stylers": [
  						{
  							"visibility": "simplified"
  						}
  					]
  				},
  				{
  					"featureType": "road.arterial",
  					"elementType": "labels.icon",
  					"stylers": [
  						{
  							"visibility": "off"
  						}
  					]
  				},
  				{
  					"featureType": "transit",
  					"elementType": "all",
  					"stylers": [
  						{
  							"visibility": "off"
  						}
  					]
  				},
  				{
  					"featureType": "water",
  					"elementType": "all",
  					"stylers": [
  						{
  							"color": "#ddd"    /* Map body color */
  						},
  						{
  							"visibility": "on"
  						}
  					]
  				}
  			]
  		};

  	var mapElement = document.getElementById('map');
  	var map = new google.maps.Map(mapElement, mapOptions);
  	var marker = new google.maps.Marker({
  		position: new google.maps.LatLng({{$objs->lat}}, {{$objs->lng}}),
  		map: map,
  		title: 'Edufair!',
  		animation:google.maps.Animation.BOUNCE,
  		icon: '{{url('assets/images/map-marker.png')}}'
  	});
  }

  </script>


@stop('scripts')
