<?php
    session_start();
    session_destroy(); 
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laury</title>

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


    <div class="container body-content">
        <br />
<br />
<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
        <div class="encadreco">
            <h2>Connexion</h2>
            <br />
            <br />
            <form action="requetes/testconnexion.php" method="POST">
                <div>
                    <label for="login">Login :</label><br />
                    <input type="text" id="login" name="user_login">
                </div>
                <br />
                <div>
                    <label for="mdp">Mot de passe :</label><br />
                    <input type="password" id="mdp" name="user_mdp">
                </div>
                <br />
                <a href="#">Mot de passe oublié?</a>
                <br />
                <br />
                <div class="button">
                    <button name="connexion" type="submit">Connexion</button>
                </div>
            <input name="__RequestVerificationToken" type="hidden" value="CfDJ8CyS6oxuIX9ArzLs-1XjJNdwMsgFpJ4FsSizu5uyTeAwh1nxikDBZZL9Awq73rqQAUDN6HpOcat_v_6BmUurZ7jFmXzEY8tM-jJ4FYZEYhkJVObvOs_JMmbXezze2lh6HvJwEm0Ou8YMJdPAwaVXcz4" /></form>
        </div>
    </div>
    <div class="col-md-3">
    </div>
</div>
        <hr />
        <footer>
            <p>&copy; 2019 - Laury</p>
        </footer>
    </div>


    
</body>
</html>
