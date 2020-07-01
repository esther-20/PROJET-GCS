<?php
include "config.php";
try 
{
	if (isset($_POST['uputilisateur'])) 
	{
	# si le bouton modiffié est cliquez
		
		# recuperation des variables a partir du formulaire: extract($_POST);
		 $nom_utilisateur=$_POST['nom_utilisateur'];
         $prenom_utilisateur=$_POST['prenom_utilisateur'];
         $email_utilisateur=$_POST['email_utilisateur'];
         $motpass_utilisateur=$_POST['motpass_utilisateur'];
         $password=$_POST['password'];
         $id_typutilisateur=$_POST['id_typutilisateur'];
         $tel_utilisateur=$_POST['tel_utilisateur'];

		#requete pour verifier que la catégorie est unique
		$req_verification = "SELECT * FROM utilisateur WHERE nom_utilisateur = :nom_utilisateur AND prenom_utilisateur = :prenom_utilisateur AND email_utilisateur = :email_utilisateur AND motpass_utilisateur = :motpass_utilisateur AND id_typutilisateur = :id_typutilisateur AND tel_utilisateur = :tel_utilisateur AND id_utilisateur <> :id_utilisateur";

		$verification=$pdo->prepare($req_verification);

		$verification->execute(array(':nom_utilisateur'=>$nom_utilisateur,':prenom_utilisateur'=>$prenom_utilisateur,':email_utilisateur'=>$email_utilisateur,':motpass_utilisateur'=>$motpass_utilisateur,':id_typutilisateur'=>$id_typutilisateur,':tel_utilisateur'=>$tel_utilisateur,':id_utilisateur'=>$id_utilisateur));


		$data = $verification->fetch();

		if ($data)
		{
			# code
			?>
				<script type='text/javascript'>
					alert('Cette utilisateur existe déjà.');
				</script>
			<?php
		}
		else
		{
			# Si tout est Bon
				# req de modiffication dans la table categorie_produit
				$req_update = "UPDATE utilisateur SET nom_utilisateur = :nom_utilisateur AND prenom_utilisateur = :prenom_utilisateur AND email_utilisateur = :email_utilisateur AND motpass_utilisateur = :motpass_utilisateur AND id_typutilisateur = :id_typutilisateur AND tel_utilisateur = :tel_utilisateur WHERE id_utilisateur =:id_utilisateur";

				# preparation de la req
				$statement_update = $pdo->prepare($req_update);

				# execution de req en passant les variables
				$statement_update->execute(array(':nom_utilisateur'=>$nom_utilisateur,':prenom_utilisateur'=>$prenom_utilisateur,':email_utilisateur'=>$email_utilisateur,':motpass_utilisateur'=>$motpass_utilisateur,':id_typutilisateur'=>$id_typutilisateur,':tel_utilisateur'=>$tel_utilisateur,':id_utilisateur'=>$id_utilisateur));
			?>

				<script type='text/javascript'>
					alert('utilisateur modifié avec succès.');
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
	setTimeout(function(){window.location.href="../../utilisateur.php";},0);
</script>
