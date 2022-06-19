<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dompet.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jun 2022 08:04:57 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard" />
    <meta name="author" content="3CoresDigitals" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Petrol Station Management System by 3CoresDigitals" />
    <meta property="og:title" content="Petrol Station Management System" />
    <meta property="og:description" content="Petrol Station Management System" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Petrol Station Management System</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{asset('superAdmin/images/favicon.png')}}" />

<!--*******************
CSS start
********************-->
@include('superAdmin.layouts.css')
<!--*******************
CSS ends
********************-->

</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="waviy">
        <span style="--i:1">L</span>
        <span style="--i:2">o</span>
        <span style="--i:3">a</span>
        <span style="--i:4">d</span>
        <span style="--i:5">i</span>
        <span style="--i:6">n</span>
        <span style="--i:7">g</span>
        <span style="--i:8">.</span>
        <span style="--i:9">.</span>
        <span style="--i:10">.</span>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

<!--**********************************
    Header start
***********************************-->
@include('superAdmin.layouts.header')
<!--**********************************
    Header end
***********************************-->

            <!--**********************************
                Content body start
            ***********************************-->
            @yield('content')
            <!--**********************************
                Content body end
            ***********************************-->

<!--**********************************
    Footer start
***********************************-->
@include('superAdmin.layouts.footer')
<!--**********************************
    Footer ends
***********************************-->

</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    JS starts
***********************************-->
@include('superAdmin.layouts.js')
<!--**********************************
    JS ends
***********************************-->
</body>
</html>
