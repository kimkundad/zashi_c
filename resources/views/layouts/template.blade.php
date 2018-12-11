<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title')</title>
        <meta name="description" content="ร้านค้าและสินค้า ในตลาดนัดสวนจตุจักร รวบรวมร้านค้าที่คัดเลือดมาแล้วอย่างดี จากทั้งหมด 8,000 ร้านค้า">
        <meta name="author" content="teeneejj">
        <meta name="keywords" content="">
        <meta name="googlebot" content="ALL">
        <!-- Favicon icon -->
        <link rel="shortcut icon" type="image/png" href="{{url('assets/images/favicon.png')}}"/>


        @include('layouts.inc-style')
        @yield('stylesheet')

      </head>
<body>

  <!-- Preloader -->
      <div id="fakeloader"></div>
        @include('layouts.inc-header')
        @yield('content')

        @include('layouts.inc-footer')

        @include('layouts.inc-script')
        @yield('scripts')

</body>
</html>
