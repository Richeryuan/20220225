<?php
// $varl=null;
// var_dump($varl);
// echo"<br>";
// $var2= 3;
// var_dump($var2);


$a=99;//全域變數
function show(){
 static $c=1;
echo"a is: $GLOBALS[a] ";
echo "<br>";
echo $GLOBALS['a'];//區域變數要拿全域變數，需要加GLOBALS
echo "<br>";//PHP的點是用來加字串的
echo "a is".$GLOBALS['a'];
    echo "<br>";
    $b=10;      //區域變數
    echo "b is: $b";//雙引號可放變數
    echo "<br>";
    echo 'b is: 1+1 $b<br>';//單引號
    echo "c is :$c"; //靜態變數，使用static關鍵字來宣告，不可以是運算、變數、函式結果和建立物件等來源。

    echo "<br>";
    echo "<--->";
    echo "<br>";
    $b++;
    $c++;
}

echo "a is:$a";
echo "<br>";
// echo "b is: $b";
show();
show();





?>