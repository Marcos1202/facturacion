<?php
/*
 * Copyright (C) 2017-2020 CRLibre <https://crlibre.org>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

function doTest()
{
    return "Test :)";
}

function uploadCert()
{
    //return params_get('archivo');
    if(true) {
        // Ruta donde deseas guardar el archivo
        $rutaGuardado = '';

        // Nombre del archivo en el servidor
        return $nombreArchivo = $_FILES['archivo']['name'];

        // Mueve el archivo temporal al directorio deseado
        if(move_uploaded_file($_FILES['archivo']['tmp_name'],  $nombreArchivo)) {
            // El archivo se ha cargado exitosamente
            return "El archivo se ha cargado exitosamente.";
        } else {
            // Ocurrió un error al cargar el archivo
            return "Error al cargar el archivo.";
        }
    }
        return "No se ha enviado ningún archivo o se produjo un error.";
    
   
}

function uploadXml()
{
    modules_loader("files");
    $dets = files_upload("hacienda", false, "xml");
    return $dets;
}
