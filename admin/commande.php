<?php
require 'function.php';
require 'database.php';



session_start();
$user = intval($_SESSION['auth']['id']);

$db = Database::connect();

$jeu = $_POST['id_jeu'];


$statement = $db -> prepare('INSERT INTO `orders`(`date_ord`, `id_item`, `id_user`) VALUES (?,?,?)');
$statement = $statement -> execute(array(date('Y-m-d',time()),$jeu,$user));

if($statement === true){
    $s='1';
    
}else{
    $s='0';
}


$db = null;

header('location:view.php?id='.$_POST['id_jeu'].'&page='.$_POST['page'].'&succes='.$s);
?>

