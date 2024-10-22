<?php
$host = 'localhost'; // ou seu host
$user = 'seu_usuario';
$password = 'sua_senha';
$dbname = 'projeto.php_08';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conexão bem-sucedida!";
?>
