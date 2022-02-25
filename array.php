<?php
$arr[0]=1;
$arr[1]=2;
var_dump($arr);
echo "<br>";


$arr2=[0,1,2,3];
var_dump($arr2);
echo"<br>";
$arr3=[1,2,3,4,5];
var_dump($arr3);

?>
 <h2>多維陣列</h2>
 <?php
$name=["amy","ame","amo"];
$height=[180, 167, 100];
$weight=[73,56,58];
$students=[$name, $height, $weight];
var_dump($students);
echo "<br>";
?>

<h2>關聯式陣列</h2>
 <?php
$students["name"]="amy";
$students["height"]=173;
$students["weight"]=60;

var_dump($students);
echo "<br>";

echo $students["name"]."'s height is ".$students["height"]."cm, wight is ".$students["weight"]."kg";

?>

<h2>定義關聯式陣列</h2>
 <?php
$students=[
    "name"=>"amy",
    "height"=>173,
    "weight"=>60,
];

/* csr
let etudent={
    "name"=>"amy",
    "height"=>173,
    "weight"=>60,
}

*/
echo "<br>";
//ssr php呼叫資料
echo $students["name"]."'s height is ".$students["height"]."cm, wight is ".$students["weight"]."kg";

?>