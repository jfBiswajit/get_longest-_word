<?php
function getLngWrd($str) {
  $str = $str;
  $strArr = explode(' ', $str);
  $lrgWrd = '';

  for ($i = 0; $i < count($strArr); $i++) {
    if (strlen($strArr[$i]) > strlen($lrgWrd)) {
      $lrgWrd = $strArr[$i];
    }
  }

  return $lrgWrd;
}

echo 'Longest word is: ' . getLngWrd('Hey there Biswajit here!');