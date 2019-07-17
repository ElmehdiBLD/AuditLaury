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
        <form action="requetes/createmplates.php" method="POST">
        <input style="margin-left:200px;height:40px;width:300px;" type="text" id="nomtemp" name="nom_template" placeholder="NOM DU TEMPLATE">
        <br />
        <br />
        <br />
        <input class="cat" type="text" id="cat1" name="cat1" placeholder="categorie 1">
        <br /><br />
        <input class="sscat" type="text" id="souscat1" name="souscat11" placeholder="souscat1">
        <br /><br />
        <input class="sscat" type="text" id="souscat1" name="souscat12" placeholder="souscat1">
        <br /><br />
        <input class="sscat" type="text" id="souscat1" name="souscat13" placeholder="souscat1">
        <br />

        <br />
        <input class="cat" type="text" id="cat2" name="cat2" placeholder="categorie 2">
        <br /><br />
        <input class="sscat" type="text" id="souscat2" name="souscat21" placeholder="souscat2">
        <br /><br />
        <input class="sscat" type="text" id="souscat2" name="souscat22" placeholder="souscat2">
        <br /><br />
        <input class="sscat" type="text" id="souscat2" name="souscat23" placeholder="souscat2">
        <br />

        <br />
        <input class="cat" type="text" id="cat3" name="cat3" placeholder="categorie 3">
        <br /><br />
        <input class="sscat" type="text" id="souscat3" name="souscat31" placeholder="souscat3">
        <br /><br />
        <input class="sscat" type="text" id="souscat3" name="souscat32" placeholder="souscat3">
        <br /><br />
        <input class="sscat" type="text" id="souscat3" name="souscat33" placeholder="souscat3">
        <br />

        <br />
        <input class="cat" type="text" id="cat4" name="cat4" placeholder="categorie 4">
        <br /><br />
        <input class="sscat" type="text" id="souscat4" name="souscat41" placeholder="souscat4">
        <br /><br />
        <input class="sscat" type="text" id="souscat4" name="souscat42" placeholder="souscat4">
        <br /><br />
        <input class="sscat" type="text" id="souscat4" name="souscat43" placeholder="souscat4">
        <br /><br /><br />
        <button style="margin-left: 200px;height:40px;width:300px;" name="tempcrea" type="submit">CREER LE TEMPLATE</button>
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

    
    
</body>
</html>
