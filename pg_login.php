<?php include "inc/header.php" ?>

<div id="wrapper">
    <div class="bloc_size">
        <div id="form_connexion">
            <h1>Page de connexion</h1>
            <form method="POST" autocomplete="off" action="/" >
                <p><label>Identifiant</label><input type="text" name="login" ></p>
                <p><label>Mot de passe</label><input type="password" name="password"></p>
                <p><input type="submit" value="Valider" class="btn-purple"/></p>
            </form>
        </div>
    </div>
</div>

<?php include "inc/footer.php" ?>

