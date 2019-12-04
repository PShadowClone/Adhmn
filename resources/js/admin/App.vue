<template>
    <div id="app">
        <layout></layout>
    </div>
</template>
<script>
    import Layout from './template/layout'

    export default {
        name: 'admin.app',
        components: {Layout}
    }
</script>
<style>

    @import "~/css/app.css";
    @import "./assets/css/demo12/style.bundle.css";
    @import "./assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css";
    @import "./assets/vendors/custom/vendors/flaticon2/flaticon.css";
    @import "./assets/vendors/custom/vendors/flaticon/flaticon.css";
    @import "./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css";
    @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700";

</style>