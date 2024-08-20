<?php

include 'sql.php';

//susikonektinu su lentele (tęsinys)
$sql = "SELECT *
        FROM article
        ORDER BY published_at;";

//priskiriu kintamajį rezultatui
$results = mysqli_query($conn, $sql);

//err pranešimas nepavykus
if ($results === false) {
    echo mysqli_error($conn);
} else {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
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
            <p>No articles found.</p>
        <?php else: ?>

            <ul>
                <?php foreach ($articles as $article): ?>
                    <li>
                        <article>
                            <h2>
                                <a href="article.php?id=<?= $article['id']; ?>"> <?= $article['title']; ?></a> <!-- papildžius eilutę href=.., galima pagal t1 id nueiti į article.php ir iš ten atsidaryti konkrečią eil. pagal id -->
                            </h2>
                            <p><?= $article['content']; ?></p>
                        </article>
                    </li>
                <?php endforeach; ?>
            </ul>

        <?php endif; ?>
    </main>
</body>

</html>