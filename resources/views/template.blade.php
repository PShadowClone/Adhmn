<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>[v-cloak] {
            display: none
        }

        [v-cloak] > * {
            display: none
        }

        [v-cloak]::before {
            content: "loading…"
        }
    </style>

    <!--begin::Fonts -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <!--end::Fonts -->


{{--    <!--begin::Page Vendors Styles(used by this page) -->--}}
{{--    <link href="{{asset('/')}}assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"--}}
{{--          type="text/css"/>--}}
<!--end::Page Vendors Styles -->
    <link href="{{asset('/')}}assets/css/demo1/pages/login/login-6.css" rel="stylesheet" type="text/css"/>


    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{asset('/')}}assets/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/')}}assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->

    <link href="{{asset('/')}}assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/')}}assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/')}}assets/css/demo1/skins/brand/dark.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/')}}assets/css/demo1/skins/aside/dark.css" rel="stylesheet" type="text/css"/>
    <!--end::Layout Skins -->

    <link rel="shortcut icon" href="{{asset('/')}}assets/media/logos/favicon.ico"/>
    <!-- START STYLE @AUTHOR AMR -->
    <link href="{{mix('css/app.css')}}"/>
    <!-- END STYLE @AUTHOR AMR -->
    <title>{{config('app.name')}}</title>
</head>
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
<div id="app" v-cloak>
</div>
<!-- START SCRIPTS LEVEL -->
@includeIf('partials/footer')
<!-- END SCRIPTS LEVEL -->


</body>
</html>