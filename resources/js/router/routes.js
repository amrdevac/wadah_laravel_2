const routes = [
    {
        path: "/",
        component: () => import("../../vue/home.vue"),
        name: "home"
    },
    {
        path: "/about",
        component: () => import("../../vue/login.vue"),
        name: "login"
    },
    {
        path: "/registrasi",
        component: () => import("../../vue/registrasi.vue"),
        name: "registrasi"
    },
    {
        path: "/dashboard",
        component: () => import("../../vue/auth/dashboard.vue"),
        name: "dashboard"
    },
    {
        path: "/img_compress",
        component: () => import("../../vue/demo/img_compresor.vue"),
        name: "img_compress"
    },
    {
        path: "/*",
        component: () => import("../../vue/404.vue"),
        name: "notfound"
    }
];

export default routes;
