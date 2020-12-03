<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Box HTML Code - www.PSDGraphics.com</title>

<link href="login-box.css" rel="stylesheet" type="text/css" />
<div style="padding: 10px 0 0 300px;">

<div id="login-box">
	<!--<fieldset style="border:1!important;background-color:none!important">-->
<CENTER /><h3>VEUILLEZ-VOUS IDENTIFIER ?</h3> <CENTER/>

<br />
<br />
<form action="" method="post" id="loginForm">
<div id="login-box-name" style="margin-top:10px;"><h2>Utilisateur</h2></div><div id="login-box-field" style="margin-top:10px;"><input name="pseudo" class="form-login" title="Username" value="" placeholder="Nom de l'utilisateur" size="30" maxlength="2048" /></div>
<div id="login-box-name"><h2>Mot de passe</h2></div><div id="login-box-field"><input name="mdp" type="password" class="form-login" title="Password" value="" placeholder="Votre mot de passe"/></div>
<br />
<!--<span class="login-box-options"><input type="checkbox" name="1" value="1"> Remember Me <a href="#" style="margin-left:30px;">Forgot password?</a></span>	-->
<br />
<br />
<a href="#" id="linkID"><img src="images/login-btn.png" width="150" height="35" style="margin-left:0px;" /></a>
</form>
	<a href="index.php?page=inscription"><H1>Inscription</H1></a>
	<a href="index.php?page=suppression"><H1>Supprimer un Utilisateur</H1></a>
	<?php
if(isset($_POST['pseudo']) and isset($_POST['mdp']))
{
	$pass = sha1($_POST['mdp']);
	$pseudo = $_POST['pseudo'];
	$req ="SELECT*FROM membre WHERE Pseudo='$pseudo' AND Mdp='$pass'";
		
	 $reponse = $bazy->query("$req");
	
	$resultat=$reponse->Fetch();
		
	if(!$resultat)
	{
		echo 'Mauvais mot de passe ou Pseudo! veuillez recommencer';
				
	}
	else
	{
		session_start();
		$_SESSION['Id_membre'] = $resultat['Id_membre'];
		$_SESSION['Pseudo'] = $resultat['Pseudo'];
		 echo'Bienvenue!'.$_SESSION['Pseudo'];
		Header('location:main.php?page=accueil');
	}
}
	?>
	
	
	</fieldset>
</div>

</div>

<script type="text/javascript">
	var notreform = document.getElementById("loginForm");

	document.getElementById("linkID").addEventListener("click", function () {
	  //alert("salut");
	  notreform.submit();
	});
</script>

