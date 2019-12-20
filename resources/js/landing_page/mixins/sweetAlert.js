export default {
    data() {
        return {
            sweetConfig: {
                title: 'Are you sure?',
                text: 'You want to delete the selected item',
                icon: 'warning',
                confirmButtonText: 'Yes, delete it!',
            }
        }
    },
    methods: {
        confirm(success, fail = undefined) {
            this.$swal.fire({
                title: this.sweetConfig.title,
                text: this.sweetConfig.text,
                icon: this.sweetConfig.icon,
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: this.sweetConfig.confirmButtonText
            }).then((result) => {
                if (result.value) {
                    success(result);

                }
            })
        },
        alert(title, message) {
            this.$swal.fire(
                title,
                message,
            )
        }
    }
}