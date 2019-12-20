<template>
    <div>
        <span v-if="column.html ">
            <table-operations
                    :id="formattedRow[column.field]"
                    @deleteOperation="deleteOperation"
                    @updateOperation="updateOperation"/>
        </span>
        <span v-else-if="column.image && formattedRow[column.field] != null">
            <img :src="formattedRow[column.field].path" class="slider-container" alt="image">
        </span>
        <span v-else-if="formattedRow[column.field] == null">
            ...
        </span>
        <span v-else
              v-html="formattedRow[column.field] == '' ||formattedRow[column.field] == undefined ? '...' : formattedRow[column.field]">
        </span>
    </div>
</template>
<script>
    export default {
        name: "tableRow",
        props: ['formattedRow', 'column'],
        methods: {
            deleteOperation(id) {
                this.$emit('deleteOperation', id)

            },
            updateOperation(id) {
                this.$emit('updateOperation', id)
            }
        },
        created() {
            this.sweetConfig.text = "Delete the selected slider ?";
        }
    }
</script>

<style lang="scss">
    .slider-container {
        width: 300px;
        -webkit-box-shadow: 10px 7px 36px -11px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 10px 7px 36px -11px rgba(0, 0, 0, 0.75);
        box-shadow: 10px 7px 36px -11px rgba(0, 0, 0, 0.75);
    }
</style>