<template>
    <div class="loader">
        <b-spinner label="Loading..."></b-spinner>
    </div>

</template>

<script>
    export default {
        name: "loader",
        props: {
            containerStyle: {
                default: 1
            }
        },
        data: function () {
            return {
                shown: false,
                loaderClass: 'spinner-bubble spinner-bubble-info m-5'
            };
        },
        methods: {
            show() {
                this.shown = true;
            },
            hide() {
                this.shown = false;
            },
            toggle() {
                this.shown = !this.shown;
            }
        },
        created() {
            if (this.containerStyle != 1) {
                this.loaderClass = 'spinner-glow spinner-glow-primary mr-5';
            }
        }
    }
</script>

<style lang="scss" scoped>
    .loader {
        width: 100%;
        text-align: center;
        height: 100%;
        position: absolute;
        top: 0;
        padding-top: 28% !important;
        /* right: 15%; */
        float: right;
        padding-right: 28%;
        padding-left: 16%;
        bottom: 0;
    }
</style>