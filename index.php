<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
    $avatar = "logo.png";
    $firstname = "Daniel";
    $lastname = "Šuman";
    $age = "16";
    $profession = "student";
    $country = "Czech Republic";
    $city = "Kolín";
    $interests = "Video-Games, Programming, Computers";
    $curstatus = "Zatím ještě žiju :P";
  ?>
    <h1>Výpis profil</h1>
    <img src="<?php echo $avatar;?>" alt="avatar uživatele">
    <ul>
        <li>Jméno: <?php echo $firstname; ?></li>
        <li>Příjmení: <?php echo $lastname; ?></li>
        <li>Věk: <?php echo $age; ?></li>
        <li>Stát: <?php echo $country; ?></li>
        <li>Město: <?php echo $city; ?></li>
        <li>Profese: <?php echo $profession; ?></li>
        <li>Zájmy: <?php echo $interests; ?></li>
        <li>Status: <?php echo $curstatus; ?></li>
</body>
</html>