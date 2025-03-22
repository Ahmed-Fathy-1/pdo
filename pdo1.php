<?php 


// connection with PDO
// -------------------------------


try{

    $pdo = new PDO('mysql:host:localhost;dbname=pdo', 'root', '', [
        PDO::ATTR_PERSISTENT => true,
        PDO::ERRMODE_EXCEPTION => true
    ]); 

} catch (PDOException $e) {
    die( $e->getMessage() );
}

