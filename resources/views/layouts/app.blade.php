<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Facebook -->
    <meta property="og:url" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">

    <meta property="og:image" content="">
    <meta property="og:image:secure_url" content="">
    <meta property="og:image:type" content="">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if (isset($title))
    <title>{{ $title }}</title>
    @else
    <title>Datatable</title>
    @endif

    <link href="{{ asset('assets/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/jquery-switchbutton/jquery.switchButton.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/chartist/chartist.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/highlightjs/github.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/select2/css/select2.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/bracket.css') }}">

    @yield('css')

</head>

<body>

        @include('layouts.inc.left_nav')

        @include('layouts.inc.top_navbar')

        @include('layouts.inc.right_bar')

        <div class="br-mainpanel">

            @yield('content')

            @include('layouts.inc.footer')

        </div>


    <script src="{{ asset('assets/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('assets/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('assets/lib/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/lib/jquery-switchbutton/jquery.switchButton.js') }}"></script>
    <script src="{{ asset('assets/lib/peity/jquery.peity.js') }}"></script>
    <script src="{{ asset('assets/lib/chartist/chartist.js') }}"></script>
    <script src="{{ asset('assets/lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/lib/d3/d3.js') }}"></script>
    <script src="{{ asset('assets/lib/rickshaw/rickshaw.min.js') }}"></script>

    <script src="{{ asset('assets/lib/highlightjs/highlight.pack.js') }}"></script>
    <script src="{{ asset('assets/lib/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/lib/datatables-responsive/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('assets/lib/select2/js/select2.min.js') }}"></script>


    <script src="{{ asset('assets/js/bracket.js') }}"></script>
    <script src="{{ asset('assets/js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>

    @yield('js')

    <script>
        $(function () {
            'use strict'
            $(window).resize(function () {
                minimizeMenu();
            });

            minimizeMenu();

            function minimizeMenu() {
                if (window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)')
                    .matches) {
                    // show only the icons and hide left menu label by default
                    $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
                    $('body').addClass('collapsed-menu');
                    $('.show-sub + .br-menu-sub').slideUp();
                } else if (window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass(
                        'collapsed-menu')) {
                    $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
                    $('body').removeClass('collapsed-menu');
                    $('.show-sub + .br-menu-sub').slideDown();
                }
            }
        });

    </script>
</body>
</html>

