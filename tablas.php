<?php
 include 'conexion.php';
 $tabla='gestion';
 $query = "SELECT * FROM oms.gestion";
 $stmt = mysqli_query ($con,$query) ;
 $resultado= array();
 while ($fila=mysqli_fetch_array($stmt)){
        $resultado[]=$fila;
 }
 $n=$stmt->num_rows;
 /*-----------------sedes------------------------------*/    
 $tabla1='sedes';
 $query = "SELECT * FROM ".$tabla1;
 $stmt = mysqli_query ($con,$query) ;
 $resultado1= array();
 while ($fila=mysqli_fetch_array($stmt)){
       $resultado1[]=$fila;
 }
 $n1=$stmt->num_rows;

 /*------------------inversion------------------------*/
 $tabla2='inversion';
 $query = "SELECT * FROM ".$tabla2;
 $stmt = mysqli_query ($con,$query) ;
 $resultado2= array();
 while ($fila=mysqli_fetch_array($stmt)){
    $resultado2[]=$fila;
 }
 $n2=$stmt->num_rows;

 /*---------------actuacionesproyectos---------------*/
 $tabla3='actuacionesproyectos';
 $query = "SELECT * FROM ".$tabla3;
 $stmt = mysqli_query ($con,$query) ;
 $resultado3= array();
 while ($fila=mysqli_fetch_array($stmt)){
       $resultado3[]=$fila;
 }
 $n3=$stmt->num_rows;

 mysqli_close($con);

?>