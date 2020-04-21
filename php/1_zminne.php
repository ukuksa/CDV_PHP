<?php 
    echo "CDV <br>";
    echo "CDV <br>";


    $name='Janusz';
    echo "Mam na imie: $name";
    echo "<br>Mama na imie: ".$name;

    $dec = 100;
    $hex = 0xB;
    $oct = 021;
    $bin = 0b1010;


    echo $bin;
    $x = 5.7;
    

    //skladnia heredoc


    $name = "Anna";
    $surname = "Nowak";

    echo <<<ETYKIETA
        <br>Dane<br>
        imie: $name<br>
        Nazwisko: $surname<br>
ETYKIETA;


    $data = <<<SHOW
        New data<br>
SHOW;

    echo $data;


//skladnia nowdoc


    $name ="Tadeusz";
    echo <<<E
        Imie: $name<br>
E;

?>