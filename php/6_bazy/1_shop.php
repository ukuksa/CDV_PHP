<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="../../css/2.css">
    <title>Shop - user</title>
</head>
<body>
    <h3>Tabela user</h3>

    <?php

        require_once './scripts/connect.php';

        //$sql = "SELECT * FROM user";
        $sql= "SELECT `city`.`city`, `user`.`id`, `user`.`name`, `user`.`surname`, `user`.`date` FROM `city` INNER JOIN `user` ON `user`.`cityid` = `city`.`id`";
        //$sql= "SELECT city.city, user.id, user.name, user.surname, user.birthday FROM city INNER JOIN user ON user.city_id = city.id";

        echo<<<TABLE
        <table>
        <tr>
            <th>Id</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Data urodzenia</th>
            <th>Rok</th>
            <th>Miasto</th>
            <th>Usun</th>
        </tr>

TABLE;

        if($result = mysqli_query($conn,$sql)){
            while($row = mysqli_fetch_assoc($result)){

           
                require_once './scripts/function.php';
                $year = year($row['date']);
                if($year == 0000){
                    $year ='-';
                }

                echo <<<ROW
                <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[surname]</td>
                    <td>$row[date]</td>
                    <td>$year</td>
                    <td>$row[city]</td>
                    <td><a href="./scripts/del_user.php?id=$row[id]">Usun</a></td>
                </tr>
ROW;
            }
             echo '</table>';
             //mysqli_close($conn);
        }

    ?>
    <a href="?add_user=">Dodaj uzytkownika</a>

    <?php
    if(isset($_GET['add_user'])) {
        echo "<h3>dodawanie</h3>";
        ?>
        <form action="add_user.php" method="post"><br>
            <input type="text" name="name" placeholder="name"><br>
            <input type="text" name="surname" placeholder="surname"><br>
            <input type="date" name="date" placeholder="date"><br>
            <select name="cityid">
            <?php
                //require_once './scripts/connect.php';
                $sql = "SELECT * FROM `city`";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<option value=\"$row[id]\">$row[city]</option>";
                }

            ?>

            </select><br>
            <input type="submit" name="button" placeholder="Add"><br>
        </form>
        <?php
    }else{ echo<<< H
        <h3>
        <a href="?add_user=">Dodaj uzytkownika</a>
        </h3>
H;
        
    }
    ?>
</body>
</html>