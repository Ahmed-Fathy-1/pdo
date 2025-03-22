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

// Differences between Execute Query And Exec
// -----------------------------------------------------------------
// exec() => run command and return row effected;

// query() => run command and return statement;

/* execute() => 2 step for run command ;
**   step 1 => prepare() for statement
**   step 2 => executed and return statement
*/

// $stat = $pdo->query(' SELECT * FROM users ')->fetchAll();
// foreach($stat as $bit){
    // print_r($bit);
// }

// $stat = $pdo->exec(' SELECT * FROM users ');
// if($stat){
//     echo 'there is ' . $stat . 'user(s) deleted from table';
// }

$stat = $pdo->prepare(' SELECT * FROM users ');
$stat->execute();
foreach($stat as $bit){
    print_r($bit);
}
