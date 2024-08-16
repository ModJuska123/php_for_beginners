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
//susikonektinu su lentele (tęsinys)
$sql = "SELECT *
        FROM article
        WHERE id = 1;";

//priskiriu kintamajį rezultatui
$results = mysqli_query($conn, $sql);

//err pranešimas nepavykus
if ($results === false) {
    echo mysqli_error($conn);
} else {
    $article = mysqli_fetch_assoc($results);
}

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
        <h1>My blog</h1>
    </header>

    <main>
        <?php if (empty($articles)): ?>
            <p>Article not found.</p>

        <?php else: ?>

            <article>
                <h2><?= $article['title']; ?></h2>
                <p><?= $article['content']; ?></p>
            </article>


        <?php endif; ?>
    </main>
</body>

</html>