<fieldset style="width:880px!important;height:px!important;background:none!important"><legend>LES ETABLISSEMENTS</legend>
	<table  border='1'>
		<tr><th width="650">NOM ETABLISSEMENTS</th><th width="50">ADRESSE</th><th width="50">DETAIL</th><th width="50">MODIFIER</th><th width="50"><a href="main.php?page=ajoutEtab"><img src="images/add.png"></a></th></tr>
	
<?php
	$reponse = $bazy->query('SELECT * FROM etablissement');
	
	while($data = $reponse->Fetch())
	{
		echo'<tr><td width="300" align="left"><center>'.$data['Nom_etab'].'</td></center><td><center><a href="main.php?page=adresse&id='.$data['EtabID'].'"><img src="images/adresse.png"></a></td><td><center><a href="main.php?page=detail_etab&id='.$data['EtabID'].'"><img src="images/voir.png"></a></td></center><td><a href="main.php?page=edit_etab&id='.$data['EtabID'].'"><img src="images/edit.png"><a></td></center><td><center><a href="main.php?page=delete_etab&id='.$data['EtabID'].'"><img src="images/delete.png"></a></td></center></tr>';
	}
	
?>
	</table>
</fieldset>