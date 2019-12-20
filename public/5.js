(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[5],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/admin/views/settings/landing/create.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/admin/views/settings/landing/create.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_page__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../components/page */ "./resources/js/admin/components/page.vue");
/* harmony import */ var _plugins_quill__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @/plugins/quill */ "./resources/js/admin/plugins/quill.js");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//


/* harmony default export */ __webpack_exports__["default"] = ({
  components: {
    page: _components_page__WEBPACK_IMPORTED_MODULE_0__["default"]
  },
  data: function data() {
    return {
      form: {
        key: '',
        parent_id: 1,
        content: {
          ops: []
        },
        image: '',
        title: ''
      },
      contents: '',
      options: [],
      content: {
        ops: []
      },
      config: {
        placeholder: '',
        theme: 'snow',
        modules: {
          toolbar: _plugins_quill__WEBPACK_IMPORTED_MODULE_1__["default"]
        },
        'syntax': true // Enable with default configuration

      },
      imageValidation: false,
      requestHeader: {
        headers: {
          'Content-Type': 'multipart/form-data'
        }
      }
    };
  },
  methods: {
    submit: function submit() {
      // console.log(this.)
      var _this = this;

      if (this.form.image == '') {
        this.imageValidation = true;
        return;
      }

      this.imageValidation = false;
      var formData = new FormData();
      formData.append('content', this.form.content);
      formData.append('title', this.form.title);
      formData.append('parent_id', this.form.parent_id);
      formData.append('key', this.form.key);
      formData.append('image', this.form.image);
      this.request(this.methods.POST, this.endpoints.landing.base, formData, function (result) {
        if (result.status == 200) {
          _this.alert('Alert!', 'Data saved successfully');

          _this.form.key = '';
          _this.form.content = '';
          _this.form.image = '';
          _this.form.parent_id = _this.options.length > 0 ? _this.options[0].id : 0;

          _this.$router.push({
            name: 'landing.list'
          }, {
            alert: {
              message: 'Data saved successfully',
              type: 'success'
            }
          });
        }
      });
    },
    fetchParents: function fetchParents() {
      var _this2 = this;

      this.request(this.methods.GET, this.endpoints.landing.parents, {}, function (result) {
        console.log('', result);

        if (result.status == 200) {
          _this2.options = result.data;
          _this2.parent_id = result.data.length > 0 ? result.data[0].id : 0;
        }
      });
    },
    uploadImage: function uploadImage() {
      this.form.image = this.$refs.image.files[0];
      this.imageValidation = false;
    }
  },
  created: function created() {
    this.fetchParents();
    this.form.content = '';
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/admin/views/settings/landing/create.vue?vue&type=template&id=d5c8091e&":
/*!***************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/admin/views/settings/landing/create.vue?vue&type=template&id=d5c8091e& ***!
  \***************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("page", {
    attrs: {
      title: "landing Page",
      "show-footer": false,
      "main-url": "landing.list",
      "action-url": "'landing.create'"
    },
    scopedSlots: _vm._u([
      {
        key: "body",
        fn: function() {
          return [
            _c(
              "form",
              {
                on: {
                  submit: function($event) {
                    $event.preventDefault()
                    return _vm.submit($event)
                  }
                }
              },
              [
                _c("div", { staticClass: "kt-section kt-section--first" }, [
                  _c("div", { staticClass: "form-group" }, [
                    _c("label", [_vm._v("Image")]),
                    _vm._v(" "),
                    _c("div"),
                    _vm._v(" "),
                    _c("div", { staticClass: "custom-file" }, [
                      _c("input", {
                        directives: [
                          {
                            name: "validate",
                            rawName: "v-validate",
                            value: "image|dimensions:500,500",
                            expression: "'image|dimensions:500,500'"
                          }
                        ],
                        ref: "image",
                        staticClass: "custom-file-input",
                        attrs: {
                          type: "file",
                          id: "customFile",
                          accept: ".png, .jpg, .jpeg"
                        },
                        on: {
                          change: function($event) {
                            return _vm.uploadImage()
                          }
                        }
                      }),
                      _vm._v(" "),
                      _c(
                        "label",
                        {
                          staticClass: "custom-file-label",
                          attrs: { for: "customFile" }
                        },
                        [
                          _vm._v(
                            _vm._s(
                              _vm.form.image != ""
                                ? _vm.form.image.name
                                : "Choose file"
                            )
                          )
                        ]
                      )
                    ]),
                    _vm._v(" "),
                    _vm.imageValidation
                      ? _c("span", { staticClass: "error-validate" }, [
                          _vm._v("Image is required")
                        ])
                      : _vm._e()
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group" }, [
                    _c("label", [_vm._v("Title:")]),
                    _vm._v(" "),
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model.trim",
                          value: _vm.form.title,
                          expression: "form.title",
                          modifiers: { trim: true }
                        }
                      ],
                      staticClass: "form-control",
                      attrs: { type: "text" },
                      domProps: { value: _vm.form.title },
                      on: {
                        input: function($event) {
                          if ($event.target.composing) {
                            return
                          }
                          _vm.$set(
                            _vm.form,
                            "title",
                            $event.target.value.trim()
                          )
                        },
                        blur: function($event) {
                          return _vm.$forceUpdate()
                        }
                      }
                    })
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group" }, [
                    _c("label", [_vm._v("Parent:")]),
                    _vm._v(" "),
                    _c(
                      "select",
                      {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.form.parent_id,
                            expression: "form.parent_id"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: { name: "", id: "" },
                        on: {
                          change: function($event) {
                            var $$selectedVal = Array.prototype.filter
                              .call($event.target.options, function(o) {
                                return o.selected
                              })
                              .map(function(o) {
                                var val = "_value" in o ? o._value : o.value
                                return val
                              })
                            _vm.$set(
                              _vm.form,
                              "parent_id",
                              $event.target.multiple
                                ? $$selectedVal
                                : $$selectedVal[0]
                            )
                          }
                        }
                      },
                      _vm._l(_vm.options, function(item, index) {
                        return _c("option", { domProps: { value: item.id } }, [
                          _vm._v(
                            "\n                            " +
                              _vm._s(item.key) +
                              "\n                        "
                          )
                        ])
                      }),
                      0
                    )
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group" }, [
                    _c("label", [_vm._v("Content:")]),
                    _vm._v(" "),
                    _c("textarea", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model.trim",
                          value: _vm.form.content,
                          expression: "form.content",
                          modifiers: { trim: true }
                        }
                      ],
                      staticClass: "form-control",
                      domProps: { value: _vm.form.content },
                      on: {
                        input: function($event) {
                          if ($event.target.composing) {
                            return
                          }
                          _vm.$set(
                            _vm.form,
                            "content",
                            $event.target.value.trim()
                          )
                        },
                        blur: function($event) {
                          return _vm.$forceUpdate()
                        }
                      }
                    })
                  ])
                ]),
                _vm._v(" "),
                _c(
                  "div",
                  {
                    staticClass: "kt-portlet__foot",
                    staticStyle: { "padding-left": "0" }
                  },
                  [
                    _c(
                      "div",
                      { staticClass: "kt-form__actions" },
                      [
                        _c(
                          "button",
                          {
                            staticClass: "btn btn-primary",
                            attrs: { type: "submit" }
                          },
                          [_vm._v("Submit")]
                        ),
                        _vm._v(" "),
                        _c(
                          "router-link",
                          {
                            staticClass: "btn btn-secondary",
                            attrs: {
                              type: "reset",
                              to: { name: "landing.list" }
                            }
                          },
                          [_vm._v("Cancel\n                    ")]
                        )
                      ],
                      1
                    )
                  ]
                )
              ]
            )
          ]
        },
        proxy: true
      }
    ])
  })
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/js/admin/plugins/quill.js":
/*!*********************************************!*\
  !*** ./resources/js/admin/plugins/quill.js ***!
  \*********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/**
 * default quill toolbar options
 * @author Amr
 */
/* harmony default export */ __webpack_exports__["default"] = ([['bold', 'italic', 'underline', 'strike'], // toggled buttons
['blockquote', 'code-block'], [{
  'header': 1
}, {
  'header': 2
}], // custom button values
[{
  'list': 'ordered'
}, {
  'list': 'bullet'
}], [{
  'script': 'sub'
}, {
  'script': 'super'
}], // superscript/subscript
[{
  'indent': '-1'
}, {
  'indent': '+1'
}], // outdent/indent
[{
  'direction': 'ltr'
}], // text direction
[{
  'size': ['small', false, 'large', 'huge']
}], // custom dropdown
[{
  'header': [1, 2, 3, 4, 5, 6, false]
}], [{
  'color': []
}, {
  'background': []
}], // dropdown with defaults from theme
[{
  'font': []
}], [{
  'align': []
}], ['clean'] // remove formatting button
]);

/***/ }),

/***/ "./resources/js/admin/views/settings/landing/create.vue":
/*!**************************************************************!*\
  !*** ./resources/js/admin/views/settings/landing/create.vue ***!
  \**************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _create_vue_vue_type_template_id_d5c8091e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./create.vue?vue&type=template&id=d5c8091e& */ "./resources/js/admin/views/settings/landing/create.vue?vue&type=template&id=d5c8091e&");
/* harmony import */ var _create_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./create.vue?vue&type=script&lang=js& */ "./resources/js/admin/views/settings/landing/create.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _create_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _create_vue_vue_type_template_id_d5c8091e___WEBPACK_IMPORTED_MODULE_0__["render"],
  _create_vue_vue_type_template_id_d5c8091e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/admin/views/settings/landing/create.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/admin/views/settings/landing/create.vue?vue&type=script&lang=js&":
/*!***************************************************************************************!*\
  !*** ./resources/js/admin/views/settings/landing/create.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./create.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/admin/views/settings/landing/create.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/admin/views/settings/landing/create.vue?vue&type=template&id=d5c8091e&":
/*!*********************************************************************************************!*\
  !*** ./resources/js/admin/views/settings/landing/create.vue?vue&type=template&id=d5c8091e& ***!
  \*********************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_template_id_d5c8091e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./create.vue?vue&type=template&id=d5c8091e& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/admin/views/settings/landing/create.vue?vue&type=template&id=d5c8091e&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_template_id_d5c8091e___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_create_vue_vue_type_template_id_d5c8091e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);