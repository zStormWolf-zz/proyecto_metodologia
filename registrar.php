<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$usuario = $_REQUEST["txtUsuarioR"];
$email = $_REQUEST["txtEmailR"];
$con=mysqli_connect("localhost:3307","root","") or die("Problemas con la conexión");
 mysqli_select_db($con,"recyclewest")or die("La BD no responde");
 $q = mysqli_query($con,"SELECT * FROM usuarios WHERE nombre_usuario = '$usuario'");
 $q1 = mysqli_query($con, "SELECT * FROM usuarios WHERE correo = '$email'");
 if(mysqli_num_rows($q) != 0 ){
    echo '<script language="javascript">alert("Este usuario ya existe");
 </script>';
 echo '<script language= "javascript"> window.location.href = "http://localhost/recyclewest/registrarse.html";</script>';

 }elseif (mysqli_num_rows($q1) != 0 ) {
    echo '<script language="javascript">alert("Este correo ya esta registrado");</script>';
    echo '<script language= "javascript"> window.location.href = "http://localhost/recyclewest/registrarse.html";</script>';
 }else{
    mysqli_query($con,"insert into usuarios(nombre, apellido, nombre_usuario, correo, contraseña) values ('$_REQUEST[txtNombreR]','$_REQUEST[txtApellidoR]','$_REQUEST[txtUsuarioR]','$_REQUEST[txtEmailR]','$_REQUEST[txtContraseñaR]')")
    or die("Problemas".mysqli_error($con));
    mysqli_close($con);
    echo '<script language="javascript">alert("se ingreso correctamente");</script>';
    echo '<script language= "javascript"> window.location.href = "http://localhost/recyclewest/login.html";</script>';


 }
 
?>
</body>
</html>

