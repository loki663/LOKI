<fieldset style="width:880px!important;height:250px!important;background:none!important">
	<legend>MODIFIER ETABLISSEMENT</legend>
<?php
	/*include('connexion.php');
	$bdd = connect();*/
	$reponse=$bazy->query('SELECT*FROM etablissement WHERE EtabId='.$id.'');
	while($data=$reponse->Fetch())
	{
		$nomEtab=$data['Nom_etab'];
		$AnneeCrea=$data['Annee_crea'];
		$bp=$data['Boite_postal'];
		$tel1=$data['Tel1'];
		$tel2=$data['Tel2'];
		$email=$data['E_mail'];
		$statut=$data['Statut_etab'];
		$type=$data['Type_etab'];
	
	}
	
 ?> 
	<form action="" method="post">
		<table border='1'style="height:100px!important; width:880px!important">
			<tr><th width="200">Nom de l'entite</th><td><input type="text" name="nom_etab" value="<?php echo $nomEtab ?>"></td></tr>
			<tr><th width="200" >Annees de creation</th><td><input type="text" name="annee_crea" value="<?php echo $AnneeCrea ?>"></td></tr>
			<tr><th>BP:</th><td><input type="text" name="boite_post" width="80px" value="<?php echo $bp ?>"></td></tr>
			<tr><th>TEL 1:</th><td> <input type="text" name="tel1" value="<?php echo $tel1 ?>"></td><tr>
			<tr><th>TEL 2:</th><td><input type="text" name="tel2" value="<?php echo $tel2 ?>"></td><tr>
			<tr><th>E_mail:</th><td><input type="text" name="e_mail" value="<?php echo $email ?>"></td></tr>
			<tr><th>Statut de l'entite </th><td><SELECT NAME="stat_etab">
			<tr><th>Statut de l'entite </th><td><SELECT NAME="stat_etab">
													<option value="PUBLIC">PUBLIC
													<option value="PRIVE">PRIVE
													<option value="PRIVE CONFESSIONNEL">PRIVE CONFESSIONNEL
												<SELECT></td></tr>
			<tr><th>type </th><td><SELECT name='type_etab' width="500px">
										<option value='CFP'>CFP
										<option value='LTP'>LTP
										<option value='COLLEGE TECH'>COLLEGE TECH
										<option value='COLLEGE CARR'>COLLEGE CARR
										<option value='INSTITUT'>INSTITUT
										<option value='CH DE COMM'>CH DE COMM
										<option value='ASSOCIATION'>ASSOCIATION
										<option value='ONG'>ONG
										<option value='COOPERATIVE'>COOPERATIVE
										<option value='DIR CENTRALE'>DIR CENTRALE
										<option value='DIR REGIONALE'>DIR REGIONALE
										<option value='ORG RATTACHE'>ONG RATTACHE
										<option value='ETAB RATTACHE'>ETAB RATTACHE
								  </SELECT></td></tr>
			<tr><th height="10"></th><td><input type="Submit" value="MODIFIER"></td></tr>
		</table>
	</form>
	<?php 
		if(isset($_POST['nom_etab']) and isset($_POST['stat_etab'])and isset($_POST['annee_crea'])and isset($_POST['boite_post'])and isset($_POST['tel1'])and isset($_POST['tel2'])and isset($_POST['e_mail']))
		{
			$nom_etab = $_POST['nom_etab'];
			$stat_etab = $_POST['stat_etab'];
			$type_etab = $_POST['stat_etab'];
			$annee_crea = $_POST['annee_crea'];
			$boite_post = $_POST['boite_post'];
			$tel1 = $_POST['tel1'];
			$tel2 = $_POST['tel2'];
			$e_mail = $_POST['e_mail'];
			
			$bazy->query("UPDATE etablissement SET Nom_etab='$nom_etab',Annee_crea='$annee_crea',Statut_etab='$stat_etab',Boite_postal='$boite_post',Tel2='$tel2',Tel1='$tel1',E_mail='$e_mail',Type_etab='$type_etab' WHERE EtabID=1");
		}
	?>
	
 </fieldset>
 