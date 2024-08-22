<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    var_dump($_POST);
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Forms</title>
    <meta charset="utf-8">
</head>

<body>

    <form method="post">

        <div>
            <p>Q: Which color do you like most?: </p>

            <input type="radio" name="color" value="red" checked>Red<br>

            <input type="radio" name="color" value="pink">Pink<br>

            <input type="radio" name="color" value="yellow">Yellow<br><br>

        </div>

        <button>Send</button>

    </form>

</body>

</html>