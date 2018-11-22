<?php

include_once('config.php');

if(isset($_GET['creare_cont'])) {

	$nume		= $_GET['nume'];
	$prenume	= $_GET['prenume'];
	$username	= $_GET['username'];
	$parola		= $_GET['parola'];

	$sql = "insert into useri (nume,prenume,username,parola) values ('$nume','$prenume','$username','$parola')";

}

	if($conn->query($sql)) {

	 echo"Inregistrare reusita";

	}else {
	
	echo "Eroare la conectare:".$conn->error;
	}



?>
<div class="body">
	<div class="jumbotron">
		<h1 class="display-4">Arvato Bertelsmann</h1>
		 <p class="lead">Va rugam introduceti datele necesare crearii contului.</p>
	</div>

	<form class="logare">
		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label">Nume</label>
			<div class="col-sm-10">
				<input type="text" name="nume" class="form-control" id="inputEmail3" placeholder="Nume">
			</div>
		</div>
		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label">Prenume</label>
			<div class="col-sm-10">
				<input type="text" name="prenume" class="form-control" id="inputEmail3" placeholder="Prenume">
			</div>
		</div>
		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
			<div class="col-sm-10">
				<input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username">
			</div>
		</div>
		<div class="form-group row">
			<label for="inputPassword3" class="col-sm-2 col-form-label">Parola</label>
			<div class="col-sm-10">
				<input type="password" name="parola" class="form-control" id="inputPassword3" placeholder="Parola">
			</div>
		</div>
		<div class="col-sm-10 creare">
			<button type="submit" name="creare_cont" class="btn btn-primary btn-lg">Creaza cont</button>
		</div>
	</form>

</div>