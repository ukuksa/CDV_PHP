<?php
    function value($a):bool{
        if($a < 0) {
            return "ujem";
        }elseif ($a > 0) {
            return "dodat";
        }else{
            return "zero";
        }
    }

    $x = value(-5);
    echo $x;
    echo gettype($x), "<br>";

    function getValue():int{
        return 10.55;
    }
        echo getValue(),"<br>";


//zasieg zmiennych
$x = 10;
function show(){
    echo "Wartosc zmiennej", $GLOBALS['x'];
    $GLOBALS['x'] += 1;
    echo "war", $GLOBALS['x'];

}function show1(){
    global $x;
    echo "Wartosc zmiennej $x";
    $x += 1;
    echo "war $x";
}
    show1();
    echo "<br>";

    function add() {
        $num = 10;
        echo "\$num = $num<br>";
        $num += 10;
    }

    add();
    add();
    add();

    function add1() {
        static $num = 10;
        echo "\$num = $num<br>";
        $num += 10;
    }

    //argumenty

    function add($x, $y=1) {
        return $x + $y;
    }

    $z = 20;

    $num=add2($z, 6);
    echo $num, '<br>';
    
    $num=add2(2, 6);
    echo $num, '<br>';

    $num=add2(3);
    echo $num, '<br>';
    
    //argumenty i typy danych


        function multi(float $x, int $y){
            return $x * $y;
        }

        echo multi(3, 4); //12
        echo multi(3.5, 2); //7
        echo multi(2, 3.5); //6
?>