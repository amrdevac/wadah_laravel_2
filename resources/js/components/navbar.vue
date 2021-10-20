<template>
   <div class="bg-dark text-white">
      <div class="container-fluid py-2">
         <div class="row">
            <div class="col col-md als">
               <div class="f5-fz font-weight-bolder">{{nama_aplikasi}}</div>
            </div>
            <div class="col col-md-3 col-lg-2 als">
               <div class="row ">
                  <div class="col">
                     <div class="my-1">
                        <router-link
                           class="text-white btn btn-block btn-sm"
                           :to="{name:'home'}"
                        >Home</router-link>
                     </div>
                  </div>
                  <div class="col">
                     <div class="my-1">
                        <router-link
                           class="text-white btn btn-block btn-sm"
                           :to="{name:'login'}"
                        >login</router-link>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</template>

<script>
export default {
   name: "navbar",
   data() {
      return {
         nama_aplikasi: "AMR APP"
      };
   }
};
</script>
