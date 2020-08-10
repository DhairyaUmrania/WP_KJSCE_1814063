<?php
  $seq="0";
  $num=1;
  $prev=0;
  $cap=7;
  $temp=$cap+1;
  $fib=0;
  while($cap!=0){
      
      $fib=$prev+$num;
      $prev=$num;
      $num=$fib;

      $seq.=",$prev";
      $cap--;
  }

    echo "The fibonacci sequuence of 1st $temp numbers is $seq";
?>