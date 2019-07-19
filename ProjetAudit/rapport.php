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
        <form action="" method="post">
            <div class="col-md-7">
                <div>
                    <div class="encadre">
                        <h2><a href="rapportchoix.php?var=consulter">Consulter un rapport</a></h2>
                    </div>
<!--                    <br />
                    <div  class="encadre">
                        <h2 ><a href="rapportcreation.php">Créer un rapport</a></h2>
                    </div>
                    <br />
                    <div class="encadre">
                        <h2><a href="rapportchoix.php?var=supprimer">Supprimer un rapport</a></h2>
                    </div>-->
                </div>
            </div>
            <div class="col-md-4">
            </div>
        <input name="__RequestVerificationToken" type="hidden" value="CfDJ8CyS6oxuIX9ArzLs-1XjJNcqAtO_AGXQs9oTBQ6y8AtGHDi63TeaygJSQtztZTiE9SQ3JmGbh2lCoi53dw98bj-8LUwhUXycJEAztwc9txVTDJRI7BVidZlAD734dmA8VMykB3_u-FX1dypMrny-e4A" /></form>
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
