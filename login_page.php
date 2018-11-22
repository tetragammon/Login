<?php

include_once('config.php');

if(isset($_GET['login'])) {

	$username	= $_GET['username'];
	$parola		= $_GET['parola'];

	$sql_username = "select from useri username";
	$sql_parola = "select from useri";
}

?>

<div class="body">
	<div class="jumbotron">

		<h1 class="display-4">Arvato Bertelsmann</h1>
		<p class="lead">Va rugam sa introduceti datele de logare.</p>

	</div>

	<form class="logare">
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
			<button type="submit" name="login" class="btn btn-primary btn-lg">Login</button>
		</div>
	</form>
</div>