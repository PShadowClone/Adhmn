import constants from '@/util/constants'

export default {
    data: () => {
        return {
            constants: {},
        }
    },
    created() {
        this.constants = constants;
    }

}