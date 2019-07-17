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
        include 'bdd.php';

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
            <form action="requetes/createmplates.php" method="POST">
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
                <input class="elem" type="text" id="" name="elem<?php echo $i;echo $c ?>1" placeholder="Element 1">
                <SELECT name="note<?php echo $i;echo $c ?>1" size="1">
                    <OPTION>note
                    <OPTION>1
                    <OPTION>2
                    <OPTION>3
                    <OPTION>4
                    <OPTION>5
                    <OPTION>6
                    <OPTION>7
                    <OPTION>8
                    <OPTION>9
                    <OPTION>10
                </SELECT>/10
                <br />
                <input class="elem" type="text" id="" name="elem<?php echo $i;echo $c ?>2" placeholder="Element 2">
                <SELECT name="note<?php echo $i;echo $c ?>2" size="1">
                    <OPTION>note
                    <OPTION>1
                    <OPTION>2
                    <OPTION>3
                    <OPTION>4
                    <OPTION>5
                    <OPTION>6
                    <OPTION>7
                    <OPTION>8
                    <OPTION>9
                    <OPTION>10
                </SELECT>/10
                <br />
                <input class="elem" type="text" id="" name="elem<?php echo $i;echo $c ?>3" placeholder="Element 3">
                <SELECT name="note<?php echo $i;echo $c ?>3" size="1">
                    <OPTION>note
                    <OPTION>1
                    <OPTION>2
                    <OPTION>3
                    <OPTION>4
                    <OPTION>5
                    <OPTION>6
                    <OPTION>7
                    <OPTION>8
                    <OPTION>9
                    <OPTION>10
                </SELECT>/10
                <br />
                <input class="elem" type="text" id="" name="elem<?php echo $i;echo $c ?>4" placeholder="Element 4">
                <SELECT name="note<?php echo $i;echo $c ?>4" size="1">
                    <OPTION>note
                    <OPTION>1
                    <OPTION>2
                    <OPTION>3
                    <OPTION>4
                    <OPTION>5
                    <OPTION>6
                    <OPTION>7
                    <OPTION>8
                    <OPTION>9
                    <OPTION>10
                </SELECT>/10
                <br /><br />
            <?php
            $c=$c+1;
            }
            ?>
       <?php
       $i=$i+1;
       $c=0;
        }
       ?>     
         <button style="margin-left: 200px;height:40px;width:300px;" name="fintemp" type="submit">GENERER LE RAPPORT</button>
       </form>
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
