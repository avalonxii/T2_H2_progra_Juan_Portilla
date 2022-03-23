<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hito</title>
</head>
<body>
    <header>
        <?php require_once('Views/Layouts/header.php') ?>
    </header>

    <main>
        <h2>estas en Layouts</h2>   
        <a href="?controller=usuario&action=register">registrar</a>
        <a href="?controller=usuario&action=index">bienvenido</a>
        <a href="?controller=usuario&action=show">ver</a>
        <?php require_once('routing.php'); ?>
    </main>

    <footer>
    <?php require_once('Views/Layouts/footer.php') ?>
    </footer>
</body>
</html>