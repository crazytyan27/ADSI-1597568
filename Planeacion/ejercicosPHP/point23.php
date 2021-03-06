<?php

/**
 * An associative array of elements uploaded to the current script through the
 *  POST method. The global array $_FILES will contain all the information of
 *  the uploaded files. And it is used:
 */
$dir_subida = '/var/www/uploads/';
$fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}

echo 'Más información de depuración:';
print_r($_FILES);

print "</pre>";