<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gyvatėlė</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div id="photo">
        <img id="snake" src="photos/snake-clip-art-green-snake.svg">
    </div>
    <div>
        <ul class="list-unstyled">
            <li><button type="button" id="play" class="btn btn-lg btn-info width">Žaisti</button></li>
            <li><button type="button" id="highscore" class="btn btn-lg btn-danger width">Geriausi rezultatai</button></li>
        </ul>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script>
    main = function(){
        $("#play").click(function(){
            $(location).attr('href', 'snake.php');
        });
        $("#highscore").click(function(){
            $(location).attr('href', 'database.php');
        });
    };
    $(document).ready(main);
</script>
</body>
</html>