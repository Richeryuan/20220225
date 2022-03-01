<h3>算術運算子</h3>
<?php
$i= 0;
$i++;
echo $i."<br>";
$i+=2;
echo $i."<br>";
echo "<br>---<br>";
$str="hello";
$str.=" World"; //$str = $str ."world";
echo $str;

echo "<br>---<br>";
$a=3;
$a++;
// echo "<br>"
echo $a;
echo "<br>";
echo $a++; //3
echo "<br>";
echo $a; //4
echo "<br>";
echo ++$a; //5
echo "<br>";
echo $a ;//5
echo "<br>";
?>

<h3>比較運算子</h3>

<?php
$x=77;
$y='77';
var_dump($x==$y);
echo "<br>";
var_dump($x=== $y);
echo "<br>";
?>

<h3>比較運算子2</h3>

<?php
$j=10;
// if($i>0){
// }else{
// }

$i=($j>0) ? "Positive" : "Negative";
echo $i;

?>

<h3>組合比較子</h3>

<?php
$m=10;
$n=5;
echo $m<=>$n;

?>

<h3>邏輯運算子</h3>

<?php
$m=10;
$n=5;
var_dump ($m==10 and $n==5);
echo "<br>";
var_dump ($m==10 && $n==5);
echo "<br>";

?>

<h3>邏輯運算子-布林值</h3>

<?php
$m=10;
$n=5;
var_dump ($m==10 and $n==5);
echo "<br>";
var_dump ($m==10 && $n==5);
echo "<br>";

$c=true || false; // or ||
var_dump($c);
echo "<br>";
$d=false or true;
var_dump($d);

?>

<h3>參考運算子</h3>
<?php
$e=5;
$f=$e;
echo "e is $e<br>";
echo "f is $f<br>";
$e=8;
echo "e is $e<br>";
echo "f is $f<br>";
echo "<br>--<br>";
$g=5;
$h=&$g;
echo "g is $g<br>";
echo "h is $h<br>";
$g=8;
echo "g is $g<br>";
echo "h is $h<br>";
?>