<?php 
    $text =<<<TEXT
    CDV -
    Collegium
    Da
    Vinci<br>
TEXT;

    echo $text;
    echo nl2br($text);
    
    echo strtolower($text);
    echo strtoupper($text);
    echo ucfirst(strtolower(trim($text)));
    echo ucwords(strtolower(trim($text)));
    
    $lorem="lorem ipsum dg dfg fd g fd gfd gfdgdfgfd g fdg fd g df g d gfd g df gfd gdfgfd g df gf sf ds fsd f sd fsd f sd fds f s fds f sdf sd f dfds f ds fds fsd fdsfdsfds fdsf sdfsd fds fds";
    echo $lorem, "<br>";
    $col=wordwrap($lorem, 40, "<br>");
    
    echo $col;

    //usuwanie bialych znakow

    $name = "  Janusz  ";
    echo strlen($name);
    echo strlen(ltrim($name));
    echo strlen(trim($name)), "<br>";

    //przeszukiwanie ciagu znakow
    $address="Poznan, ul. Bazyliowa, tel. 693 717 535";
    $find=strstr($address, 'tel');
    $find=stristr($address, 'Tel');
    $find=stristr($address, 'Tel', true);

    echo $find, '<br>';

    $surname = substr("Janusz Kowalski", 7, 5);
    echo $surname, "<br>";


    //przetwarzanie ciagow znakow

    $login = "";
    $censure = array("czarny", "Czarny", "Bialy", "bialy");
    $replace = array("_#**#_", "_#**#_", "_#**#_", "_#**#_",);

    $validLogin = str_replace($censure, $replace, $login);
    echo "dane: $login <br>";
    echo "po porawie $validLogin <br>";


?>

htlm