<?php
require 'admin/function.php';
require 'admin/database.php';



session_start();
$user = intval($_SESSION['auth']['id']);

$db = Database::connect();

$jeu = $_POST['nom_pre'];
$page = $_POST["page"];

$statement = $db -> prepare('INSERT INTO `precommande`(`name_pre`, `date_pre`, `id_user`) VALUES (?,?,?)');
$statement = $statement -> execute(array($jeu,date('Y-m-d',time()),$user));

if($statement === true){
    $s='1';
    
}else{
    $s='0';
}


$db = null;

header('location:'.$page);
?>

