<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $id = $_GET["name"];
        switch($id){
            case 1:
                $name="Spiderman";
                break;
            case 2:
                $name="Ironman";
                break;
        }
    ?>
    <title><?= $name ?></title>
</head>
<body>
    <h1><?=$name?></h1>
    <?php echo $id; ?>

</body>
</html>