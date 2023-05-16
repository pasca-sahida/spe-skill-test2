<?php
  function blueOcean ($arr1, $arr2) {
    $temp_result = [];
    $result = $arr1;
    
    foreach($arr2 as $ar2) {
      foreach($result as $res) {
        if ($ar2 == $res) {
          if (($key = array_search($res, $result)) !== false) {
              unset($result[$key]);
          }
        }
      }
    }

    return $result;
  }
  
  $array1 = [1,2,3,4,6,10];
  $array2 = [1];
  
  print_r(blueOcean($array1, $array2));
?>