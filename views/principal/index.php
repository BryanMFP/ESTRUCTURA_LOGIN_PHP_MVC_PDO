<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
    <h1>Bienvenido <?= $this->d['user']->getUsername() ?></h1>
    <div>Hola Mundo</div>
    <li><a href="logout">Cerrar sesión</a></li>
</body>
</html>