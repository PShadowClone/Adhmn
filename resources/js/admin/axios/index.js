import axios from 'axios'
import endpoints from './endpoints'
import methods from './methods'

var axiosInstance = axios.create({
    baseURL: 'http://localhost:8000/api/',
    /* other custom settings */
});

/**
 * unified the center of request
 *
 * @author Amr
 */
axiosInstance.interceptors.request.use(function (config) {
        let userInfo = localStorage.getItem('user_data');                                                             // get user's Info form the local storage if there is any @author Amr
        if (userInfo == null || userInfo == undefined) {                                                                                             // if there is no user's info return the config without any updates @author Amr
            return config;
        }
        userInfo = JSON.parse(userInfo);                                                                                  // parse the json object to get the access_token and token_type @author Amr
        config.headers.common.Authorization = `${userInfo.token_type} ${userInfo.access_token}`;
        config.headers.common['Authorization'] = `${userInfo.token_type} ${userInfo.access_token}`;
        config.headers.Authorization = `${userInfo.token_type} ${userInfo.access_token}`;                                   // appeand the token with request's header @author Amr
        return config;
    }
    ,
    error => Promise.reject(error)
);


axiosInstance.interceptors.response.use(
    response => {
        const {status, message, error_code} = response.data;
        console.log('axios', status, message, error_code)
        if (status == 500) {
            switch (error_code) {
                case 102 :
                    break;
                case 106 :
                    window.location.href = '/admin/login';
                    break;
            }
        }
        return response;
    },
    error => {
        // const {status} = error.response;
        // console.error('error.response', error.response);
        // // console.error("response", status)
        // // Show the user a 500 error
        // if (status >= 500) {
        //     Brilliant.$emit('error', error.response.data.message)
        // }
        //
        // // Handle Session Timeouts
        // if (status === 401) {
        //     window.location.href = Brilliant.config.base
        // }
        //
        // // Handle Forbidden
        // if (status === 403) {
        //     router.push({name: '403'})
        // }
        //
        // // Handle Token Timeouts
        // if (status === 419) {
        //     Brilliant.$emit('token-expired')
        // }
        //
        return Promise.reject(error)
    }
)

/**
 * publish endpoints
 *
 * @type {{auth}}
 * @author Amr
 */
export const axiosEndpoints = endpoints;
/**
 * publish methods
 * @type {{DELETE, POST, GET, PATCH, PUT}}
 * @author Amr
 */
export const axiosMethods = methods;

window.axios = axiosInstance

export default axiosInstance;
