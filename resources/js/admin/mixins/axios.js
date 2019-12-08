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
            methods: {}
        }
    },
    methods: {
        request(method, url, param, then, catchMethod, finallyMethod) {
            let axiosInstance = null;
            switch (method) {
                case 'get':
                    axiosInstance = instance.get(url);
                    break;
                case 'post':
                    instance.post(url, param).then(({data}) => {
                        then(data)
                    });//.catch(catchMethod).finally(finallyMethod);
                    break;
            }
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