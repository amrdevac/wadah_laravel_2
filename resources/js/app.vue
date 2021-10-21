<template>
   <div class="app">
      <!-- <Navbar></Navbar> -->
      <div class="py-3">
         <router-view></router-view>
         <vue-progress-bar></vue-progress-bar>
      </div>
   </div>
</template>

<script>
export default {
   name: "app",
   components: {
      Navbar: () => import("./components/navbar.vue")
   }
};
</script>