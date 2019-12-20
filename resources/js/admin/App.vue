<template>
    <div id="app" v-cloak>
        <component :is="layout"></component>
    </div>
</template>
<script>
    import Dashboard from '@/template/dashboard/layout'
    import Auth from '@/template/auth/layout'

    export default {
        name: 'admin.app',
        components: {Dashboard, Auth},
        methods: {
            changeLayout() {
                if (document.layout == 'auth') {
                    document.getElementsByTagName('body')[0].style.backgroundImage = 'url("/assets/media/bg/bg-3.jpg")'
                }
                return document.layout;
            }
        },
        computed: {
            layout() {
                return this.changeLayout();
            }
        },
        updated() {
            return this.changeLayout();
        }
    }
</script>
<style lang="scss">

</style>