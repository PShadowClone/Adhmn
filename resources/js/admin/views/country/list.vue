<template>
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Countries
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <!--begin::Section-->
                <div class="kt-section">
                    <div class="kt-section__content">
                        <div class="table-responsive">
                            <vue-good-table
                                    styleClass="table table-bordered"
                                    :columns="columns"
                                    :rows="rows"
                                    :line-numbers="true"
                            >
                            </vue-good-table>


                            <b-pagination
                                    v-if="currentPage"
                                    v-model="currentPage"
                                    :total-rows="total"
                                    :per-page="perPage"
                                    align="right"

                            ></b-pagination>


                        </div>
                    </div>
                </div>
                <!--end::Section-->
            </div>

            <!--end::Form-->
        </div>
    </div>

</template>
<script>


    export default {
        name: 'list.vue',
        data: () => {
            return {
                rows: [],
                columns: [
                    {
                        label: "Name",
                        field: "name"
                    },
                    {
                        label: "Code",
                        field: "code"
                    },
                    {
                        label: "Operations",
                        field: "id",
                        html: true,
                    }
                ],
                perPage: '',
                currentPage: '',
                total: ''
            };
        },
        methods: {
            fetch(page) {
                this.request(this.methods.GET, this.endpoints.country.all + (page != undefined ? '?page=' + page : ''), {}, (result) => {
                    this.rows = result.data.data;
                    this.perPage = result.data.per_page
                    this.currentPage = result.data.current_page
                    this.total = result.data.total
                    // console.log(result.data.data)
                })
            },
            paginate(value) {

            }
        },

        created() {
            this.fetch()
        },
        watch: {
            "currentPage": function (value) {
                if (value != null) {
                    this.fetch(value);
                }
            },


        }
    }
</script>