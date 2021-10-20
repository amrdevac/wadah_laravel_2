<template>
   <div class="text-center">
      <div v-for=" (data,i) in in_data " :key="i">
         <div v-for="(test,o) in data.get_item_section" :key="o">
            <!-- <img :src="'https://shop.hamzahbatik.co.id/'" alt /> -->
         </div>
      </div>
      <h3 class="font-weight-bolder">New Amrullah Apps Dev Boiler,</h3>
      <h1>{{ count }}</h1>
      <button class="btn btn-primary" @click="$store.commit('INCREMENT')">INCREMENT</button>
   </div>
</template>

<script>
import imageCompressor from "vue-image-compressor";
import { mapState } from "vuex";

export default {
   components: { imageCompressor },
   data() {
      return {
         in_data: {}
      };
   },
   name: "home",
   computed: {
      ...mapState({
         count: state => state.count
      })
   },
   mounted() {
      this.load();
   },
   methods: {
      cek(e) {
         console.log(e);
      },
      load() {
         this.$Progress.start();
         axios
            .get("https://shop.hamzahbatik.co.id/api/homepage?aktif=1")
            .then(respon => {
               this.in_data = respon.data.in_section;
               this.$Progress.finish();
            })
            .catch(e => {
               this.$Progress.fail();
               this.$error.catch(e);
            });
      }
   }
};
</script>