<!DOCTYPE html>
<html lang="en">

<head>
    <title> @yield('title')</title>

    @include('inc.css')
    <!--Core CSS -->

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <section id="container">
        <!--header start-->
        @include('inc.header')
        <!--header end-->
        <aside>
            @include('inc.leftSidebar')
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <section class="panel">
                    <!-- page start-->
                    @yield('content')
                    <!-- page end-->
                </section>
            </section>
        </section>
        <!-- main content end -->
        <!--right sidebar start-->
        @include('inc.rightSidebar')
        <!--right sidebar end-->

    </section>


    <!-- @include('inc.js') -->
    <script src="{{ asset('admin') }}/js/jquery.js"></script>
    <script src="{{ asset('admin') }}/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
    <script src="{{ asset('admin') }}/bs3/js/bootstrap.min.js"></script>
    <script src="{{ asset('admin') }}/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="{{ asset('admin') }}/js/jquery.scrollTo.min.js"></script>
    <script src="{{ asset('admin') }}/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
    <script src="{{ asset('admin') }}/js/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="{{ asset('admin') }}/js/skycons/skycons.js"></script>
    <script src="{{ asset('admin') }}/js/jquery.scrollTo/jquery.scrollTo.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ asset('admin') }}/js/calendar/clndr.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
    <script src="{{ asset('admin') }}/js/calendar/moment-2.2.1.js"></script>
    <script src="{{ asset('admin') }}/js/evnt.calendar.init.js"></script>
    <script src="{{ asset('admin') }}/js/jvector-map/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="{{ asset('admin') }}/js/jvector-map/jquery-jvectormap-us-lcc-en.js"></script>
    <script src="{{ asset('admin') }}/js/gauge/gauge.js"></script>
    <!--clock init-->
    <script src="{{ asset('admin') }}/js/css3clock/js/css3clock.js"></script>
    <!--Easy Pie Chart-->
    <script src="{{ asset('admin') }}/js/easypiechart/jquery.easypiechart.js"></script>
    <!--Sparkline Chart-->
    <script src="{{ asset('admin') }}/js/sparkline/jquery.sparkline.js"></script>
    <!--Morris Chart-->
    <script src="{{ asset('admin') }}/js/morris-chart/morris.js"></script>
    <script src="{{ asset('admin') }}/js/morris-chart/raphael-min.js"></script>
    <!--jQuery Flot Chart-->
    <script src="{{ asset('admin') }}/js/flot-chart/jquery.flot.js"></script>
    <script src="{{ asset('admin') }}/js/flot-chart/jquery.flot.tooltip.min.js"></script>
    <script src="{{ asset('admin') }}/js/flot-chart/jquery.flot.resize.js"></script>
    <script src="{{ asset('admin') }}/js/flot-chart/jquery.flot.pie.resize.js"></script>
    <script src="{{ asset('admin') }}/js/flot-chart/jquery.flot.animator.min.js"></script>
    <script src="{{ asset('admin') }}/js/flot-chart/jquery.flot.growraf.js"></script>
    <script src="{{ asset('admin') }}/js/dashboard.js"></script>
    <script src="{{ asset('admin') }}/js/jquery.customSelect.min.js"></script>
    <!--common script init for all pages-->
    <script src="{{ asset('admin') }}/js/scripts.js"></script>
</body>

</html>