<template>
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet">
            <!-- START HEADER @AUTHOR AMR-->
            <v-header :title="title"></v-header>
            <!-- END HEADER @AUTHOR AMR-->
            <!-- START BODY @AUTHOR AMR-->
            <v-body>
                <slot name="body"></slot>
            </v-body>
            <!-- END BODY @AUTHOR AMR-->
            <!-- START FOOTER @AUTHOR AMR-->
            <v-footer v-if="showFooter" >
            </v-footer>
            <!-- END FOOTER @AUTHOR AMR-->

        </div>
    </div>

</template>
<script>
    /**
     * load page's components
     */
    import components from './page/components'

    export default {
        props: {
            showFooter: {
                type: Boolean,
                required: false,
                default: true
            },
            title: {
                type: String,
                required: true
            }
        },
        /**
         * register page level components
         */
        components
    }
</script>