<main>
    <div class="container">

        <div class="album"
             v-for="cd in album">

            <img :src="cd.poster" alt="">
    
            <h3>{{ cd.title }}</h3>
    
            <p>{{ cd.author }}</p>
    
            <h3>{{ cd.year }}</h3>
    
            <p>{{ cd.genre }}</p>
        </div>

    </div>
</main>