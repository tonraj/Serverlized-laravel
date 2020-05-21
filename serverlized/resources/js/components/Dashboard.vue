<template>

<div class="row">
    <div class="col-md-12">
        <div class="row float-right">
       <router-link to="/deploy">
       <button class="btn btn-primary">Connect Server</button>
       </router-link>
    </div>
    </div>

        <div v-for="server in servers" class="col-md-4">
            <!-- Card Narrower -->
<div class="card card-cascade narrower">

    <!-- Card content -->
    <div class="card-body card-body-cascade">
  
      <!-- Label -->
      <h5 class="pink-text pb-2 pt-1">{{server.name}}</h5>
      <!-- Title -->
      <h4 class="font-weight-bold card-title"></h4>
      <!-- Text -->
      <p v-if="server.ip !='' " class="card-text">
          {{server.ip}}
      </p>
      
      <div v-if="server.status == 'Installing'">
        <button class="btn btn-success btn-sm" ><i class="fa fa-spinner fa-spin mr-2"></i> Installing</button>
      </div>
      <div v-else-if="server.status == 'Deploying'">
        <button class="btn btn-success btn-sm" ><i class="fa fa-spinner fa-spin mr-2"></i> Deploying</button>
      </div>
      <div  v-else>
          <router-link  :to="'/manage/' + server.id">
        <button class="btn btn-unique btn-sm">Connect Server</button>
        </router-link>
        <a  class="btn btn-primary btn-sm waves-effect"><i class="fas fa-sync"></i></a>
      
      </div>
     
  
    </div>
  
  
  
  </div>

        </div>

</div>
   
</template>

<script>
    export default {
        data(){
            return {
                fields: {},
                errors: {},
                servers:{}
            }
        },
        mounted() {
            this.getServer();
        },
        methods:{
            getServer(){
                axios.post('/getServers').then(res =>{
                    this.servers = res.data.servers;
                }).catch(res =>{

                });
            }
        }
    }
</script>
