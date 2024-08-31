<?php
require_once 'database.php';

putenv("DB_HOST=localhost");
putenv("DB_USER=root");
putenv("DB_PASSWORD=");
putenv("DB_NAME=groupproject");


$database= new Database(
    getenv('DB_HOST'),
    getenv('DB_NAME'),
    getenv('DB_USER'),
    getenv('DB_PASSWORD')
);

try {
    $connect = $database->getConnection();

}
catch (PDOException $e) {
    echo "<h1>FATAL ERROR: Unable to connect to database</h1>";
    die("Database connection failed.");
}

?>