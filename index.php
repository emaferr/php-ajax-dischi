<?php
require __DIR__ . '/db/albums.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./dist/css/app.css">
</head>
<body>

    <h1>Start</h1>

    <p><?php var_dump($albums)?></p>
    
    <script src="./dist/js/app.js"></script>
</body>
</html>