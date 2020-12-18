import Vue from 'vue';
import axios from 'axios';

const app = new Vue({

    el: '#app',
    data: {

       //    riferimento array
       album: [],

    },
    created(){

        axios.get('http://localhost/php-ajax-dischi/partials/database.php')
        .then( response => {
      
           console.log(response.data);
           this.album = response.data;

        })
        .catch( error => {
    
          console.log(error);
        })
    },

});