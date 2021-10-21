<template>
   <div>
      helo
      {{in_data}}
   </div>
</template>
<script>
export default {
   data() {
      return {
         in_data: {}
      };
   },
   mounted() {
      this.load();
   },
   methods: {
      load() {
         this.$Progress.start();
         axios
            .get("/api/role")
            .then(respon => {
               this.in_data = respon.data.in_data;
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