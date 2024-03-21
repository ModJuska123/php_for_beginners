<?php

$db_host = "localhost";
$db_name = "cms_new";
$db_user = "cmsnew_www";
$db_pass = "TPoPhUXeTuHqtTwM";

$conn = mysqli_connect($db_host, $db_name, $db_user, $db_pass);


if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}

$sql = "SELECT *
        FROM article
        WHERE id = 1";

$results = mysqli_query($conn, $sql);

if ($results === false) {
    echo mysqli_error($conn);
} else {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>My blog</title>
    <meta charset="utf-8">
</head>

<body>

    <head>
        <h1>My blog</h1>
    </head>
    <main>
        <?php if (empty($articles)) : ?>
            <p>No articles found</p>
        <?php else : ?>
            <ul>
                <?php foreach ($articles as $article) : ?>
                    <li>
                        <article>
                            <h2><?= $article['title']; ?></h2>
                            <p><?= $article['content']; ?></p>
                        </article>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

    </main>
</body>

</html>