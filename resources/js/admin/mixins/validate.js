/**
 * this component is used to validate form's
 * inputs
 *
 * @type {{methods: {validate(): void}}}
 * @author Amr
 */
const validateMixins = {
    data() {
        return {
            mixinsValidator: null,
            localValidationErrors: null
        }
    },
    provide() {
        return {
            $validator: this.$validator
        }
    },
    methods: {
        /**
         * this function is used to validate any form
         * in the system
         * if validation passed, validationPassed will be fired
         * otherwise
         * validationFailed will take the control
         *
         * @param validateResult
         * @author Amr
         */
        validate(validateResult = null) {
            let _this = this;
            this.$validator.validateAll().then(result => {
                if (validateResult != null)
                    validateResult(result);
                if (result)
                    this.validationPassed(result);
                else {
                    this.validationFailed(result);
                    this.getValidationErrors(this.errors);
                }

                // console.log('validation validationErrorss', _this.localValidationErrors, this.errors)
                return result;
            });
        },
        /**
         * this function is fired when validation passed
         *
         * @param result
         * @author Amr
         */
        validationPassed(result) {
            /* @Todo, you can override the method then customize it as you want */
        },
        /**
         * this function is fired when validation failed
         *
         * @param result
         * @author Amr
         */
        validationFailed(result) {
            /* @Todo, you can override the method then customize it as you want */
        },
        /**
         * publish the errors
         *
         * @param errors
         * @author Amr
         */
        getValidationErrors(errors) {
            this.$root.$emit('validation-errors', {validationErrors: errors})

        }

    }
}

export default validateMixins;
