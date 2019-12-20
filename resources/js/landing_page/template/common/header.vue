<template>
    <!-- Header -->
    <header class="masthead" :style="`background-image : url('${showImage(slider)}')`">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><font color="#8ee2dd"></font></div>
            </div>
        </div>
    </header>
</template>
<script>
    export default {
        props: ['slider'],
        data() {
            return {
                last: {}
            }
        },
        computed: {
            localSlider() {
                console.log("children", this.slider.no)
                return this.slider;
            }
        },

        methods: {
            showImage(slider) {
                return slider.children[slider.children.length - 1].image.path
            }
        }
    }
</script>