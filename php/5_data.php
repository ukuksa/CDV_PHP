<?php
  echo data("Y-m-d"), '<br>';
  echo data("Y-F-d"), '<br>';
  echo data("H-i-m"), '<br>';



  $data = getdate();

    print_r($data);

    echo '<pre>';
        print_r($data);
    echo '</pre>';

    echo "Dzien tygodnia: ",$data['weekday'], '<br>';
    $day=$data['wday'];
    switch ($day) {
        
        case '0':
            $day="nied";
            break;
        case '1':
            $day="pon";
            break;
        case '2':
            $day="wtr";
            break;
        
        default:
            # code...
            break;
    }
    echo "Dzien tygodnia: ",$day, '<br>';


    //znacznik czasu
    $r1=2020;
    $m1=4;
    $d1=21;

    $time1 = mktime(0, 0, 0, $m1, $d1, $r1);
    echo $time1;


    function oblicz() {
        $date = getdate();
    }
?>