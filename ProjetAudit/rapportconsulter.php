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
        logo
        <br>
        
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
