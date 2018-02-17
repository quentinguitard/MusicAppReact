<div class="nav-bar">
	<ul class="nav">
		<?php 
			if(isset($_SESSION['mail'])){
		?> 
		<li>
			<a class="link" href="index.php?controller=Account&action=display">Compte</a>
		</li>
		<li>
			<a class="link" href="index.php?controller=Profil&action=show">Rechercher un profil</a>
		</li>
		<?php
			}
			else
			{			
		?>
		<li>
			<a class="link" href="index.php?controller=SignUp&action=show">Inscription</a>
		</li>
		<?php
			}
		?>
	</ul>
</div>
 
<div class="connection">
	<ul class="nav">
		<li>
			<?php 
				if(isset($_SESSION['mail'])){
			?> 
			<a class="link" href="deconnexion.php">Se deconnecter</a>
			<?php
				}
			else
			{
			?>
			<a class="link" href="index.php?controller=LogIn&action=show">Se connecter</a>
			<?php
				}
			?>
		</li>
	</ul>
</div>