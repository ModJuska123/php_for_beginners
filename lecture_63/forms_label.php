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
            <label for="title">Title:</label>
            <input id="title" type="text" name="title">
        </div>

        <div>
            <label for="content">Content:</label>
            <textarea id=content name="content" name="title"></textarea>
        </div>

        <div>
            <label><input id="visible" type="checkbox" name="visible" value="yes">Visible</label><br>

        </div>

        <div>
            <p>Color:</p>

             <label><input type="radio" name="color" value="red" checked id="color_red">
           Red</label><br>

            <label><input type="radio" name="color" value="pink" id="color_pink">
            Pink</label><br>

            <label><input type="radio" name="color" value="yellow" id="color_yellow">
            Yellow</label><br>

        </div>

        <button>Send</button>

    </form>

</body>

</html>