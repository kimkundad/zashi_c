@extends('layouts.template')

@section('title')
TEENEEJJ - ตลาดนัดสวนจตุจักร
@stop

@section('stylesheet')


@stop('stylesheet')
@section('content')




<hr />

    <div class="sign-in-1x">
		<div class="container">
			<div class="form-container">
				<div class="row">


					<div class="col-md-4">
						<div class="sign-in-form">
							<h3>Sign Up</h3>
							<form role="form" id="my_form" method="POST" action="{{url('register')}}">
                {{ csrf_field() }}
								<div class="row">
                  <div class="col-md-12">
										<div class="single-input">
											<i class="fas fa-user"></i>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Username" name="name" aria-label="Name">
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="single-input">
											<i class="fas fa-envelope"></i>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="E-mail" name="email" aria-label="Name">
											</div>
										</div>
									</div>

                  <div class="col-md-12">
										<div class="single-input">
											<i class="fas fa-key"></i>
											<div class="form-group">
											    <input type="password" class="form-control" name="password" placeholder="Password">
											</div>
									  	</div>
									</div>
                  <div class="col-md-12">
                    <div class="single-input">
                      <i class="fas fa-key"></i>
                      <div class="form-group">
                          <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                      </div>
                      </div>
                  </div>
									<div class="col-md-12">
										<div class="sign-in-btn">
											<span><a href="#">Forget Password?</a></span>
											<a href="javascript:{}" onclick="document.getElementById('my_form').submit();" class="btn-small"> Sign Up </a>

											<h4>Already have an account? <a href="{{url('login')}}"> Sign In here!</a></h4>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>


					<div class="col-md-7 offset-md-1">
						<div class="sign-in-right" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{url('assets/images/sign-in1.png')}});">
							<a href="https://www.youtube.com/watch?v=gwinFP8_qIM" class="btn-circle video"><i class="fas fa-play"></i></a>
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
