<fieldset style="width:880px!important;height:px!important;background:none!important">
	<legend>CREER UN ADRESSE A UN ETABLISSEMENT</legend>
	<table border="1">
		<form action="" method="post">
		<?php
			
			$reponse = $bazy->query('SELECT * FROM etablissement');
		
		?>
		<tr><th width="400">ETABLISSEMENT</th><td width="400"><select name="etabID">
		<?php
			while($data = $reponse->Fetch())
			{
				echo '<option value="'.$data['EtabID'].'">'.$data['Nom_etab'];
			}
		?>
			</select></td></tr>
			
		<tr><th>PROVINCE</th><td><input type="text" name="province"></td></tr>
		<tr><th>REGION</th><td><input type="text" name="region"></td></tr>
		<tr><th>DISTRICT</th><td><input type="text" name="district"></td></tr>
		<tr><th>COMMUNE</th><td><input type="text" name="commune"></td></tr>
		<tr><th>ADRESSE PHYSIQUE</td><td><input type="text" name="adresse"></td></tr>
		<tr><th height="10"></th><td><input type="submit" value="Enregistrer"></td></tr>
		<form>
	</table>
	<?php
		if(isset($_POST['etabID']) AND isset($_POST['province'])AND isset($_POST['region'])AND isset($_POST['district'])AND isset($_POST['commune'])AND isset($_POST['adresse']))
		{
			$etabID = $_POST['etabID'];
			$province = $_POST['province'];
			$region = $_POST['region'];
			$district = $_POST['district'];
			$commune = $_POST['commune'];
			$adresse = $_POST['adresse'];
			
			$bazy->query("INSERT INTO adresse_etab(Adresse_etab,Province,Region,District,commune,EtabID) VALUES ('$adresse','$province','$region','$district','$commune',$etabID)");
		}
	?>
	
	
</fieldset>
