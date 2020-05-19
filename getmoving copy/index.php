<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal Imdb</title>
    <?php include '/Applications/MAMP/htdocs/getmoving/pages/headfunctions.php'?>
</head>
<body>
<h1>the NS moving app</h1>
<!-- PAGE PART 1: Upperside -->
<?php
echo include '/Applications/MAMP/htdocs/getmoving/pages/main.php'
?>
<!-- PAGE PART 2 The pages will be loaded in here -->
<?php

if (isset($_GET['page'])) // Exist in the variable page inside the URL
    $page = $_GET['page'];
else
    $page = 'home'; // standaard pagina die wordt ingeladen

if (preg_match('/^[a-z0-9\-]+$/', $page)) // //Safety
{
    $inserted = include ('pages/' . $page .'.php');
    if (!$inserted)
        echo('De pagina die u zoekt bestaat niet!.');
}

else
    echo ('Foute pagina gegevens');
?>
<!-- END PAGE -->
</body>
</html>