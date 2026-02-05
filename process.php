<?php

include("connection.php");

$email = $_POST['email'];
$password = $_POST['senha'];
$confirm_password=$_POST['confirmaSenha'];

echo $email, $password, $confirm_password;

$sql = "INSERT INTO usuario (email, PASSWORD) VALUES ('$email', '$password')";

if($conn->query($sql) === TRUE){
    echo "usuario cadrastrado com sucesso";
}
else{
    ECHO "erro: " . $sql . "<br>" . $conn->error;
}


$conn->close();