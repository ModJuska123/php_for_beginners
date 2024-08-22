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
                <input id="title" type="text" name="title" value="Read only!" readonly>
            </div>

            <div>
                <label for="content">Content:</label>
                <textarea id=content name="content" name="title" placeholder="Add text" autofocus></textarea>
            </div>
        </fieldset>

        <fieldset>
            <legend>Visibility</legend>
            <select name="language[]" multiple disabled>
                <option value="uk" disabled>UK</option>
                <option value="us">US</option>
                <option value="french">French</option>
                <option value="german">German</option>
            </select>

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