<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="style/my_style.css"/>  
		<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'/>
		<title>Connexion</title>
	</head>
	<body>
		<div class="body-logIn">
			<div class="all-c">
				<div class="all-log">
					<div class="content"> 	
						<div class="auth">
							<form method="POST" action="index.php?controller=LogIn&action=log" class="log">	
								<?php 
						 		if(isset($err))
						 		{
						 		?>
						 		<div class="err"> <?php echo $err?></div>
						 		<?php 
						 		}
						 		?>
								<label for="mail">*Mail address:   </label>
								<input type="email" name="mail" id="mail" class="form-control membersadded" required/><br/>
								<br/><label for="mdp">*Mot de passe:   </label>
								<input type="password" name="mdp" id="mdp" class="form-control membersadded" required/><br/><br/>	
								<div class="addAMember">
									<input type="submit" name="Connexion" value="Connexion" class="btn addButMem" />
								</div>		
								<p class="askSign">Vous n’avez pas de compte ?<a href="index.php?controller=SignUP&action=show">Inscription</a></p>
							</form>					
						</div>
					</div>
				</div>
			</div>	
		</div>		
	</body>
</html>