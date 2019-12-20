<template>
    <div id="app">
        <!-- Navigation -->
        <v-nav></v-nav>
        <!-- Navigation -->
        <!-- Header -->
        <v-header v-bind:slider="slider_content"></v-header>
        <!-- Services -->
        <services v-if="false"></services>
        <!-- About -->
        <about :content="who_we_are"></about>
        <!-- Portfolio Grid -->
        <portfolio :content="works_content"></portfolio>


        <services :content="service_content"></services>


        <!-- Clients -->
        <client :content="partners_content"></client>
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

    import axios from 'axios'

    export default {
        components,
        data() {
            return {
                who_we_are: {},
                slider_content: {},
                works_content: {},
                partners_content: {},
                service_content: {},
            }
        },
        created() {
            let _this = this;
            axios.get('http://localhost:8000/api/landing/parents/children').then((result) => {
                result.data.data.map((content) => {
                    if (content.key == 'WHO_WE_ARE') {
                        _this.who_we_are = content;
                    }
                    if (content.key == "SLIDER") {
                        _this.slider_content = content;
                        console.log("slider", _this.slider_content)
                    }
                    if (content.key == "WORKS") {
                        _this.works_content = content;
                        console.log("works_conent", _this.works_content)
                    }
                    if (content.key == "PARTNERS") {
                        _this.partners_content = content;
                        console.log("works_conent", _this.partners_content)
                    }
                    if (content.key == "SERVICES") {
                        _this.service_content = content;

                        var i, j, temparray, chunk = 6;
                        let temp = [];
                        for (i = 0, j = _this.service_content.children.length; i < j; i += chunk) {
                            temp.push(this.service_content.children.slice(i, i + chunk));
                        }
                        _this.service_content.children = temp;

                        // console.log("this.services.children", this.services)
                        console.log("works_conensssdsfdsdft", _this.service_content)
                    }
                    console.log(content)
                })
            })
            // this.request(this.methods.GET, this.endpoints.landing.base, {}, (result) => {
            //     this.rows = result.data.data
            //     this.paginator = result.data.paginator
            // })
        }
    }

</script>