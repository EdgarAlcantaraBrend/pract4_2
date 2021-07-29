<?php 

    function conexion(){

        $servidor = "localhost";
        $usuario = "root";
        $password =  "";
        $bd = "sistemasweb";

        $conexion = mysqli_connect($servidor,$usuario,$password,$bd);

        return $conexion;
    }

    $conexion = conexion();

    
    $conexion = conexion();

    $sql = "SELECT  id_tarea, id_fecha, tarea, estado, fechaInsert  FROM t_tareas";
    $respuesta = mysqli_query($conexion,$sql);

    $cadenaTabla="";
    $cadenaTabla = $cadenaTabla.'<table class="table table-dark" border="1" style="border-collapse:collapse">
                                    <thead>
                                        <th>id</th>
                                        <th>id_fecha</th>
                                        <th>tarea</th>
                                        <th>estado</th>
                                        <th>Fecha</th>
                                    </thead>
                                    <tbody>';
    while ($mostrar = mysqli_fetch_array($respuesta)) {
        $cadenaTabla= $cadenaTabla. '<tr>
                                        <td>'.$mostrar['id_tarea'].'</td>
                                        <td>'.$mostrar['id_fecha'].'</td>
                                        <td>'.$mostrar['tarea'].'</td>
                                        <td>'.$mostrar['estado'].'</td>
                                        <td>'.$mostrar['fechaInsert'].'</td>
                                    </tr>';
    }

    
    
    

    $descripcion = '<h3>Esta es una tabla que muestra los datos de una base de datos.</h3><hr></hr>';
    

    
    echo $descripcion;
    echo $cadenaTabla = $cadenaTabla . '</tbody></table>';


?>

