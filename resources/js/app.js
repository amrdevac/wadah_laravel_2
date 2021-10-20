require("./bootstrap");
require("admin-lte");

window.Vue = require("vue").default;
import Vue from "vue";
import VueRouter from "vue-router";

import router from "./router/index";
import store from "./store/index";
import App from "./app.vue";

Vue.use(VueRouter);

// Dependencies
// Vform Component
import { Form } from "vform";
window.Form = Form;
// ===============

// Progress Componen
import VueProgressBar from "vue-progressbar";
import options from "./config/progressbar";
Vue.use(VueProgressBar, options);
// =====

// Progress Componen
import imageCompressor from "vue-image-compressor";
Vue.use(imageCompressor);
// =====

// Swal Manual
import swal from "sweetalert2";
window.Swal = swal;
// =========

//  money component
import money from "v-money";
Vue.use(money, {
    decimal: ",",
    thousands: ".",
    prefix: "Rp ",
    suffix: " ",
    precision: 0
});
// =====

// Kostum
window.nv = new Vue();

// Toast Component
import toast from "./config/toast";
Vue.prototype.$toast = new toast();
//  ======

// Kelola Button AS disabled after click
window.btn_kelola = bol => {
    $(".btn-submit-data").attr("disabled", bol);
};
// ====

// Catch Component
import error from "./config/catch";
Vue.prototype.$error = new error();
//  ======
// Konfirmasi Hapus Component
import konfirmasiHapus from "./config/delete_confirmation";
window.konfirmasiHapus = konfirmasiHapus;
// ====

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component(
//     "example-component",
//     require("./components/ExampleComponent.vue").default
// );
// Komponen
Vue.component("pagination", require("laravel-vue-pagination"));

Vue.component("kosong", require("./components/kosong.vue").default);
Vue.component("kembali", require("./components/kembali.vue").default);
Vue.component("loading", require("./components/loading.vue").default);

const app = new Vue({
    el: "#app",
    router,
    store,
    components: { App }
});
