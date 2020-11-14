<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $computer = array(
            'CPU' => "Intel Core i5-9400F",

            'RAM' => "Kingston HyperX Fury Black",

            'GPU' => "NVIDIA GeForce GTX 1660",

            'SSD' => "CRUCIAL BX500 a 1TB HDD Seagate BarraCuda",

            'MB' => "ASUS TUF GAMING B460-PLUS ",

            'case' => "SilentiumPC Signum SG1",

            'mouse' => "Bloody V7 V-Track Core 2",

            'headphones' => "none",

            'display' => " ASUS VS228NE",

            'fan' => "?",

        );
        ?>   
        <h2>2. pc</h2>
        <ul>
<li>Procesor: <?= $computer['CPU'] ?> </l+´úi>
<li>RAM paměti: <?= $computer['RAM'] ?> </li>
<li>Grafická karta: <?= $computer['GPU'] ?> </li>
<li>SSD paměti: <?= $computer['SSD'] ?> </li>
<li>Základní deska: <?= $computer['MB'] ?> </li>
<li>Skříň: <?= $computer['case'] ?> </li>
<li>Myš: <?= $computer['mouse'] ?> </li>
<li>Sluchátka: <?= $computer['headphones'] ?> </li>
<li>Monitor: <?= $computer['display'] ?> </li>
<li>Větrák: <?= $computer['fan'] ?> </li>
        
</ul>
</body>
</html>