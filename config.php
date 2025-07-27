<?php 
define('HOST', '127.0.0.1'); 
define('USER', 'root');
define('PASS', ''); 
define('BASE', 'cadastro');
define('PORT', 3307); 

$conn = new mysqli(HOST, USER, PASS, BASE, PORT);

if ($conn->connect_error) {
    die('Erro na conexão: ' . $conn->connect_error);
}
?>
