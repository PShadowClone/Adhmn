<template>
    <div class="spinner-container" v-if="show">
        <div class="kt-spinner kt-spinner--v2 kt-spinner--md kt-spinner--info"></div>
        <div class="spinner-text">Loading ...</div>
    </div>
</template>

<script>
    export default {
        name: "loader",
        props: ['show'],

    }
</script>

<style lang="scss" scoped>
    .spinner-container {
        width: 100%;
        position: absolute;
        height: 100%;
        text-align: center;
        left: 13.8%;
        padding-top: 20%;
        padding-left: 41%;
        padding-right: 58%;
        z-index: 9999999;
    }

    .spinner-text {
        width: 98px;
        margin-left: -33px;
        padding-top: 17px;
    }
</style>