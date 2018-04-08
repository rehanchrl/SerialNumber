<?php
        
function generateSerial(){
    $str = array();
    for($i = 0; $i < 16; $i++){
      if($letter_OR_number = rand(0,1)){ // true: alphabet chosen
         $str[] = chr(rand(65, 90));
      } else { // false: number chosen
         $str[] = rand(0,9);
      }
      if($i % 4 == 3){
        ($i < 15)? $str[] = '-': $str[] = ' ';
      }
    }

    foreach($str as $val){
        echo $val;
    }
}

for($a = 1; $a <=300 ; $a++){
  echo generateSerial()."<br/>";
}