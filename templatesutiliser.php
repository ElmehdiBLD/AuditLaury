
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> - Laury</title>

    
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/base.css" />


    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">Laury</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="templates.html">Templates</a></li>
                    <li><a href="rapport.html">Rapport</a></li>
                </ul>
            </div>
        </div>
    </nav>

    </head>
    <body>
<?php
    try 
    {
        $bdd = new PDO('mysql:host=localhost;dbname=laury', 'root','' );

        $recupid=$bdd->prepare('SELECT `idTemplate` FROM `template` WHERE `nom`=:nom');
        $recupid->bindValue(':nom',$_GET['nom']);
        $recupid->execute();
        $idtemp = $recupid->fetch();

        $recupcat=$bdd->prepare('SELECT `nom` FROM `categorie` WHERE `idtemplate`=:template');
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
        while($nomcat=$recupcat->fetch())
        {
        ?>
            <div class="encadreuse" id="cat1" name="cat1"><?php echo $nomcat['nom'] ?></div>
            <br />
            <div class="sscat encadreuse" id="souscat1" name="souscat1">biiiinks</div>
            <br />
            <div class="sscat encadreuse" id="souscat2" name="souscat2">biiiinks</div>
            <br />
            <div class="sscat encadreuse" id="souscat3" name="souscat3">biiiinks</div>
            <br /><br />
       <?php
        }
       ?>     
            <br />
            <div class="encadreuse" id="cat2" name="cat2"><?php echo $nomcat['nom'] ?></div>
            <br /><br />
            <input class="sscat" type="text" id="souscat2" name="souscat2" placeholder="souscat2">
            <br /><br />
            <input class="sscat" type="text" id="souscat2" name="souscat2" placeholder="souscat2">
            <br /><br />
            <input class="sscat" type="text" id="souscat2" name="souscat2" placeholder="souscat2">
            <br />

            <br />
            <input class="cat" type="text" id="cat3" name="cat1" placeholder="categorie 3">
            <br /><br />
            <input class="sscat" type="text" id="souscat3" name="souscat3" placeholder="souscat3">
            <br /><br />
            <input class="sscat" type="text" id="souscat3" name="souscat3" placeholder="souscat3">
            <br /><br />
            <input class="sscat" type="text" id="souscat3" name="souscat3" placeholder="souscat3">
            <br />

            <br />
            <input class="cat" type="text" id="cat4" name="cat4" placeholder="categorie 4">
            <br /><br />
            <input class="sscat" type="text" id="souscat4" name="souscat4" placeholder="souscat4">
            <br /><br />
            <input class="sscat" type="text" id="souscat4" name="souscat4" placeholder="souscat4">
            <br /><br />
            <input class="sscat" type="text" id="souscat4" name="souscat4" placeholder="souscat4">
            <br />

        </div>
        <div class="col-md-2">
            <button type="submit">Créer le template</button>
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
