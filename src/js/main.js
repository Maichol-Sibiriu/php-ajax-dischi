import Vue from 'vue';
import axios from 'axios';

const app = new Vue({

    el: '#app',
    data: {

      //    riferimento array
      album: [],
      artist: '',
      author: [],

    },
    created(){

        axios.get('http://localhost/php-ajax-dischi/partials/database.php')
        .then( response => {
      
           console.log(response.data);
           this.album = response.data;

           this.album.forEach(items => {
              
             this.author.push(items.author);
               
          });


        })
        .catch( error => {
    
          console.log(error);
        })
    },
    methods:{
      changeType(){
          console.log(this.artist);
          axios.get('http://localhost/php-ajax-dischi/partials/database.php',{
            params:{
              artist: this.artist,
            }
          })
          .then( response => {
      
            console.log(response.data);
            this.album = response.data;

          })
          .catch( error => {
    
            console.log(error);
          })
      }
    }

});