export default {
    methods: {
        makeToast(variant, title = null, body) {
            this.$bvToast.toast(body, {
                title: title,
                variant: variant,
                solid: true
            })
        }
    }
}