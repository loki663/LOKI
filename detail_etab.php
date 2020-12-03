<fieldset style="width:880px!important;height:455px!important;background:none!important"><LEGEND>DETAIL DE L'ETABLISSEMENT</LEGEND>
	<div id="divleft" border='1'><table border='1' style="width:400px!important; height:300px!important;">
	<?php
	$reponse = $bazy->query('SELECT *FROM etablissement e WHERE e.EtabID ='.$id.'');
	
	while($data = $reponse->Fetch())
	{
			
		echo'<tr><th width="200">ETABLISSEMENT :</th><td wid
		
		th="200">'.$data['Nom_etab'].'</td></tr>
			<tr><th width="200">STATUT ENTITE :</th><td width="200">'.$data['Statut_etab'].'</td></tr>
			<tr><th width="200">ANNEE DE CREATION :</th><td width="200">'.$data['Annee_crea'].'</td></tr>
			<tr><th width="200">BOITE POSTAL :</th><td width="200">'.$data['Boite_postal'].'</td></tr>
			<tr><th width="200">TEL1:</th><td width="200">'.$data['Tel1'].'</td></tr>
			<tr><th width="200">TEL2 :</th><td width="200">'.$data['Tel2'].'</td></tr>
			<tr><th width="200">E_MAIL :</th><td width="200">'.$data['E_mail'].'</td></tr>';
	}
	
	$response = $bazy->query("SELECT f.Nom_filiere,n.Niveau FROM etab_fil_niv efn 
								JOIN etablissement e ON e.EtabID = efn.EtabID
								JOIN filiere f ON f.FiliereID = efn.FiliereID
								JOIN niveau n ON n.NiveauID = efn.NiveauID WHERE efn.EtabID = ".$id."");
	
	while($donnee = $response->Fetch())
	{
		echo '<tr><th>FILIERE:</th><td>'.$donnee['Nom_filiere'].'</td></tr><tr><th>NIVEAU:</th><td>'.$donnee['Niveau'].'</td></tr>';
		
	}
	
?>
			
	</table></div>
	<div id="divright">
		<table border='1' style="width:400px!important; height:200px!important;">
		<?php 
		$rep = $bazy->query("SELECT COUNT(*) NB FROM efectif_emlpoyer WHERE EtabID=".$id);
		
		$isa = 0;
		while($donnee = $rep->Fetch())
		{
			$isa = $donnee['NB'];
		}
		
			if($isa == 0)
			{
				echo'<tr><td><a href="main.php?page=gest_eff&id='.$id.'"><img src="images/effectif.png"></a></td><td style=" color:red"> CETTE ETABLISSEMENT NE POSSEDE PAS SON EFFECTIF EMPLOYER, CLICK SUR CETTE IMAGE POUR EN AJOUTER </td></tr>';
			}
			else
				{
					$valiny = $bazy->query("SELECT*FROM efectif_emlpoyer ef WHERE ef.EtabID=".$id);
				while($data = $valiny->Fetch())
				{
					$total = $data['Nombre_Admin_Ecd']+$data['Nombre_Admin_fonct']+$data['Nombre_enseign_Vacat']+$data['Nombre_enseign_fonct'];
					echo '<tr><th width="200"> NOMBRE ADMIN ECD:</th><td>'.$data['Nombre_Admin_Ecd'].'  Personnes</td></tr><tr><th width="100">NOMBRE ADMIN FONCTIONNAIRE</th><td>'.$data['Nombre_Admin_fonct'].'  Personnes</td></tr><tr><th width="100">NOMBRE ENSEIG VACC</th><td>'.$data['Nombre_enseign_Vacat'].'  Personnes</td></tr><tr><th width="100">NOMBRE ENSEIG FONCTIONNAIRE</th><td>'.$data['Nombre_enseign_fonct'].'  Personnes</td></tr>';
					echo'<tr><th>TOTAL EFFECTIF:</th><td>'.$total.'  Personnes</td></tr>';
				}
				}
			
			?>
			
	</table>
	</div>
	
	
</fieldset>