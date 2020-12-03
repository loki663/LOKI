<fieldset style="width:880px!important;height:220px!important;background:none!important"><legend>DETAILS ETABLISSEMENT</legend>
	<table border='1' style="width:850px!important; height:100px!important;">
		<?php 
		$rep =$bazy->query("SELECT COUNT(*)NB FROM Adresse_etab WHERE EtabID=".$id);
		$isa=0;
		while($donnee=$rep->Fetch())
		{ $isa=$donnee['NB'];}
		
		if($isa==0)
		{
			echo'<tr><td><a href="main.php?page=gerer_adress"><img id="special" src="images/adress.png"></a></td><td style=" color:red"> CETTE ETABLISSEMENT NE POSSEDE PAS UNE ADRESSE CLICK SUR CETTE IMAGE POUR EN AJOUTER </td></tr>';
		}
		else{
		$valiny = $bazy->query("SELECT*FROM adresse_etab WHERE EtabID=".$id);
			
					while($data = $valiny->Fetch())
					{
						
						echo '<tr><th width="400">LOT:</th><td width="400">'.$data['Adresse_etab'].'</td></tr><tr><th width="400">PROVINCE:</th><td>'.$data['Province'].'</td></tr><tr><th width="100">REGION:</th><td>'.$data['Region'].'</td></tr><tr><th width="100">DISTRICT:</th><td>'.$data['District'].'</td></tr>';
					}
			}
			?>
			
	</table>
</fieldset>