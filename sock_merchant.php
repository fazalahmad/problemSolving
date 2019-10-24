<?php
$n = 9;
// $ar = [1, 1, 3, 1, 2, 1, 3, 3, 3, 3];
$ar = [44, 55, 11, 15, 4, 72, 26, 91, 80, 14, 
       43, 78, 70, 75, 36, 83, 78, 91, 17, 17, 
       54, 65, 60, 21, 58, 98, 87, 45, 75, 97, 
       81, 18, 51, 43, 84, 54, 66, 10, 44, 45, 
       23, 38, 22, 44, 65, 9, 78, 42, 100, 94, 
       58, 5, 11, 69, 26, 20, 19, 64, 64, 93, 
       60, 96, 10, 10, 39, 94, 15, 4, 3, 10, 1, 
       77, 48, 74, 20, 12, 83, 97, 5, 82, 43, 
       15, 86, 5, 35, 63, 24, 53, 27, 87, 45, 
       38, 34, 7, 48, 24, 100, 14, 80, 54];
$i = 0;
$kaos_kaki = 0;
while ($i < 100) {
// while (count($ar) > 0) {
    // echo "<br/>sum arr: ".count($ar);
    // echo "<br/> i :  $i";
    if (isset($ar[$i])) {
        $next=$i+1;
        // echo "<br/>index i : $i => ".$ar[$i];
        // echo "<br/>index next : $next => ".$ar[$next];
            $endIndex = max(array_keys($ar)); //9 8 7
            // echo "<br/>jmlh 2 :  $sum";
            while($endIndex >= 0) {
            // while($sum > 0) {
                if (isset($ar[$next])) {
                        if ($i == $next) {
                            break;
                        }else {
                            // echo "<br/>$i: ".$ar[$i]." & $next: ".$ar[$next];
                            if ($ar[$i] == $ar[$next]) {
                                echo "<br/> Array[$i] dan Array[$next] = dengan value <b>".$ar[$i]."</b>";
                                unset($ar[$i]);
                                unset($ar[$next]);
                                $kaos_kaki++;
                                // echo "<br/>++++<br/<br/>";
                                // foreach ($ar as $key => $value) {
                                //     echo "<br/>array[$key] : $value";
                                // }
                                break;
                            }else{
                                $next++;
                            }
                        }
                }else{
                    $next++;
                }
                $endIndex -= 1;
            }
    }
    unset($ar[$i]);
    $i++;
    // echo "<br/>=====";
}
echo "<br/> Jumlah pasang kaos : $kaos_kaki";


?>

<!-- $i = 0;
$kaos_kaki = 0;
while (count($ar) > 0) {
    if (isset($ar[$i])) {
        $next=$i+1;
            $sum = count($ar);
            while($sum > 0) {
                if (isset($ar[$next])) {
                        if ($i == $next) {
                            break;
                        }else {
                            if ($ar[$i] == $ar[$next]) {
                                unset($ar[$i]);
                                unset($ar[$next]);
                                $kaos_kaki++;
                                break;
                            }else{
                                $next++;
                            }
                        }
                }else{
                    $next++;
                }
                $sum -= 1;
            }
    }
    unset($ar[$i]);
    $i++;
}
return $kaos_kaki; -->