<fieldset style="width:880px!important;height:px!important;background:none!important">
	<legend>ENREGISTREMENT D'UN NOUVEAU ETABLISSEMENT</legend>
<?php
	/*include('connexion.php');
	$bdd = connect();*/
 ?> 
	<form action="" method="post">
		<table border="1">
			<tr><th width="400">NOM DE L'ENTITE</th><td width="500"><input type="text" name="nom_etab"></td></tr>
			<tr><th width="200" >ANNEE DE CREATION</td><td><input type="text" name="annee_crea"></td></tr>
			<tr><th>BP:</th><td><input type="text" name="boite_post" width="80px"></td></tr>
			<tr><th>TEL 1:</th><td> <input type="text" name="tel1"></td><tr>
			<tr><th>TEL 2:</th><td><input type="text" name="tel2"></td><tr>
			<tr><th>E_MAIL:</th><td><input type="text" name="e_mail"></td></tr>
			<tr><th>STATUT DE L'ENTITE:</th><td><SELECT name='stat_etab' width="500px">
										<option value="">
										<option value='PUBLIC'>PUBLIC
										<option value='PRIVE'>PRIVE
			<tr><th>TYPE:</th><td><SELECT name='type_etab' width="500px">
										<option value="">
										<option value='LTP'>LTP
										<option value='CFP'>CFP
										<option value='INSTITUT'>INSTITUT
								  </SELECT></td></tr>
			<tr><th style="border:none!important;height:20px"></th><td><input type="Submit" value="Enregister"></td></tr>
		</table>
	</form>
	<?php
		
		if(	isset($_POST['nom_etab']) and 
			$_POST['stat_etab'] != "" and 
			isset($_POST['annee_crea'])and 
			isset($_POST['boite_post'])and 
			isset($_POST['tel1'])and 
			isset($_POST['tel2'])and 
			isset($_POST['e_mail']))
		{
			$nom_etab = $_POST['nom_etab'];
			$stat_etab = $_POST['stat_etab'];
			$type_etab = $_POST['type_etab'];
			$annee_crea = $_POST['annee_crea'];
			$boite_post = $_POST['boite_post'];
			$tel1 = $_POST['tel1'];
			$tel2 = $_POST['tel2'];
			$e_mail = $_POST['e_mail'];
			
			$bazy->query("INSERT INTO etablissement(Nom_etab,Statut_etab,Annee_crea,Boite_postal,Tel1,Tel2,E_mail,Type_etab) VALUES ('$nom_etab','$stat_etab',$annee_crea,$boite_post,'$tel1','$tel2','$e_mail','$type_etab')");
			echo '<br><br><br>enregistrement reussi!';
		}
	
	?>
	
 </fieldset>
 