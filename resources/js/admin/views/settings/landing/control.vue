<template>
    <page :title="title" :show-footer="showFooter">
        <template v-slot:body>
            <div class="kt-portlet__body">
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item ">
                        <a class="nav-link active " data-toggle="tab" href="#kt_tabs_3_1">
                            <i class="flaticon-squares-4"></i>Slider</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_tabs_3_3"><i
                                class="la la-map-marker"></i>Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" data-toggle="tab" href="#kt_tabs_3_4"><i
                                class="la la-question-circle"></i>Disabled</a>
                    </li>
                </ul>


                <div class="tab-content">
                    <div class="tab-pane active" id="kt_tabs_3_1" role="tabpanel">
                        <slider/>
                    </div>
                    <div class="tab-pane" id="kt_tabs_3_2" role="tabpanel">
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                        Aldus PageMaker including versions of Lorem Ipsum.
                    </div>
                    <div class="tab-pane " id="kt_tabs_3_3" role="tabpanel">
                        <form action="">
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="url" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Twitter</label>
                                <input type="url" class="form-control" aria-describedby="emailHelp" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Instagram</label>
                                <input type="url" class="form-control" aria-describedby="emailHelp" placeholder="">
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="kt_tabs_3_4" role="tabpanel">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is
                        simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    </div>
                </div>
            </div>
        </template>
    </page>
</template>
<script>
    import Slider from './partials/slider'

    export default {
        components: {Slider},
        data: () => {
            return {
                title: 'Landing Page Controller',
                showFooter: false
            }
        }
    }
</script>
<style lang="scss">
    .tab-content {
        margin-top: 10px;
    }
</style>