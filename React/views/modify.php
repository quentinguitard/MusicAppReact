<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="style/mystyle.css"/>  
		<title>Modification</title>
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
						<div class="addAMember">
						 	<form method="POST" class="inscription" action="index.php?controller=Account&action=sendModification">
								 <label for="mail">*Mail address:   </label>
									<input type="email" name="mail" id="mail" class="form-control membersadded" value=<?php echo $mail?> required/><br/>
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
									<input type="submit" name="sendMofification" value="Send" class="btn addButMem"/> 
							</form>
				 		</div>
				 	</div>
				</div>
			</div>
		</div>
	</body>
</html>