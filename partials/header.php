<header>
    <div class="container">
        <img src="./img/logo.png" alt="">
        <select v-model="artist" id=""
                @change="changeType">
            <option value="all">all</option>
            <option v-for="name in author" 
                    :value="name">{{ name }}</option>
        </select>
    </div>

    
</header>