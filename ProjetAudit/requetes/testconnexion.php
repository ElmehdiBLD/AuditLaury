<?php

	session_start();

if (isset($_POST['connexion'])) 
{
	try 
	{
	    include '../bdd.php';
	    $presence=$bdd->prepare('SELECT `idUsers` FROM `users` WHERE `login`=:login AND `password`=:mdp');
	    $presence->bindValue(':login',$_POST['user_login']);
		$presence->bindValue(':mdp',$_POST['user_mdp']);
		$presence->execute();
		$nb = $presence->fetchAll();
		$valide = count($nb);
		if ($valide>0)
		{
			$_SESSION['login'] = $_POST['user_login'];
			header('Location: ../accueil.php');
	  		exit();
		}
		else
	    {
	    	header('Location: ../index.php?err=1');
	  		exit();
	    }
    $bdd = null;
	} catch (PDOException $e) {
	    print "Erreur !: " . $e->getMessage() . "<br/>";
	    die();
	}
}
else
{
	echo "errr";
}
?>




