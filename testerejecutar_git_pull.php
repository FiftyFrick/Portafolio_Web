<?php
// ejecutar_git_pull.php

// Configurar el directorio del repositorio git
//  $repo_dir = '/ruta/a/tu/repositorio';

// Cambiar el directorio a la ubicación del repositorio
// chdir($repo_dir);

// Ejecutar el comando git pull y capturar la salida
$output = [];
$return_var = null;
exec('git pull', $output, $return_var);

// Mostrar el resultado del comando
echo "<pre>";
echo "Salida del comando git pull:\n";
echo implode("\n", $output);
echo "\n\nCódigo de retorno: $return_var";
echo "</pre>";

