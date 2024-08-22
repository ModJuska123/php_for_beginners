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

    <select name="brand[]" multiple>
        <option value="bmw">BMW</option>
        <option value="ford">Ford</option>
        <option value="sab">Saab</option>
        <option value="volvo">Volvo</option>
    </select>

    <button>Send</button>

</form>

</body>
</html>
