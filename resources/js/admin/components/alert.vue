<template>
    <div class="alert alert-outline-danger fade show" role="alert" v-if="show">
        <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
        <div class="alert-text">
            <slot></slot>
        </div>
        <div class="alert-close">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="la la-close"></i></span>
            </button>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['show']
    }
</script>