<template>
   
</template>

<script>
    export default {
        data(){
            return {
                fields: {},
                errors: {}
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            submit(){
            axios.post('/user/login', this.fields).then(response => {
                
               

            }).catch(error => {
                if (error.response.status === 422) {
                    console.log(error.response.data);
                    this.errors = error.response.data.errors || {};
                }
            });
            
          }
        }
    }
</script>
