<template>
    <section class="bg-light page-section" id="portfolio">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">اعمالنا</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item" v-for="(item , index) in  content.children">
                    <a class="portfolio-link" data-toggle="modal" :href="`#portfolioModal${index}`">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" :src="item.image.path" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4 v-html="item.content"></h4>
                        <!--<p class="text-muted">Illustration</p>-->
                    </div>
                </div>
                <!--                <div class="col-md-4 col-sm-6 portfolio-item">-->
                <!--                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">-->
                <!--                        <div class="portfolio-hover">-->
                <!--                            <div class="portfolio-hover-content">-->
                <!--                                <i class="fas fa-plus fa-3x"></i>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                        <img class="img-fluid" src="img/ourWork/Dx-aX-rWoAA0OJ9.jpeg" alt="">-->
                <!--                    </a>-->
                <!--                    <div class="portfolio-caption">-->
                <!--                        <h4>ترميم الأرضية</h4>-->
                <!--                        &lt;!&ndash;<p class="text-muted">Graphic Design</p>&ndash;&gt;-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="col-md-4 col-sm-6 portfolio-item">-->
                <!--                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">-->
                <!--                        <div class="portfolio-hover">-->
                <!--                            <div class="portfolio-hover-content">-->
                <!--                                <i class="fas fa-plus fa-3x"></i>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                        <img class="img-fluid" src="img/ourWork/Dx-aX-xWsAA8p1Y.jpeg" alt="">-->
                <!--                    </a>-->
                <!--                    <div class="portfolio-caption">-->
                <!--                        <h4>ترميم الأرضية</h4>-->
                <!--                        &lt;!&ndash;<p class="text-muted">Identity</p>&ndash;&gt;-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="col-md-4 col-sm-6 portfolio-item">-->
                <!--                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">-->
                <!--                        <div class="portfolio-hover">-->
                <!--                            <div class="portfolio-hover-content">-->
                <!--                                <i class="fas fa-plus fa-3x"></i>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                        <img class="img-fluid" src="img/ourWork/Dx-aX-zXgAA3Fs9.jpeg" alt="">-->
                <!--                    </a>-->
                <!--                    <div class="portfolio-caption">-->
                <!--                        <h4>تنظيف الأرضية</h4>-->
                <!--                        &lt;!&ndash;<p class="text-muted">Branding</p>&ndash;&gt;-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="col-md-4 col-sm-6 portfolio-item">-->
                <!--                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">-->
                <!--                        <div class="portfolio-hover">-->
                <!--                            <div class="portfolio-hover-content">-->
                <!--                                <i class="fas fa-plus fa-3x"></i>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                        <img class="img-fluid" src="img/ourWork/Dx-b39LWwAArjWX.jpeg" alt="">-->
                <!--                    </a>-->
                <!--                    <div class="portfolio-caption">-->
                <!--                        <h4>صيانة الكهرباء</h4>-->
                <!--                        &lt;!&ndash;<p class="text-muted">Website Design</p>&ndash;&gt;-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="col-md-4 col-sm-6 portfolio-item">-->
                <!--                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">-->
                <!--                        <div class="portfolio-hover">-->
                <!--                            <div class="portfolio-hover-content">-->
                <!--                                <i class="fas fa-plus fa-3x"></i>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                        <img class="img-fluid" src="img/ourWork/Dx-b39LXcAADZGj.jpeg" alt="">-->
                <!--                    </a>-->
                <!--                    <div class="portfolio-caption">-->
                <!--                        <h4>صيانة الكهرباء</h4>-->
                <!--                        &lt;!&ndash;<p class="text-muted">Photography</p>&ndash;&gt;-->
                <!--                    </div>-->
                <!--                </div>-->
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
        }
    }
</script>