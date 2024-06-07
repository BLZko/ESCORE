<?php

session_start();
include_once("bdd_escore/escore_inc.php");

$email = (isset($_POST["email"]) && !empty($_POST["email"])) ? htmlspecialchars($_POST["email"]) : null;
$password = (isset($_POST["password"]) && !empty($_POST["password"])) ? htmlspecialchars($_POST["password"]) : null;

$loginSuccess = false;

if ($email && $password) {
    try {
        $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_password);
        // Options de PDO
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        $qry = $pdo->prepare("SELECT * FROM utilisateur WHERE email=?");
        $qry->execute(array($email));
        $data_user = $qry->fetch();
        // verification de mot de passe et email
        if ($data_user && password_verify($password, $data_user["password"])) {
            // definition du nom grace à la session
            $_SESSION["email"] = $data_user["email"];
            $loginSuccess = true;
        } else {
            echo ('<script type="text/javascript">
            alert("Utilisateur Introuvable");
            window.location.href="connexion.php";
            </script>');
        }

    } catch (PDOException $err) {
        // Gestion des erreurs
        $_SESSION["compte-erreur-sql"] = $err->getMessage();
        header("location:pageerreur.php");
        exit();
    }
} else {
    echo "L'email ou le mot de passe ne sont pas corrects";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <style>
        /* Styles de base pour le formulaire */
        #login-form {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }

        #login-form div {
            margin-bottom: 15px;
        }

        #login-form label {
            display: block;
            margin-bottom: 5px;
        }

        #login-form input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        #login-form button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        #login-form button:hover {
            background-color: #45a049;
        }

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
</head>
<body>

    <div id="overlay"></div>

    <div id="popup">
        <img src="https://via.placeholder.com/150" alt="Confirmation">
        <p>Connexion réussie !</p>
        <button onclick="redirectToHome()">OK</button>
    </div>

    <form id="login-form" method="post" action="">
        <div>
            <label for="email">Adresse e-mail :</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Se connecter</button>
    </form>

    <!-- <script>
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
        } -->

        <?php 
        // if ($loginSuccess) :
         ?>
            // showPopup();
        <?php 
    // endif;
     ?>
    <!-- </script> -->

</body>
</html>
