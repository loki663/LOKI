<?php
	$bazy->query('DELETE FROM etab_fil_niv efn WHERE efn.EtabID='.$id);
	$bazy->query('DELETE FROM efectif_emlpoyer ef WHERE ef.EtabID='.$id);
	$bazy->query('DELETE FROM  adresse_etab  ae WHERE ae.EtabID='.$id);
	$bazy->query('DELETE FROM etablissement WHERE EtabID='.$id);
?>
 