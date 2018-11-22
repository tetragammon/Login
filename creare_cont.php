<?php

include_once('config.php');

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
				<input type="text" class="form-control" id="inputEmail3" placeholder="Nume">
			</div>
		</div>
		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label">Prenume</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputEmail3" placeholder="Prenume">
			</div>
		</div>
		<div class="form-group row">
			<label for="inputPassword3" class="col-sm-2 col-form-label">Parola</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="inputPassword3" placeholder="Parola">
			</div>
		</div>
		<div class="col-sm-10 creare">
			<button type="submit" class="btn btn-primary btn-lg">Creaza cont</button>
		</div>
	</form>

</div>