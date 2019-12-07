<template>
    <div v-cloak>
        <div class="alert alert-warning under-construction fade show" role="alert">
            <div class="construction-content">
                <i class="flaticon-warning"></i>
                <div class="alert-text">Under construction !</div>
            </div>

        </div>
        <!-- begin:: Page -->
        <!-- begin:: Header Mobile -->
        <mobile-header></mobile-header>
        <!-- end:: Header Mobile -->
        <div class="kt-grid kt-grid--hor kt-grid--root">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
                <!-- begin:: Aside -->
                <v-nav></v-nav>
                <!-- end:: Aside -->
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                    <!-- begin:: Header -->
                    <v-header></v-header>
                    <!-- end:: Header -->
                    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                        <!-- begin:: Subheader -->
                        <sub-header></sub-header>
                        <!-- end:: Subheader -->
                        <!-- begin:: Content -->
                        <v-body></v-body>
                        <!-- end:: Content -->
                    </div>
                    <!-- begin:: Footer -->
                    <v-footer></v-footer>
                    <!-- end:: Footer -->
                </div>
            </div>
        </div>
        <!-- end:: Page -->
        <!-- begin::Quick Panel -->
        <quick-panel></quick-panel>
        <!-- end::Quick Panel -->
        <!-- begin::Scrolltop -->
        <scroll-top></scroll-top>
        <!-- end::Scrolltop -->
        <!--Begin:: Chat-->
        <chat></chat>
        <!--ENd:: Chat-->

    </div>
</template>
<script>
    import components from './components'

    export default {
        name: "layout.vue",
        components
    }
</script>
<style lang="scss">
    [v-cloak] {
        display: none;
    }

    @import "/css/app.css";
    @import "/assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css";
    @import "/assets/vendors/custom/vendors/flaticon2/flaticon.css";
    @import "/assets/vendors/custom/vendors/flaticon/flaticon.css";
    @import "/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css";


</style>