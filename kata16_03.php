<?php

  $word="aaa";
  $alfabet = array("a", "b", "c");
  $i=0;
  $bool=false;

  function heterograma($word, $alfabet, $i, $bool){
    do{
      if(in_array(str_split($word), $alfabet)){
        $bool=true;
        echo "ok";
      }
      
    }while($bool=false && strlen($word)-1==$i);
  }

?>
