<h1>foreach </h1>

<?php
$arr=[1,2,3,4];
// js 的map 是新的值，
//way one

foreach($arr as $value){
    echo $value."<br>";
}

//way two

foreach($arr as $value):
echo $value."<br>";
endforeach;
?>

 <h2>student list</h2>
<?php
$students=[
    [
        "name"=>"John",
        "height"=>173,
        "weight"=>72
    ],
    [
        "name"=>"John",
        "height"=>173,
        "weight"=>72
    ],
    [
        "name"=>"John",
        "height"=>173,
        "weight"=>72
    ]
];
//workshop 
?>
