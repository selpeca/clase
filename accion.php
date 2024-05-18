<?php
#Inicializacion de la sesion
session_start();

# Imprimir contenido de una variable
// var_dump($_POST);

# Guardamos en variables de sesion el Email y la contraseña
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];

#Redireccion al archivo index.php
header('Location:dashboard.php');
?>