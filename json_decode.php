<?php 
$jsonString ='{
    "Nombre":"Alex",
    "Apellido":"Rubio"
}';
$data = json_decode($jsonString, true);
foreach ($data as $key=> $data1) {
    echo $key, " : ";
    echo $data1, "\n";
}
?> 