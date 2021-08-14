<?php
    $mysql = new mysqli("127.0.0.1", "root", "", "randomnum");

    if(!$mysql) {
        die("Something is wrong");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Random number Project</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <script src="script.js"></script>
    </head>
    <body>
        <div id="header">
            <h1>
                Random Number
            </h1>
        </div>
        <hr>
        <div id="main">
            <div id="number"><h2>N/A</h2></div>
            <div id="generate"><button>Generate</button></div>
            <br>
            <div id="submit">
                <form method="GET" action="index.php">
                    <input type="submit">
                </form>
            </div>
        </div>
    </body>
</html>

<?php
    $randomNumber = $_COOKIE["randomNum"];
    if ($randomNumber != 0) {
        $query = "INSERT INTO `numererandom` (`id`, `randnum`) VALUES(NULL, $randomNumber)";
        $result = mysqli_query($mysql, $query);
    }
?>