<?php include "inc/header.php" ?>

<div id="wrapper">
    <div class="bloc_size">
        <div id="form_connexion">
            <h1>Page de connexion</h1>
            <form  autocomplete="off" method="POST" action="/" >
                <p><label>Identifiant</label><input type="text" name="login" value="" ></p>
                <p><label>Mot de passe</label><input type="password" name="password" value=""></p>
                <p><input type="submit" value="Valider" class="btn-purple bloc_right"/></p>
                <p class="clear"></p>
            </form>
        </div>
    </div>
</div>

<?php include "inc/footer.php" ?>

