<header>
    <div class="container">
        <img src="./img/logo.png" alt="">

        <!-- ricerca genere -->
        <div class="search">
           <h2>genre</h2>
           <select v-model="genre"
                @change="changeGenre">
                <option value="all">all</option>
                <option v-for="type in typeMusic" 
                    :value="type">{{ type }}</option>
            </select>
        </div>

        <!-- ricerca artista -->
        <div class="search">
           <h2>artist</h2>
           <select v-model="artist"
                @change="changeType">
                <option value="all">all</option>
                <option v-for="name in author" 
                    :value="name">{{ name }}</option>
            </select>
        </div>
    </div>

    
</header>