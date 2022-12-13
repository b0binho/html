<?php 

$conn = mysqli_connect('localhost','4ai_fak','1234','4ai_faktura');
if (!$conn) die("blont");

function dbGetUser($login, $password)
{
    global $conn;
    $password =md5($password);
    $result = mysqli_query(
        $conn,
        "SELECT name, lastname FROM 'users' WHERE login='$login'
        AND password='$password';"
    );

}
