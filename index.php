<?php
include_once 'model/Conexao.class.php';
include_once 'model/Manager.class.php';

$manager = new Manager();
?>


<!DOCTYPE html>
<html>
<head>
	<?php include_once 'view/dependencias.php'; ?>
</head>
<body>

<div class="container">
	
	<h2 class="text-center"> Lista de Usuarios <i class="fa fa-users"></i></h2>

	<h5 class="text-right">
		<a href="view/page_register.php" class="btn btn-primary btn-xs">
			<i class="fa fa-user-plus"></i>
		</a>
	</h5>

	<!-- Iniciando a tabela -->

	<div class="table-responsive">
		
		<table class="table table-hover">
			<thead class="thead">
				<tr>
					<th>ID</th>
					<th>NOME</th>
					<th>E-MAIL</th>
					<th>CPF</th>
					<th>TELEFONE</th>
					<th>SEXO</th>
					<th colspan="3">AÇÕES</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($manager->listClient("users") as $user):?>
				<tr>
					<td><?php echo $user['user_id']; ?></td>
					<td><?php echo $user['nome']; ?> </td>
					<td><?php echo $user['email']; ?></td>
					<td><?php echo $user['cpf']; ?></td>
					<td><?php echo $user['telefone']; ?></td>
					<td><?php echo $user['sexo']; ?></td>
					<td>
						<form method="POST" action="view/page_update.php">
							<input type="hidden" name="user_id" value="<?=$user['user_id']?>">
							<button class="btn btn-warning btn-xs">
								<i class="fa fa-user-edit"></i>
							</button>
						</form>
					</td>
					<td>
						<form method="POST" action="controller/delete_client.php" onclick="return confirm('Tem certeza que deseja excluir ?');">
						<input type="hidden" name="user_id" value="<?=$user['user_id']?>">	
						<button class="btn btn-danger btn-xs">
								<i class="fa fa-trash"></i>
							</button>
						</form>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

	</div>

	<!-- Fim da Tabela -->

</div>

</body>
</html>