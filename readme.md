# Clase #4
## Login básico con PHP

Partiendo desde el contenido de la clase #3 vamos a proceder a conectar nuestra vista con un motor de base de datos.

Un login básico en PHP implica crear un formulario HTML para que el usuario ingrese su nombre de usuario y contraseña, conectar con una base de datos para verificar las credenciales y redirigir al usuario a una página protegida si el inicio de sesión es exitoso.
### Paso a paso
 1. Iniciar servicios Apacha y MySQL desde el xampp.
 2. Abrir el administrador de php que nos proporciona xampp, **phpMyAdmin**
 3. Crear base de datos y tabla `users` con la siguiente estructura 
    `id` => int(11) NOT NULL  PK - Llave primaria de la tabla
    `username` => varchar(15) NOT NULL - Nombre de usuario, **debe de ser único**
    `password` => text  NOT NULL - Vamos a guardar la contraseña del usuario encriptada con [MD5](https://dev.mysql.com/doc/refman/8.0/en/encryption-functions.html#function_md5)
    `is_active` =>tinyint(1) NOT NULL  DEFAULT  1 - Lo usaremos para inactivar una cuenta.

 4. Insertar un usuario por defecto:
`INSERT INTO users(username, password) VALUES ('admin',MD5('123456'))`
5. Abrir VsCode en nuestra carpeta de proyecto ubicada en `C:\xampp\htdocs` + `nombre_de_tu_carpeta` (Si al momento de la instalación del xammp seguiste los parámetros por defecto)
6. Cambiar el input `email` por `username`
7. Reemplazaremos el código que se encuentra en nuestro archivo `accion.php` por el siguiente
```
<?php

#Inicializacion de la sesion
session_start();

// Conectar con la base de datos
$db = new mysqli('localhost', 'root', '', 'test');
if ($db->connect_error) {
	die('Error de conexión con la base de datos: '  . $db->connect_error);
}
// Recibir datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Consultar la base de datos para verificar las credenciales
$sql = "SELECT * FROM users 
	WHERE username = '$username' AND  password  = MD5('$password')";
$result = $db->query($sql);

if ($result->num_rows > 0) {
	// Inicio de sesión exitoso
	$_SESSION['username'] = $username;
	header('Location:dashboard.php');
} else {
	// Inicio de sesión fallido
	echo 'Usuario o contraseña incorrectos.';
}
$db->close();
?>
```

 - Reemplazar de `dashboard.php` la referencia a la variable de sesión `$_SESSION['email']` por `$_SESSION['username']`
 - Proteger nuestra app desde el archivo `header.php` 
Al inicio del archivo agregar  
```
<?php
session_start();
if (!isset($_SESSION['username'])) {
	header('Location: index.php');
}
?>
```
Para agregar
- No permitir que el usuario ingrese datos en blanco en el formulario
 - **Indicar que las credenciales son inválidas** en el archivo `index.php`.
 - Mejorar la estructura de nuestros archivos
 - Usar [Mockaroo - Random Data Generator and API Mocking Tool](https://www.mockaroo.com/) para poblar nuestra tabla
