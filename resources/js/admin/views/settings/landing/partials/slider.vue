<template>
    <div class="kt-section">
        <div class="kt-section__content">
            <div class="table-responsive">
                <vue-good-table
                        styleClass="table table-bordered"
                        :columns="columns"
                        :rows="rows"
                        :line-numbers="true"
                >
                    <table-row
                            @fetch="fetch"
                            slot-scope="props"
                            slot="table-row"
                            :column="props.column"
                            :formattedRow="props.formattedRow"
                            @deleteOperation="deleteOperation"
                            @updateOperation="updateOperation"
                    >
                    </table-row>
                </vue-good-table>


                <b-pagination
                        v-if="paginator.current_page"
                        v-model="paginator.current_page"
                        :total-rows="paginator.total"
                        :per-page="paginator.per_page"
                        align="right"
                ></b-pagination>


            </div>
        </div>
    </div>
</template>
<script>
    import TableRow from './sliderPartials/tableRow'

    export default {
        components: {TableRow},
        data() {
            return {
                rows: [],
                columns: [
                    {
                        label: "Image",
                        field: "image.path",
                    },
                    {
                        label: "Content",
                        field: "content"
                    },
                    {
                        label: "Operations",
                        field: "id",
                        html: true,
                    }
                ],
                paginator: {},
            };
        },
        methods: {
            fetch(page) {
                this.request(this.methods.GET, this.endpoints.sliders.all + (page != undefined ? '?page=' + page : ''), {}, (result) => {
                    this.rows = result.data.data
                    this.paginator = result.data.paginator
                })
            },
            deleteOperation(id) {
                this.request(this.methods.DELETE, this.endpoints.sliders.delete(id), {}, (result) => {
                    this.alert('Deleted!', result.message);
                    this.fetch()
                })
            },
            updateOperation(id) {
                alert('update' + id)

            }
        },
        created() {
            this.fetch();
        },

    }
</script>