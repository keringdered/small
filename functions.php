<?php

function odd_even($number){
  $iswhat="";
  if($number%2==0){
    $iswhat=$number."is even";
  }else{
    $iswhat=$number." is odd";
  }
  
  return $iswhat;
}

echo odd_even(45);
