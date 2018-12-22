<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title')</title>
        <meta name="description" content="กวดวิชาภาษาญี่ปุ่น, เรียนพิเศษภาษาญี่ปุ่น, ติวสอบวัดระดับภาษาญี่ปุ่น, ติว N1 ติว N2 ติว N3 ติว N4 ติว N5 คันจิ ศัพท์ ไวยากรณ์ N1 N2 N3 N4 N5 การฟัง การอ่าน Tel. 02-658-3819">
        <meta name="author" content="za-shi.com">
        <meta name="keywords" content="">
        <meta name="googlebot" content="ALL">
        <!-- Favicon icon -->
        <link rel="shortcut icon" type="image/png" href="{{url('assets/images/favicon.png')}}"/>
        @yield('og_tag')

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
