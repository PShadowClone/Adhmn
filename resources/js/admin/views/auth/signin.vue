<template>
    <div class="kt-login__signin">
        <div class="kt-login__head">
            <h3 class="kt-login__title">Sign In To Admin</h3>
        </div>
        <!-- START ALERT COMPONENT -->
        <alert :show="showAlert">{{alertMessage}}</alert>
        <!-- END ALERT COMPONENT -->

        <form class="kt-form" @submit.prevent="submit">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Email" name="email"
                       v-validate="'required|email'"
                       autocomplete="off"
                       v-model="email">
            </div>
            <span class="error-validate" v-if="errors.has('email')">{{ errors.first('email') }}</span>

            <div class="input-group">
                <input class="form-control" type="password" placeholder="Password"
                       v-validate="'required'"
                       v-model="password"
                       name="password">
            </div>
            <span class="error-validate" v-if="errors.has('password')">{{ errors.first('password') }}</span>

            <div class="row kt-login__extra ">
                <div class="col hidden">
                    <label class="kt-checkbox">
                        <input type="checkbox" name="remember"> Remember me
                        <span></span>
                    </label>
                </div>
                <div class="col kt-align-right">
                    <a href="javascript:;" id="kt_login_forgot" class="kt-login__link">Forget
                        Password ?</a>
                </div>
            </div>
            <div class="kt-login__actions">
                <button id="kt_login_signin_submit"
                        class="btn btn-brand btn-elevate kt-login__btn-primary">Sign In
                </button>
            </div>
        </form>
    </div>
</template>
<script>
    export default {
        data: () => {
            return {
                email: '',
                password: '',
                showAlert: false,
                alertMessage: ''
            };
        },
        computed: {
            form() {
                return {
                    email: this.email,
                    password: this.password
                }
            }
        },
        methods: {
            submit() {
                this.validate((result) => {
                    if (result) {
                        this.request(this.methods.POST, this.endpoints.auth.login, this.form, (result) => {
                            if (result.error_code == this.constants.errorCodes.validation) {
                                this.showAlert = true;
                                this.alertMessage = result.message
                                return;
                            }
                            this.showAlert = false;
                            this.alertMessage = ''
                            window.storageManager.setStorage(result)
                            this.$router.push({name: 'home'})
                        }, () => {
                        }, () => {
                        })
                    }
                })
            }
        }
    }
</script>
<style lang="scss">
    .hidden {
        display: none;
    }
</style>