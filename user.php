<?php
   include('ValidarUser.php');

   $validar = new ValidarUsuario;

   $user=$_POST['nombre'];
   $password=$_POST['pass'];

   $resultado=$validar->ValidarUser($user, $password);

   var_dump($resultado);

   if($resultado->num_rows == 1)
   {
   	  header("location:Registros.php"); 
   }  
   
   else
   {
	   header("location:index.html");
   } 
	
?>
