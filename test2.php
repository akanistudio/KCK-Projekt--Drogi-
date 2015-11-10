<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>test"</title>

</head>

<body>

    <a href="?page=glowna">strona glowna</a>
    <a href="?page=podstrona">podstrona</a>
<?php
    $podstrona = "tresc podstrony";
    $glowna = "tresc strony glownej";

    if($_GET['page']=="podstrona") echo $podstrona;
    else if($_GET['page']=="glowna") echo $glowna;
    else  echo $glowna;
?>
</body>

</html>
