<?php
  function narcissistic($number) {
    $result = null;
    $square = strlen($number);
    $numbers = str_split($number);
    
    $res_sum = 0;
    
    foreach($numbers as $num) {
      $res_sum = $res_sum + pow($num,$square);
    }
    
    if ($res_sum == $number) {
      $result = true;
    } else {
      $result = false;
    }
    return $result;
  }
  
  if (narcissistic(1634)) {
    echo "true";
  } else {
    echo "false";
  }
  //echo narcissistic(111);
?>