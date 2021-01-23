<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
{{--        <meta name="description" content="">--}}
        <meta name="author" content="de-ondernemers.com">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>De ondernemers - vastgoedservice - 24/7 calamiteitendienst</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <style>

            .elegant-color{
                background: #2e2e2eeb  !important;
            }
            html,
            body {
                height: 100%;
                overflow-x: hidden;
                min-width: 970px;
            }
            html {
                 min-height: 100%;
            }
            #page-content {
                flex: 1 0 auto;
            }
            #sticky-footer {
                flex-shrink: none;
            }
            /* Don't let the lead text change font-size. */
            .lead {
                font-size: 16px;
            }

            /* Finesse the page header spacing */
            .page-header {
                margin-bottom: 30px;
            }
            .page-header .lead {
                margin-bottom: 10px;
            }

            .circle {
                height: 100px;
                width: 100px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                padding: 15px;
            }

            /* Non-responsive overrides
             *
             * Utilitze the following CSS to disable the responsive-ness of the container,
             * grid system, and navbar.
             */

            /* Reset the container */
            .container {
                width: 970px;
                max-width: 1200px !important;
            }

            .container .navbar-header,
            .container .navbar-collapse {
                margin-right: 0;
                margin-left: 0;
            }

            /* Always float the navbar header */
            .navbar-header {
                float: left;
            }

            /* Undo the collapsing navbar */
            .navbar-collapse {
                /*display: block !important;*/
                height: auto !important;
                padding-bottom: 0;
                overflow: visible !important;
            }

            .navbar-toggle {
                display: none;
            }
            .navbar-collapse {
                border-top: 0;
            }

            .navbar-brand {
                /*margin-left: -15px;*/
            }

            /* Always apply the floated nav */
            .navbar-nav {
                float: left;
                margin: 0;

            }
            nav a{
                color: white !important;
            }

            .navbar-nav > li {
                float: left;
            }
            .navbar-nav > li > a {
                padding: 15px;
            }

            /* Redeclare since we override the float above */
            .navbar-nav.navbar-right {
                float: right;
            }

            /* Undo custom dropdowns */
            .navbar .navbar-nav .open .dropdown-menu {
                position: absolute;
                float: left;
                background-color: #fff;
                border: 1px solid #ccc;
                border: 1px solid rgba(0, 0, 0, .15);
                border-width: 0 1px 1px;
                border-radius: 0 0 4px 4px;
                -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
                box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            }
            .navbar-default .navbar-nav .open .dropdown-menu > li > a {
                color: #333;
            }
            .navbar .navbar-nav .open .dropdown-menu > li > a:hover,
            .navbar .navbar-nav .open .dropdown-menu > li > a:focus,
            .navbar .navbar-nav .open .dropdown-menu > .active > a,
            .navbar .navbar-nav .open .dropdown-menu > .active > a:hover,
            .navbar .navbar-nav .open .dropdown-menu > .active > a:focus {
                color: #fff !important;
                background-color: #428bca !important;
            }
            .navbar .navbar-nav .open .dropdown-menu > .disabled > a,
            .navbar .navbar-nav .open .dropdown-menu > .disabled > a:hover,
            .navbar .navbar-nav .open .dropdown-menu > .disabled > a:focus {
                color: #999 !important;
                background-color: transparent !important;
            }

            ::-webkit-scrollbar {
                position: absolute;
                width: 4px;
                height: 4px;
            }

            ::-webkit-scrollbar-thumb {
                background: rgba(90, 90, 90);
            }

            ::-webkit-scrollbar-track {
                background: rgba(0, 0, 0, 0.2);
            }
        </style>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>

    </head>
    <body class="elegant-color d-flex flex-column">
        <!--Navbar-->
        <nav class="navbar navbar-expand-sm navbar-dark elegant-color-dark z-depth-4" style="flex: none !important;">
            <div class="container">

                <!-- Navbar brand -->
                <a class="navbar-brand" href="{!! route('site.home') !!}">
                    <img src="/files/images/de-ondernemers-icon.png" style="object-fit: contain; width: 62px; height: 90px;" alt="">
                </a>

                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">

                    <!-- Links -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item {{ active('site.home') }}">
                            <a class="nav-link" href="{{route('site.home')}}">@lang('general.menu_item_home')
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item {{ active('site.services') }}">
                            <a class="nav-link" href="{{route('site.services')}}">@lang('general.menu_item_service')</a>
                        </li>
                        <li class="nav-item {{ active('site.calamities') }}">
                            <a class="nav-link" href="{{route('site.calamities')}}">@lang('general.menu_item_calamities')</a>
                        </li>
                        <li class="nav-item {{ active('site.property-management') }}">
                            <a class="nav-link" href="{{route('site.property-management')}}">@lang('general.menu_item_property_management')</a>
                        </li>
                        <li class="nav-item {{ active('site.about') }}">
                            <a class="nav-link" href="{{route('site.about')}}">@lang('general.menu_item_about')</a>
                        </li>
                        <li class="nav-item {{ active('site.contact') }}">
                            <a class="nav-link" href="{{route('site.contact')}}">@lang('general.menu_item_contact')</a>
                        </li>

                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="mailto:info@de-ondernemers.com"><i class="fas fa-envelope"></i> info@de-ondernemers.com</a>
                            <a class="nav-link" href="tel: 040 240 54 40"><i class="fas fa-phone"></i>
                                +31 (0) 40 240 54 40</a>
                        </li>
                    </ul>
                </div>

{{--//todo change all langues--}}
                <div style="position: fixed; top: 160px; right: 10px; z-index: 9999">
                    <ol class="">
                        <a style="margin-right: 10px;" class="" href="{{ url('locale/en') }}" >
                            <img src="/files/images/united-kingdom.svg" style="height: 40px;" alt="en">
                        </a>
                        <a style="margin-right: 10px;" class="" href="{{ url('locale/nl') }}" >
                            <img src="/files/images/netherlands.svg" style="height: 40px;" alt="nl">
                        </a>
                    </ol>
                </div>

                <!-- Collapsible content -->
            </div>

        </nav>
        <!--/.Navbar-->
        <div id="page-content">
            {{ $slot }}
        </div>

        <footer id="sticky-footer" class=" page-footer z-depth-4 font-small pt-4 elegant-color-dark text-white">
            <div class="container">
                <!-- Grid row -->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-6 mt-3">
                        <!-- Content -->
                        @livewire('components.content-editor', ['key' => 'footer_info_para'])
                    </div>
                    <div class="col-6 mb-md-0 mb-3">
                        @livewire('components.content-editor', ['key' => 'footer_column'])
                    </div>
                </div>
                <!-- Grid row -->
            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            Made By <a href="www.web-assembled.nl">web-assembled.nl</a>

                        </div>
                        <div class="col-4">
                            <span class="text-muted text-center">Garonnelaan 39
                            5627 VW Eindhoven</span>
                        </div>
                        <div class="col-4 text-right">
                            © {{date('Y')}} Copyright:
                            <a href="https://mdbootstrap.com/"> de-ondernemers.com</a>
                        </div>

                    </div>

                </div>
            </div>
            <!-- Copyright -->
        </footer>

        @stack('modals')

        @livewireScripts

        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

        <script type="text/javascript" src="https://cdn.ckeditor.com/4.14.1/full-all/ckeditor.js"></script>

        @stack('js')
    </body>
</html>
