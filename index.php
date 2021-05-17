<?php

include_once "app/Patient.php";
include_once "app/QueuePriority.php";


$queue = new QueuePriority();
$queueTest = $queue->enqueue(new Patient(5, "Smith"));
$queueTest = $queue->enqueue(new Patient(4, "Jones"));
$queueTest = $queue->enqueue(new Patient(6, "Fehrenbach"));
$queueTest = $queue->enqueue(new Patient(1, "Brown"));
$queueTest = $queue->enqueue(new Patient(1, "Ingram"));
$queueTest = $queue->enqueue(new Patient(4, "vit"));


//echo "<pre>";
//var_dump($queueTest);
//echo "</pre>";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uu tien kham benh</title>
    <style>
        table, th, td {
            border-collapse: collapse;
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>
<body>
<h2>Benh nhan dang kham</h2>
<!--<p>--><?php //echo $queue->dequeue(); ?><!--</p>-->
<!--<p>--><?php //echo $queue->dequeue(); ?><!--</p>-->
<!--<p>--><?php //echo $queue->dequeue(); ?><!--</p>-->
<table>
    <caption><h2>Danh sach benh nhan</h2></caption>
    <tr>
        <th>Ten benh nhan</th>
        <th>Muc do uu tien</th>
    </tr>
    <?php foreach ($queue->patients as $key => $patient): ?>
    <tr>
        <td><?php echo $key; ?></td>
        <td><?php echo $patient; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
