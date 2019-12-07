<template>
    <div class="kt-portlet">
        <!-- START HEADER @AUTHOR AMR-->
        <v-header></v-header>
        <!-- END HEADER @AUTHOR AMR-->
        <!-- START BODY @AUTHOR AMR-->
        <v-body></v-body>
        <!-- END BODY @AUTHOR AMR-->
        <!-- START FOOTER @AUTHOR AMR-->
        <v-footer></v-footer>
        <!-- END FOOTER @AUTHOR AMR-->
    </div>
</template>
<script>
    /**
     * load page's components
     */
    import components from './page/components'

    export default {
        /**
         * register page level components
         */
        components
    }
</script>