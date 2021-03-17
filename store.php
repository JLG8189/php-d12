<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "php-d12";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {
            echo "connection failed: " . $e->getMessage();
        }


//Validar recepcion de datos
if(!empty($_POST['tarea']))
{
    //Recibir datos
    $tarea = $_POST['tarea'];   
    $descripcion = $_POST['descripcion'];   
    $prioridad = $_POST['prioridad'];   
    $urgente = $_POST['urgente'];   
    $tipo = $_POST['tipo'];   

    //Validar datos

    //Guardar la DB
    $sql = "INSERT INTO tareas (tarea, descripcion, prioridad, urgente, tipo) VALUES ('$tarea', '$descripcion', '$prioridad', '$urgente', '$tipo')";

    $conn->exec($sql);

    //Redireccionar
    header('location: index.php');
}
else
{
    echo "No hay datos enviados.";
}

?>