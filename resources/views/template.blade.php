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

    <link href="{{asset('/assets')}}/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet"
          type="text/css"/>


    <!--begin:: Global Optional Vendors -->
    <link href="{{asset('/assets')}}/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets')}}/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet"
          type="text/css"/>
    <!--end:: Global Optional Vendors -->
    <link rel="shortcut icon" href="{{asset('/assets')}}/media/logos/favicon.ico"/>

    <!-- START GOOGLE FONT -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <!-- END GOOGLE FONT -->
    <!-- START THE STYLE OF TEMPLATE -->
    <link rel="stylesheet" href="{{asset('assets/css/demo12/style.bundle.css')}}">
    <!-- END THE STYLE OF TEMPLATE -->
    <!-- START STYLE @AUTHOR AMR -->
    <link href="{{mix('css/app.css')}}"/>
    <!-- END STYLE @AUTHOR AMR -->
    <title>{{config('app.name')}}</title>
</head>
<body>
<div id="app" v-cloak>
</div>
<!-- START SCRIPTS LEVEL -->
@includeIf('partials/footer')
<!-- END SCRIPTS LEVEL -->


</body>
</html>