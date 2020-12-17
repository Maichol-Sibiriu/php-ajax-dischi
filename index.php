<?php 

include __DIR__ . '/partials/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./dist/css/style.css">
</head>
<body>
    
    <header>
    
    </header>

    <main>
        <div>

            <?php foreach($database as $album){ ?>

              <img src="<?php echo $album['poster']; ?>" alt="">

              <h3><?php echo $album['title']; ?></h3>

              <p><?php echo $album['author']; ?></p>

              <h3><?php echo $album['year']; ?></h3>

              <p><?php echo $album['genre']; ?></p>

            <?php } ?>
           
        </div>
    </main>

    <!-- javascript -->
    <script src="./dist/js/main.js"></script>
</body>
</html>