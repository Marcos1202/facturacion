<?php
$archivo_a_eliminar = "../../archivos/".$_POST['nombre']; // Reemplaza con la ruta de tu archivo

if (file_exists($archivo_a_eliminar)) {
    if (unlink($archivo_a_eliminar)) {
        $response = [
            'mensaje' => 'El archivo se ha eliminado correctamente.'
        ];
        
    } else {
        $response = [
            'mensaje' => 'No se pudo eliminar el archivo.'
        ];
        
    }
} else {
    $response = [
        'mensaje' => 'El archivo no existe.'
    ];
    
}
header('Content-Type: application/json');
echo json_encode($response);
?>
