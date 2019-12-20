<template>
    <div>
        <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
            <div class="kt-aside__brand-logo">
                <a href="demo12/index.html">
                    <img alt="Logo" src="@/assets/media/logos/logo-12.png">
                </a>
            </div>

            <div class="kt-aside__brand-tools">
                <button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler"><span></span></button>
            </div>
        </div>
        <!-- end:: Aside -->    <!-- begin:: Aside Menu -->
        <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
            <div
                    id="kt_aside_menu"
                    class="kt-aside-menu kt-scroll ps ps--active-y"
                    data-ktmenu-vertical="1"
                    data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500"
            >

                <ul class="kt-menu__nav ">
                    <li class="kt-menu__item " aria-haspopup="true">
                        <router-link :to="{name : 'landing.list'}" class="kt-menu__link "><i
                                class="kt-menu__link-icon flaticon-light"></i><span
                                class="kt-menu__link-text">Landing Page</span>
                        </router-link>
                    </li>
                    <li class="kt-menu__item " aria-haspopup="true">
                        <router-link :to="{name : 'country.list'}" class="kt-menu__link "><i
                                class="kt-menu__link-icon flaticon-light"></i><span
                                class="kt-menu__link-text">Countries</span>
                        </router-link>
                    </li>

                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                        data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                              class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-web"></i><span
                            class="kt-menu__link-text">Utils</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                            <ul class="kt-menu__subnav">
                                <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                        class="kt-menu__link"><span class="kt-menu__link-text">Utils</span></span>
                                </li>
                                <li class="kt-menu__item " aria-haspopup="true"><a
                                        href="demo12/components/utils/session-timeout.html"
                                        class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Session Timeout</span></a></li>
                                <li class="kt-menu__item " aria-haspopup="true"><a
                                        href="demo12/components/utils/idle-timer.html" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Idle Timer</span></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>
<script>
    export default {}
</script>