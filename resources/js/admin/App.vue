<template>
    <div id="app" v-cloak>
        <component :is="layout"></component>
    </div>

</template>
<script>
    import dashboardLayout from '@/template/dashboard/layout'
    import authLayout from '@/template/auth/layout'

    const defaultLayout = 'dashboard'
    export default {
        name: 'admin.app',
        components: {dashboardLayout, authLayout},
        computed: {
            layout() {
                let meta = this.$route.meta.layout;
                if (meta == undefined)
                    return;
                if (meta == 'auth') {
                    document.getElementsByTagName('body')[0].style.backgroundImage = 'url("/assets/media/bg/bg-3.jpg")';
                } else {
                    document.getElementsByTagName('body')[0].style.backgroundImage = 'url("")';
                }
                return (this.$route.meta.layout || defaultLayout) + "-layout"
            }
        }
    }
</script>
