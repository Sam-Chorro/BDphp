<?php

    $user='root';
    $contra='';
    $bdname='bd_almacen';

    try {
        $connect = new PDO(
        'mysql:host=localhost;
        dbname='.$bdname,
        $user,
        $contra
        );
    } catch (Exception $e) {
        echo "Error: ".$e->getMessage();
    }

?>

