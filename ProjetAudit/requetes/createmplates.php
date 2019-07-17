<?php
    
    session_start();
    if (!isset($_SESSION['login'])) 
    {
        header('Location: index.php?err=2');
        exit();
    }

if (isset($_POST['tempcrea'])) 
{
	try 
	{
	    include '../bdd.php';
	    $presence=$bdd->prepare('SELECT `idTemplate` FROM `template` WHERE `nom`=:nom');
	    $presence->bindValue(':nom',$_POST['nom_template']);
		$presence->execute();
		$nb = $presence->fetchAll();
		$valide = count($nb);
		if ($valide>0)
		{
			header('Location: ../templatescreation.html');
	  		exit();
		}
		else
	    {
	    	if (!empty($_POST['nom_template']))
	    	{
		    	
			    $inserttemp=$bdd->prepare('INSERT INTO `template`(`nom`) VALUES (:template)');
			    $inserttemp->bindValue(':template',$_POST['nom_template']);
				$inserttemp->execute();


				$selectpre=$bdd->prepare('SELECT `idTemplate` FROM `template` WHERE `nom`=:nom');
			    $selectpre->bindValue(':nom',$_POST['nom_template']);
				$selectpre->execute();
				$idtemp = $selectpre->fetch();

				if (!empty($_POST['cat1']))
	    		{
				    $insertcateg=$bdd->prepare('INSERT INTO `categorie`(`nom`, `idTemplate`) VALUES (:nom,:idtempl)');
				    $insertcateg->bindValue(':nom',$_POST['cat1']);
				    $insertcateg->bindValue(':idtempl',$idtemp['idTemplate']);
					$insertcateg->execute();

						$selectcat=$bdd->prepare('SELECT `idCategorie` FROM `categorie` WHERE `nom`=:nom');
				    	$selectcat->bindValue(':nom',$_POST['cat1']);
						$selectcat->execute();
						$selidcat = $selectcat->fetch();

						if (!empty($_POST['souscat11']))
	    				{
							$insertsscateg=$bdd->prepare('INSERT INTO `souscategorie`(`nom`, `idCategorie`) VALUES (:nom,:idcat)');
						    $insertsscateg->bindValue(':nom',$_POST['souscat11']);
						    $insertsscateg->bindValue(':idcat',$selidcat['idCategorie']);
							$insertsscateg->execute();
						

							if (!empty($_POST['souscat12']))
		    				{
								$insertsscateg=$bdd->prepare('INSERT INTO `souscategorie`(`nom`, `idCategorie`) VALUES (:nom,:idcat)');
							    $insertsscateg->bindValue(':nom',$_POST['souscat12']);
							    $insertsscateg->bindValue(':idcat',$selidcat['idCategorie']);
								$insertsscateg->execute();
							

								if (!empty($_POST['souscat13']))
			    				{
								$insertsscateg=$bdd->prepare('INSERT INTO `souscategorie`(`nom`, `idCategorie`) VALUES (:nom,:idcat)');
							    $insertsscateg->bindValue(':nom',$_POST['souscat13']);
							    $insertsscateg->bindValue(':idcat',$selidcat['idCategorie']);
								$insertsscateg->execute();
								}
							}
						}

					if (!empty($_POST['cat2']))
		    		{

						$insertcateg=$bdd->prepare('INSERT INTO `categorie`(`nom`, `idTemplate`) VALUES (:nom,:idtempl)');
					    $insertcateg->bindValue(':nom',$_POST['cat2']);
					    $insertcateg->bindValue(':idtempl',$idtemp['idTemplate']);
						$insertcateg->execute();

						$selectcat2=$bdd->prepare('SELECT `idCategorie` FROM `categorie` WHERE `nom`=:nom');
				    	$selectcat2->bindValue(':nom',$_POST['cat2']);
						$selectcat2->execute();
						$selidcat2 = $selectcat2->fetch();

						if (!empty($_POST['souscat21']))
	    				{

							$insertsscateg=$bdd->prepare('INSERT INTO `souscategorie`(`nom`, `idCategorie`) VALUES (:nom,:idcat)');
						    $insertsscateg->bindValue(':nom',$_POST['souscat21']);
						    $insertsscateg->bindValue(':idcat',$selidcat2['idCategorie']);
							$insertsscateg->execute();

							if (!empty($_POST['souscat22']))
	    					{

								$insertsscateg=$bdd->prepare('INSERT INTO `souscategorie`(`nom`, `idCategorie`) VALUES (:nom,:idcat)');
							    $insertsscateg->bindValue(':nom',$_POST['souscat22']);
							    $insertsscateg->bindValue(':idcat',$selidcat2['idCategorie']);
								$insertsscateg->execute();

								if (!empty($_POST['souscat23']))
	    						{
									$insertsscateg=$bdd->prepare('INSERT INTO `souscategorie`(`nom`, `idCategorie`) VALUES (:nom,:idcat)');
								    $insertsscateg->bindValue(':nom',$_POST['souscat23']);
								    $insertsscateg->bindValue(':idcat',$selidcat2['idCategorie']);
									$insertsscateg->execute();
								}
							}
						}

						if (!empty($_POST['cat3']))
	    				{

							$insertcateg=$bdd->prepare('INSERT INTO `categorie`(`nom`, `idTemplate`) VALUES (:nom,:idtempl)');
						    $insertcateg->bindValue(':nom',$_POST['cat3']);
						    $insertcateg->bindValue(':idtempl',$idtemp['idTemplate']);
							$insertcateg->execute();

							$selectcat3=$bdd->prepare('SELECT `idCategorie` FROM `categorie` WHERE `nom`=:nom');
					    	$selectcat3->bindValue(':nom',$_POST['cat3']);
							$selectcat3->execute();
							$selidcat3 = $selectcat3->fetch();

							if (!empty($_POST['souscat31']))
	    					{
								$insertsscateg=$bdd->prepare('INSERT INTO `souscategorie`(`nom`, `idCategorie`) VALUES (:nom,:idcat)');
							    $insertsscateg->bindValue(':nom',$_POST['souscat31']);
							    $insertsscateg->bindValue(':idcat',$selidcat3['idCategorie']);
								$insertsscateg->execute();

								if (!empty($_POST['souscat32']))
	    						{
									$insertsscateg=$bdd->prepare('INSERT INTO `souscategorie`(`nom`, `idCategorie`) VALUES (:nom,:idcat)');
								    $insertsscateg->bindValue(':nom',$_POST['souscat32']);
								    $insertsscateg->bindValue(':idcat',$selidcat3['idCategorie']);
									$insertsscateg->execute();

									if (!empty($_POST['souscat33']))
	    							{
										$insertsscateg=$bdd->prepare('INSERT INTO `souscategorie`(`nom`, `idCategorie`) VALUES (:nom,:idcat)');
									    $insertsscateg->bindValue(':nom',$_POST['souscat33']);
									    $insertsscateg->bindValue(':idcat',$selidcat3['idCategorie']);
										$insertsscateg->execute();
									}
								}
							}

							if (!empty($_POST['cat4']))
	    					{
								$insertcateg=$bdd->prepare('INSERT INTO `categorie`(`nom`, `idTemplate`) VALUES (:nom,:idtempl)');
							    $insertcateg->bindValue(':nom',$_POST['cat4']);
							    $insertcateg->bindValue(':idtempl',$idtemp['idTemplate']);
								$insertcateg->execute();

								$selectcat4=$bdd->prepare('SELECT `idCategorie` FROM `categorie` WHERE `nom`=:nom');
						    	$selectcat4->bindValue(':nom',$_POST['cat4']);
								$selectcat4->execute();
								$selidcat4 = $selectcat4->fetch();

								if (!empty($_POST['souscat41']))
	    						{
									$insertsscateg=$bdd->prepare('INSERT INTO `souscategorie`(`nom`, `idCategorie`) VALUES (:nom,:idcat)');
								    $insertsscateg->bindValue(':nom',$_POST['souscat41']);
								    $insertsscateg->bindValue(':idcat',$selidcat4['idCategorie']);
									$insertsscateg->execute();

									if (!empty($_POST['souscat42']))
	    							{

										$insertsscateg=$bdd->prepare('INSERT INTO `souscategorie`(`nom`, `idCategorie`) VALUES (:nom,:idcat)');
									    $insertsscateg->bindValue(':nom',$_POST['souscat42']);
									    $insertsscateg->bindValue(':idcat',$selidcat4['idCategorie']);
										$insertsscateg->execute();

										if (!empty($_POST['souscat43']))
	    								{

											$insertsscateg=$bdd->prepare('INSERT INTO `souscategorie`(`nom`, `idCategorie`) VALUES (:nom,:idcat)');
										    $insertsscateg->bindValue(':nom',$_POST['souscat43']);
										    $insertsscateg->bindValue(':idcat',$selidcat4['idCategorie']);
											$insertsscateg->execute();
										}
									}
								}
							}
						}
					}
				}
			}

			header('Location: ../templates.php');
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


