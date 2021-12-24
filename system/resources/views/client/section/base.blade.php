<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aria Shop - About Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="{{ asset('/public/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets/css/templatemo.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets/css/custom.css') }}">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{ asset('/public/assets/css/fontawesome.min.css') }}">
    @stack('style')
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    <!-- Start Top Nav -->
    @include('client.section.navbar')
    <!-- Close Header -->

  
  @yield('content_front')





    <!-- Start Footer -->
  @include('client.section.footer')
    <!-- End Footer -->
@stack('script')
    <!-- Start Script -->
    <script src="{{ asset('/public/assets/js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('/public/assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('/public/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/public/assets/js/templatemo.js') }}"></script>
    <script src="{{ asset('/public/assets/js/custom.js') }}"></script>
    <!-- End Script -->
</body>

</html>