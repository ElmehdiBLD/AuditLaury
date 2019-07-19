<?php
    
    session_start();
    if (!isset($_SESSION['login'])) 
    {
        header('Location: index.php?err=2');
        exit();
    }

if (isset($_POST['fintemp'])) 
{
	try 
	{
	    include 'bdd.php';

	    	if (!empty($_POST['nom_rapport']))
	    	{
	    		$selectpre=$bdd->prepare('SELECT `idTemplate` FROM `template` WHERE `nom`=:nom');
			    $selectpre->bindValue(':nom',$_POST['nom_temp']);
				$selectpre->execute();
				$idtemp = $selectpre->fetch();
		    	
			    $insertrap=$bdd->prepare('INSERT INTO `rapport`(`nom`,`idTemplate`) VALUES (:rapport,:template)');
			    $insertrap->bindValue(':rapport',$_POST['nom_rapport']);
			    $insertrap->bindValue(':template',$idtemp['idTemplate']);
				$insertrap->execute();

				$selecrap=$bdd->prepare('SELECT `idRapport` FROM `rapport` WHERE `nom`=:nom');
			    $selecrap->bindValue(':nom',$_POST['nom_rapport']);
				$selecrap->execute();
				$idrap = $selecrap->fetch();


				$i=1;
				while($i<=4)
				{
					$c=1;
					while($c<=4)
					{
						
	            
						if (!empty($_POST['elem'.$i.$c.'1']))
	    				{
	    					$recupsscat=$bdd->prepare('SELECT `idSousCategorie` FROM `souscategorie` WHERE `nom`=:nom');
				            $recupsscat->bindValue(':nom',$_POST['ss'.$i.$c]);
				            $recupsscat->execute();
				            $idsscat = $selecrap->fetch();
	    					
							$insertsscateg=$bdd->prepare('INSERT INTO `element`(`nom`, `note`, `idSousCategorie`, `idRapport`) VALUES (:nom,:note,:sscat,:rapport)');
						    $insertsscateg->bindValue(':nom',$_POST['elem'.$i.$c.'1']);
						    $insertsscateg->bindValue(':note',$_POST['note'.$i.$c.'1']);
						    $insertsscateg->bindValue(':sscat','49');
						    $insertsscateg->bindValue(':rapport',$idrap['idRapport']);
							$insertsscateg->execute();

						}

						if (!empty($_POST['elem'.$i.$c.'2']))
	    				{

	    					$recupsscat=$bdd->prepare('SELECT `idSousCategorie` FROM `souscategorie` WHERE `nom`=:nom');
				            $recupsscat->bindValue(':nom',$_POST['ss'.$i.$c]);
				            $recupsscat->execute();
				            $idsscat = $selecrap->fetch();

							$insertsscateg=$bdd->prepare('INSERT INTO `element`(`nom`, `note`, `idSousCategorie`, `idRapport`) VALUES (:nom,:note,:sscat,:rapport)');
						    $insertsscateg->bindValue(':nom',$_POST['elem'.$i.$c.'2']);
						    $insertsscateg->bindValue(':note',$_POST['note'.$i.$c.'2']);
						    $insertsscateg->bindValue(':sscat','49');
						    $insertsscateg->bindValue(':rapport',$idrap['idRapport']);
							$insertsscateg->execute();
						}

						if (!empty($_POST['elem'.$i.$c.'3']))
	    				{
	    					$recupsscat=$bdd->prepare('SELECT `idSousCategorie` FROM `souscategorie` WHERE `nom`=:nom');
				            $recupsscat->bindValue(':nom',$_POST['ss'.$i.$c]);
				            $recupsscat->execute();
				            $idsscat = $selecrap->fetch();

							$insertsscateg=$bdd->prepare('INSERT INTO `element`(`nom`, `note`, `idSousCategorie`, `idRapport`) VALUES (:nom,:note,:sscat,:rapport)');
						    $insertsscateg->bindValue(':nom',$_POST['elem'.$i.$c.'3']);
						    $insertsscateg->bindValue(':note',$_POST['note'.$i.$c.'3']);
						    $insertsscateg->bindValue(':sscat','49');
						    $insertsscateg->bindValue(':rapport',$idrap['idRapport']);
							$insertsscateg->execute();
						}

						if (!empty($_POST['elem'.$i.$c.'4']))
	    				{	

	    					$recupsscat=$bdd->prepare('SELECT `idSousCategorie` FROM `souscategorie` WHERE `nom`=:nom');
				            $recupsscat->bindValue(':nom',$_POST['ss'.$i.$c]);
				            $recupsscat->execute();
				            $idsscat = $selecrap->fetch();

							$insertsscateg=$bdd->prepare('INSERT INTO `element`(`nom`, `note`, `idSousCategorie`, `idRapport`) VALUES (:nom,:note,:sscat,:rapport)');
						    $insertsscateg->bindValue(':nom',$_POST['elem'.$i.$c.'4']);
						    $insertsscateg->bindValue(':note',$_POST['note'.$i.$c.'4']);
						    $insertsscateg->bindValue(':sscat','49');
						    $insertsscateg->bindValue(':rapport',$idrap['idRapport']);
							$insertsscateg->execute();
						}
						echo "compte";
					$c=$c+1;

					}
					$i=$i+1;
				}

				header('Location: rapportconsulter.php?nom='.$_POST['nom_rapport']);
	  			exit();
				
			}
			else
			{
				header('Location: rapport.php');
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


