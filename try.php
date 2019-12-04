<?php
echo "hello<br> world";

$value=1000;
$name=5;
$mul=$value*$name;
# n $google=''
 echo"add<br>";
 echo $value+$name.'<br>';
 
 echo"sub<br>";
 echo $value-$name.'<br>';
 
 echo"mul<br>";
 echo $value*$name.'<br>';
 
 echo"div<br>";
 echo $value/$name.'<br>';
 
 echo '<a href ="http://www.google.com">google</a><br>';
 
 if($value>$name)
 {
	 echo"value is greater<br>";
 }
 else
 {
	 echo"name is greater<br>";
 }
 
 ##################################################
 ##ARRAY##
 
 $names=array('Harpreet'=>74,'Amartya'=>82,'Prateek'=>94);
  echo 'weight of prateek ='.$names['Prateek'].'<br>';

 print_r ($names).'<br>';
 echo 'weight of prateek'.$names['Prateek'].'<br>';
 
 $count=10;
 while($count>0){
 echo '<a href ="test.txt">google</a> '.$count .'<br>';
 $count--;
 }
  for($count=0;$count<=100;$count++){
	  echo'this is statement number ==  '.$count.'<br>';
  } 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 ?>
