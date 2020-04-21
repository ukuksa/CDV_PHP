<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="login" placeholder="Login"><br>
        <input type="submit" value="Zatwierdz"><hr>
    </form>

    <?php
        $censure = array("czarny", "Czarny", "Bialy", "bialy");
        $replace = "_#**#_";
        if(!empty($_POST['login'])) {
            $validLogin = str_ireplace($censure, $replace, $_POST['login']);
            echo <<<E
            Dane przed poprawa: $_POST[login]<br>
            dane po poprawie: $validLogin
E;
        }
    ?>
</body>
</html>