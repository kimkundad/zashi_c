<nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
  <div class="nav-top flex-grow-1">
    <div class="container d-flex flex-row h-100 align-items-center">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center">
        <a class="navbar-brand brand-logo" href="{{url('admin/dashboard')}}"><img src="{{url('assets/image/logo_website/'.get_logo())}}" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{url('admin/dashboard')}}"><img src="{{url('back/assets/images/logo-mini.svg')}}" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between flex-grow-1">

        <ul class="navbar-nav navbar-nav-right mr-0 ml-auto">


          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{url('./assets/images/avatar/'.Auth::user()->avatar)}}" alt="profile"/>
              <span class="nav-profile-name">{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">

              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('logout')}}">
                <i class="icon-logout text-primary mr-2"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu text-dark"></span>
        </button>
      </div>
    </div>
  </div>
  <div class="nav-bottom">
    <div class="container">
      <ul class="nav page-navigation">

        <li class="nav-item {{ (Request::is('admin/category*') ? 'mega-menu active' : '') }}">
          <a href="{{url('admin/category/')}}" class="nav-link"><i class="link-icon icon-disc"></i><span class="menu-title">หมวดหมู่</span></a>
        </li>

        <li class="nav-item {{ (Request::is('admin/blog*') ? 'mega-menu active' : '') }}">
          <a href="{{url('admin/blog/')}}" class="nav-link"><i class="link-icon icon-calculator"></i><span class="menu-title">ข่าวสาร</span></a>
        </li>


        <li class="nav-item {{ (Request::is('admin/course*') ? 'mega-menu active' : '') }}">
          <a href="{{url('admin/course/')}}" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">คอร์สเรียน</span></a>
        </li>



        <li class="nav-item {{ (Request::is('admin/slide*') ? 'mega-menu active' : '') }}">
          <a href="{{url('admin/slide/')}}" class="nav-link"><i class="link-icon icon-puzzle"></i><span class="menu-title">Slide Show</span></a>
        </li>

        <li class="nav-item {{ (Request::is('admin/us_contact*') ? 'mega-menu active' : '') }}">
          <a href="{{url('admin/us_contact/')}}" class="nav-link"><i class="link-icon icon-envelope-open"></i><span class="menu-title">contact us</span></a>
        </li>

        <li class="nav-item {{ (Request::is('admin/user*') ? 'mega-menu active' : '') }}">
          <a href="{{url('admin/user/')}}" class="nav-link"><i class="link-icon icon-user"></i><span class="menu-title">จัดการ User</span></a>
        </li>

        <li class="nav-item {{ (Request::is('admin/setting*') ? 'mega-menu active' : '') }}">
          <a href="{{url('admin/setting/')}}" class="nav-link"><i class="link-icon icon-settings"></i><span class="menu-title">ตั้งค่าระบบ</span></a>
        </li>






      </ul>
    </div>
  </div>
</nav>
