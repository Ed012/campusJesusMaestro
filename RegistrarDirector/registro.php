
<?php
include 'conexion.php';

    $per_email=$_POST['email'];
    $per_contra=$_POST['contra'];

$sql="INSERT INTO persona(per_email,per_contra) VALUES('$per_email','$per_contra')";
$result=mysqli_query($conexion,$sql);
if(!$result){
    echo ' Error al registrase';
} else{
    echo 'Bien lo hiciste';
}
//cerrar conexion
mysqli_close($conexion);


