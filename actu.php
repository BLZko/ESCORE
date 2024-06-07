<?php   
        include ("Commun/header.php");
    ?>


<?php
// Votre clé API gnews.io
$apiKey = '7f95a4afa37b046d3b351686b61c00a0';

// URL de l'API gnews.io pour rechercher des articles sur eSport
$url = 'https://gnews.io/api/v4/search?q=esport&token=' . $apiKey . '&lang=fr';

// Fonction pour effectuer une requête cURL
function fetchURL($url) {
    $ch = curl_init();

    // Configuration des options cURL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // Exécution de la requête et récupération de la réponse
    $output = curl_exec($ch);

    // Fermeture de la session cURL
    curl_close($ch);

    return $output;
}
?>
       

<?php
// Récupération du contenu JSON de la réponse
$response = fetchURL($url);
$data = json_decode($response, true);

if (isset($data['articles'])) {
    $articles = $data['articles'];

    foreach ($articles as $article) {
        $title = $article['title'];
        $description = $article['description'];
        $url = $article['url'];
        $publishedAt = $article['publishedAt'];
        $imageURL = $article['image'];

        echo "<h2>$title</h2>\n";
        echo "<img src=\"$imageURL\" alt=\"$title\">\n";
        echo "<p>$description</p>\n";
        echo "<p>Publié le : $publishedAt</p>\n";
        echo "<a href=\"$url\">Lien vers l'article</a>\n";
        echo "<hr>\n";
    }
} else {
    echo "Aucun article trouvé.";
}
?>
<section class="article">
<article>
    <a href=<?php echo "<a href=\"$url\">Lien vers l'article</a>\n";?> target="_blank" rel="noopener noreferrer"><img <?php echo "<img src=\"$imageURL\" alt=\"$title\">\n"; ?> </a>
    <a href="https://www.google.fr/" target="_blank" rel="noopener noreferrer"><p>EXEMPLE EXEMPLE EXEMPLE</p></a>
</article>
<article>
    <a href="https://www.google.fr/" target="_blank" rel="noopener noreferrer"><img class="img" src="./Asset/img/e-score_logo_violet.png" alt=""></a>
    <a href="https://www.google.fr/" target="_blank" rel="noopener noreferrer"><p>EXEMPLE EXEMPLE EXEMPLE</p></a>
</article>
<article>
    <a href="https://www.google.fr/" target="_blank" rel="noopener noreferrer"><img class="img" src="./Asset/img/e-score_logo_violet.png" alt=""></a>
    <a href="https://www.google.fr/" target="_blank" rel="noopener noreferrer"><p>EXEMPLE EXEMPLE EXEMPLE</p></a>
</article>
<article>
    <a href="https://www.google.fr/" target="_blank" rel="noopener noreferrer"><img class="img" src="./Asset/img/e-score_logo_violet.png" alt=""></a>
    <a href="https://www.google.fr/" target="_blank" rel="noopener noreferrer"><p>EXEMPLE EXEMPLE EXEMPLE</p></a>
</article>
</section>


