<?php
	function connect()
	{
		$bdd=new PDO('mysql:host=localhost;dbname=ministere','root','');
		return $bdd;
	}

?>