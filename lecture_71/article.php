<?php

require 'includes/sql.php';

//saugumo patikra, tik skaiciai
if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    //susikonektinu su lentele (tęsinys)
    $sql = "SELECT *
        FROM article
        WHERE id = " . $_GET['id'];

    var_dump($sql);

    //priskiriu kintamajį rezultatui
    $results = mysqli_query($conn, $sql);

    //err pranešimas nepavykus
    if ($results === false) {
        echo mysqli_error($conn);
    } else {
        $article = mysqli_fetch_assoc($results);  //norint, pakeisti į vienos eilutės atvaizdavimą keičiama čia...
    }
} else {
    $article = null;
}

//vaizdo pateikimas html
?>

<?= require 'includes/header.php'; ?>

<header>
    <h1><a href="index.php">My blog</a></h1>
</header>

<main>
    <?php if ($article === null): ?> <!-- norint, pakeisti į vienos eilutės atvaizdavimą keičiama čia..... -->
        <p>Article not found.</p>

    <?php else: ?>

        <!-- norint, pakeisti į vienos eilutės atvaizdavimą keičiama čia..... -->
        <article>
            <h2><?= $article['title']; ?></h2>
            <a><?= $article['content']; ?></a>
        </article>


    <?php endif; ?>
    <?= require 'includes/footer.php'; ?>