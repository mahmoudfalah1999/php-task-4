<!doctype html>
<html>
<BODY>
<h1> PHP task4 (loops conditional statements)  by mahmoud alkhatib </h1>
<?php
// task 1 = all integers between (0-30)
echo "task 1";
echo"<br>";
$num=0;
while($num<=30)
{
 echo  " $num";
 $num++;
}
echo "<br>";
echo "task 2 ";
echo "<br>";
//task 2 = pattern using nested for loop 
for ($y = 1; $y <=5 ; $y++)
 {
    for ($j = 1; $j <= $y; $j++) {
        echo " * ";
    }
    echo '<br />';
}
echo "task 3 ";
echo "<br>";
// task 3 =  write and print a factorial for number 6! =6*5*4*3*2*1 
for ($i=1;$i<6;$i++)
{
echo " $i * ";
$y=$y*$i;
}
echo "$i";

echo " = 6! = $y";
echo"<br>";
// task 4 tabel 
echo "task 4";
echo "<br>";
for ($y=1;$y<=6;$y++)
{
    for ($r=1;$r<=5;$r++)
    {
    echo "$y*$r";
    $t=$r*$y;
    echo " = ".$t." | ";
    }
    echo"<Br>";
}
?>
</body>
</html>