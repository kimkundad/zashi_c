


<div class="main-menu-1x">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main-menu">
						<nav class="navbar navbar-expand-lg navbar-light bg-light btco-hover-menu">
							<a class="navbar-brand" href="{{url('/')}}">
								<img src="{{url('assets/image/logo_website/'.get_logo())}}" class="d-inline-block align-top" alt="">
							</a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse" id="navbarSupportedContent">

							<ul class="navbar-nav ml-auto main-menu-nav">

								<li class="nav-item">
								<a class="nav-link" href="{{url('/')}}">Home</a>
							  </li>

							  <li class="nav-item">
								<a class="nav-link" href="{{url('about')}}">About Us</a>
							  </li>

							  <li class="nav-item dropdown">
									<a class="nav-link" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Course
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">

										@if(get_cat())
										@foreach(get_cat() as $k)
										<li><a class="dropdown-item" href="{{url('course_list/'.$k->id)}}">{{$k->cat_name}}</a></li>
										@endforeach
										@endif





									</ul>
							  </li>

								<li class="nav-item">
								<a class="nav-link" href="{{url('blog')}}">Blog</a>
							  </li>

							  <li class="nav-item">
								<a class="nav-link" href="{{url('contact')}}">Contact Us</a>
							  </li>

							  <li class="nav-item sign-in">

							  </li>

							  <li class="nav-item">
								<a class="btn-small" href="#">Get Started</a>
							  </li>

							</ul>

						  </div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
