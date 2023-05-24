<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Feldolgozó</title>
</head>
<body>
    <font style=" font-size:18pt">
    <h2>Vélemény</h2>

    <?php

    echo ("<strong>Név: </strong>" . $_POST['nev'] . "<br><br>");

    echo ("<strong>Neme: </strong>" . $_POST['nem'] . "<br><br>");

    echo ("<strong>Életkor: </strong>" . $_POST['eletkor'] . "<br><br>");

    echo ("<strong>Értékelés (1-5): </strong>" . $_POST['ertekeles'] . "<br><br>");

    echo ("<strong>Önbizalom: </strong>" . $_POST['onbizalom'] . "<br><br>");

    ?>
    <a href="velemeny.html"> Vissza az űrlapra </a>
    </font>
</body>
</html>