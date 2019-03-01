<?php $this->titre = " Administration"; ?>
	
<div class="container">
	<div class="row">
		<div class="col-md-12 espace_titre">
			<h1>Connexion</h1>
			<form data-toggle="validator" role="form" id="loginAdminForm" action="?controler=admin&action=verifLoginForm" method="post">
				<div class="form-group has-danger">
					 <label for="login" class="control-label">Login : </label>
			         <input type="text" class="form-control" id="login" name="login" placeholder="login" required>
			         <div class="help-block with-errors"></div>
				</div>     
				<div class="form-group has-danger">
					 <label for="password" class="control-label">Password :</label>
			         <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
			         <div class="help-block with-errors"></div>
				</div>		
				<input type="submit" class="btn btn-danger" id="loginAdmin" value="LOG IN" />	
			</form>	
		</div>
		
	</div>	
</div>