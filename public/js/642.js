"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[642],{8642:(t,i,s)=>{s.r(i),s.d(i,{default:()=>e});const a={data:function(){return{in_permission:{},cari_data:"",kd_role:"",isPencarian:!1}},mounted:function(){this.kd_role=this.$router.currentRoute.params.kd_role,this.load_permission()},methods:{reset:function(){this.isPencarian=!1,this.load_permission()},pilih_akses:function(t){var i=this,s={fk_kd_role:this.kd_role,route_url:t};this.$toast.df102(),axios.post(this.$api_role_permission+"/"+this.kd_role,s).then((function(){i.load_permission(),i.$toast.df200()})).catch((function(t){i.$error.catch(t)}))},pencarian:function(){var t=this;this.$Progress.start(),axios.get(this.$api_role_permission+"/"+this.kd_role+"/pencarian?cari="+this.cari_data).then((function(i){t.$Progress.finish(),t.isPencarian=!0,t.in_permission=i.data.in_permission})).catch((function(i){t.$Progress.fail(),t.$error.catch(i)}))},load_permission:function(){var t=this;if(this.isPencarian)return this.pencarian();this.$Progress.start(),axios.get(this.$api_role_permission+"/"+this.kd_role).then((function(i){t.isPencarian=!1,t.$Progress.finish(),t.in_permission=i.data.in_permission})).catch((function(i){t.$Progress.fail(),t.$error.catch(i)}))}}};const e=(0,s(1900).Z)(a,(function(){var t=this,i=t.$createElement,s=t._self._c||i;return s("div",[s("kembali"),t._v(" "),s("div",{staticClass:"bg-white rounded border"},[s("div",{staticClass:"container"},[s("div",{staticClass:"row py-3"},[t._m(0),t._v(" "),s("div",{staticClass:"col-sm als"},[s("div",{staticClass:"input-group"},[s("input",{directives:[{name:"model",rawName:"v-model",value:t.cari_data,expression:" cari_data "}],staticClass:"form-control form-control-sm",attrs:{type:"text",placeholder:" Cari Berdasrkan Nama permission  "},domProps:{value:t.cari_data},on:{keyup:function(i){return!i.type.indexOf("key")&&t._k(i.keyCode,"enter",13,i.key,"Enter")?null:t.pencarian.apply(null,arguments)},input:function(i){i.target.composing||(t.cari_data=i.target.value)}}}),t._v(" "),s("span",{staticClass:"input-group-prepend"},[s("button",{staticClass:"btn btn-outline-dark btn-sm round-right",on:{click:t.pencarian}},[s("i",{staticClass:"fa fa-search",attrs:{"aria-hidden":"true"}})])])])])]),t._v(" "),t.isPencarian?s("section",[t._v("\n            Hasil Dari : "+t._s(t.cari_data)+"\n            "),s("div",{staticClass:"text-blue cp",on:{click:function(i){return t.reset()}}},[t._v("Reset")])]):t._e()]),t._v(" "),s("div",{staticClass:"py-2"},[s("table",{staticClass:"table table-hover"},[t._m(1),t._v(" "),t._l(t.in_permission,(function(i,a){return s("tr",{key:a},[s("td",{staticClass:"px-3 align-middle"},[t._v(t._s(i.nama_route))]),t._v(" "),s("td",{staticClass:"px-3 align-middle"},[t._v(t._s(i.nama_grup))]),t._v(" "),s("td",{staticClass:"px-3 align-middle"},[t._v(t._s(i.route_url))]),t._v(" "),s("td",[s("button",{staticClass:"btn btn-block btn-dark btn-block btn-sm",on:{click:function(s){return t.pilih_akses(i.route_url)}}},[s("i",{staticClass:"fa fa-check mr-2",attrs:{"aria-hidden":"true"}}),t._v("\n                     Pilih\n                  ")])])])}))],2)])])],1)}),[function(){var t=this,i=t.$createElement,s=t._self._c||i;return s("div",{staticClass:"col-sm als"},[s("div",{staticClass:"font-weight-bolder h5-font-size"},[t._v("Daftar Akses")])])},function(){var t=this,i=t.$createElement,s=t._self._c||i;return s("tr",[s("th",{staticClass:"px-3 align-middle"},[t._v("Deskripsi Route")]),t._v(" "),s("th",{staticClass:"px-3 align-middle"},[t._v("grup")]),t._v(" "),s("th",{staticClass:"px-3 align-middle"},[t._v("Nama Route")]),t._v(" "),s("th")])}],!1,null,null,null).exports}}]);