<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./dist/css/style.css">
</head>
<body>
    
    <div id="app">

        <!-- header -->
        <?php 

          require_once __DIR__ . '/partials/header.php';

        ?>

        <!-- main -->
        <?php 

          require_once __DIR__ . '/partials/main.php';

        ?>

    </div>


    

   <!-- javascript -->
   <script src="./dist/js/main.js"></script>
</body>
</html>