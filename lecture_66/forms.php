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

    <form method="post" novalidate>

        <div>
            postcode: <input name="postcode" pattern="[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}"
            title="Please add a valid UK postcode or not to fill any more">
        </div>

        <div>
            email: <input type="email" name="email" >
        </div>

        <div>
            url: <input type="url" name="url">
        </div>

        <div>
            number: <input type="number" name="count" min="1", max="5" required>
        </div>

        <button>Send</button>

    </form>

</body>

</html>