<template>
    <b-row>
        <b-col md="12 mb-30">
            <b-card class="" title="Form Inputs Rounded">
                <b-form @submit.prevent="submit">
                    <!-- START FROM BODY @AUTHOR AMR -->
                    <slot/>
                    <!-- END FROM BODY @AUTHOR AMR -->
                    <b-col md="12">
                        <b-button class="mt-3" type="submit" variant="primary" :disabled="isDisabled">{{saveText}}
                        </b-button>
                    </b-col>
                </b-form>
            </b-card>
        </b-col>
    </b-row>
</template>
<script>
    export default {
        /**
         * get parent's $validator object
         *
         * @desc: we want to get the $validator object to
         * perform the validation operation on parent's elements
         *
         * @author Amr
         */
        inject: ['$validator'],
        /**
         * component's props
         *
         * @author Amr
         */
        props: {
            formAttributes: {
                required: true,
                default: {}
            },
            link: {
                required: true
            },
        },
        /**
         * component's data
         * @author Amr
         */
        data() {
            return {
                validation: {form: {}},
                saveText: 'Save',
                isDisabled: false,
                form: this.formAttributes
            }
        },
        /**
         * component's methods
         *
         * @author Amr
         */
        methods: {
            /**
             * validate form before submit
             * @author Amr
             */
            submit() {
                /**
                 * optional event: if you want to
                 * handel data before validation
                 * you can use this event to do that
                 *
                 * @author Amr
                 */
                this.$emit('before-validation', this.form);
                /**
                 * call validation operation
                 *
                 * @author Amr
                 */
                this.validate()
            },
            /**
             * this function is used to send form's data
             * to backend, after getting the  response
             * it fires a bunch of events according to backend's result
             *
             * before-submit : this function is fired before submit
             * success-submit : this function is fired when form submit goes right
             * after-submit : this function is fired after form submit
             * @param result
             * @author Amr
             */
            validationPassed(result) {
                this.$emit('before-submit', this.form);
                this.saveText = 'Saving ...'
                this.isDisabled = true;
                let _this = this;
                this.request(this.link, this.form, function ({data}) {
                    _this.$emit('success-submit', data);
                    _this.form = {}
                }, function ({data}) {
                    if (Constants.errorCode.VALIDATION_EXCEPTION == data.error_code) {
                        _this.validation.form = data.data
                        _this.$root.$emit('validation-errors', {validation: _this.validation});
                    }

                }, function () {
                    _this.$emit('after-submit', _this.form);
                    try {
                        this.saveText = 'Save'
                        this.isDisabled = false;
                        _this.form = {}
                    } catch (e) {

                    }
                });
            }
        }
    }
</script>