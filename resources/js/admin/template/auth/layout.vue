<template>
    <div class="kt-page--loading-enabled kt-page--loading kt-header--fixed
     kt-header--minimize-topbar kt-header-mobile--fixed
      kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right
       kt-subheader--enabled kt-subheader--transparent kt-page--loading" v-cloak>
        <div class="kt-grid kt-grid--ver kt-grid--root kt-page">
            <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin" id="kt_login">
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor"
                     style="">
                    <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                        <div class="kt-login__container">
                            <div class="kt-login__logo">
                                <a href="#">
                                    <img src="@/assets/media/logos/logo-5.png">
                                </a>
                            </div>
                            <router-view/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'layout.app',
        data: () => {
            return {
                backgroundImage: import('@/assets/media/bg/bg-3.jpg')
            };
        }
    }
</script>
<style lang="scss">

    [v-cloak] {
        display: none;
    }

    @import "/assets/css/demo12/pages/login/login-3.css";
    body {
        background-image: url('/assets/media/bg/bg-3.jpg');
    }
</style>