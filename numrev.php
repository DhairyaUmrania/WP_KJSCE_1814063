<?php
    $n=897;
    $o=$n;
    $reverse=0;
    while($n>0)
      {
        $reverse=$reverse*10;
        $reverse =$reverse+$n%10;
        $n=(int)($n/10);
      }
      echo "The reverse of $o is $reverse";
   
   

?>