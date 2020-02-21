(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[3],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/welcome.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/welcome.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
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
  data: function data() {
    return {
      form: {
        email: '',
        password: ''
      },
      header: true,
      footer: true
    };
  },
  props: {
    attributes: Object
  },
  methods: {
    submit: function submit() {
      this.$inertia.post('/userlogin', this.form);
    }
  },
  computed: {
    showAlert: function showAlert() {
      return this.name.length > 4 ? true : false;
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/welcome.vue?vue&type=template&id=f8506a2e&":
/*!*****************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/welcome.vue?vue&type=template&id=f8506a2e& ***!
  \*****************************************************************************************************************************************************************************************************/
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
  return _c("div", [
    _vm._m(0),
    _vm._v(" "),
    _c(
      "div",
      {
        staticClass: "modal fade bd-example-modal-lg",
        attrs: {
          id: "login",
          tabindex: "-1",
          role: "dialog",
          "aria-hidden": "true"
        }
      },
      [
        _c(
          "div",
          {
            staticClass: "modal-dialog modal-dialog-centered modal-lg",
            attrs: { role: "document" }
          },
          [
            _c("div", { staticClass: "modal-content" }, [
              _vm._m(1),
              _vm._v(" "),
              _c("div", { staticClass: "modal-body p-4 p-lg-5" }, [
                _c(
                  "form",
                  {
                    staticClass: "login-form text-left",
                    attrs: { method: "POST" }
                  },
                  [
                    _vm._v("\n              @csrf\n              "),
                    _c("div", { staticClass: "form-group mb-4" }, [
                      _c("label", { attrs: { for: "email" } }, [
                        _vm._v(_vm._s(_vm.__("E-Mail Address")))
                      ]),
                      _vm._v(" "),
                      _c("input", {
                        staticClass:
                          "form-control @error('email') is-invalid @enderror",
                        attrs: {
                          id: "email",
                          type: "email",
                          name: "email",
                          required: "",
                          autocomplete: "email",
                          autofocus: ""
                        }
                      })
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group mb-4" }, [
                      _c("label", { attrs: { for: "password" } }, [
                        _vm._v(_vm._s(_vm.__("Password")))
                      ]),
                      _vm._v(" "),
                      _c("input", {
                        staticClass:
                          "form-control @error('password') is-invalid @enderror",
                        attrs: {
                          id: "password",
                          type: "password",
                          name: "password",
                          required: "",
                          autocomplete: "current-password"
                        }
                      })
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-check mb-4" }, [
                      _vm._v(
                        "'remember') ? 'checked' : '' }}>\n\n                                    "
                      ),
                      _c(
                        "label",
                        {
                          staticClass: "form-check-label",
                          attrs: { for: "remember" }
                        },
                        [
                          _vm._v(
                            "\n                                        " +
                              _vm._s(_vm.__("Remember Me")) +
                              "\n                                    "
                          )
                        ]
                      )
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group" }, [
                      _c(
                        "button",
                        {
                          staticClass: "btn btn-primary",
                          attrs: { type: "submit" }
                        },
                        [
                          _vm._v(
                            " " + _vm._s(_vm.__("Login")) + "\n                "
                          )
                        ]
                      )
                    ])
                  ]
                )
              ])
            ])
          ]
        )
      ]
    ),
    _vm._v(" "),
    _c("section", { staticClass: "hero" }, [
      _c("div", { staticClass: "container fluid mb-5" }, [
        _c("div", { staticClass: "row align-items-center" }, [
          _vm._m(2),
          _vm._v(" "),
          _c("div", { staticClass: "col-md-3" }),
          _vm._v(" "),
          _c(
            "div",
            {
              staticClass:
                "col-md-3 p-3 p-lg-4 card shadow p-3 mb-5 bg-white rounded mt-4 mr-auto",
              attrs: { id: "avatar" }
            },
            [
              _c("img", {
                staticClass: " img-fluid  d-lg-block",
                attrs: { src: "", alt: "..." }
              }),
              _vm._v(" "),
              _c("h2", { staticClass: "auth__title" }, [
                _vm._v("Access your account")
              ]),
              _vm._v(" "),
              _c("p", [_vm._v("Fill in your Index Number to proceed")]),
              _vm._v(" "),
              _c(
                "form",
                {
                  staticClass: "login-form text-left",
                  attrs: { action: "", method: "POST" }
                },
                [
                  _vm._m(3),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group" }, [
                    _c(
                      "button",
                      {
                        staticClass: "btn btn-primary",
                        attrs: { type: "submit" }
                      },
                      [
                        _vm._v(
                          " " +
                            _vm._s(_vm.__("Student Login")) +
                            "\n                "
                        )
                      ]
                    )
                  ])
                ]
              )
            ]
          )
        ])
      ])
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("header", { staticClass: "header" }, [
      _c("nav", { staticClass: "navbar navbar-expand-lg fixed-top" }, [
        _c("div", { staticClass: "container" }, [
          _c("a", { staticClass: "navbar-brand", attrs: { href: "./" } }, [
            _c("img", {
              staticClass: "img-fluid rounded-circle",
              attrs: { src: "", alt: "" }
            })
          ]),
          _vm._v(" "),
          _c(
            "button",
            {
              staticClass: "navbar-toggler navbar-toggler-right",
              attrs: {
                type: "button",
                "data-toggle": "collapse",
                "data-target": "#navbarSupportedContent",
                "aria-controls": "navbarSupportedContent",
                "aria-expanded": "false",
                "aria-label": "Toggle navigation"
              }
            },
            [_vm._v("Menu"), _c("i", { staticClass: "fa fa-bars ml-2" })]
          ),
          _vm._v(" "),
          _c(
            "div",
            {
              staticClass: "collapse navbar-collapse",
              attrs: { id: "navbarSupportedContent" }
            },
            [
              _c("ul", { staticClass: "navbar-nav ml-auto" }, [
                _c("li", { staticClass: "nav-item" }, [
                  _c(
                    "a",
                    {
                      staticClass: "nav-link active",
                      attrs: { href: "index.html" }
                    },
                    [_vm._v("Home")]
                  )
                ]),
                _vm._v(" "),
                _c("li", { staticClass: "nav-item dropdown" }, [
                  _c(
                    "a",
                    {
                      staticClass: "nav-link dropdown-toggle",
                      attrs: {
                        id: "pages",
                        href: "#",
                        "data-toggle": "dropdown",
                        "aria-haspopup": "true",
                        "aria-expanded": "false"
                      }
                    },
                    [_vm._v("Register")]
                  ),
                  _vm._v(" "),
                  _c("div", { staticClass: "dropdown-menu" }, [
                    _c(
                      "a",
                      { staticClass: "dropdown-item", attrs: { href: "" } },
                      [_vm._v("STUDENT")]
                    )
                  ])
                ])
              ]),
              _c(
                "a",
                {
                  staticClass: "btn btn-primary navbar-btn ml-0 ml-lg-3",
                  attrs: {
                    href: "#",
                    "data-toggle": "modal",
                    "data-target": "#login"
                  }
                },
                [_vm._v("Admin Login ")]
              )
            ]
          )
        ])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-header border-bottom-0" }, [
      _c(
        "button",
        {
          staticClass: "close",
          attrs: {
            type: "button",
            "data-dismiss": "modal",
            "aria-label": "Close"
          }
        },
        [_c("span", { attrs: { "aria-hidden": "true" } }, [_vm._v("×")])]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-lg-6" }, [
      _c("img", {
        staticClass: "hero-image img-fluid  d-lg-block",
        attrs: { src: "", alt: "..." }
      }),
      _vm._v(" "),
      _c("div", { staticClass: "row" }, [
        _c("div", { staticClass: "col-lg-10" }, [
          _c("p", { staticClass: "lead text-muted mt-4 mb-4" }, [
            _vm._v(
              "Lorem ipsum dolor sit amet, consectetur. Eiusmod tempor incididunt."
            )
          ])
        ])
      ]),
      _vm._v(" "),
      _c("form", { staticClass: "subscription-form", attrs: { action: "#" } }, [
        _c("div", { staticClass: "form-group" }, [
          _c("input", {
            staticClass: "form-control",
            attrs: {
              type: "text",
              name: "email",
              placeholder: "Please enter secret code to proceed to registration"
            }
          }),
          _vm._v(" "),
          _c(
            "button",
            { staticClass: "btn btn-primary", attrs: { type: "submit" } },
            [_vm._v("Get Started")]
          )
        ])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "form-group mb-4" }, [
      _c("label", { staticClass: "sr-only" }, [_vm._v("IndexNumber")]),
      _vm._v(" "),
      _c("input", {
        staticClass: "form-control @error('indexnumber') is-invalid @enderror",
        attrs: {
          id: "indexnumber",
          type: "text",
          name: "indexnumber",
          required: "",
          autocomplete: "indexnumber",
          autofocus: ""
        }
      })
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js":
/*!********************************************************************!*\
  !*** ./node_modules/vue-loader/lib/runtime/componentNormalizer.js ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return normalizeComponent; });
/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file (except for modules).
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

function normalizeComponent (
  scriptExports,
  render,
  staticRenderFns,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier, /* server only */
  shadowMode /* vue-cli only */
) {
  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (render) {
    options.render = render
    options.staticRenderFns = staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = 'data-v-' + scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = shadowMode
      ? function () { injectStyles.call(this, this.$root.$options.shadowRoot) }
      : injectStyles
  }

  if (hook) {
    if (options.functional) {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functioal component in vue file
      var originalRender = options.render
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return originalRender(h, context)
      }
    } else {
      // inject component registration as beforeCreate hook
      var existing = options.beforeCreate
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    }
  }

  return {
    exports: scriptExports,
    options: options
  }
}


/***/ }),

/***/ "./resources/js/Pages/welcome.vue":
/*!****************************************!*\
  !*** ./resources/js/Pages/welcome.vue ***!
  \****************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _welcome_vue_vue_type_template_id_f8506a2e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./welcome.vue?vue&type=template&id=f8506a2e& */ "./resources/js/Pages/welcome.vue?vue&type=template&id=f8506a2e&");
/* harmony import */ var _welcome_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./welcome.vue?vue&type=script&lang=js& */ "./resources/js/Pages/welcome.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _welcome_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _welcome_vue_vue_type_template_id_f8506a2e___WEBPACK_IMPORTED_MODULE_0__["render"],
  _welcome_vue_vue_type_template_id_f8506a2e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/Pages/welcome.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/Pages/welcome.vue?vue&type=script&lang=js&":
/*!*****************************************************************!*\
  !*** ./resources/js/Pages/welcome.vue?vue&type=script&lang=js& ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_welcome_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./welcome.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/welcome.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_welcome_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/Pages/welcome.vue?vue&type=template&id=f8506a2e&":
/*!***********************************************************************!*\
  !*** ./resources/js/Pages/welcome.vue?vue&type=template&id=f8506a2e& ***!
  \***********************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_welcome_vue_vue_type_template_id_f8506a2e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./welcome.vue?vue&type=template&id=f8506a2e& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/welcome.vue?vue&type=template&id=f8506a2e&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_welcome_vue_vue_type_template_id_f8506a2e___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_welcome_vue_vue_type_template_id_f8506a2e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);