/**
 * this component is used to validate form's
 * inputs
 *
 * @type {{methods: {validate(): void}}}
 * @author Amr
 */
const validateMixins = {
    methods: {
        validate(validateResult = null) {
            this.$validator.validateAll().then(result => {
                if (validateResult != null)
                    validateResult(result);
                return result;
            });
        },

    }
}

export default validateMixins;
