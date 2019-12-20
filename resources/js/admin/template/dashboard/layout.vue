<template>
    <div class="">
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
                        <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                            <!--Begin::Dashboard 3-->
                            <loader :show="loaderDisable"/>
                            <router-view/>
                            <!--End::Dashboard 3-->
                        </div>
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
        <!-- begin::Sticky Toolbar -->
        <toolbar></toolbar>
        <!-- end::Sticky Toolbar -->

        <!--Begin:: Chat-->
        <chat></chat>
        <!--ENd:: Chat-->
    </div>

</template>
<script>
    import components from './partials/component'
    import {mapGetters, mapState} from "vuex";

    export default {
        components,
        computed: {
            ...mapState({
                loaderDisable: state => state.Loader.loaderDisable,
            }),
        }
    }
</script>
