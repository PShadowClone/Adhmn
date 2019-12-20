import instance, {axiosEndpoints, axiosMethods} from '@/axios'
import {mapActions, mapState} from "vuex";

/**
 * this mixin is used to handel componnets' requests
 *
 * endpoints: are the backend endpoints
 * @author Amr
 */
export default {
    data: () => {
        return {
            endpoints: {},
            methods: {},
            requestHeader: {}
        }
    },
    methods: {
        ...mapActions('Loader', [
            'showLoader',
            'hideLoader',
        ]),
        request(method, url, param, then, catchMethod = null, finallyMethod = null) {
            this.showLoader();
            let _this = this;
            let axiosInstance = null;
            return instance[method](url, param, this.requestHeader).then(({data}) => {
                _this.hideLoader();
                if (data.status == 200)
                    then(data)

            }).catch(catchMethod).finally(catchMethod || this.onFinally);
        },
        onFinally(data) {
            //called if finally callback not exists
            this.hideLoader();
        }
    },
    /**
     * initialize endpoints
     * @author Amr
     */
    created() {
        this.endpoints = axiosEndpoints;
        this.methods = axiosMethods;
    }
}