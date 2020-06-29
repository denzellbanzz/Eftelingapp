<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Efteling</title>
    <link href="main.css" rel="stylesheet">
</head>
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
<body>
<h1>welkom bij de efteling</h1>
<?php
$json = file_get_contents('http://ginootten.nl/vopro/data.txt');
$obj = json_decode($json);

foreach ($obj->AttractionInfo AS $attraction) {
if ($attraction->Type != 'Attraction') {
    continue;
}
?>


<h2><?php echo $attraction->Id;
    } ?></h2>


</body>
</html>
