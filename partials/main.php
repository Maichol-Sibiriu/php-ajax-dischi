<main>
    <div class="container">

        <?php foreach($database as $album){ ?>

            <div class="album">
                <img src="<?php echo $album['poster']; ?>" alt="">
    
                <h3><?php echo $album['title']; ?></h3>
    
                <p><?php echo $album['author']; ?></p>
    
                <h3><?php echo $album['year']; ?></h3>
    
                <p><?php echo $album['genre']; ?></p>
            </div>

         <?php } ?>
           
    </div>
</main>