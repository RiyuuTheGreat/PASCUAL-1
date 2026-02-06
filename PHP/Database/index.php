<?php include 'variable.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "<i>welcone</i>"?></h1>
    <h1><?php echo $name;?></h1>
    <h1><?php echo $course;?></h1> 
    <h1><?php echo $subject;?></h1>
    <h1><?php echo $contact;?></h1>
    <?php
    $d=Date(format:"D");
    echo $d;
    if ($d == "Sat")
        { echo "its monday";}
    else if($d == "Fri")
    {echo "its friday";}
    else{
        echo "have a new day";
    }
    ?><br>
    <?php
    switch ($x=1) {
        case 1:
            echo "Number1";
            break;
        case 2:
            echo "Number2";
            break;
        case 3:
            echo "Number3";
            break;
        default:
            echo "no number between 1 and 3";
            break;
    }
?>
</body>
</html>