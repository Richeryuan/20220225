<h2>定義關聯式陣列</h2>
 <?php
$students=[
    "name"=>"amy",
    "height"=>173,
    "weight"=>60,
];

/*
let etudent={
    "name"=>"amy",
    "height"=>173,
    "weight"=>60,
}

*/
//
//轉換成JS物件 用PHP呼叫也就是(api)
// echo json_encode($students);
?>
<h1></h1>
<script>
//運用CSR:console.log出資料
let students=<?=json_encode($students)?>;
console.log(students)

//運用CSR顯出名字
let h1=document.querySelector("h1");
h1.innerText=student.name;
</script>