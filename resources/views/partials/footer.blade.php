{{--<!-- START SCRIPT @AUTHOR AMR -->--}}
<script src="{{mix('js/app.js')}}"></script>
{{--<!-- END SCRIPT @AUTHOR AMR -->--}}
<script>
    window.KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#2c77f4",
                "light": "#ffffff",
                "dark": "#282a3c",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };

</script>
<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{asset('/')}}assets/vendors/global/vendors.bundle.js" type="text/javascript"></script>
<script src="{{asset('/')}}assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>
<!--end::Global Theme Bundle -->

<!--begin::Page Vendors(used by this page) -->
<script src="{{asset('/')}}assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
<script src="{{asset('/')}}assets/vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>
<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="{{asset('/')}}assets/js/demo1/pages/dashboard.js" type="text/javascript"></script>
<!--end::Page Scripts -->

<!--begin::Page Scripts(used by this page) -->
<script src="{{asset('/')}}assets/js/demo1/pages/login/login-general.js" type="text/javascript"></script>
<!--end::Page Scripts -->

<script src="{{mix('/js/app.js')}}"></script>

