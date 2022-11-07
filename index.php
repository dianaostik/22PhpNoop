<?php
include "./Coin.php";
include "./Phone.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <?php

        $coin = new Coin();
        $coin10 = new Coin();
        $coin11 = new Coin();
        $coin12 = new Coin();
        $coin13 = new Coin();
        
        $coin->setCountry("Lietuva");
        $coin->setValue("1");
        $coin->setYear("2017");
        $coin->setMadeFrom("metal");
    
        $coin10->setCountry("Japan");
        $coin10->setValue("10");
        $coin10->setYear("2020");
        $coin10->setMadeFrom("gold");

        $coin11->setCountry("USA");
        $coin11->setValue("5");
        $coin11->setYear("2000");
        $coin11->setMadeFrom("silver");

        $coin12->setCountry("Latvija");
        $coin12->setValue("20");
        $coin12->setYear("2010");
        $coin12->setMadeFrom("silver");

        $coin13->setCountry("Italia");
        $coin13->setValue("2");
        $coin13->setYear("2015");
        $coin13->setMadeFrom("gold");
    
        $coins = [$coin,$coin10,$coin11,$coin12,$coin13];
    ?>
    
    <table class="table">
    <thead>
        <tr>
            <th> Country </th>
            <th> Value </th>
            <th> Year </th>
            <th> Made from </th>

        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($coins as $coin) {
                echo "<tr>";
                    echo "<td>".$coin->getCountry()."</td>";
                    echo "<td>".$coin->getValue()."</td>";
                    echo "<td>".$coin->getYear()."</td>";
                    echo "<td>".$coin->getMadeFrom()."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>

<?php
    $phone = new Phone();   
    $phone->name = "Nokia";
    $phone->years = 2000;
    $phone->model = false;

    $phone2 = new Phone("Samsung", 2021, true);
    $phone3 = new Phone("Iphone", 2021, true);
    $phone4 = new Phone("Samsung", 2015, false);
    

    $phones = [$phone,$phone2,$phone3,$phone4];
?>

<table class="table">
    <thead>
        <tr>
            <?php
                foreach ($phones[0] as $key => $value) {
                    echo "<th>".$key."</th>";
                }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($phones as $phone) {
                echo "<tr>";
                    echo "<td>".$phone->name."</td>";
                    echo "<td>".$phone->years."</td>";
                    echo "<td>". ( ($phone->model) ? "naujas" : "nenaujas" )."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>

</body>
</html>