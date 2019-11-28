 <?php   
 //CerrarSesion.php  
 session_start(); 
 // Eliminamos la sesion activa y redirige al login 
 session_destroy();  
 header("location:index.php");  
 ?>  