<?php

class User{

    private $db;

    public $id;
    public $username;
    public $is_active;
    private $password;

    public function __construct()
    {
		try{
            //Conectando a la bd
            $this->db = new mysqli('localhost:3307', 'root', '', 'clase');
		}catch(Exception $e){
			die($e->getMessage());
		}
	}

    public function login($username,$password){
        // Consultar la base de datos para verificar las credenciales
        $sql = "SELECT * FROM users WHERE username = '$username' AND  password  = MD5('$password')";
        // Ejecutamos la consulta
        $result = $this->db->query($sql);
        // Cerramos la conexión
        $this->db->close();
        // Resornamos el resultado
        return $result;
    }
}