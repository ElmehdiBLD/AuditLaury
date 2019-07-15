<?php

	session_start();

if (isset($_POST['connexion'])) 
{
	try 
	{
	    $bdd = new PDO('mysql:host=localhost;dbname=laury', 'root','' );
	    $presence=$bdd->prepare('SELECT `idUsers` FROM `users` WHERE `login`=:login AND `password`=:mdp');
	    $presence->bindValue(':login',$_POST['user_login']);
		$presence->bindValue(':mdp',$_POST['user_mdp']);
		$presence->execute();
		$nb = $presence->fetchAll();
		$valide = count($nb);
		if ($valide>0)
		{
			header('Location: ../accueil.html');
	  		exit();

			$_SESSION['login'] = $_POST['user_login'];
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




