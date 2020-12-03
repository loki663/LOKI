<fieldset style="width:880px!important;height:220px!important;background:none!important">
<legend>CREER EFFECTIF A UN ETABLISSEMENT</legend>
	<table border="1">
		<form action="" method="post">
		<?php
			
			$reponse = $bazy->query('SELECT *FROM etablissement e WHERE e.EtabID ='.$id.'');
		
		?>
		<tr><th width="400">ETABLISSEMENT</th><td width="400"><select name="etabID" style="width:200px">
		<?php
			while($data = $reponse->Fetch())
			{ </tr>
			
		<tr><th>ADMINISTRATEUR ECD</th><td><input type="text" name="ECD"></td></tr>
		<tr><th>ADMININISTRATEUR FONCTIONNAIRE</th><td><input type="text" name="FONCTS"></td></tr>
		<tr><th>ENSEIGNIANT VACCATAIRE</th><td><input type="text" name="VACC"></td></tr>
		<tr><th>ENSEIGNANT FONCTIONNAIRE</th><td><input type="text" name="EFONCTS"></td></tr>
		<tr><th height="20"></th><td><input type="submit" value="Enregistrer"></td></tr>
		<form>
	</table>
	<?php
		if(isset($_POST['etabID']) AND isset($_POST['ECD'])AND isset($_POST['FONCTS'])AND isset($_POST['VACC'])AND isset($_POST['EFONCTS']))
		{
			$etabID = $_POST['etabID'];
			$ECD = $_POST['ECD'];
			$FONCTS = $_POST['FONCTS'];
			$VACC = $_POST['VACC'];
			$EFONCTS = $_POST['EFONCTS'];
			
			
			$bazy->query("INSERT INTO efectif_emlpoyer(Nombre_Admin_Ecd,Nombre_Admin_fonct,Nombre_enseign_Vacat,Nombre_enseign_fonct,EtabID) VALUES ('$ECD','$FONCTS','$VACC','$EFONCTS',$etabID)");
		}    
	?>
	
	

</fieldset>