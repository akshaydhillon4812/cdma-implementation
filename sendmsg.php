<?php
$a[0]=$_POST['a1'];
$a[1]=$_POST['a2'];
$a[2]=$_POST['a3'];
$a[3]=$_POST['a4'];
$myfile = fopen("data.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
$i=0;

while(!feof($myfile)) {
 $y= fgetc($myfile);
   if(!strcmp($y,","))
   {
      $a[$i] +=$x;
      $x="";
      $i++;
   }
   else
    {
      $x=$x.$y;
    }



 }
fclose($myfile);


$myfile = fopen("data.txt", "w+") or die("Unable to open file!");
$txt =$a[0].",".$a[1].",".$a[2].",".$a[3]."," ;
fwrite($myfile, $txt);
fclose($myfile);

?>