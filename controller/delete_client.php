<?php  

include_once '../model/Conexao.class.php';
include_once '../model/Manager.class.php';

$manager = new Manager();

$user_id = $_POST['user_id'];

if(isset($user_id) && !empty($user_id)) {
	$manager->deleteClient("users", $user_id);

	header("Location: ../index.php?client_deleted");
}

?>