<?php   
    include ("Commun/header_connexion.php");
?>
<style>
        /* Styles de base pour le popup */
        #popup {
            display: none;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: white;
            border: 2px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        #popup img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        #popup button {
            margin-top: 10px;
        }

        /* Styles pour le fond semi-transparent */
        #overlay {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
    </style>
    
    <main class="tut">
        <section>
            <h1 class="h1_connexion">CONNECTEZ VOUS</h1>

            <div id="overlay"></div>

            <div id="popup">
                <img src="https://via.placeholder.com/150" alt="Confirmation">
                <p>Connexion réussie !</p>
                <button onclick="redirectToHome()">OK</button>
            </div>

                <form action="traitement_co.php" method="post" class="purple">
                    <div class="formulaire">
                        <label for="email">Adresse e-mail :</label>
                        <input class="input" id="email" name="email" type="email" required>
                    </div>
                    <div class="formulaire">
                        <label for="password">Mot de Passe :</label>
                        <input class="input" id="password" name="password" type="password" required>
                    </div>
                    <div class="formulaire">
                        <input class="input_submit" type="submit" value="Se Connecter">
                    </div>
                    <div>
                        <a href="inscription.php">S'inscrire</a>
                    </div>
                    <div>
                        <a href="forgot.php">Mot de passe oublié?</a>
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
    <script type="text/javascript" async>
        function showPopup() {
            document.getElementById('popup').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('popup').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }

        function redirectToHome() {
            window.location.href = "e-score.php";
        }

      
    </script>

<!-- <script src="./Asset/javascript/e-score.js"></script> -->

<?php   
    include ("Commun/footer.php");
?>
