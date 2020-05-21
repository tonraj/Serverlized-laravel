<template>

  <div class="row">
    
<div class="offset-md-1 col-md-10 ">

<p>
    <router-link to="/"><i class="fa fa-arrow-left mr-2"></i> back  to Home</router-link>
</p>


<div class="card">

  <!-- Title -->
 
  <!-- Card content -->
  <div class="card-body">

    
    <form  @submit.prevent="submit()">
      <!-- Default input -->

      <div class="mb-5 mt-4">
      <div class="btn-group btn-group-toggle btn-block" >
        <label id="ab" style="width:33.3%" class="btn " role="button">
          <input  v-model="fields.options"  v-on:click="servertype('custom', $event)" type="radio" name="options " value="Custom" >
          <img height="100px" class="mb-3" src="/img/server.png">
          <select v-model="fields.options_c" class="browser-default custom-select custom-select-sm">
              <option v-for="item in plans.Custom" :value="item.id">{{item.name}}</option>
           </select>
           <div class="card-footer mt-3">Already Have Server</div>
        </label>
        <label id="bc" style="width:33.3%"  class="btn" role="button" data-twbs-toggle-buttons-class-active="btn-warning" data-twbs-toggle-buttons-class-inactive="btn-error">
          <input v-model="fields.options" v-on:click="servertype('vultr', $event)" type="radio" name="options" value="Vultr">
          <img height="100px" class="mb-3" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAn1BMVEX///8rKikLCQYAAAAlIyJaWlkPDQsoJybY2Nju7u4YFhQVExEiISAbGhkeiOUhHx7i4uI2NTR6enmrqqpwcG+ampm/v7/19fS5uLg9lOfo6OgAf+Pi7vtfXl7IyMhlZWSPjo4AguQxMC93d3a+2PaEhINIR0ZBQD9/tO6y0fSwsLCWlZWgxvIAe+PN4fiNu+9lpuvx9/0sjuZRnelRUFDjiYSRAAAEOklEQVR4nO3Za3uiOByGcTEIGkDqmdF6aK3a6czu7Oz4/T/bJgrlkLS1hUtf7P17VRIKPIX8SWirBQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABf8/zt7Lu9u9sZz7OfXzob6x7b2dubuU3nDUm6w3xcaFyuxz+SufVAn/Rz0T/7629rvxtHg+zaRSgm5h5RHKzzrVk7DDq2A02EaxeKNIgTlZrDKBCHxHaoz/n1kCbs/2PrnnqO005/HkknHht73AnHf8w3u23H921H2knnDaJ72qHXNrt8b9CtGbD1+9+FphIuflu6j64TZndIJQwtCVWkQb6pEzq2E/UGIuOdcr1Kj9nTzX6ccf1zRrGqmbDVute+9fsPP80+dYOcdnaKegnVA5xZqSxRvpl264T+cTdMrR89z9URpX1Yf9Z3/bCazZuo8AjWTVjcx5FGq04YFcf5bLXUtzXefnTxl1EJF09Gq3pU5CjbuHZCfUo9NkUzN/H5of/wp9qo64z3evwbJGxtY3UF9Ueidq+KzeK+0thxi8/ILRJ2bY1f9EfVml/lJnXxWSnXbpFQv0KiHx8c70JPC6PW6DpzyDdvlrChe9jqG7Um9J3gJd+81VPa0Dg8z25KtSbx1Au4UMdukXAdqoQfXfmljFqj68yusH2DhBPdtjN2/Spda57zzVOduSv0Xz3hnX7jNzWn0Z70vCafnKo64x6L/VdIGI6nSWq02bfDZualb4l8x5sWG66Q0AmDjFTnVzcwrr22eJOaz1SWQddIWFk8DZp6UdioOlN51d4g4WFk+fU6CosZvW4SvVLvdZ/SIFCPqS/DO8sBvm4lZJCeWtWZcF3uvW6lSZLJQTqO6zdXSrXDa3XxCkvfVBI4rvkJRkfalzcbex9udNPwoiu/lLpN5xC6zjxWOrvlu5VSuYs3u9k3/jBSf+iesWsd+quF/vSl6oysjvKZ7jSGxTgsXVfDs7bQN6+jnmF8qqCn7zPGADhWpnHa3CutsJpOODHLQU1dcbpAVWcsn0eSShqtE5ZWWE0nXOnZ/0VXfrG9ryuMKtRty2RioOp3uXzvAhW6WJGaXh+Kxr7TZF5U4Rjrv9zB0qnusON7+biYL1VAWSp2DSecSdvYr0e/d/flpW8uURGdYDDqqplBbzUWamosyy8QffXOalpWOcpnEsaO9WmqY6eOqR7GyP5oTIWruqO2J6Xw9J6iMgc4JQzKxNbc59KEvn281KHL6DvLzvlR37hs3ihl9VbPheU/E175z6UTmgt3PeTMTzKubxS32nYiDKN3lp2rpfBkFMdRIB5H5m7jdlwlK2O6J9xob/xi6yBDM8xRRsHnM3xgtF7v3p1HzFajzXA3SewVYLQdVhhHm+7XlhP0hsvqiFWN423DhQYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADA/8h/CYZJF/t2gJQAAAAASUVORK5CYII=">
        
          <select v-model="fields.options_v" class="browser-default custom-select custom-select-sm">
            <option v-for="item in plans.Vultr" :value="item.id">{{item.name}}</option>
          </select>
            <div class="card-footer mt-3"><a href="https://vultr.com"> Know More <i class="fas fa-external-link-alt ml-2"></i></a></div>
       
        </label>
        <label id="cd" style="width:33.3%"  class="btn" role="button" data-twbs-toggle-buttons-class-active="btn-danger">
          <input v-model="fields.options" v-on:click="servertype('do', $event)" type="radio" name="options" value="DO">
          <img height="100px" class="mb-3" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/DigitalOcean_logo.svg/1200px-DigitalOcean_logo.svg.png">
        

          <select  v-model="fields.options_d" class="browser-default custom-select custom-select-sm">
            <option v-for="item in plans.DO" :value="item.id">{{item.name}}</option>
          </select>
          <div class="card-footer mt-3"><a href="https://vultr.com"> Know More <i class="fas fa-external-link-alt ml-2"></i></a></div>
        </label>
      </div>
   
    <p v-if="errors && errors.options" class="text-danger mt-4">{{ errors.options[0] }}</p>
     <p v-else=""  class="mt-4">{{mesg}}</p>
    <p v-if="errors && errors.options_c" class="text-danger">{{ errors.options_c[0] }}</p>
    <p v-if="errors && errors.options_v" class="text-danger">{{ errors.options_v[0] }}</p>
    <p v-if="errors && errors.options_d" class="text-danger">{{ errors.options_d[0] }}</p>
    
    </div>


    <div class="row">
      <div class="col-md-8">

        <div class="form-group">
          <label for="formGroupExampleInput">Label</label>
          <input  v-model="fields.label" name="ip" type="text" class="form-control"  placeholder="Niche , Blog etc">
          <div v-if="errors && errors.label" class="text-danger mt-2">{{ errors.label[0] }}</div>
        </div>
   
        <div v-if="custom==true">

        <div class="form-group">
          <label for="formGroupExampleInput">Authentication Method</label>
          <select  v-model="fields.auth_mode" class="browser-default custom-select ">
            <option value="Root">Root Password</option>
            <option value="Public">Public Key</option>
            <option value="PublicPassword">Public Key + Password</option>

          </select>
          <div v-if="errors && errors.auth_mode" class="text-danger mt-2">{{ errors.auth_mode[0] }}</div>
        </div>


        <div class="form-group">
          <label for="formGroupExampleInput">Server IP</label>
          <input  v-model="fields.ip" name="ip" type="text" class="form-control"  placeholder="0.0.0.0">
          <div v-if="errors && errors.ip" class="text-danger mt-2">{{ errors.ip[0] }}</div>
        </div>
        <!-- Default input -->

        <div v-if = "fields.auth_mode == 'Public' || fields.auth_mode == 'PublicPassword'" class="form-group">
          <!-- Group of default radios - option 1 -->
          <label for="formGroupExampleInput2">Paste Public Key</label>
          
          <textarea v-model="fields.public" class="form-control"></textarea>
          <div v-if="errors && errors.public" class="text-danger mt-2">{{ errors.public[0] }}</div>
  
        </div>


        <div v-if = "fields.auth_mode == 'Root' || fields.auth_mode == 'PublicPassword'" class="form-group">
          <label for="formGroupExampleInput2">Password</label>
          <input  v-model="fields.password" name="password" type="password" class="form-control"  placeholder="">
          <div v-if="errors && errors.password" class="text-danger mt-2">{{ errors.password[0] }}</div>
        </div>

        </div>
  
        
        <div class="form-group">
          <!-- Group of default radios - option 1 -->
          <label for="formGroupExampleInput2">Stack Toolkit</label>
          <div class="custom-control custom-radio mb-2">
            <input v-model="fields.stack" value="PHP" id="abs" type="radio" class="custom-control-input" >
            <label class="custom-control-label" for="abs">Complete PHP Package</label> <small data-toggle="modal" data-target="#basicExampleModal" class="text-primary ml-3">Know More</small>
           </div>

          <div class="custom-control custom-radio mb-2">
            <input v-model="fields.stack" value="Laravel" id="abc" type="radio" class="custom-control-input" >
            <label class="custom-control-label" for="abc">Only Laravel Package</label> <small data-toggle="modal" data-target="#basicExampleModal" class="text-primary ml-3">Know More</small>
          </div>


          <div v-if="errors && errors.stack" class="text-danger mt-2">{{ errors.stack[0] }}</div>
          
        </div>
  
  
      </div>
      <div class="col-md-4">
        <span class="">Optional Services
        </span><br>
        <strong>
          <small>Additional software will be installed on your system* </small>
        </strong>
       
      <div class="card-body">
        <div class="form-group">
    
          <div class="form-check">
            <input v-model="fields.stats" value="1" name="stats" id="defaultUnchecked2s" type="checkbox" class="form-check-input" >
            <label class="custom-control-label" for="defaultUnchecked2s">Enable Statistics</label>
        </div>
    
        <div class="form-check">
          <input v-model="fields.ssh" value="1" name="ssh" id="defaultUnchecked2" type="checkbox" class="form-check-input" >
          <label class="custom-control-label" for="defaultUnchecked2">SSH Tunel</label>
        </div>
    
        <div class="form-check">
          <input v-model="fields.firewall" name="firewall" value="1" type="checkbox" id="defaultUncheckesd" class="form-check-input" >
          <label class="custom-control-label" for="defaultUncheckesd">Firewall</label>
      </div>


    
      </div>
       </div>
  
      </div>
    </div>
 
    <div class="row ">
      <div class="col-12">
      



    <button type="submit" id="submit" class="btn btn-primary btn-block">Connect or Deploy Server</button>
    <p class="text-center mt-2"><small>by Managing server with Serverlized your accept to Server Management <a href="http://">  Policy</a> </small></p>
     
     
  </div>
  
    </div>

      
    </form>
  </div>
  

    

  </div>

</div>

<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PHP Package Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p>Serverlized will installed below softwares and its dependencies for the PHP Package. </p>
         <ul>
            <li>PHP 7.3.2</li>
            <li>MySQL</li>
            <li>NGINX</li>
            <li>Redis</li>
            <li>PhpMyAdmin</li>
        </ul>
          <p>Then you can add domains, install WordPress or check server health right in Server Control panel. </p>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                mesg:"",
                plans : {},
                custom:true,
                fields: {},
                errors: {}
            }
        },
        mounted() {
          this.getPlans();
        },
        methods:{
            getPlans(){
              axios.post('/plans').then(res => {

                this.plans = res.data;

              }).catch(err => {

              });
            },
            submit(){
                $('#submit').html('<i class="fa fa-spinner fa-2x fa-spin"></i>');
                $('#submit').attr('disabled', 'disabled');


                axios.post('/deploy_server/', this.fields, { headers: { 'accept': 'application/json'}}).then(res => {
                console.log(res);
                if(res.status == 200){

                
                
                Vue.$toast.open({
                    message: 'Server successfully connected.',
                    type: 'success',
                    position:'bottom-right',
                    // all other options may go here
                });

                Vue.$toast.open({
                    message: 'Please wait we are installing all softwares.',
                    type: 'success',
                    position:'bottom-right',
                    // all other options may go here
                });

                this.$router.push('/');
                }

                }).catch(err => {

                   if(err.response.status == 500){
                    Vue.$toast.open({
                    message: 'There was an Error, please check your form.',
                    type: 'error',
                    position:'bottom-right',
                    // all other options may go here
                    });

                     $('#submit').html('Connect or Deploy Server');
                    $('#submit').removeAttr('disabled');
                   }

                  if(err.response.status == 422){

                    this.errors = err.response.data.errors || {};

                    Vue.$toast.open({
                    message: 'There was an Error, please check your form.',
                    type: 'error',
                    position:'bottom-right',
                    // all other options may go here
                    });

                    $('#submit').html('Connect or Deploy Server');
                    $('#submit').removeAttr('disabled');

                  }


                });


            },
            servertype(e, d){
                
                $("#ab").removeClass('focus');
                $("#bc").removeClass('focus');
                $("#cd").removeClass('focus');
                $(d.path[1]).addClass('focus');

                if(e == "custom"){
                    this.custom = true;
                    this.mesg = "Enter your server credentials below, make sure its a fresh server & has Ubuntu 18 x64.";
                }else if(e == "vultr"){
                    this.mesg = "The server will be automatically created and managed with Serverlized Unlimited Managment.";
                    this.custom = false;
                }else if(e == "do"){
                    this.mesg = "The server will be automatically created and managed with Serverlized Unlimited Managment.";
                    this.custom = false;
                }
            }
        }
    }
</script>
