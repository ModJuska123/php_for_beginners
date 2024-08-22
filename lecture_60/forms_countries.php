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
            checkbox: <input type="checkbox">
        </div>
        <button>Send</button>

    </form>

</body>

</html>