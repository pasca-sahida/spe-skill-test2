<?php
  function outlier($array) {
    $odd = [];
    $even = [];
    $temp_array = [];
    $result = null;
    
    foreach($array as $ar) {
      if ($ar % 2 == 0){
        array_push($even, $ar);
      }else {
        array_push($odd, $ar);
      }
    }
    
    if (!$odd || !$even) {
      $result = "false";
    } else if (count($odd) > count($even)) {
      $result = $even[0];
    } else {
      $result = $odd[0];
    }
    
    return $result;
  }
  
  $ar1 = [2, 4, 0, 100, 4, 11, 2602, 36];
  $ar2 = [160, 3, 1719, 19, 11, 13, -21];
  $ar3 = [11, 13, 15, 19, 9, 13, -21];
  
  echo outlier($ar1);
?>