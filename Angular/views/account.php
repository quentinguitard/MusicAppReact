<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'/>
		<link rel="stylesheet" href="style/mystyle.css"/>  
		<title>Mon compte</title>
	</head>
	<body>
		<div class="header">	
		<?php		
			require_once 'views/menu.php';
		?>		
		</div>	
		<div class="body-log">
			<div class="all-c">
				<div class="all">
					<div class="content"> 	
						<div class="profil-container">
							<div class="card-c">	
							   	<img src='image/<?php echo $sexe ?>.png' alt="<?php echo $sexe ?>" class="<?php echo $sexe ?>">
							   	<div class="card">
							        <p>
							            <?php echo $nom ?>			            
							        </p>
							        <p>
							            <?php echo $prenom ?>			            
							        </p>
							        <p>
							            <?php echo $naissance." ans" ?>			            
							        </p>
							        <p>
							            <?php echo $ville ?>			            
							        </p>
							        <p>
							            <?php echo $mail ?>		            
							        </p>
							    </div>
						    </div>
				 		</div>
					 	<form method="POST" class="inscription" action="index.php?controller=Account&action=crud">
					 		<div class="profil-container">				 			
					 			<div class="conn">
							 		<button type="submit" class ="display form-control" name="modify" value="modify">Modifier adresse mail et mot de passe</button>
							 		<button type="submit" class ="display form-control" name="delete" value="delete">Supprimer compte</button>
						 		</div>
				 			</div>
					 	</form>
				 	</div>
				 </div>			 	
			</div>
		</div>
	</body>
</html>