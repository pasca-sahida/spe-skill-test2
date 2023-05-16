<?php
  function findNeedle($haystack, $needle) {
    $index = null;
    $result = null;
    
    $index = array_search($needle, $haystack);
    
    if ($index) {
      $result = $index;
    } else {
      $result = "Not found!";
    }
    
    return $result;
  }
  
  $haystacks = ["red", "blue", "yellow", "black", "grey"];
  $needle_search = "grey";
  
  echo findNeedle($haystacks, $needle_search);
?>