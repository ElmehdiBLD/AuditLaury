<?php
    
    session_start();
    if (!isset($_SESSION['login'])) 
    {
        header('Location: index.php?err=2');
        exit();
    }

?>
<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
    <body>



    <div class="containerfluid body-content" style="background-color: #687B85;">
        <br />
<br />
<div class="row">
    <div class="col-md-2">
    </div>

    <div class="col-md-8 encadreinsc" style="background-color: white;">
        <br>
        <div><img src="images/logo.png"></div>
        <h1><?php echo $_GET['nom']; ?></h1>
        <h4>Rapport d'audit</h4>
        <br>
        <br>
        <textarea name="textarea" rows="10" cols="100" placeholder="Vous pouvez saisir ici un compte rendu du rapport de cet audit et une piste d'amélioration générale afin d'orienter le client."></textarea>
        <br><br>
        <center>
        	Ajout d'images:<input type="file" name="fichier"/>
	        <br><br>

	        <table style="border: solid 1px;">
	        	<tr id="0001" class="ligne-paire">
	                <td style="width:300px;">failles</td>                    <!--affichages des valeurs dans le tableau-->
	                <td >note</td>
	            </tr>

<?php
	

	try 
	{
	    include 'bdd.php';
	   
    


	$selectpre=$bdd->prepare('SELECT `idRapport` FROM `rapport` WHERE `nom`=:nom');
    $selectpre->bindValue(':nom',$_GET['nom']);
	$selectpre->execute();
	$idtemp = $selectpre->fetch();

	$sel=$bdd->prepare('SELECT `idElement`, `nom`, `note`, `idSousCategorie`, `idRapport` FROM `element` WHERE `idRapport`=:id');
	$sel->bindValue(':id',$idtemp['idRapport']);
	$sel->execute();


	$i = 0;
    while($idss=$sel->fetch())
{
?>            
			<tr id="0001" class="ligne-paire">
                <td><?php echo $idss['nom'];?></td>                    <!--affichages des valeurs dans le tableau-->
                <td><?php echo $idss['note'];?></td>
            </tr>

<?php
$i++;
}
$bdd = null;
	} catch (PDOException $e) {
	    print "Erreur !: " . $e->getMessage() . "<br/>";
	    die();
	}
?>

	        </table>
	    </center>
    </div>
    <div class="col-md-2">
    </div>
</div>

        <hr />
        <footer>
            <p>&copy; 2019 - Laury</p>
        </footer>
    </div>

</body>
</html>
