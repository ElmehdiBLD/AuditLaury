<?php

	session_start();

	try 
	{
	    include 'bdd.php';
	    $presence=$bdd->prepare('SELECT `idTemplate` FROM `template` WHERE `nom`=:nom');
	    $presence->bindValue(':nom',$_GET['nom']);
		$presence->execute();
		$id = $presence->fetch();

		

		$delete=$bdd->prepare('DELETE FROM `template` WHERE `idTemplate`=:id');
	    $delete->bindValue(':id',$id['idTemplate']);
		$delete->execute();

		header('Location: templates.php');
	  	exit();



    $bdd = null;
	} catch (PDOException $e) {
	    print "Erreur !: " . $e->getMessage() . "<br/>";
	    die();
	}
?>

