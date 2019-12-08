class StorageManager {
    constructor() {
    }

    /**
     * set user's token after getting login
     *
     * @param data
     * @author Amr
     */
    setStorage(data) {
        let currentTime = Math.floor((Date.now() != undefined ? Date.now() : new Date().getTime()) / 60000);
        data.expires_in = data.expires_in + currentTime;
        localStorage.setItem("user_data", JSON.stringify(data));
    }


    /**
     * get the local storage
     *
     * @return {string}
     * @author Amr
     */
    getStorage() {
        return localStorage.getItem("user_data");
    }


    /**
     * check user's token
     *
     * @return {boolean}
     * @author Amr
     */
    checkToken() {
        let userInfo = localStorage.getItem("user_data");
        if (userInfo != null && userInfo.length > 0) {
            let userObject = JSON.parse(userInfo);
            let currentTime = Math.floor((Date.now() != undefined ? Date.now() : new Date().getTime()) / 60000);
            console.log("time ", userObject.expires_in > currentTime, userObject.expires_in, currentTime)
            return userObject.expires_in > currentTime;
        }
    }

}

export default new StorageManager();