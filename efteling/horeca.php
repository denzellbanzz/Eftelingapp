<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>horeca</title>
    <link href="main.css" rel="stylesheet">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="shows.php">shows</a></li>
            <li><a href="index.php">atraction</a></li>
            <li><a href="horeca.php">horeca</a></li>
            <li><a href="inlog/vgl-login1.php">inlog</a></li>
        </ul>
    </nav>
</header>

<?php
$json = file_get_contents('http://ginootten.nl/vopro/data.txt');
$obj = json_decode($json);


foreach($obj->AttractionInfo AS $horeca ) {
if($horeca->Type != 'Horeca') { continue; }
?>


<h1><?php echo $horeca->Id;  }  ?></h1>

</body>
</html>