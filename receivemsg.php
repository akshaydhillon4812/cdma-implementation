<?php
$myfile = fopen("data.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
$i=0;
$x="";
while(!feof($myfile)) {
 $y= fgetc($myfile);
   if(!strcmp($y,","))
   {
      $a[$i] =$x;
      $x="";
      $i++;
   }
   else
    {
      $x=$x.$y;
    }



 }

echo $a[0].",".$a[1].",".$a[2].",".$a[3];
?>



