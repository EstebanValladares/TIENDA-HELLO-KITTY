<?php
    include("includes/funciones.php");
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c91ca5f5f4.js" crossorigin="anonymous"></script>
    <title> registro</title>
<link rel="stylesheet" href="/source/estilos.css">
</head>
<body>
    <form method="post">
    <h1>Registro</h1>
    <p>Inicia tu registro</p>

    <div class="input-wrapper">
        <input type ="text" name="name" placeholder="Nombre"> 
        <i class="fa-solid fa-user" style="color: #e05dea;"></i>
    </div>
    <div class="input-wrapper">
        <input type ="text" name="apeido" placeholder="Apeidos"> 
        <i class="fa-regular fa-user"  style="color: #e05dea;"></i>
    </div>
    <div class="input-wrapper">
        <input type ="email" name="correo" placeholder="Email"> 
        <i class="fa-solid fa-envelope" style="color: #e05dea;"></i>
    </div>
    <div class="input-wrapper">
        <input type ="tel" name="telefono" placeholder="Telefono">
        <i class="fa-solid fa-phone" style="color: #e05dea;"></i> 
    </div>
    <div class="input-wrapper">
        <input type ="password" name="password" placeholder="Contraseña"> 
        <i class="fa-solid fa-lock" style="color: #e05dea;"></i>
    </div> 

    <input class="btn" type="submit" name="register" value="Registrarse" >
    </form>

    
</body>