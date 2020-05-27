<?php
  class Conexion extends mysqli
  {
    
	public function __construct()
	{
	    $servidor="localhost";
        $basadatos="examen";
        $usuario="root";
        $password="";

		parent::__construct($servidor,$usuario,$password,$basadatos);
		$this->query("SET NAMES 'utf8';");
		$this->connect_errno ? die('Error en la conexión') : $error="Conectado a ".$basadatos;
		unset($error);
	}
  }
?>