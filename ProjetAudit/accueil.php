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
        <br>
<br>
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="6000">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="/images/audit1.png" class="img-responsive" />
            <div class="carousel-caption" role="option">
                <p>
                    L'Audit en direct.
                    <a class="btn btn-default" href="https://go.microsoft.com/fwlink/?LinkID=525028&clcid=0x409">
                        Learn More
                    </a>
                </p>
            </div>
        </div>
        <div class="item">
            <img src="/images/audit2.png" class="img-responsive" />
            <div class="carousel-caption" role="option">
                <p>
                   Préenregistrer vos templates et réutilisez les à l'infini.
                    <a class="btn btn-default" href="https://go.microsoft.com/fwlink/?LinkID=525030&clcid=0x409">
                        Learn More
                    </a>
                </p>
            </div>
        </div>
        <div class="item">
            <img src="/images/audit2.png" alt="Microsoft Azure" class="img-responsive" />
            <div class="carousel-caption" role="option">
                <p>
                    Learn how Microsoft's Azure cloud platform allows you to build, deploy, and scale web apps.
                    <a class="btn btn-default" href="https://go.microsoft.com/fwlink/?LinkID=525027&clcid=0x409">
                        Learn More
                    </a>
                </p>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<br>
<br>
<div class="row">
    <div class="col-md-4">
        <div class="encadre">
            <h2><a href="templatescreation.php">Créer un template</h2></a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="encadre">
            <h2><a href="templateschoix.php?var=utiliser">Utiliser un template</h2></a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="encadre">
            <h2><a href="rapportchoix.php?var=consulter">Consulter mes rapports</h2></a>
        </div>
    </div>
</div>

        <hr />
        <footer>
            <p>&copy; 2019 - Laury</p>
        </footer>
    </div>

    
</body>
</html>
