<?php
$john_score=90;
$sam_score=80;
//way one
if($john_score > $sam_score){
    echo "John is better";
}elseif($john_score < $sam_score){
    echo "Sam is better";
}else{
    echo "Sam and John are equal.";
}
//way two
if($john_score > $sam_score):
    echo "John is better";
elseif($john_score < $sam_score):
    echo "Sam is better";
else:
    echo "Sam and John are equal.";
endif;
?>
<?php 
//way tree php mix html

?>
<?php if($john_score > $sam_score): ?>
     John is better.
    <?php elseif($john_score < $sam_score): ?>
    Sam is better
    <?php else: ?>
    Sam and John are equal.
    <?php endif; ?>


    <?php 
for($i=0; $i<10; $i++):
echo $i."<br>";
    endfor;

?>

<h2>continue</h2> 

<?php 
//continue 跳過某些條件的迴圈
for($i=0; $i<10; $i++){
    if($i===4){
        continue;
    }
    echo $i."<br>";
}

?>

<h2>break</h2> 
<?php 
// break 提前終止迴圈
for($i=0; $i<10; $i++){
    if($i===4){
        break;
    }
    echo $i."<br>";
}

?>



