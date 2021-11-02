"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[153],{153:(t,a,s)=>{s.r(a),s.d(a,{default:()=>e});const i={data:function(){return{in_sidebar:{},cari_data:"",grup_url:""}},mounted:function(){this.grup_url=this.$router.currentRoute.name.split(".")[0],this.verify_permission(),this.load_sidebar()},methods:{updateUrutan:function(t){var a=this;this.$toast.df102();var s={urutan_only:!0,urutan_sidebar:t.target.value};axios.put(this.$api_sidebar+"/"+t.target.id,s).then((function(){a.load_sidebar(),a.$toast.df200()})).catch((function(t){a.$error.catch(t)}))},verify_permission:function(){var t=this;window.amr_data_permission_users.forEach((function(a){if(a.grup==t.grup_url){var s=a.url.split(".")[1];"store"==s&&(t.$canDoStore=!0),"update"==s&&(t.$canDoUpdate=!0),"destroy"==s&&(t.$canDoDestroy=!0)}}))},tambah_sub:function(t){this.$router.push({name:"subsidebar.index",params:{kd_sidebar:t}})},pencarian:function(){var t=this;this.$Progress.start(),axios.get(this.$api_sidebar+"?cari_data="+this.cari_data).then((function(a){t.$Progress.finish(),t.in_sidebar=a.data.in_sidebar})).catch((function(a){t.$Progress.fail(),t.$error.catch(a)}))},load_sidebar:function(){var t=this;this.$Progress.start(),axios.get(this.$api_sidebar).then((function(a){t.$Progress.finish(),t.in_sidebar=a.data.in_sidebar})).catch((function(a){t.$Progress.fail(),t.$error.catch(a)}))},hapus:function(t){var a=this;konfirmasiHapus.fire().then((function(s){s.isConfirmed&&(a.$toast.df102(),axios.delete(a.$api_sidebar+"/"+t).then((function(){a.$toast.df200(),a.load_sidebar()})).catch((function(t){a.$error.catch(t)})))}))}}};var r=(0,s(1900).Z)(i,(function(){var t=this,a=t.$createElement,s=t._self._c||a;return s("div",[s("div",{staticClass:"bg-white rounded border"},[s("div",{staticClass:"container"},[s("div",{staticClass:"row py-3"},[t._m(0),t._v(" "),s("div",{staticClass:"col-sm als"},[s("div",{staticClass:"input-group"},[s("input",{directives:[{name:"model",rawName:"v-model",value:t.cari_data,expression:" cari_data "}],staticClass:"form-control form-control-sm",attrs:{type:"text",placeholder:" Cari Berdasrkan Nama Sidebar"},domProps:{value:t.cari_data},on:{keyup:function(a){return!a.type.indexOf("key")&&t._k(a.keyCode,"enter",13,a.key,"Enter")?null:t.pencarian.apply(null,arguments)},input:function(a){a.target.composing||(t.cari_data=a.target.value)}}}),t._v(" "),s("span",{staticClass:"input-group-prepend"},[s("button",{staticClass:"btn btn-outline-dark btn-sm round-right",on:{click:t.pencarian}},[s("i",{staticClass:"fa fa-search",attrs:{"aria-hidden":"true"}})])])])]),t._v(" "),t.$canDoStore?s("div",{staticClass:"col-sm-5"},[s("div",{staticClass:"row"},[s("div",{staticClass:"col-sm"},[s("div",{staticClass:"my-2"},[s("router-link",{staticClass:"btn btn-dark btn-block btn-sm",attrs:{to:"/sidebar/create"}},[t._v("Tambah Sidebar")])],1)])])]):t._e()])]),t._v(" "),s("div",{staticClass:"py-2 table-responsive"},[s("table",{staticClass:"table table-hover"},[t._m(1),t._v(" "),t._l(t.in_sidebar,(function(a,i){return s("tr",{key:i},[s("td",[t._v(t._s(i+1))]),t._v(" "),s("td",[t._v(t._s(a.nama_sidebar))]),t._v(" "),s("td",[s("i",{staticClass:"mr-2",class:"fa "+a.icon_sidebar}),t._v("\n                  "+t._s(a.icon_sidebar)+"\n               ")]),t._v(" "),s("td",{attrs:{width:"25"}},[s("input",{staticClass:"form-control text-center",attrs:{type:"text",id:a.kd_sidebar},domProps:{value:a.urutan_sidebar},on:{change:t.updateUrutan}})]),t._v(" "),s("td",[t._v(t._s(t._f("STATUS")(a.status_sidebar)))]),t._v(" "),s("td",[t._l(a.get_subsidebar,(function(a,i){return s("div",{key:i},[t._v(t._s(a.nama_sub_sidebar))])})),t._v(" "),0==a.get_subsidebar.length?s("div",[s("i",{staticClass:"small"},[t._v("Subsidebar Kosong")])]):t._e()],2),t._v(" "),s("td",[s("button",{staticClass:"btn btn-dark btn-block btn-sm",on:{click:function(s){return t.tambah_sub(a.kd_sidebar)}}},[s("i",{staticClass:"fa fa-plus-circle mr-2",attrs:{"aria-hidden":"true"}}),t._v("\n                     Subsidebar\n                  ")])]),t._v(" "),s("td",{staticClass:"text-center",attrs:{width:"25"}},[s("div",{staticClass:"btn-group"},[t._m(2,!0),t._v(" "),s("div",{staticClass:"dropdown-menu dropdown-menu-right"},[t.$canDoUpdate?s("router-link",{staticClass:"dropdown-item",attrs:{to:"sidebar/create/"+a.kd_sidebar}},[t._v("Edit")]):t._e(),t._v(" "),t.$canDoDestroy?s("div",{staticClass:"dropdown-item cp",on:{click:function(s){return t.hapus(a.kd_sidebar)}}},[t._v("Delete")]):t._e()],1)])])])}))],2)])])])}),[function(){var t=this,a=t.$createElement,s=t._self._c||a;return s("div",{staticClass:"col-sm als"},[s("div",{staticClass:"font-weight-bolder h4"},[t._v("Daftar Sidebar")])])},function(){var t=this,a=t.$createElement,s=t._self._c||a;return s("tr",[s("th",[t._v("#")]),t._v(" "),s("th",{},[t._v("Nama")]),t._v(" "),s("th",{},[t._v("Icon")]),t._v(" "),s("th",{},[t._v("Urutan")]),t._v(" "),s("th",{},[t._v("Status")]),t._v(" "),s("th",{},[t._v("Subsidebar")]),t._v(" "),s("th",{}),t._v(" "),s("th",{staticClass:"text-center"},[s("i",{staticClass:"fa fa-ellipsis-v"})])])},function(){var t=this.$createElement,a=this._self._c||t;return a("button",{staticClass:"btn btn-sm",attrs:{type:"button","data-toggle":"dropdown"}},[a("i",{staticClass:"fa fa-ellipsis-v"})])}],!1,null,null,null);const e=r.exports}}]);