<template>
   <div>
      <kembali></kembali>
      <div class="bg-white rounded">
         <div class="p-2">
            <div class="row">
               <div class="col-md als col-sm-6">
                  <div class="m-2 h5-font-size">
                     <div>Kelola Akses Role : {{in_role.nama_role}}</div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="m-2">
                     <button
                        class="btn btn-dark btn-block btn-sm"
                        @click="$router.push({
                     name:'impl-role-to-permission.store',
                     params:{
                        id:id,
                     }})"
                     >
                        <i class="fa fa-plus-circle mr-2" aria-hidden="true"></i> Tambah Akses
                     </button>
                  </div>
               </div>
            </div>
         </div>
         <table class="table table-sm table-hover">
            <thead>
               <tr>
                  <th>#</th>
                  <th>Permission</th>
                  <th>Creator</th>
                  <th></th>
               </tr>
            </thead>
            <tbody>
               <tr v-for="(permission,i) in in_role.get_all_permission" :key="i">
                  <td>{{i+1}}</td>
                  <td>{{permission.nama_route}}</td>
                  <td>{{permission.created_by}}</td>
                  <td width="25">
                     <button
                        class="btn btn-dark btn-sm btn-block"
                        @click="hapus(permission.kd_impl_role_permission)"
                     >
                        <i class="fa fa-trash" aria-hidden="true"></i>
                     </button>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</template>
<script>
export default {
   data() {
      return {
         in_role: [],
         id: null,
         endpoint_role: "/api/role/",
         endpoint_imp_permission_to_role: "/api/impl-role-to-permission/"
      };
   },
   mounted() {
      this.id = this.$router.currentRoute.params.kd_role;
      this.load_role();
   },
   methods: {
      verify_permission() {
         window.amr_data_permission_users.forEach(permission => {
            if (permission.grup == this.grup_url) {
               let data_permission = permission.url.split(".")[1];
               if (data_permission == "store") {
                  this.canDoStore = true;
               }
               if (data_permission == "update") {
                  this.canDoUpdate = true;
               }
               if (data_permission == "destroy") {
                  this.canDoDestroy = true;
               }
            }
         });
      },
      hapus(id) {
         konfirmasiHapus.fire().then(result => {
            if (result.isConfirmed) {
               this.$toast.df102();
               axios
                  .delete(this.$api_role_permission + "/" + id)
                  .then(() => {
                     this.$toast.df200();
                     this.load_role();
                  })
                  .catch(e => {
                     this.error.catch(e);
                  });
            }
         });
      },
      load_role() {
         this.$Progress.start();
         axios
            .get(this.endpoint_role + this.id)
            .then(respon => {
               this.in_role = respon.data.in_role;
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
<style scoped>
table > thead > tr > th,
table > tbody > tr > td {
   padding: 0.4em 2em !important;
   vertical-align: middle !important;
}
</style>