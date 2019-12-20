<template>
    <section class="page-section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">خدماتنا</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <!--                    {{content.children}}-->
                    <div class="carousel-item " v-for="(item , index) in content.children" :key="`key ${index}`"
                         :class="{active : index  == 0}">
                        <div class="row">
                            <div class="col-lg-4" v-for="(nestedItem , index) in item" :key="`child ${index}`">
                                <img class="d-block w-100 mb-3" :src="nestedItem.image.path" alt="First slide">
                                <p class="text-muted">
                                    {{nestedItem.content}}
                                </p>
                            </div>


<!--                            <div class="col-lg-4">-->
<!--                                <img class="d-block w-100 mb-3" alt="First slide">-->
<!--                                <p class="text-muted">-->
<!--                                    {{item}}-->
<!--                                </p>-->
<!--                            </div>-->


                        </div>
                        <!--                        <div class="row">-->
                        <!--                            <div class="col-lg-4">-->
                        <!--                                <img class="d-block w-100 mb-3" src="icons/4.png" alt="First slide">-->
                        <!--                                <p class="text-muted"> اعطال الكهرباء قد تكون خطيرة لكن يمكنك التواصل معنا وسنقوم-->
                        <!--                                    بإصلاح هذا العطل قبل-->
                        <!--                                    ان يسبب مشكلة كبيرة</p>-->
                        <!--                            </div>-->
                        <!--                            <div class="col-lg-4">-->
                        <!--                                <img class="d-block w-100 mb-3" src="icons/5.png" alt="First slide">-->
                        <!--                                <p class="text-muted">-->
                        <!--                                    تحتاج الى مساعدة في تنظيف منزلك او الاثاث ليست مشكلة كبيرة قم بإختيار افضل مزود-->
                        <!--                                    خدمة من احد شركائنا وسيكون بالقرب منك-->
                        <!--                                </p>-->
                        <!--                            </div>-->
                        <!--                            <div class="col-lg-4">-->
                        <!--                                <img class="d-block w-100 mb-3" src="icons/6.png" alt="First slide">-->
                        <!--                                <p class="text-muted">-->
                        <!--                                    الحدائق الجميلة تبعث السرور في نفس اصحابها نهتم بأدق التفاصيل في تنسيقها لملائمة-->
                        <!--                                    نمط المعيشة اليومية-->
                        <!--                                </p>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                    </div>

                    <!--                    <div class="carousel-item">-->
                    <!--                        <div class="row">-->
                    <!--                            <div class="col-lg-4">-->
                    <!--                                <img class="d-block w-100 mb-3" src="icons/7.png" alt="First slide">-->
                    <!--                                <p class="text-muted">-->
                    <!--                                    اعطال الكهرباء قد تكون خطيرة لكن يمكنك التواصل معنا وسنقوم بإصلاح هذا العطل قبل-->
                    <!--                                    ان يسبب مشكلة كبيرة-->
                    <!--                                </p>-->
                    <!--                            </div>-->
                    <!--                            <div class="col-lg-4">-->
                    <!--                                <img class="d-block w-100 mb-3" src="icons/8.png" alt="First slide">-->
                    <!--                                <p class="text-muted">-->
                    <!--                                    مشاكل التمديدات الصحية قد تسبب تسرب المياه و اهدار كميات عالية من المياه تواصل-->
                    <!--                                    معنا وسنقوم بإصلاحها-->
                    <!--                                </p>-->
                    <!--                            </div>-->
                    <!--                            <div class="col-lg-4">-->
                    <!--                                <img class="d-block w-100 mb-3" src="icons/9.png" alt="First slide">-->
                    <!--                                <p class="text-muted">-->
                    <!--                                    إذا أصيب جهاز التكييف لديك بعطل خلال فصل الصيف الحار فإن ذلك سيسبب لك الكثير من-->
                    <!--                                    الازعاج ولكن يمكنك-->
                    <!--                                    التواصل معنا وسنقوم بمعالجة مشاكل التكييف لديك بسرعة وكفاءة عالية-->
                    <!--                                </p>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                        <div class="row">-->
                    <!--                            <div class="col-lg-4">-->
                    <!--                                <img class="d-block w-100 mb-3" src="icons/10.png" alt="First slide">-->
                    <!--                                <p class="text-muted"> اعطال الكهرباء قد تكون خطيرة لكن يمكنك التواصل معنا وسنقوم-->
                    <!--                                    بإصلاح هذا العطل قبل-->
                    <!--                                    ان يسبب مشكلة كبيرة</p>-->
                    <!--                            </div>-->
                    <!--                            <div class="col-lg-4">-->
                    <!--                                <img class="d-block w-100 mb-3" src="icons/11.png" alt="First slide">-->
                    <!--                                <p class="text-muted">-->
                    <!--                                    لن تحتاج للذهاب لمراكز الصيانة بعد اليوم كل ماعليك ان تتواصل معنا ليصلك احد امهر-->
                    <!--                                    خبرائنا لاصلاحها-->
                    <!--                                </p>-->
                    <!--                            </div>-->
                    <!--                            <div class="col-lg-4">-->
                    <!--                                <img class="d-block w-100 mb-3" src="icons/12.png" alt="First slide">-->
                    <!--                                <p class="text-muted"> اعطال الكهرباء قد تكون خطيرة لكن يمكنك التواصل معنا وسنقوم-->
                    <!--                                    بإصلاح هذا العطل قبل-->
                    <!--                                    ان يسبب مشكلة كبيرة</p>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    <div class="carousel-item">-->
                    <!--                        <div class="row">-->
                    <!--                            <div class="col-lg-4">-->
                    <!--                                <img class="d-block w-100 mb-3" src="icons/13.jpg" alt="First slide">-->
                    <!--                                <p class="text-muted">-->
                    <!--                                    اعطال الكهرباء قد تكون خطيرة لكن يمكنك التواصل معنا وسنقوم بإصلاح هذا العطل قبل-->
                    <!--                                    ان يسبب مشكلة كبيرة-->
                    <!--                                </p>-->
                    <!--                            </div>-->
                    <!--                            <div class="col-lg-4">-->
                    <!--                                <img class="d-block w-100 mb-3" src="icons/14.png" alt="First slide">-->
                    <!--                                <p class="text-muted">-->
                    <!--                                    مشاكل التمديدات الصحية قد تسبب تسرب المياه و اهدار كميات عالية من المياه تواصل-->
                    <!--                                    معنا وسنقوم بإصلاحها-->
                    <!--                                </p>-->
                    <!--                            </div>-->
                    <!--                            <div class="col-lg-4">-->
                    <!--                                <img class="d-block w-100 mb-3 img_15" src="icons/15.png" alt="First slide">-->
                    <!--                                <p class="text-muted">-->
                    <!--                                    لن تحتاج للذهاب لمراكز الصيانة بعد اليوم كل ماعليك ان تتواصل معنا ليصلك احد امهر-->
                    <!--                                    خبرائنا لاصلاحها-->
                    <!--                                </p>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                </div>
                <!--<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">-->
                <!--<span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
                <!--<span class="sr-only">Previous</span>-->
                <!--</a>-->
                <!--<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">-->
                <!--<span class="carousel-control-next-icon" aria-hidden="true"></span>-->
                <!--<span class="sr-only">Next</span>-->
                <!--</a>-->
            </div>
        </div>
    </section>
</template>
<script>
    export default {
        props: {
            content: {
                required: true
            }
        },
        // computed: {
        //     services() {
        //         return this.content;
        //     }
        // },
        data() {
            return {
                // services: [],
                // localContent: this.content
            }
        },
        updated() {
            // this.localContent = this.content;
            // console.log('this.content', this.content)
            // var i, j, temparray, chunk = 4;
            // let temp = [];
            // if (this.localContent != null) {
            //     for (i = 0, j = this.localContent.children.length; i < j; i += chunk) {
            //         temp.push(this.localContent.children.slice(i, i + chunk));
            //     }
            // }
            // this.services = temp;
            //
            // console.log("this.services.children", this.services)
        }
    }
</script>