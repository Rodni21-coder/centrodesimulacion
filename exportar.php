<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $tipoLiquido = $_POST['tipoLiquido'];
    $mililitros = $_POST['mililitros'];
    $galones = $_POST['galones'];
    $pruebaPiloto = $_POST['pruebaPiloto'];

    // Crear un array con los datos
    $data = array($nombre, $tipoLiquido, $mililitros, $galones, $pruebaPiloto);

    // Abrir el archivo CSV en modo de añadir
    $file = fopen('datos.csv', 'a');

    // Escribir los datos en el archivo CSV
    fputcsv($file, $data);

    // Cerrar el archivo
    fclose($file);

    // Mensaje de éxito
    echo "Datos exportados correctamente a datos.csv";
} else {
    echo "Método de solicitud no válido.";
}
?>