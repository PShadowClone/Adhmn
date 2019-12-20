<template>
    <section class="bg-light page-section" id="ourPartner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">شركائنا</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item" v-for="(item , index) in content.children" :key="index">
                    <div class="portfolio-hover">
                    </div>
                    <img class="img-fluid" :src="item.image.path" alt="">
                    <div class="portfolio-caption">
                        <h4>{{item.content}}</h4>
                    </div>
                </div>
<!--                <div class="col-md-4 col-sm-6 portfolio-item">-->
<!--                    <div class="portfolio-hover">-->
<!--                    </div>-->
<!--                    <img class="img-fluid" src="landing-assets/img/portfolio/01-thumbnail.jpg" alt="">-->
<!--                    <div class="portfolio-caption">-->
<!--                        <h4>Threads</h4>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 col-sm-6 portfolio-item">-->
<!--                    <div class="portfolio-hover">-->
<!--                    </div>-->
<!--                    <img class="img-fluid" src="landing-assets/img/portfolio/01-thumbnail.jpg" alt="">-->
<!--                    <div class="portfolio-caption">-->
<!--                        <h4>Threads</h4>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 col-sm-6 portfolio-item">-->
<!--                    <div class="portfolio-hover">-->
<!--                    </div>-->
<!--                    <img class="img-fluid" src="landing-assets/img/portfolio/01-thumbnail.jpg" alt="">-->
<!--                    <div class="portfolio-caption">-->
<!--                        <h4>Threads</h4>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 col-sm-6 portfolio-item">-->
<!--                    <div class="portfolio-hover">-->
<!--                    </div>-->
<!--                    <img class="img-fluid" src="landing-assets/img/portfolio/01-thumbnail.jpg" alt="">-->
<!--                    <div class="portfolio-caption">-->
<!--                        <h4>Threads</h4>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 col-sm-6 portfolio-item">-->
<!--                    <div class="portfolio-hover">-->
<!--                    </div>-->
<!--                    <img class="img-fluid" src="landing-assets/img/portfolio/01-thumbnail.jpg" alt="">-->
<!--                    <div class="portfolio-caption">-->
<!--                        <h4>Threads</h4>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 col-sm-6 portfolio-item">-->
<!--                    <div class="portfolio-hover">-->
<!--                    </div>-->
<!--                    <img class="img-fluid" src="landing-assets/img/portfolio/01-thumbnail.jpg" alt="">-->
<!--                    <div class="portfolio-caption">-->
<!--                        <h4>Threads</h4>-->
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