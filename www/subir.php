<?php
// Verificamos si se envió un archivo
if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
    // Directorio donde se guardará el archivo
    $directorioDestino = '../../archivos/';
    
    // Aseguramos que el directorio exista
    if (!file_exists($directorioDestino)) {
        mkdir($directorioDestino, 0777, true);
    }
    
    // Movemos el archivo a la ubicación deseada
    $nombreArchivo = basename($_FILES["archivo"]["name"]);
    $rutaDestino = $directorioDestino . $nombreArchivo;
    
    if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $rutaDestino)) {
        $response = [
            'mensaje' => "El archivo se ha cargado exitosamente en $rutaDestino",
            'destino' => $rutaDestino
        ];
    } else {
        $response = [
            'mensaje' => 'Error al mover el archivo a la ubicación de destino'
        ];
    }
} else {
    $response = [
        'mensaje' => 'Error al subir el archivo. Código de error: ' . $_FILES["archivo"]["error"]
    ];
}
header('Content-Type: application/json');
echo json_encode($response);
?>
