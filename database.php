<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Geriausi rezultatai</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">

    <h1>Geriausi rezultatai</h1>

    <?php

    $db = new PDO('mysql:host=localhost;dbname=snake', 'root', '');

    $query = 'SELECT * from scores order by score DESC ';

    $result = $db->query($query);

    $i = 1;

    foreach($result as $row){
        echo "<h3>" . $i . ". " . $row['name'] . " " . $row['score'] . "</h3>";
        $i++;
        if($i > 10)
            break;
    }
    ?>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>



