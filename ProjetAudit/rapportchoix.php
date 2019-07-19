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
                    include 'bdd.php';
                    $demande = $bdd->query('SELECT nom  FROM `rapport` ORDER BY `nom`');
            ?>
            <tr>
                <td>
                    Rapport à <?php echo $_GET['var']?>:
                </td>
            </tr>
<?php
    $i = 0;
    while($don=$demande->fetch())
    {
?>            
            <tr>
                <td><a href="rapport<?php echo $_GET['var']?>.php?nom=<?php echo $don['nom']?>"><?php echo $don['nom'];?></a></td>                    <!--affichages des valeurs dans le tableau-->
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
    </div>
</div>
        <hr />
        <footer>
            <p>&copy; 2019 - Laury</p>
        </footer>
    </div>

    

    
</body>
</html>
