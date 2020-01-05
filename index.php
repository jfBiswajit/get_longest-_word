<?php 

function largeString($input) {
  $inputArr = explode(' ', $input);
  $lrgWrd = '';
  
  foreach ($inputArr as $ival) {
    if (strlen($ival) > strlen($lrgWrd)) {
      $lrgWrd = $ival;
    }
  }
  return $lrgWrd;
}

echo largeString('Hi there! Biswajit back again.');