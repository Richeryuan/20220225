<?php
echo "john said: \"Hello!\"";

$a = "a day";
echo "I earn \$10 dollars $a";
// output: I earn $10 dollars a day
echo "<br>";
?>
<?php
$string="Hello World";
?>

<h3>strlen</h3>
<?php
echo strlen($string);
 echo "<br>";
?>

<h2>str_word_count</h2>

<?php 
echo str_word_count($string); 
echo "<br>";
?>

<h2>substr</h2>

 <?php 
 echo substr($string, 2);
 echo "<br>";
 echo substr($string, 2, 6);
 echo "<br>";
 ?>


<h3>strstr</h3>

<?php
$email="joe@test.com";
echo strstr($email,'@',);
echo "<br>";
echo strstr($email,'@', true);
echo "<br>";
?>


<h3>strpos</h3>

<?php 
echo strpos($string, "World");
echo "<br>";
?>

<h3>explode</h3>

<?php
echo "<br>";
$string2="Hello richer, how are you?";
$strArr=explode(" ",$string2);
var_dump($string);
echo "<br>";
print_r($strArr);
echo "<br>";
for($i=0; $i<count($strArr); $i++){//count是PHP陣列的函數寫法
echo $strArr[$i]."<br>";
}

?>
<h3>str_replace</h3>

<?php str_replace("World", "Baby", $string);
echo "<br>";
?>

