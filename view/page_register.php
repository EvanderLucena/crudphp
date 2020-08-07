<?php include_once 'dependencias.php'; ?>

<h2 class="text-center">
	Registrar <i class="fa fa-user-plus"></i>
</h2><hr>

<form method="POST" action="../controller/insert_client.php">
	
<div class="container">
	<div class="form-row">
		
		<div class="col-md-6">
            Nome: <i class="fa fa-user"></i>
            <input class="form-control" type="text" name="nome" required autofocus><br>    
		</div>

		<div class="col-md-6">
			E-mail: <i class="fa fa-envelope"></i>
			<input class="form-control" type="email" name="email" required><br>
		</div>

		<div class="col-md-4">
			CPF: <i class="fa fa-address-card"></i>
			<input class="form-control" type="text" name="cpf" required id="cpf"><br>
		</div>

		<div class="col-md-4">
			Telefone: <i class="fab fa-whatsapp"></i>
			<input class="form-control" type="text" name="telefone" required id="telefone"><br>
		</div>

		<div class="col-md-6">
            Sexo: 
            <br>
		    <div class="form-check form-check-inline">
                 <input class="form-check-input" type="radio" name="sexo" id="Masculino" value="Masculino">
                 <label class="form-check-label" for="inlineRadio1">Masculino <i class="fas fa-male"></i></label>
            </div>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="Feminino" value="Feminino">
                <label class="form-check-label" for="inlineRadio2">Feminino<i class="fas fa-female"></i></label>
            </div>
		</div>

    </div>
    <br>
    <div class="col-md-4">
			
			<button class="btn btn-primary btn-lg">
				
				Salvar <i class="fa fa-user-plus"></i>

			</button><br><br>

			<a href="../index.php">
				Voltar
			</a>

		</div>
</div>
    

</form>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 

<script type="text/javascript">
	$(document).ready(function(){
		$("#cpf").mask("000.000.000-00");
		$("#telefone").mask("(00) 00000-0000");
	});
</script>