<?php

//priskiriu kintamuosius:
$db_host = "localhost";
$db_name = "lecture";
$db_user = "root";
$db_pass = "";

//susikonektinu su lentele (db)
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//err pranešimas nepavykus
if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}

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
    $article = null;}

//vaizdo pateikimas html
?>
<!DOCTYPE html>
<html>

<head>
    <title>My blog</title>
    <meta charset="utf-8">
</head>

<body>

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
    </main>
</body>

</html>