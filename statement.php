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

//insert statement
// $stat = $pdo->query(' INSERT INTO users (name, password, permission) VALUES ("Ahmed", "123456", "4") ');

//update statement
// $stat = $pdo->query(' UPDATE users SET name = "Fathy" WHERE permission = "4" ');
// $stat = $pdo->query(' UPDATE users SET permission = "1" ');

//delete statement
// $stat = $pdo->query(' DELETE FROM users WHERE id = "4" ');

// $stat = $pdo->query(' SELECT * FROM users ')->fetchAll();
$stat = $pdo->query(' SELECT DISTINCT name FROM users ')->fetchAll();
foreach($stat as $bit){
    print_r($bit);

}
