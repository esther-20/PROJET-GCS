<?php
include "config.php";
try 
{
	if (isset($_POST['upprojet'])) 
	{
	# si le bouton modiffié est cliquez
		
		# recuperation des variables a partir du formulaire: extract($_POST);
			$nom_projet		    = $_POST['nom_projet'];
			$date_projet	    = $_POST['date_projet'];
			$id_utilisateur	    = $_POST['id'];
			
		#requete pour verifier que le projet est unique
		$req_verification = "SELECT * FROM projet WHERE nom_projet = :nom_projet AND date_projet = :date_projet AND id_utilisateur = :id_utilisateur AND id_projet <> :id_projet";

		$verification=$pdo->prepare($req_verification);

		$verification->execute(array(':nom_projet'=>$nom_projet,':date_projet'=>$date_projet,':id_utilisateur'=>$id_utilisateur,':id_projet'=>$id_projet));

		$data = $verification->fetch();

		if ($data)
		{
			# code
			?>
				<script type='text/javascript'>
					alert('Cet projet existe déjà.');
				</script>
			<?php
		}
		else
		{
			# Si tout est Bon
				# req de modiffication dans la table projet
				$req_update = "UPDATE projet SET nom_projet = :nom_projet AND date_projet = :date_projet AND id_utilisateur =:id_utilisateur WHERE id_projet = :id_projet";

				# preparation de la req
				$statement_update = $pdo->prepare($req_update);

				# execution de req en passant les variables
				$statement_update->execute(array(':nom_projet'=>$nom_projet,':date_projet'=>$date_projet,':id_utilisateur'=>$id_utilisateur,':id_projet'=>$id_projet));


				
			?>

				<script type='text/javascript'>
					alert('Projet modifié avec succès.');
				</script>

			<?php 
		}

	}
}
catch (Exception $e)
{
	print "Erreur ! :" .$e ->getMessage() ."<br/>";
	die();
}

				?>
<script type="text/javascript">
	// Redirection automatique aprés 0secondes
	setTimeout(function(){window.location.href="../../projet.php";},0);
</script>
