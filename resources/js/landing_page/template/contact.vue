<template>
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase"> تواصل معنا</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="sentMessage" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" type="text" placeholder="الاسم"
                                           required="required"
                                           data-validation-required-message="الرجاء ادخال الاسم.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email"
                                           placeholder="البريد الالكتروني"
                                           required="required"
                                           data-validation-required-message="الرجاء ادخال كلمة المرور.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" type="tel" placeholder="رقم الهاتف"
                                           required="required"
                                           data-validation-required-message="الرجاء ادخال رقم الهاتف.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="الرسالة " required="required"
                                          data-validation-required-message="الرجاء ادخال الرسالة"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase"
                                        type="submit">
                                    ارسال
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
    export default {}
</script>