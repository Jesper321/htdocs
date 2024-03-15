<?php
//les 1 array hulp
// $leeftijden = array();
// for ($i=0; $i < 5; $i++) { 
//     $leeftijden[] = readline ("wat leeftijd: ");
// }

// foreach($leeftijden as $leeftijd) {
//     if($leeftijd <= 18) {
//         echo "De leeftijd is minder of gelijk aan 18\n";
//     }
// }

//les 2 array hulp

    $stripsArray = array('lucky luke' , 'Astrix' , 'kuifje' , 'Astrix' , 'kuifje' , 'Astrix' , 'kuifje' , 'Astrix' , 'kuifje'); //Key 1, 2, 3

    $stripsArray[2] = 'Suske & Wiske'; //overschrijft key 2 (kuifje wordt vervangen met S&S)
  //print_r($stripsArray);

    // for($i = 0; $i <= 3 ; $i++) // ++ mis met 1 ophogen of ::   $i = $i + 1
    // {
    //     echo '<li>'. $stripsArray[$i]. '</li>';

    // }
$teller = 0;
    foreach($stripsArray as $key => $strip)
    {
        if($strip != 'Astrix') {
        $teller++;
        echo '<li>'.$key.$strip.'</li>';
        }   
    }
echo $teller;
?> 
<h1>
    Arrays
</h1>
