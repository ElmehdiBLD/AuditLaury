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
