<div class="contenue"> 
	<h3>Connexion</h3></br>
	<div id="coco">
		<form action="" method="POST">
				<table border="0">
					<tr>
					<td>login:</td>
					<td><input type="text" name="login" id="login"></td>
					</tr>
					<tr>
					<td>mot de passe:</td>
					<td><input type="password" name="mdp" id="mdp"></td>
					</tr>
					<td></td>
					<td><input type="submit" value="Valider"></td>
				</table>
		</form>
		<?php
			if (isset($erreurlog)) {
				echo '$erreurlog';
			}
		?>
	</div>
</div>

