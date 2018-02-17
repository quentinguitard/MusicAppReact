<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZx_OMNSi0slvkLgZjSZ_W5ZC6qxmWsYQ&libraries=places&language=en"></script>
		<link rel="stylesheet" href="style/my_style.css"/>  
		<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'/>
		<title>Inscription</title>
	</head>
	<body>
		<div class="header-conn">
			<div>
				<p>Déjà membre?</p>
			</div>
			<div class="link-log">
				<a href="index.php?controller=LogIn&action=show">Se connecter</a>
			</div>
		</div>	
		<div class="body">
			<div class="all-c">
				<div class="all">
					<div class="content"> 	
						<div class="addAMember">
						 	<form method="POST" class="inscription" action="index.php?controller=signUp&action=send">
							  <h3 class="legend">Inscription</h3>
								<br/><label for="last">*Nom: </label>
								<input type="text" name="last" id="last" class="form-control membersadded" required/><br/>
								<br/><label for="first">*Prenom: </label>
								<input type="text" name="first" id="first" class="form-control membersadded" required/><br/>
								<br/><label for="genre">*Sexe: </label>
								<select name="genre" class="genre form-control membersadded" required>
							 		<option value="" disabled selected hidden>Sélectionner votre sexe</option>
							        <option value="man">Homme</option> 
							        <option value="woman">Femme</option> 
							 	</select><br/>
							 	<?php
							 		$year = date("Y") - 18;
							 	?>
							 	<br/><label for="bday">*Année de naissance: </label>
							 	<input type="date" name="bday" class="form-control membersadded" max="<?php echo $year; ?>-12-31" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">	<br/>					 	
								<br/><label for="ville">*Ville:   </label>
								<input type="text" name="ville" id="ville" class="form-control membersadded" onkeyup="myFunction()" required/><br>
								<br/><label for="mail">*Adresse mail:   </label>
								<input type="email" name="mail" id="mail" class="form-control membersadded" required/><br/>
								<?php 
						 		if(isset($err))
						 		{
						 		?>
						 		<div class="err"> <?php echo $err?></div>
						 		<?php 
						 		}
						 		?>
								<br/><label for="mdp">*Mot de passe:   </label>								
								<input type="password" name="mdp" id="mdp" class="form-control membersadded" required/><br/>
								<div class="addAMember">
									<input type="submit" name="account" value="Send" class="btn addButMem"/> 
								</div>
							</form>
				 		</div>
				 	</div>
				 </div>
			</div>
		</div>
		<script type="text/javascript" src="script/myscript.js"></script>
	</body>
</html>