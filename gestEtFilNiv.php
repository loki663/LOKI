<fieldset style="width:880px!important;height:220px!important;background:none!important">
	<legend>GESTION DES FILIERES ET NIVEAU DIPLOME PAR ETABLISSEMENT</legend>
	<table border='1' width="880">
<form action="" method="post">
		<tr><th>ETABLISSEMENT</th><th>FILIERE</th><th>NIVEAU</th><th></th></tr>
		
		<tr><td><?php
				$reponse=$bazy->query('SELECT*FROM etablissement');
			?>
			<SELECT name="etabID">
						<option>
			<?php
				while($data=$reponse->Fetch())
				{
					echo '<option value="'.$data['EtabID'].'">'.$data['Nom_etab'];
				}
			?>
			</SELECT></td>
			<td><?php
				$reponse=$bazy->query('SELECT*FROM filiere');
			?>
			<SELECT name="filiereID">
						<option>
			<?php
				while($data=$reponse->Fetch())
				{
					echo '<option value="'.$data['FiliereID'].'">'.$data['Nom_filiere'];
				}
			?>
			</SELECT></td>
			<td><?php
				$reponse=$bazy->query('SELECT*FROM niveau');
			?>
			<SELECT name="niveauID">
						<option>
			<?php
				while($data=$reponse->Fetch())
				{
					echo '<option value="'.$data['NiveauID'].'">'.$data['Niveau'];
				}
			?>
			</SELECT></td>
			<td><input width="100px" type="submit" value="valider" align='right'></td>
		</tr>
		
</form>
	</table>
	<?php
		if(isset($_POST['etabID']) and $_POST['etabID']!="" 
		and isset($_POST['filiereID']) and $_POST['filiereID']!="" and 
		isset ($_POST['niveauID']) and $_POST['niveauID']!="")
		{
			$etabID = $_POST['etabID'];
			$filiereID = $_POST['filiereID'];
			$niveauID = $_POST['niveauID'];
				
			$bazy->query("INSERT INTO etab_fil_niv(EtabID,FiliereID,NiveauID) value ($etabID,$filiereID,$niveauID)");	
			echo'<br><br><br><br><br><br>Enregistrement reussi!';
		}
		else {echo'<br><br><br><br><br><br>veillez selectionner parmis les choix';}
	?>
</fieldset>