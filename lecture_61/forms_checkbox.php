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
            checkbox: <input type="checkbox" name="checkbox" value="true" checked>I agree to terms and conditions
        </div>
        
        <div>
            <p>Q: Which color do you like most?: </p>

            <div><input type="checkbox" name="color[]" value="red">Red</div>
            <div><input type="checkbox" name="color[]" value="pink">Pink</div>
            <div> <input type="checkbox" name="color[]" value="yellow">Yellow</div>
                   
        </div>
        
        <button>Send</button>

    </form>

</body>

</html>