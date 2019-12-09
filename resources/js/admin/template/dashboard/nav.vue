<template>
    <div>
        <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
        <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop"
             id="kt_aside">
            <!-- begin:: Aside -->
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
                        class="kt-aside-menu "
                        data-ktmenu-vertical="1"
                        data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500"
                >

                    <ul class="kt-menu__nav ">
                        <li class="kt-menu__section kt-menu__section--first">
                            <h4 class="kt-menu__section-text">Departments</h4>
                            <i class="kt-menu__section-icon flaticon-more-v2"></i>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                            data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                  class="kt-menu__link kt-menu__toggle"><i
                                class="kt-menu__link-icon flaticon-layers"></i><span
                                class="kt-menu__link-text">Admins</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                            class="kt-menu__link"><span
                                            class="kt-menu__link-text">Add</span></span></li>
                                    <li class="kt-menu__item " aria-haspopup="true">
                                        <router-link :to="{name: 'landing.index'}"
                                                     class="kt-menu__link "><i
                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                class="kt-menu__link-text">Landing</span>
                                        </router-link>
                                    </li>
                                    <li class="kt-menu__item " aria-haspopup="true">
                                        <router-link :to="{name : 'testing'}"
                                                     class="kt-menu__link "><i
                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                class="kt-menu__link-text">Show</span></router-link>
                                    </li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#"
                                                                                       class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Payroll</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#"
                                                                                       class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Contacts</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i
                                class="kt-menu__link-icon flaticon-suitcase"></i><span class="kt-menu__link-text">Finance</span></a>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                            data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                  class="kt-menu__link kt-menu__toggle"><span
                                class="kt-menu__link-text">Support</span><span class="kt-menu__link-badge"><span
                                class="kt-badge kt-badge--danger">23</span></span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                            class="kt-menu__link"><span class="kt-menu__link-text">Support</span><span
                                            class="kt-menu__link-badge"><span
                                            class="kt-badge kt-badge--danger">23</span></span></span></li>
                                    <li class="kt-menu__item " aria-haspopup="true" data-ktmenu-link-redirect="1"><a
                                            href="demo12/inner.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Reports</span></a></li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                        data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                              class="kt-menu__link kt-menu__toggle"><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Cases</span><i
                                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/inner.html" class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                        class="kt-menu__link-text">Pending</span><span
                                                        class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/inner.html" class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                        class="kt-menu__link-text">Urgent</span><span
                                                        class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--danger">6</span></span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/inner.html" class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                        class="kt-menu__link-text">Done</span><span
                                                        class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--success">2</span></span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/inner.html" class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                        class="kt-menu__link-text">Archive</span><span
                                                        class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--info kt-badge--wide">245</span></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a href="demo12/inner.html"
                                                                                       class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Clients</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a href="demo12/inner.html"
                                                                                       class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Audit</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i
                                class="kt-menu__link-icon flaticon-light"></i><span class="kt-menu__link-text">Administration</span></a>
                        </li>
                        <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i
                                class="kt-menu__link-icon flaticon-share"></i><span class="kt-menu__link-text">Management</span></a>
                        </li>
                        <li class="kt-menu__section ">
                            <h4 class="kt-menu__section-text">Reports</h4>
                            <i class="kt-menu__section-icon flaticon-more-v2"></i>
                        </li>
                        <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i
                                class="kt-menu__link-icon flaticon-graphic"></i><span class="kt-menu__link-text">Accounting</span></a>
                        </li>
                        <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i
                                class="kt-menu__link-icon flaticon-network"></i><span class="kt-menu__link-text">Products</span></a>
                        </li>
                        <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i
                                class="kt-menu__link-icon flaticon-network"></i><span
                                class="kt-menu__link-text">Sales</span></a></li>
                        <li class="kt-menu__item " aria-haspopup="true" data-ktmenu-link-redirect="1"><a href="#"
                                                                                                         class="kt-menu__link "><i
                                class="kt-menu__link-icon flaticon-technology"></i><span
                                class="kt-menu__link-text">IPO</span></a></li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                            data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                  class="kt-menu__link kt-menu__toggle"><i
                                class="kt-menu__link-icon flaticon-list-3"></i><span class="kt-menu__link-text">Datatables.net</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                            class="kt-menu__link"><span class="kt-menu__link-text">Datatables.net</span></span>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                        data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                              class="kt-menu__link kt-menu__toggle"><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Basic</span><i
                                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/crud/datatables/basic/basic.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Basic Tables</span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/crud/datatables/basic/scrollable.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Scrollable Tables</span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/crud/datatables/basic/headers.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Complex Headers</span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/crud/datatables/basic/paginations.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Pagination Options</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                        data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                              class="kt-menu__link kt-menu__toggle"><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Advanced</span><i
                                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/crud/datatables/advanced/column-rendering.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Column Rendering</span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/crud/datatables/advanced/multiple-controls.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Multiple Controls</span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/crud/datatables/advanced/column-visibility.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Column Visibility</span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/crud/datatables/advanced/row-callback.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Row Callback</span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/crud/datatables/advanced/row-grouping.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Row Grouping</span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/crud/datatables/advanced/footer-callback.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Footer Callback</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                        data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                              class="kt-menu__link kt-menu__toggle"><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Data sources</span><i
                                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/crud/datatables/data-sources/html.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">HTML</span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/crud/datatables/data-sources/javascript.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Javascript</span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/crud/datatables/data-sources/ajax-client-side.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Ajax Client-side</span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/crud/datatables/data-sources/ajax-server-side.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Ajax Server-side</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                        data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                              class="kt-menu__link kt-menu__toggle"><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Search Options</span><i
                                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/crud/datatables/search-options/column-search.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Column Search</span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/crud/datatables/search-options/advanced-search.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Advanced Search</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                        data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                              class="kt-menu__link kt-menu__toggle"><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Extensions</span><i
                                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/crud/datatables/extensions/buttons.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Buttons</span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/crud/datatables/extensions/colreorder.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">ColReorder</span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/crud/datatables/extensions/keytable.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">KeyTable</span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/crud/datatables/extensions/responsive.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Responsive</span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/crud/datatables/extensions/rowgroup.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">RowGroup</span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/crud/datatables/extensions/rowreorder.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">RowReorder</span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/crud/datatables/extensions/scroller.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Scroller</span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/crud/datatables/extensions/select.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Select</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                            data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                  class="kt-menu__link kt-menu__toggle"><i
                                class="kt-menu__link-icon flaticon-upload-1"></i><span class="kt-menu__link-text">File Upload</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/crud/file-upload/dropzonejs.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">DropzoneJS</span><span
                                            class="kt-menu__link-badge"><span
                                            class="kt-badge kt-badge--danger kt-badge--inline">new</span></span></a>
                                    </li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/crud/file-upload/uppy.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Uppy</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__section ">
                            <h4 class="kt-menu__section-text">Components</h4>
                            <i class="kt-menu__section-icon flaticon-more-v2"></i>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                            data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                  class="kt-menu__link kt-menu__toggle"><i
                                class="kt-menu__link-icon flaticon-layers"></i><span
                                class="kt-menu__link-text">Base</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                            class="kt-menu__link"><span class="kt-menu__link-text">Base</span></span>
                                    </li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/base/colors.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">State Colors</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/base/typography.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Typography</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/base/buttons.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Buttons</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/base/button-group.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Button Group</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/base/dropdown.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Dropdown</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/base/tabs/bootstrap.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Bootstrap Tabs</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/base/tabs/line.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Line Tabs</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/base/accordions.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Accordions</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/base/tables.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Tables</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/base/progress.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Progress</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/base/modal.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Modal</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/base/alerts.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Alerts</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/base/popover.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Popover</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/base/tooltip.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Tooltip</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                            data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                  class="kt-menu__link kt-menu__toggle"><i
                                class="kt-menu__link-icon flaticon-background"></i><span class="kt-menu__link-text">Custom</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                            class="kt-menu__link"><span class="kt-menu__link-text">Custom</span></span>
                                    </li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/custom/badge.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Badge</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/custom/navs.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Navigations</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/custom/lists.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Lists</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/custom/notes.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Notes</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/custom/timeline.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Timeline</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/custom/pagination.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Pagination</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/custom/media.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Media</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/custom/spinners.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Spinners</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/custom/iconbox.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Iconbox</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/custom/infobox.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Infobox</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/custom/callout.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Callout</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/custom/ribbon.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Ribbons</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/custom/miscellaneous.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Miscellaneous</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                            data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                  class="kt-menu__link kt-menu__toggle"><i
                                class="kt-menu__link-icon flaticon-light"></i><span
                                class="kt-menu__link-text">Extended</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                            class="kt-menu__link"><span
                                            class="kt-menu__link-text">Extended</span></span></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/extended/blockui.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Block UI</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/extended/perfect-scrollbar.html"
                                            class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Perfect Scrollbar</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/extended/treeview.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Tree View</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/extended/bootstrap-notify.html"
                                            class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Bootstrap Notify</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/extended/toastr.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Toastr</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/extended/sweetalert2.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">SweetAlert2</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/extended/uppy.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Uppy File Upload</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/extended/dual-listbox.html"
                                            class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Dual Listbox</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                            data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                  class="kt-menu__link kt-menu__toggle"><i
                                class="kt-menu__link-icon flaticon-open-box"></i><span
                                class="kt-menu__link-text">Icons</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/icons/flaticon.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Flaticon</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/icons/fontawesome5.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Fontawesome 5</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/icons/lineawesome.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Lineawesome</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/icons/socicons.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Socicons</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/icons/svg.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">SVG Icons</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                            data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                  class="kt-menu__link kt-menu__toggle"><i
                                class="kt-menu__link-icon flaticon-interface-1"></i><span class="kt-menu__link-text">Portlets</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                            class="kt-menu__link"><span
                                            class="kt-menu__link-text">Portlets</span></span></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/portlets/base.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Base Portlets</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/portlets/advanced.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Advanced Portlets</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/portlets/tabbed.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Tabbed Portlets</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/portlets/draggable.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Draggable Portlets</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/portlets/tools.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Portlet Tools</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/portlets/sticky-head.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Sticky Head</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                            data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                  class="kt-menu__link kt-menu__toggle"><i
                                class="kt-menu__link-icon flaticon-rocket"></i><span
                                class="kt-menu__link-text">Widgets</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                            class="kt-menu__link"><span class="kt-menu__link-text">Widgets</span></span>
                                    </li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/widgets/lists.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Lists</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/widgets/charts.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Charts</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/widgets/general.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">General</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                            data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                  class="kt-menu__link kt-menu__toggle"><i
                                class="kt-menu__link-icon flaticon-calendar"></i><span class="kt-menu__link-text">Calendar</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                            class="kt-menu__link"><span
                                            class="kt-menu__link-text">Calendar</span></span></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/calendar/basic.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Basic Calendar</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/calendar/list-view.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">List Views</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/calendar/google.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Google Calendar</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/calendar/external-events.html"
                                            class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">External Events</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/calendar/background-events.html"
                                            class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Background Events</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                            data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                  class="kt-menu__link kt-menu__toggle"><i
                                class="kt-menu__link-icon flaticon-diagram"></i><span
                                class="kt-menu__link-text">Charts</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                            class="kt-menu__link"><span class="kt-menu__link-text">Charts</span></span>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                        data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                              class="kt-menu__link kt-menu__toggle"><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">amCharts</span><i
                                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/components/charts/amcharts/charts.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">amCharts Charts</span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/components/charts/amcharts/stock-charts.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">amCharts Stock Charts</span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="demo12/components/charts/amcharts/maps.html"
                                                        class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">amCharts Maps</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/charts/flotcharts.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Flot Charts</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/charts/google-charts.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Google Charts</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/charts/morris-charts.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Morris Charts</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                            data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                  class="kt-menu__link kt-menu__toggle"><i
                                class="kt-menu__link-icon flaticon-placeholder"></i><span class="kt-menu__link-text">Maps</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                            class="kt-menu__link"><span class="kt-menu__link-text">Maps</span></span>
                                    </li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/maps/google-maps.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Google Maps</span></a></li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                            href="demo12/components/maps/jqvmap.html" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">JQVMap</span></a></li>
                                </ul>
                            </div>
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
            <!-- end:: Aside Menu -->
        </div>
    </div>
</template>
<script>
    export default {}
</script>