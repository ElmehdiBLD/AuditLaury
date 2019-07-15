
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


    
?>

    <div class="container body-content">
        <br />
<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">

        <br />
        <table>    
            <?php
                try 
                {
                    $bdd = new PDO('mysql:host=localhost;dbname=laury', 'root','' );
                    $demande = $bdd->query('SELECT nom  FROM `template` ORDER BY `nom`');
            ?>
            <tr>
                <td>
                    template à <?php echo $_GET['var']?>:
                </td>
            </tr>
<?php
    $i = 0;
    while($don=$demande->fetch())
    {
?>            
            <tr>
                <td><a href="templates<?php echo $_GET['var']?>.php?nom=<?php echo $don['nom']?>"><?php echo $don['nom'];?></a></td>                    <!--affichages des valeurs dans le tableau-->
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

    

    
</body>
</html>
