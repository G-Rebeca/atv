<link href="style.css" type= "text/css"rel = "stylesheet"/>
</style>
<?php
	$nome = $_REQUEST['nome'];
	$email = $_REQUEST['email'];
	$data = $_REQUEST['data'];
	$lp = $_REQUEST['lp'];
?>
	<p class="resultado">
		<?php echo "Olá ".$nome.", seja bem vindo(a).";?>
	</p>

	<p class="resultado">
		<?php echo "E-mail: ".$email; ?>
	</p>

	<p class="resultado">
		<?php echo "Data de nascimento: ".$data; ?>
	</p>

	<p class="resultado">
		<?php echo "Linguagem de programação a ser estudada: ".$lp; ?> 
	</p>

