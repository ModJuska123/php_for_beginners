<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    require 'includes/sql.php';


    $sql = "INSERT INTO article (title, content, published_at)
            VALUES ('" . $_POST['title'] . "', '"
                       . $_POST['content'] . "','"
                       . $_POST['published_at'] . "')";

    $results = mysqli_query($conn, $sql);

    if ($results === false) {
        echo mysqli_error($conn);

    } else {
        $id = mysqli_insert_id($conn);
        echo "Inserted record with ID: $id";
    }
}

?>

<?php require 'includes/header.php'; ?>

<h2>New article</h2>

<form method="post">

        <div>
            <label for="title">Title</label><br>
            <input name="title" id="title" placeholder="Article title"
        </div><br><br>

        <div>
            <label for="content">Content</label><br>
            <textarea name="content" rows="4" cols="20" id="content" placeholder="Article content"></textarea>
        </div><br>

        <div
            <label for="published_at">Publication date and time</label><br>
            <input type="datetime-local" name="published_at" id="published_at">
        </div><br><br>
        
        <button>Submit</button>
</form>




<?php require 'includes/footer.php'; ?>