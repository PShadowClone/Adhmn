<template>
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label co-md-9">
            <h3 class="kt-portlet__head-title">
                <router-link :to="{name : mainUrl}">
                    {{ title }}
                </router-link>

            </h3>

        </div>
        <div class="col-md-3 action">
            <router-link :to="{name : actionUrl}" class="btn btn-default">Create</router-link>
        </div>
    </div>
</template>
<script>
    export default {
        props: {
            title: {
                type: String,
                required: true
            },
            actionUrl: {
                required: true,
                type: String
            },
            mainUrl: {
                required: true,
                type: String
            }
        }
    }
</script>
<style lang="scss">
    .action {
        padding-top: 12px;
        text-align: right;
        padding-right: 0;
    }
</style>