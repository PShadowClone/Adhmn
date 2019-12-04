<template>
    <div>
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
                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                            <router-view ></router-view>
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
        <!-- begin::Scrolltop -->
        <scroll-top></scroll-top>
        <!-- end::Scrolltop -->
        <!-- begin::Demo Panel -->
        <div id="kt_demo_panel" class="hidden kt-demo-panel">
            <div class="kt-demo-panel__head">
                <h3 class="kt-demo-panel__title">
                    Select A Demo
                    <!--<small>5</small>-->
                </h3>
                <a href="#" class="kt-demo-panel__close" id="kt_demo_panel_close"><i class="flaticon2-delete"></i></a>
            </div>
            <div class="kt-demo-panel__body">
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 1
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../assets/media/demos/preview/demo1.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="demo1/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>

                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 2
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../assets/media/demos/preview/demo2.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="demo2/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>

                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 3
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../assets/media/demos/preview/demo3.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="demo3/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>

                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 4
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../assets/media/demos/preview/demo4.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="demo4/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>

                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 5
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../assets/media/demos/preview/demo5.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="demo5/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>

                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 6
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../assets/media/demos/preview/demo6.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="demo6/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>

                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 7
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../assets/media/demos/preview/demo7.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="demo7/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>

                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 8
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../assets/media/demos/preview/demo8.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="demo8/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>

                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 9
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../assets/media/demos/preview/demo9.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="demo9/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>

                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 10
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../assets/media/demos/preview/demo10.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="demo10/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>

                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 11
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../assets/media/demos/preview/demo11.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="demo11/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>

                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item kt-demo-panel__item--active">
                    <div class="kt-demo-panel__item-title">
                        Demo 12
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../assets/media/demos/preview/demo12.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="demo12/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>

                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 13
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../assets/media/demos/preview/demo13.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>

                        </div>
                    </div>
                </div>
                <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 14
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="../assets/media/demos/preview/demo14.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>

                        </div>
                    </div>
                </div>
                <a href="https://1.envato.market/EA4JP" target="_blank"
                   class="kt-demo-panel__purchase btn btn-brand btn-elevate btn-bold btn-upper">
                    Buy Metronic Now!
                </a>
            </div>
        </div>
        <!-- end::Demo Panel -->
        <!--Begin:: Chat-->
        <chat></chat>
        <!--ENd:: Chat-->
    </div>
</template>
<script>
    import components from './components'

    export default {
        name: "layout.app",
        components
    }
</script>