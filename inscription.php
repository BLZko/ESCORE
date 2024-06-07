<?php   
    include ("Commun/header_connexion.php");
?>
    <main class="tut">
        <section>
            <h1 class="h1_connexion">INSCRIVEZ VOUS</h1>
                <form action="traitement.php" method="post">
                    <div class="formulaire">
                        <label for="email">Adresse Mail :</label>
                        <input class="input" name="email" type="text" pattern="[/^[A-Za-z0-9\x{00c0}-\x{00ff}]{5,20}$/u]">
                    </div>
                    <div class="formulaire">
                        <label for="pass">Mot de Passe :</label>
                        <input class="input" name="password" type="password" id="mdp" pattern="[A-Za-z0-9$]{8,}">
                    </div>
                    <div class="formulaire">
                        <input class="input_submit" type="submit" value="S'inscrire">
                    </div>
                    <div>
                        <a href="connexion.php">Se connecter</a>
                    </div>
                    <div>
                        <a href="#">Mot de passe oublié?</a>
                    </div>
                    <div>
                        <ul class="reseau_connexion">
                            <li><a href="https://www.google.fr/" target="_blank" rel="noopener noreferrer">Connexion avec Google</a></li>
                            <li>Connexion par E-mail</li>
                            <li>Connexion avec Apple</li>
                            <li>Connexion avec Facebook</li>
                        </ul>

                    </div>
                </form>
        </section>
    </main>
    
<?php   
    include ("Commun/footer.php");
?>
</body>
</html>