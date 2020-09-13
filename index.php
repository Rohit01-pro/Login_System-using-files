<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <?php
          if(isset($_SESSION['user'])){
              echo "<h1>Welcome ". $_SESSION['user'] ."</h1>";
          }
        ?>
        <h1>Home</h1>
        <p>This is a Home Page.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem commodi a numquam corrupti ea modi excepturi incidunt aliquam sit nisi! Nesciunt sint atque esse quam suscipit. Vitae atque, laudantium nihil aliquid modi ducimus saepe sed temporibus porro dolorum et odit officia maxime explicabo dignissimos iste illo aut hic odio asperiores.</p>
    </div>
</body>

</html>