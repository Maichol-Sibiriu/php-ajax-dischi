import Vue from 'vue';
import axios from 'axios';

const app = new Vue({

    el: '#app',
    data: {

      //    riferimento array
      album: [],
      artist: 'all',
      author: [],
      genre: 'all',
      typeMusic: [],

    },
    created(){

        axios.get('http://localhost/php-ajax-dischi/partials/database.php')
        .then( response => {
      
           console.log(response.data);
           this.album = response.data;

           this.album.forEach(items => {
              
            //  push autori
             this.author.push(items.author);

            //  push generi
             this.typeMusic.push(items.genre);
          });


        })
        .catch( error => {
    
          console.log(error);
        })
    },
    methods:{

      // funzione per cambio artista
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
      },

      // funzione per cambio genere
      changeGenre(){
        console.log(this.genre);
        axios.get('http://localhost/php-ajax-dischi/partials/database.php',{
          params:{
            genre: this.genre,
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