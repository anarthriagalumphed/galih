<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman About</title>
</head>

<body>
    <h1>ini about</h1>

    <!-- <h3>Galih Mahendra Putra</h3>
    <p>galihmahendrastudio@gmail.com</p>
    <img width="100" src="img/pp.png" alt="pp"> -->


    <h3><?= $name; ?></h3>
    <p><?php echo $email; ?></p>
    <img src="<?= $image; ?>" alt="<?= $name ?>" width="200">
    <!-- <script src="js/script.js"></script> -->
</body>

</html>