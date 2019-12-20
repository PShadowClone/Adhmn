import instance, {axiosEndpoints, axiosMethods} from '@/axios'

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
        request(method, url, param, then, catchMethod = null, finallyMethod = null) {
            let axiosInstance = null;
            return instance[method](url, param, this.requestHeader).then(({data}) => {
                console.log('dda', data)
                if (data.status == 200)
                    then(data)

            });//.catch(catchMethod).finally(finallyMethod);
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