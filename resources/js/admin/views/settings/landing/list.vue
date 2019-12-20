<template>

    <page :title="'landing Page'" :show-footer="false" :action-url="'landing.create'" main-url="landing.list">
        <template v-slot:body>
            <div class="table-responsive">
                <vue-good-table
                        styleClass="table table-bordered"
                        :columns="columns"
                        :rows="rows"
                        :line-numbers="true"
                        max-width="15px"
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
        </template>
    </page>
</template>
<script>
    import TableRow from './partials/sliderPartials/tableRow'

    export default {
        components: {TableRow},
        data() {
            return {
                rows: [],
                columns: [
                    {
                        label: "Image",
                        field: "image",
                        image: true
                    },
                    {
                        label: "Content",
                        field: "content",
                        width: '327px'
                    },
                    {
                        label: "Key",
                        field: "key"
                    },
                    {
                        label: "Parent",
                        field: "parent.key"
                    },
                    {
                        label: "Title",
                        field: "title"
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
                this.request(this.methods.GET, this.endpoints.landing.base + (page != undefined ? '?page=' + page : ''), {}, (result) => {
                    this.rows = result.data.data
                    this.paginator = result.data.paginator
                })
            },
            deleteOperation(id) {
                this.request(this.methods.DELETE, this.endpoints.landing.delete(id), {}, (result) => {
                    if (result.status == 500) {
                        this.alert('Error!', result.message);
                        return;
                    }
                    this.alert('Deleted!', result.message);
                    this.fetch()
                })
            },
            updateOperation(id) {
                this.$router.push({name: 'landing.update', params: {id: id}})

            }
        },
        created() {
            this.fetch();
        },
        watch: {
            "paginator.current_page": function (value) {
                if (value != null) {
                    this.fetch(value);
                }
            },


        }
    }
</script>