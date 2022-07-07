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
$email = $_REQUEST["txtEmailL"];
$contraseña = $_REQUEST["txtContraseñaL"];
$con=mysqli_connect("localhost:3307","root","") or die("Problemas con la conexión");
 mysqli_select_db($con,"recyclewest")or die("La BD no responde");
 $q = mysqli_query($con,"SELECT * FROM usuarios WHERE correo = '$email'");
 
 if(mysqli_num_rows($q) == 0 ){
    echo '<script language="javascript">alert("Este correo no esta registrado");</script>';
    echo '<script language= "javascript"> window.location.href = "http://localhost/recyclewest/login.html";</script>';
 }else{
    $comprobarContraseña=$q->fetch_assoc();
    if($contraseña==$comprobarContraseña['contraseña']){
        echo '<script language= "javascript"> window.location.href = "http://localhost/recyclewest/index.html";</script>';
    }else{
        echo '<script language="javascript">alert("Contraseña Incorrecta");</script>';
        echo '<script language= "javascript"> window.location.href = "http://localhost/recyclewest/login.html";</script>';
    }
 }
 
?>
</body>
</html>

