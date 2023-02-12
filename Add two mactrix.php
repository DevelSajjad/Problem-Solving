<?php

    $a = [
        [6,7,5],
        [9,2,1],
        [6,8,3]
    ];

    $b = [
        [4,6,7],
        [3,9,9],
        [5,4,8]
    ];
    // foreach ($a as $key => $val) {
    //     foreach ($val as $k => $v) {
    //         // echo $v;
    //         echo $b[$key][$k];
         
    //     }
    // }
    // die();
    $result = [];
    foreach ($a as $key => $value) {
        $subResult = [];
        foreach ($value as $k => $v) {
            $subResult[] = $v + $b[$key][$k];
        }
        $result[] = $subResult;
        # code...
    }

    var_dump($result);
    die();

    // $row = count($a);
    // $col = count($a[0]);

    // for ($i=0; $i < $row; $i++) { 
        
    //     for ($i=0; $i < $col; $i++) { 
            
    //         $sum[$i][$i] = $a[$i][$i] + $b[$i][$i];
    //     }
    // }
   
    // for ($i=0; $i < $row; $i++) { 
    //     for ($i=0; $i < $col; $i++) { 
            
    //         echo($sum[$i][$i]." ");
    //     }
    //     echo ("<br>");
    // }
    


?>