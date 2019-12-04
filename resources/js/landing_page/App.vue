<template>
    <div id="app">
        <!-- Navigation -->
        <v-nav></v-nav>
        <!-- Navigation -->
        <!-- Header -->
        <v-header></v-header>
        <!-- Services -->
        <services></services>
        <!-- Portfolio Grid -->
        <portfolio></portfolio>
        <!-- About -->
        <about></about>
        <!-- Clients -->
        <client></client>
        <!-- Contact -->
        <contact></contact>
        <!-- Footer -->
        <v-footer></v-footer>
        <!-- Portfolio Modals -->
        <modals></modals>
    </div>

</template>
<script>
    /**
     * import components
     */
    import components from './template/components'

    export default {
        components
    }
</script>