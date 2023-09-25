<?php
include("conexion.php");

//Registro de usuarios en login
if(isset($_POST['register'])){  //si se presiona el boton de registro
    if(                                  //verifica que los campos no esten vacios
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['apeido']) >= 1 &&
        strlen($_POST['correo']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['password']) >= 1
    ){
        $name = trim($_POST['name']);           //trim elimina los espacios en blanco
        $apeido = trim($_POST['apeido']);
        $correo = trim($_POST['correo']);
        $telefono = trim($_POST['telefono']);
        $password = trim($_POST['password']);
        $fecha = date("d/m/y"); 

        //se crea la consulta
        $consulta = "INSERT INTO                
         users(name, apeido, correo, telefono, password, fecha) 
         VALUES ('$name','$apeido','$correo','$telefono','$password','$fecha')";
        
        $resultado = mysqli_query($conexion,$consulta); //ejecuta la consulta y se almacena en resultado
        if ($resultado){
            ?>
            <h3 class="succes">¡Te has registrado correctamente!</h3>
            <?php
        } else {
            ?>
            <h3 class="error">¡Ups ha ocurrido un error!</h3>
            <?php
        }
}
}

?>