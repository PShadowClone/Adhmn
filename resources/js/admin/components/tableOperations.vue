<template>
    <div>
        <button type="button" class="btn btn-danger btn-elevate btn-circle btn-icon"
                @click="deleteOperation">
            <i class="la la-trash">

            </i></button>
        <button type="button" class="btn  btn-elevate btn-circle btn-icon  btn-brand btn-elevate"
                @click="updateOperation"><i class="la la-pencil"></i></button>
    </div>
</template>
<script>
    export default {
        props: {
            id: {
                required: true,
                type: Number
            }
        },
        methods: {
            deleteOperation() {
                this.confirm((result) => {
                    this.$emit('deleteOperation', this.id)
                })

            },
            updateOperation() {
                this.$emit('updateOperation', this.id)
            }
        }
    }
</script>