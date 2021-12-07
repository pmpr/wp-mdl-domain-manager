/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!**********************************************!*\
  !*** ./asset/js/panel/index.js + 37 modules ***!
  \**********************************************/

;// CONCATENATED MODULE: ./asset/js/panel/store.js
// action types
const SAVE_DOMAIN = "saveDomain";
const FETCH_DOMAIN = "fetchDomain";
const FETCH_FIELDS = "fetchDomainFields";
const VERIFY_DOMAIN = "verifyDomain";
const UPDATE_DOMAIN = "updateDomain";
const FETCH_OWNERSHIP = "fetchOwnership";
const FETCH_VALID_TABS = "fetchDomainValidTabs";

// mutation types
const SET_TABS = "setDomainTabs";
const SET_FIELDS = "setDomainInputs";

const API_PREFIX = '/pmpr/v1/domain-manager';

const state = {
    tabs: [],
    fields: {
        add: [],
        edit: []
    },
};

const getters = {
    domainFields: state => (target) => {
        return state.fields[target];
    },
};

const actions = {
    [FETCH_FIELDS]({commit, state}, payload) {
        return new Promise((resolve, reject) => {
            let $context = payload.context,
                $fields = state.fields[$context];

            if (this._vm.$helper.$isEmpty($fields)) {

                this._vm.$api.$get(`${API_PREFIX}/get-domain-fields`, {
                    params: payload
                }).then((response) => {

                    commit(SET_FIELDS, {
                        fields: response.data,
                        context: $context
                    });
                    resolve(response.data);
                }).catch(({response}) => {

                    reject(response);
                });
            } else {

                resolve($fields);
            }
        });
    },
    [FETCH_VALID_TABS]({commit, state}, payload) {
        return new Promise((resolve, reject) => {
            let $tabs = state.tabs;

            if (this._vm.$helper.$isEmpty($tabs)) {

                this._vm.$api.$get(`${API_PREFIX}/get-domain-tabs`, {
                    params: payload
                }).then((response) => {

                    commit(SET_TABS, response.data);
                    resolve(response.data);
                }).catch(({response}) => {

                    reject(response);
                });
            } else {

                resolve($tabs);
            }
        });
    },
    [FETCH_DOMAIN]({commit, state}, payload) {
        return new Promise((resolve, reject) => {

            this._vm.$api.$get(`${API_PREFIX}/get-domain`, {
                params: payload
            }).then((response) => {

                resolve(response.data);
            }).catch(({response}) => {

                reject(response);
            });
        });
    },
    [VERIFY_DOMAIN]({commit, state}, payload) {
        return new Promise((resolve, reject) => {

            this._vm.$api.$post(`${API_PREFIX}/verify-domain`, payload).then((response) => {

                resolve(response.data);
            }).catch(({response}) => {

                reject(response);
            });
        });
    },
    [FETCH_OWNERSHIP]({commit, state}, payload) {
        return new Promise((resolve, reject) => {

            this._vm.$api.$get(`${API_PREFIX}/get-ownership`, {
                params: payload
            }).then((response) => {

                resolve(response.data);
            }).catch(({response}) => {

                reject(response);
            });
        });
    },
    [SAVE_DOMAIN]({commit, state}, payload) {
        return new Promise((resolve, reject) => {

            this._vm.$api.$post(`${API_PREFIX}/save-domain`, payload)
                .then((response) => {

                    resolve(response.data);
                })
                .catch((result) => {

                    reject(result.response);
                });
        });
    },
    [UPDATE_DOMAIN]({commit, state}, payload) {
        return new Promise((resolve, reject) => {

            this._vm.$api.$post(`${API_PREFIX}/update-domain`, payload).then((response) => {

                resolve(response.data);
            }).catch(({response}) => {

                reject(response);
            });
        });
    },
};

const mutations = {
    [SET_TABS](state, tabs) {
        state.tabs = tabs;
    },
    [SET_FIELDS](state, {fields, context}) {
        state.fields[context] = fields;
    },
};

const store = {state, actions, mutations, getters};

PMPRTrigger.addFilter('panel_store_modules', (modules) => {
    modules['domain-manager'] = store;
    return modules;
}, 40)

/* harmony default export */ const panel_store = ((/* unused pure expression or super */ null && (store)));
;// CONCATENATED MODULE: ../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./asset/js/panel/view/Domain.vue?vue&type=template&id=67fa1eec&
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "transition",
    { attrs: { name: "fade-in-up" } },
    [_c("router-view")],
    1
  )
}
var staticRenderFns = []
render._withStripped = true


;// CONCATENATED MODULE: ./asset/js/panel/view/Domain.vue?vue&type=template&id=67fa1eec&

;// CONCATENATED MODULE: ../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./asset/js/panel/view/Domain.vue?vue&type=script&lang=js&
//
//
//
//
//
//

/* harmony default export */ const Domainvue_type_script_lang_js_ = ({
  name: 'PanelDomain',
});

;// CONCATENATED MODULE: ./asset/js/panel/view/Domain.vue?vue&type=script&lang=js&
 /* harmony default export */ const view_Domainvue_type_script_lang_js_ = (Domainvue_type_script_lang_js_); 
;// CONCATENATED MODULE: ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js
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
      ? function () {
        injectStyles.call(
          this,
          (options.functional ? this.parent : this).$root.$options.shadowRoot
        )
      }
      : injectStyles
  }

  if (hook) {
    if (options.functional) {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functional component in vue file
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

;// CONCATENATED MODULE: ./asset/js/panel/view/Domain.vue





/* normalize component */
;
var component = normalizeComponent(
  view_Domainvue_type_script_lang_js_,
  render,
  staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "asset/js/panel/view/Domain.vue"
/* harmony default export */ const Domain = (component.exports);
;// CONCATENATED MODULE: ../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./asset/js/panel/view/domain/Add.vue?vue&type=template&id=68cc1f48&
var Addvue_type_template_id_68cc1f48_render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("PanelCardForm", {
    attrs: { form: "add_new_domain", loading: _vm.loading },
    scopedSlots: _vm._u([
      {
        key: "form",
        fn: function() {
          return [
            _c("PanelForm", {
              attrs: { fields: _vm.fields },
              on: {
                rendered: _vm.afterRender,
                changed: function(values) {
                  _vm.data = values
                }
              }
            })
          ]
        },
        proxy: true
      },
      {
        key: "action",
        fn: function() {
          return [
            _c("panelActionSubmit", {
              staticClass: "mr-5",
              attrs: { name: "save" }
            }),
            _vm._v(" "),
            _c("panelActionCancel", {
              attrs: { name: "save", type: "reset" },
              nativeOn: {
                click: function($event) {
                  return _vm.cancel()
                }
              }
            })
          ]
        },
        proxy: true
      }
    ])
  })
}
var Addvue_type_template_id_68cc1f48_staticRenderFns = []
Addvue_type_template_id_68cc1f48_render._withStripped = true


;// CONCATENATED MODULE: ./asset/js/panel/view/domain/Add.vue?vue&type=template&id=68cc1f48&

;// CONCATENATED MODULE: ../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./asset/js/panel/view/domain/Add.vue?vue&type=script&lang=js&
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



/* harmony default export */ const Addvue_type_script_lang_js_ = ({
  name: 'PanelDomainAdd',
  data() {
    return {
      data: {},
      fields: {},
      loading: false
    };
  },
  beforeMount() {
    this.$store.dispatch(FETCH_FIELDS, {
      context: 'add'
    }).then((fields) => {
      this.fields = fields;
    });
  },
  methods: {
    afterRender() {
      this.$helper.$onSubmitForm('add_new_domain', this.fields, () => {

            this.loading = true;
            this.$helper.$saveForm(this.data, SAVE_DOMAIN)
                .then(({modal, response}) => {
                  modal.then((result) => {
                    if (result.isConfirmed) {

                      this.$router.push({name: 'panel_domain_show_verification', params: {id: response.data.id}});
                    }
                  })
                }).finally(() => this.loading = false);
          }
      );

    },
    cancel() {
      this.$helper.$resetForm(this.fields, this.$refs);
      this.$router.push({path: '/domain/list'});
    },
  },
});

;// CONCATENATED MODULE: ./asset/js/panel/view/domain/Add.vue?vue&type=script&lang=js&
 /* harmony default export */ const domain_Addvue_type_script_lang_js_ = (Addvue_type_script_lang_js_); 
;// CONCATENATED MODULE: ./asset/js/panel/view/domain/Add.vue





/* normalize component */
;
var Add_component = normalizeComponent(
  domain_Addvue_type_script_lang_js_,
  Addvue_type_template_id_68cc1f48_render,
  Addvue_type_template_id_68cc1f48_staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var Add_api; }
Add_component.options.__file = "asset/js/panel/view/domain/Add.vue"
/* harmony default export */ const Add = (Add_component.exports);
;// CONCATENATED MODULE: ../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./asset/js/panel/view/domain/Show.vue?vue&type=template&id=4089045c&
var Showvue_type_template_id_4089045c_render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm.domain
    ? _c("PanelSidebar", {
        attrs: { tabs: _vm.tabs, args: { domain: _vm.domain } },
        on: { argsChanged: _vm.domainUpdated },
        scopedSlots: _vm._u(
          [
            {
              key: "before_tabs",
              fn: function() {
                return [
                  _c(
                    "div",
                    {
                      staticClass:
                        "font-weight-bolder font-size-h5 text-dark-75 text-hover-primary"
                    },
                    [_vm._v(_vm._s(_vm.domain.name))]
                  ),
                  _vm._v(" "),
                  _c("div", { staticClass: "text-right" }, [
                    _c(
                      "a",
                      {
                        staticClass: "text-primary font-size-h6",
                        attrs: { href: "https://" + _vm.domain.value }
                      },
                      [_vm._v(_vm._s(_vm.domain.value))]
                    )
                  ]),
                  _vm._v(" "),
                  _c("hr")
                ]
              },
              proxy: true
            }
          ],
          null,
          false,
          2503349235
        )
      })
    : _vm._e()
}
var Showvue_type_template_id_4089045c_staticRenderFns = []
Showvue_type_template_id_4089045c_render._withStripped = true


;// CONCATENATED MODULE: ./asset/js/panel/view/domain/Show.vue?vue&type=template&id=4089045c&

;// CONCATENATED MODULE: ../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./asset/js/panel/view/domain/Show.vue?vue&type=script&lang=js&
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



/* harmony default export */ const Showvue_type_script_lang_js_ = ({
  name: "PanelDomainShow",
  data() {
    return {
      domain: null
    }
  },
  methods: {
    domainUpdated(domain) {

      this.domain = {...this.domain, ...domain};
    }
  },
  mounted() {

    this.$store.dispatch(FETCH_DOMAIN, {
      id: this.$route.params.id
    }).then((domain) => {

      if (this.$helper.$isEmpty(domain)) {

        this.$router.push({name: 'panel_domain_list'})
      } else {

        this.domain = domain;
      }
    });
  },
  computed: {

    tabs() {
      return this.$router.getRouteChildren('panel_domain_show')
    },
  },
});

;// CONCATENATED MODULE: ./asset/js/panel/view/domain/Show.vue?vue&type=script&lang=js&
 /* harmony default export */ const domain_Showvue_type_script_lang_js_ = (Showvue_type_script_lang_js_); 
;// CONCATENATED MODULE: ./asset/js/panel/view/domain/Show.vue





/* normalize component */
;
var Show_component = normalizeComponent(
  domain_Showvue_type_script_lang_js_,
  Showvue_type_template_id_4089045c_render,
  Showvue_type_template_id_4089045c_staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var Show_api; }
Show_component.options.__file = "asset/js/panel/view/domain/Show.vue"
/* harmony default export */ const Show = (Show_component.exports);
;// CONCATENATED MODULE: ../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./asset/js/panel/view/domain/List.vue?vue&type=template&id=44229af3&
var Listvue_type_template_id_44229af3_render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("PanelDatatableCard", {
    attrs: { columns: _vm.columns, remote: _vm.remoteProps },
    scopedSlots: _vm._u([
      {
        key: "toolbar",
        fn: function() {
          return [
            _c("router-link", {
              attrs: { to: { name: "panel_domain_add" }, custom: "" },
              scopedSlots: _vm._u([
                {
                  key: "default",
                  fn: function(ref) {
                    var href = ref.href
                    var route = ref.route
                    var navigate = ref.navigate
                    var isActive = ref.isActive
                    var isExactActive = ref.isExactActive
                    return [
                      _c("PanelActionLink", {
                        attrs: {
                          href: href,
                          text: route.meta.title,
                          variant: "success",
                          light: false
                        }
                      })
                    ]
                  }
                }
              ])
            })
          ]
        },
        proxy: true
      },
      {
        key: "td",
        fn: function(ref) {
          var item = ref.item
          var column = ref.column
          var column_key = ref.column_key
          var id = ref.id
          return [
            column_key === "value"
              ? _c("PanelCellText", {
                  attrs: {
                    text: item[column_key],
                    target: "_blank",
                    link: "https://" + item[column_key],
                    container: { class: "direction-ltr" }
                  }
                })
              : column_key === "actions"
              ? _c("PanelActionLink", {
                  attrs: {
                    name: "details",
                    to: { name: "panel_domain_show", params: { id: id } }
                  }
                })
              : _c("PanelCellText", { attrs: { text: item[column_key] } })
          ]
        }
      }
    ])
  })
}
var Listvue_type_template_id_44229af3_staticRenderFns = []
Listvue_type_template_id_44229af3_render._withStripped = true


;// CONCATENATED MODULE: ./asset/js/panel/view/domain/List.vue?vue&type=template&id=44229af3&

;// CONCATENATED MODULE: ../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./asset/js/panel/view/domain/List.vue?vue&type=script&lang=js&
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


/* harmony default export */ const Listvue_type_script_lang_js_ = ({
  name: 'PanelDomainList',
  computed: {
    remoteProps() {
      return {
        api: "/pmpr/v1/domain-manager/get-domains",
        'query-params': {sort: 'created_at', sortBy: 'orderBy'}
      }
    },
    columns() {
      return {
        name: {
          title: this.translate('column.name'),
          width: '25%'
        },
        value: {
          title: this.translate('column.url'),
          width: '30%'
        },
        created_at: {
          title: this.translate('column.created_at'),
          width: '20%'
        },
        actions: {
          title: this.translate('column.actions'),
          width: '15%'
        }
      }
    },
  }
});

;// CONCATENATED MODULE: ./asset/js/panel/view/domain/List.vue?vue&type=script&lang=js&
 /* harmony default export */ const domain_Listvue_type_script_lang_js_ = (Listvue_type_script_lang_js_); 
;// CONCATENATED MODULE: ./asset/js/panel/view/domain/List.vue





/* normalize component */
;
var List_component = normalizeComponent(
  domain_Listvue_type_script_lang_js_,
  Listvue_type_template_id_44229af3_render,
  Listvue_type_template_id_44229af3_staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var List_api; }
List_component.options.__file = "asset/js/panel/view/domain/List.vue"
/* harmony default export */ const List = (List_component.exports);
;// CONCATENATED MODULE: ../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./asset/js/panel/view/domain/show/Edit.vue?vue&type=template&id=7dd2ca17&
var Editvue_type_template_id_7dd2ca17_render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("PanelCardForm", {
    attrs: { form: "edit_new_domain", loading: _vm.loading },
    scopedSlots: _vm._u([
      {
        key: "form",
        fn: function() {
          return [
            _c("PanelForm", {
              attrs: { data: _vm.domain, fields: _vm.fields },
              on: {
                rendered: _vm.afterRender,
                changed: function(values) {
                  _vm.data = Object.assign({}, _vm.data, values)
                }
              }
            })
          ]
        },
        proxy: true
      },
      {
        key: "action",
        fn: function() {
          return [_c("panelActionSubmit", { attrs: { name: "save" } })]
        },
        proxy: true
      }
    ])
  })
}
var Editvue_type_template_id_7dd2ca17_staticRenderFns = []
Editvue_type_template_id_7dd2ca17_render._withStripped = true


;// CONCATENATED MODULE: ./asset/js/panel/view/domain/show/Edit.vue?vue&type=template&id=7dd2ca17&

;// CONCATENATED MODULE: ../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./asset/js/panel/view/domain/show/Edit.vue?vue&type=script&lang=js&
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




/* harmony default export */ const Editvue_type_script_lang_js_ = ({
  name: "PanelDomainShowEdit",
  props: {
    domain: null,
  },
  data() {
    return {
      data: {},
      fields: {},
      loading: false
    };
  },
  methods: {
    afterRender() {
      this.$helper.$onSubmitForm('edit_new_domain', this.fields, () => {

            if (this.$helper.$isFormChanged(this.data, this.domain)) {

              this.loading = true;
              let values = {...this.data, id: this.domain.id};
              this.$helper.$saveForm(values, UPDATE_DOMAIN)
                  .then(({response, payload}) => {

                    this.$emit('argsChanged', response.data);
                  }).finally(() => this.loading = false);
            }
          }
      );

    },
  },
  beforeMount() {

    this.$store.dispatch(FETCH_FIELDS, {
      context: 'edit',
      id: this.domain.id
    }).then((fields) => {

      this.fields = fields;
    });
  },
});

;// CONCATENATED MODULE: ./asset/js/panel/view/domain/show/Edit.vue?vue&type=script&lang=js&
 /* harmony default export */ const show_Editvue_type_script_lang_js_ = (Editvue_type_script_lang_js_); 
;// CONCATENATED MODULE: ./asset/js/panel/view/domain/show/Edit.vue





/* normalize component */
;
var Edit_component = normalizeComponent(
  show_Editvue_type_script_lang_js_,
  Editvue_type_template_id_7dd2ca17_render,
  Editvue_type_template_id_7dd2ca17_staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var Edit_api; }
Edit_component.options.__file = "asset/js/panel/view/domain/show/Edit.vue"
/* harmony default export */ const Edit = (Edit_component.exports);
;// CONCATENATED MODULE: ../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./asset/js/panel/view/domain/show/Ownership.vue?vue&type=template&id=32ffa132&
var Ownershipvue_type_template_id_32ffa132_render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("PanelDatatableCard", {
    attrs: { columns: _vm.columns, remote: _vm.remoteProps },
    scopedSlots: _vm._u([
      {
        key: "td",
        fn: function(ref) {
          var item = ref.item
          var column = ref.column
          var column_key = ref.column_key
          var id = ref.id
          return [
            column_key == "capability"
              ? _c("PanelCellStatus", {
                  attrs: {
                    status: item.capability,
                    title: item.capability_title,
                    classes: "my-auto",
                    statuses: {
                      owner: "success",
                      unverified: "danger",
                      restrict: "primary"
                    }
                  }
                })
              : _c("PanelCellText", { attrs: { text: item[column_key] } })
          ]
        }
      }
    ])
  })
}
var Ownershipvue_type_template_id_32ffa132_staticRenderFns = []
Ownershipvue_type_template_id_32ffa132_render._withStripped = true


;// CONCATENATED MODULE: ./asset/js/panel/view/domain/show/Ownership.vue?vue&type=template&id=32ffa132&

;// CONCATENATED MODULE: ../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./asset/js/panel/view/domain/show/Ownership.vue?vue&type=script&lang=js&
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


/* harmony default export */ const Ownershipvue_type_script_lang_js_ = ({
  name: "PanelDomainShowOwnership",
  props: {
    domain: null
  },
  computed: {
    remoteProps() {
      return {
        api: "/pmpr/v1/domain-manager/get-ownerships",
        'query-values': {domain: this.domain.id},
        'query-params': {sort: 'created_at', sortBy: 'orderBy'}
      }
    },
    columns() {
      return {
        user: {
          title: this.translate('column.user'),
          width: '25%'
        },
        capability: {
          title: this.translate('column.capability'),
          width: '30%'
        },
        created_at: {
          title: this.translate('column.created_at'),
          width: '20%'
        },
      }
    },
  }
});

;// CONCATENATED MODULE: ./asset/js/panel/view/domain/show/Ownership.vue?vue&type=script&lang=js&
 /* harmony default export */ const show_Ownershipvue_type_script_lang_js_ = (Ownershipvue_type_script_lang_js_); 
;// CONCATENATED MODULE: ./asset/js/panel/view/domain/show/Ownership.vue





/* normalize component */
;
var Ownership_component = normalizeComponent(
  show_Ownershipvue_type_script_lang_js_,
  Ownershipvue_type_template_id_32ffa132_render,
  Ownershipvue_type_template_id_32ffa132_staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var Ownership_api; }
Ownership_component.options.__file = "asset/js/panel/view/domain/show/Ownership.vue"
/* harmony default export */ const Ownership = (Ownership_component.exports);
;// CONCATENATED MODULE: ../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./asset/js/panel/view/domain/show/Verification.vue?vue&type=template&id=0c4d7ca8&
var Verificationvue_type_template_id_0c4d7ca8_render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("PanelCard", {
    scopedSlots: _vm._u([
      {
        key: "body",
        fn: function() {
          return [
            _vm.loaded
              ? _c(
                  "div",
                  { staticClass: "mx-auto" },
                  [
                    _vm.ownership
                      ? [
                          _vm.isVerified
                            ? [
                                _c("PanelNotice", {
                                  attrs: {
                                    type: "success",
                                    content: _vm.translate(
                                      "verification.verified",
                                      [
                                        _vm.ownership.user,
                                        _vm.ownership.verify_date
                                      ]
                                    )
                                  }
                                }),
                                _vm._v(" "),
                                _c("br"),
                                _vm._v(" "),
                                _c("PanelTextInput", {
                                  attrs: {
                                    props: {
                                      attrs: {
                                        class:
                                          "form-control direction-ltr disabled",
                                        disabled: "disabled"
                                      },
                                      label: {
                                        text: _vm.translate(
                                          "verification.api_key"
                                        )
                                      },
                                      ref: "api_key",
                                      name: "api_key",
                                      size: "lg",
                                      solid: true,
                                      value: _vm.domain.api_key
                                    }
                                  }
                                })
                              ]
                            : [
                                _c(
                                  "ol",
                                  { staticClass: "font-size-h6 pl-5" },
                                  [
                                    _c("li", { staticClass: "py-2" }, [
                                      _vm._v(
                                        _vm._s(
                                          _vm.translate("verification.steps.0")
                                        ) + ":\n              "
                                      ),
                                      _c(
                                        "button",
                                        {
                                          staticClass: "btn btn-default",
                                          on: { click: _vm.download }
                                        },
                                        [
                                          _c("PanelIcon", {
                                            attrs: {
                                              icon: "fontawesome/download.svg",
                                              size: "sm",
                                              color: "dark"
                                            }
                                          }),
                                          _vm._v(
                                            "\n                " +
                                              _vm._s(_vm.ownership.verify_key) +
                                              ".html\n              "
                                          )
                                        ],
                                        1
                                      )
                                    ]),
                                    _vm._v(" "),
                                    _c("li", {
                                      staticClass: "py-2",
                                      domProps: {
                                        innerHTML: _vm._s(
                                          _vm.translate(
                                            "verification.steps.1",
                                            [_vm.domain.value]
                                          )
                                        )
                                      }
                                    }),
                                    _vm._v(" "),
                                    _c("PanelNotice", {
                                      attrs: {
                                        type: "warning",
                                        content: _vm.translate(
                                          "verification.notice"
                                        ),
                                        classes: "my-3"
                                      }
                                    }),
                                    _vm._v(" "),
                                    _c("li", { staticClass: "py-2" }, [
                                      _vm._v(
                                        _vm._s(
                                          _vm.translate("verification.steps.2")
                                        )
                                      )
                                    ])
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("PanelActionSubmit", {
                                  attrs: {
                                    text: _vm.translate("verification.verify"),
                                    id: "verify"
                                  },
                                  nativeOn: {
                                    click: function($event) {
                                      return _vm.verify.apply(null, arguments)
                                    }
                                  }
                                })
                              ]
                        ]
                      : _c("p", { staticClass: "h6" }, [
                          _vm._v(
                            _vm._s(
                              _vm.translate("verification.permission_denied")
                            )
                          )
                        ])
                  ],
                  2
                )
              : _c("PanelSpinner")
          ]
        },
        proxy: true
      }
    ])
  })
}
var Verificationvue_type_template_id_0c4d7ca8_staticRenderFns = []
Verificationvue_type_template_id_0c4d7ca8_render._withStripped = true


;// CONCATENATED MODULE: ./asset/js/panel/view/domain/show/Verification.vue?vue&type=template&id=0c4d7ca8&

;// CONCATENATED MODULE: ../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./asset/js/panel/view/domain/show/Verification.vue?vue&type=script&lang=js&
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




/* harmony default export */ const Verificationvue_type_script_lang_js_ = ({
  name: "PanelDomainShowVerification",
  props: {
    domain: null
  },
  data() {
    return {
      loaded: false,
      ownership: null,
    };
  },
  computed: {
    isVerified() {

      return this.ownership.capability === 'owner';
    }
  },
  methods: {
    download() {
      let key = this.ownership.verify_key;
      this.$helper.$download(`${key}.html`, encodeURIComponent(key));
    },
    verify() {

      this.$helper.$runAction(VERIFY_DOMAIN, {
        id: this.ownership.id,
        domain: this.$route.params.id
      }, '#verify').then(({modal}) => {
        modal.then((result) => {
          if (result.isConfirmed) {
            this.$router.go();
          }
        });
      });
    },
  },
  beforeMount() {

    this.$store.dispatch(FETCH_OWNERSHIP, {
      domain: this.$route.params.id
    }).then((ownership) => {

      this.loaded = true;
      this.ownership = ownership;
    });
  },
});

;// CONCATENATED MODULE: ./asset/js/panel/view/domain/show/Verification.vue?vue&type=script&lang=js&
 /* harmony default export */ const show_Verificationvue_type_script_lang_js_ = (Verificationvue_type_script_lang_js_); 
;// CONCATENATED MODULE: ./asset/js/panel/view/domain/show/Verification.vue





/* normalize component */
;
var Verification_component = normalizeComponent(
  show_Verificationvue_type_script_lang_js_,
  Verificationvue_type_template_id_0c4d7ca8_render,
  Verificationvue_type_template_id_0c4d7ca8_staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var Verification_api; }
Verification_component.options.__file = "asset/js/panel/view/domain/show/Verification.vue"
/* harmony default export */ const Verification = (Verification_component.exports);
;// CONCATENATED MODULE: ./asset/js/panel/index.js










window.PanelDomain = Domain;
window.PanelDomainAdd = Add;
window.PanelDomainList = List;
window.PanelDomainShow = Show;
window.PanelDomainShowEdit = Edit;
window.PanelDomainShowOwnership = Ownership;
window.PanelDomainShowVerification = Verification;



/******/ })()
;