<?php 
$hardware= ['Motherboad', 'Processor', 'Hard Disk', 'PC Coller', 'VGA Card', 'SSD']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4b.php</title>
</head>
<body>
    <h3>Macam-macam perangkat keras komputer</h3>
    <ol>
        <?php foreach($hardware as $h) { ?>
        <li><?= $h;?></li>
        <?php } ?>
    </ol>

    <h3>Macam-macam perangkat komputer baru</h3>
    <?php 
    array_push($hardware,'Card Reader','Modem')
    ?>
    <ol>
        <?php for($i = 0; $i<count($hardware); $i++) { 
        sort($hardware)?>
        <li><?= $hardware[$i];?></li>
        <?php } ?>  
    </ol>

</body>
</html>