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



    <div class="container body-content">
        <br />
<br />
<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8 encadreinsc">
        <form action="" method="post">
            <h2>Inscription</h2>
            <br />
            <br />
            <div class="col-md-1">
            </div>
            <div class="col-md-5">
                <div>
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
                    <div>
                        <label for="mdp">Mot de passe :</label><br />
                        <input type="password" id="mdp" name="user_mdp">
                    </div>
                    <br />
                    <div>
                        <label for="mdp">Mail :</label><br />
                        <input type="email" id="mail" name="user_mail">
                    </div>
                    <br />
                    <br />
                </div>
            </div>
            <div class="col-md-5">
                <div>
                    <div>
                        <label for="login">Login :</label><br />
                        <input type="text" id="login" name="user_login">
                    </div>
                    <br />
                    <div>
                        <label for="mdp">Mot de passe :</label><br />
                        <input type="password" id="mdp" name="user_mail">
                    </div>
                    <br />
                    <div>
                        <label for="login">Login :</label><br />
                        <input type="text" id="login" name="user_login">
                    </div>
                    <br />
                    <div>
                        <label for="mdp">Mot de passe :</label><br />
                        <input type="password" id="mdp" name="user_mail">
                    </div>
                    <br />
                    <br />

                </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="button">
                <button type="submit">Connexion</button>
            </div>
        <input name="__RequestVerificationToken" type="hidden" value="CfDJ8CyS6oxuIX9ArzLs-1XjJNeNSBIlWQemhnMA5vzKp1bdLCjj8DDhfkeTOR4fxKWpf5epBV8RYrvTOsh0onJkjHeuQlCBm7xeeQov8FW0bVFDr5ao8sV2-TX9NIMGZZzgtHnCcoTf5QUIMpFC423lKIY" /></form>
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
