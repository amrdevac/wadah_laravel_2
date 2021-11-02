"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[665],{6665:(t,a,s)=>{s.r(a),s.d(a,{default:()=>r});const e={data:function(){return{in_role:{},cari_data:"",canDoStore:!0,canDoUpdate:!0,canDoDestroy:!0,grup_url:"role"}},mounted:function(){this.load_role(),this.verify_permission()},methods:{verify_permission:function(){var t=this;window.amr_data_permission_users.forEach((function(a){if(a.grup==t.grup_url){var s=a.url.split(".")[1];"store"==s&&(t.canDoStore=!0),"update"==s&&(t.canDoUpdate=!0),"destroy"==s&&(t.canDoDestroy=!0)}}))},pencarian:function(){var t=this;this.$Progress.start(),axios.get("/api/role?cari_data="+this.cari_data).then((function(a){t.$Progress.finish(),t.in_role=a.data.in_role})).catch((function(a){t.$Progress.fail(),t.$error.catch(a)}))},load_role:function(){var t=this;this.$Progress.start(),axios.get("/api/role").then((function(a){t.$Progress.finish(),t.in_role=a.data.in_role})).catch((function(a){t.$Progress.fail(),t.$error.catch(a)}))},hapus:function(t){var a=this;konfirmasiHapus.fire().then((function(s){s.isConfirmed&&(a.$toast.df102(),axios.delete("/api/role/"+t).then((function(){a.$toast.df200(),a.load_role()})).catch((function(t){a.$error.catch(t)})))}))}}};var i=(0,s(1900).Z)(e,(function(){var t=this,a=t.$createElement,s=t._self._c||a;return s("div",[s("div",{staticClass:"bg-white rounded border"},[s("div",{staticClass:"container"},[s("div",{staticClass:"row py-3"},[t._m(0),t._v(" "),s("div",{staticClass:"col-sm als"},[s("div",{staticClass:"input-group"},[s("input",{directives:[{name:"model",rawName:"v-model",value:t.cari_data,expression:" cari_data "}],staticClass:"form-control form-control-sm",attrs:{type:"text",placeholder:" Cari Berdasrkan Nama role  "},domProps:{value:t.cari_data},on:{keyup:function(a){return!a.type.indexOf("key")&&t._k(a.keyCode,"enter",13,a.key,"Enter")?null:t.pencarian.apply(null,arguments)},input:function(a){a.target.composing||(t.cari_data=a.target.value)}}}),t._v(" "),s("span",{staticClass:"input-group-prepend"},[s("button",{staticClass:"btn btn-outline-dark btn-sm round-right",on:{click:t.pencarian}},[s("i",{staticClass:"fa fa-search",attrs:{"aria-hidden":"true"}})])])])]),t._v(" "),s("div",{staticClass:"col-sm-5"},[s("div",{staticClass:"row"},[t.canDoStore?s("div",{staticClass:"col-sm"},[s("div",{staticClass:"my-2"},[s("router-link",{staticClass:"btn btn-dark btn-block btn-sm",attrs:{to:"/role/create"}},[t._v("Tambah role")])],1)]):t._e()])])])]),t._v(" "),s("div",{staticClass:"py-2"},[s("table",{staticClass:"table table-hover"},[t._m(1),t._v(" "),t._l(t.in_role.data,(function(a,e){return s("tr",{key:e},[s("td",{staticClass:"px-3 align-middle"},[t._v(t._s(a.nama_role))]),t._v(" "),s("td",{staticClass:"px-3 align-middle"},[t._v(t._s(a.get_creator.nama))]),t._v(" "),s("td",{staticClass:"px-3 align-middle",attrs:{width:"200"}},[s("button",{staticClass:"btn btn-dark btn-block btn-sm",on:{click:function(s){return t.$router.push({name:"impl-role-to-permission.index",params:{kd_role:a.kd_role}})}}},[s("i",{staticClass:"fa fa-plus mr-2",attrs:{"aria-hidden":"true"}}),t._v(" Kelola Akses\n                  ")])]),t._v(" "),s("td",{staticClass:"px-3 align-middle text-center",attrs:{width:"25"}},[s("div",{staticClass:"btn-group"},[t._m(2,!0),t._v(" "),s("div",{staticClass:"dropdown-menu dropdown-menu-right"},[t.canDoUpdate?s("router-link",{staticClass:"dropdown-item",attrs:{to:"role/create/"+a.kd_role}},[t._v("Edit")]):t._e(),t._v(" "),t.canDoDestroy?s("div",{staticClass:"dropdown-item cp",on:{click:function(s){return t.hapus(a.kd_role)}}},[t._v("Delete")]):t._e()],1)])])])}))],2)])])])}),[function(){var t=this,a=t.$createElement,s=t._self._c||a;return s("div",{staticClass:"col-sm als"},[s("div",{staticClass:"font-weight-bolder h4"},[t._v("Daftar role")])])},function(){var t=this,a=t.$createElement,s=t._self._c||a;return s("tr",[s("th",{staticClass:"px-3 align-middle"},[t._v("Nama Role")]),t._v(" "),s("th",{staticClass:"px-3 align-middle"},[t._v("Created By")]),t._v(" "),s("th",{staticClass:"px-3 align-middle text-center"},[s("i",{staticClass:"fa fa-key mr-2",attrs:{"aria-hidden":"true"}}),t._v(" Akses\n               ")]),t._v(" "),s("th",{staticClass:"px-3 align-middle text-center"},[s("i",{staticClass:"fa fa-ellipsis-v"})])])},function(){var t=this.$createElement,a=this._self._c||t;return a("button",{staticClass:"btn btn-sm",attrs:{type:"button","data-toggle":"dropdown"}},[a("i",{staticClass:"fa fa-ellipsis-v"})])}],!1,null,null,null);const r=i.exports}}]);