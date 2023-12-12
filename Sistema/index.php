<?php 
	require_once/("conexao.php")
 ?>

<!DOCTYPE html>
<html>
<head>
	<title> Barbearia RegiEly</title>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/estilo_login.css">
<link rel="icon" type="image/png" href="img/favicon.ico">

</head>

<body>

<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-primary">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Faça o seu logim</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" action=" autenticar.php" method="post">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="E-mail" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="senha" type="password" value="">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Relembrar
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-primary btn-block" type="submit" value="Entrar">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>

</body>
</html>