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

        <fieldset>
            <legend>Article</legend>

            <div>
                <label for="title">Title:</label>
                <input id="title" type="text" name="title" placeholder="Add text">
            </div>

            <div>
                <label for="content">Content:</label>
                <textarea id=content name="content" placeholder="Add text"></textarea>
            </div>
        </fieldset>

        <fieldset>
            <legend>Visibility</legend>
            <div>
                <label><input id="visible" type="checkbox" name="visible" value="yes">Visible</label><br>

            </div>
        </fieldset>

        <fieldset>
            <legend>Colors</legend>
            <div>
                <p>Color:</p>

                <label><input type="radio" name="color" value="red" checked id="color_red">
                    Red</label><br>

                <label><input type="radio" name="color" value="pink" id="color_pink">
                    Pink</label><br>

                <label><input type="radio" name="color" value="yellow" id="color_yellow">
                    Yellow</label><br>

            </div>
        </fieldset>

        <button>Send</button>

    </form>

</body>

</html>