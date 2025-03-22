<?php

try {

    $pdo = new PDO(
        'mysql:host=localhost;dbname=pdo;charset=utf8;connect_timeout=15',
        'root',
        '',
        [
            PDO::ERRMODE_EXCEPTION => true,
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {
    die($e->getMessage());
}


// Retrieving Data from database
// -----------------------------------------------------------------

//   Retrieve first row in table
// $stat = $pdo->prepare(' SELECT * FROM users ');
// $stat->execute();
// $result = $stat->fetch();
// echo '<pre>'.  var_dump($result) . '</pre>';


//   Retrieve All rows in table
$stat = $pdo->prepare(' SELECT * FROM users ');
$stat->execute();
$result = $stat->fetchAll();
echo '<pre>'.  var_dump($result) . '</pre>';




