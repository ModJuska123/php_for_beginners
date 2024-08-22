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
        text: <input type="text" name="surname" value="Marko">
    </div>

    <div>
        textarea: <textarea name="content" rows="5" cols="30">Hello</textarea>
    </div>

    <button>Submit</button>

</form>

</body>
</html>
