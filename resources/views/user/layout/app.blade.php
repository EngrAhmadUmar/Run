<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Lawlan-Logistics </title>
    <meta name="description" content="Lawlan Logistics service">
    <meta name="keywords" content="Lawlan, Logitics, chat, delivery, bike, ride" />
    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="{{ asset('user/images/ezgif.png') }}" sizes="32x32">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/remixicon.min.css') }}">
</head>

<body>
    <!-- ===================================
      START LODAER PAGE
    ==================================== -->
    <section class="loader-page" id="loaderPage">
        <div class="spinner_flash"></div>
    </section>


    <!-- START WRAPPER -->
    <div id="wrapper">
        <!-- START CONTENT -->
        <div id="content">


            @yield("content")


        </div>


    </div>

    <!-- ===================================
      START STATUS CONNECTION
    ==================================== -->
    <div class="d-flex justify-content-center">
        <div class="toast status-connection" role="alert" aria-live="assertive" aria-atomic="true"></div>
    </div>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBs873IoYFn8xvYPiin_zFwbCMx0KHWRsY&libraries=places&callback=initMap">
        async
    </script>

    <script src="https://js.paystack.co/v1/inline.js"></script>

    <!-- JS FILES -->
    <script src={{ asset('user/js/bootstrap.bundle.min.js') }}></script>
    <script src="{{ asset('user/js/custom.js') }}"></script>
    <script src="{{ asset('user/js/pwa-services.js') }}"></script>
    <script src="{{ asset('user/js/jquery.min.js') }}"></script>
    <script src="{{ asset('user/js/mapApi.js') }}"></script>
    <script src="{{ asset('user/js/paystack.js') }}"></script>
    <script src="{{ asset('user/js/profile.js') }}"></script>
    <script src="{{ asset('user/js/parsley.min.js') }}"></script>
    <script src="{{ asset('user/js/order.js') }}"></script>
    <script src="{{ asset('user/js/index.js') }}"></script>

    <script>
        $(document).ready(function() {

            $('#profile_image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.showImage').attr('src', e.target.result)
                }
                reader.readAsDataURL(e.target.files['0'])
            })



            $('form').keyup(function() {
                var empty = false;
                $('form').each(function() {
                    if ($(this).val() == '') {
                        empty = true
                    }
                })

                if (empty) {
                    $('#RequestBtn').attr('disabled', 'disabled')
                } else {
                    $('#RequestBtn').removeAttr('disabled')
                }

            })



        })
    </script>

    <script>
        $(document).ready(function() {

            // $('#pickup, #dropoff, #price, #package_name, #receiver_name, #phone').change(validate)

            // function validate() {

            //     if ($('#pickup').val().length > 0 && $('#dropoff').val().length > 0 && $('#package_name').val()
            //         .length > 0 && $('#price').val().length > 0 &&
            //         $('#receiver_name').val().length > 0 && $('#phone').val().length > 0) {
            //         $('#RequestBtn').removeAttr("disabled");
            //     } else {
            //         $('#RequestBtn').attr("disabled", 'disabled')
            //     }

            // };

        })
    </script>



</body>

</html>
