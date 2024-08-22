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
        password: <input type="password" name="password" value="123">
    </div>

    <div>
        tel: <input type="tel" name="telephone">
    </div>

    <div>
        url: <input type="url" name="url-address" value="https://delfi.lt">
    </div>

    <div>
        date: <input type="date" name="date">
    </div>

    <div>
        time: <input type="time" name="time">
    </div>

    <div>
        week: <input type="week" name="week">
    </div>

    <div>
        color: <input type="color" name="color">
    </div>

    <div>
        email: <input type="email" name="email-address">
    </div>

    <div>
        month: <input type="month" name="month">
    </div>

    <div>
        range: <input type="range" name="range">
    </div>

    <div>
        hidden: <input type="hidden" name="hidden" value="12321">
    </div>

    <div>
        number: <input type="number" name="numbers">
    </div>

    <div>
        search: <input type="search" name="search-bar">
    </div>

    <div>
        datetime-local: <input type="datetime-local" name="local-date">
    </div>

    <button>Submit</button>

</form>

</body>
</html>
