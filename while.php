<h2>while</h2>

<?php
//way one
$a=0;
while($a<0){
echo $a."<br>";
$a++;
}
?>

<?php
//way one
$a=0;
while($a<0){
echo "$a";
$a++;
}
?>


<?php
//way two
$a=0;
while($a<0): ?>
<?$a?><br>
<?php
$a++;
endwhile; ?>

<?php
//way three
$a=0;
while($a<0){
echo $a."<br>";
$a++;
}
?>