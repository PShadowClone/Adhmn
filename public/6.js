(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[6],{

/***/ "./resources/js/admin/util/StorageManager.js":
/*!***************************************************!*\
  !*** ./resources/js/admin/util/StorageManager.js ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return _default; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var _default =
/*#__PURE__*/
function () {
  function _default() {
    _classCallCheck(this, _default);
  }
  /**
   * set user's token after getting login
   *
   * @param data
   * @author Amr
   */


  _createClass(_default, [{
    key: "setStorage",
    value: function setStorage(data) {
      var currentTime = Math.floor((Date.now() != undefined ? Date.now() : new Date().getTime()) / 60000);
      data.expires_in = data.expires_in + currentTime;
      localStorage.setItem("user_data", JSON.stringify(data));
    }
    /**
     * get the local storage
     *
     * @return {string}
     * @author Amr
     */

  }, {
    key: "getStorage",
    value: function getStorage() {
      return localStorage.getItem("user_data");
    }
    /**
     * check user's token
     *
     * @return {boolean}
     * @author Amr
     */

  }, {
    key: "checkToken",
    value: function checkToken() {
      var userInfo = localStorage.getItem("user_data");

      if (userInfo != null && userInfo.length > 0) {
        var userObject = JSON.parse(userInfo);
        var currentTime = Math.floor((Date.now() != undefined ? Date.now() : new Date().getTime()) / 60000);
        console.log("time ", userObject.expires_in > currentTime, userObject.expires_in, currentTime);
        return userObject.expires_in > currentTime;
      }
    }
  }]);

  return _default;
}();



/***/ })

}]);