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
<?php
    try 
    {
        $bdd = new PDO('mysql:host=localhost;dbname=laury', 'root','' );

        $recupid=$bdd->prepare('SELECT `idTemplate` FROM `template` WHERE `nom`=:nom');
        $recupid->bindValue(':nom',$_GET['nom']);
        $recupid->execute();
        $idtemp = $recupid->fetch();

        $recupcat=$bdd->prepare('SELECT `idCategorie`,`nom` FROM `categorie` WHERE `idtemplate`=:template');
        $recupcat->bindValue(':template',$idtemp['idTemplate']);
        $recupcat->execute();

        
?>
    <div class="container body-content">
        <br />
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <h1><?php echo $_GET['nom']?></h1>
            <br />
        <?php
        $i=1;
        $c=1;
        while($nomcat=$recupcat->fetch())
        {   
            $recupsscat=$bdd->prepare('SELECT `nom` FROM `souscategorie` WHERE `idCategorie`=:categorie');
            $recupsscat->bindValue(':categorie',$nomcat['idCategorie']);
            $recupsscat->execute();

        ?>
            <div class="encadreuse" id="cat1" name="cat<?php echo $i ?>"><?php echo $nomcat['nom'] ?></div>
            <br />
            <?php 
            while($nomsscat=$recupsscat->fetch())
            {  
            ?>
                <div class="sscat encadreuse"><?php echo $nomsscat['nom'] ?></div>
                <br />
            <?php
            $c=$c+1;
            }
            ?>
       <?php
       $i=$i+1;
       $c=0;
        }
       ?>     
        </div>
        <div class="col-md-2">
        </div>
    </div>
        <hr />
        <footer>
            <p>&copy; 2019 - Laury</p>
        </footer>
    </div>

    <?php
        
        $bdd = null;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    ?>

    
</body>
</html>
