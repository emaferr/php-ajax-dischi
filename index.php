<?php
require __DIR__ . '/db/albums.php';
// require __DIR__ . '/db/albums.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" href="./src/img/icona_dischi.png" type="image/png" />
    <!-- Title -->
    <title>PHP | Dischi</title>
    <!-- Style CSS -->
    <link rel="stylesheet" href="./dist/css/app.css">
</head>

<body class="bg_body">

    <header>
        <nav class="navbar bg_card mb-4">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./src/img/icona_dischi.png" alt="" width="40" height="40" class="d-inline-block align-text-middle">
            </a>
            </div>
        </nav>
    </header>

    <main>

        <div class="contenitore_card d-flex justify-content-center flex-wrap  mb-5">

            <?php
                foreach ($albums as $album) {
                    # code...
                    ?>
                    <div class="card bg_card rounded-0 mt-4 mx-4 shadow-sm" style="width: 12rem;">
                        <img style="width: 190px; height: 190px;" src="<?php echo $album["poster"]?>" class="card-img-top pt-3 px-3" alt="">
                        <div class="card-body text-center">
                            <h4 class='card-title text-white'><?php echo $album["title"]?></h4>
                            <div class='card-text d-flex flex-column text-white-50'>
                                <span><?php echo $album["author"]?></span>
                                <span><?php echo $album["year"]?></span>
                            </div>
                        </div>
                    </div>
            <?php }
            ?>

        </div>

    </main>

    <script src="./dist/js/app.js"></script>
</body>

</html>