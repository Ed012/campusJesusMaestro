<?php
//Comienza session de usuario
    session_start();
    ?>

<?php
  //Variables que capturan los datos
   $identificador=$_POST['iden'];
   $contraseña=$_POST['contra'];
   
   //conectando a la bd
   $conexion = mysqli_connect("localhost","root","","bd_campuscolegio");
  //Consulta SQL para validar:
   $consulta = "select * from usuarios where user_identificador='$identificador' and user_contra='$contraseña'";
   //Ejecutando consulta:
   $resultado = mysqli_query($conexion, $consulta);
  
   //Comparando resultados, 0 si no coincide datos, 1 o mas si coninciden
   $filas = mysqli_num_rows($resultado);
   //validando :
   if ($filas>0){
        $_SESSION['loggedin']= true;
        $_SESSION['username']= $identificador;
        $_SESSION['star']= time();
        header("location: http://localhost/campuscolegio/HomeCampus/control.php");
   }
   else{
       echo "Error en la autentificacion";
   }
   //Cerrando conexion:
   mysqli_close($conexion);

