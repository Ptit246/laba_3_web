<?php
 include('connection.php');
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>LABA 3</title>
    
</head>
<body>
    
<h2>LABA 3</h2>

<div >
    <form action="profit.php" method="get">
        <p><strong>Выберите дату чтоб узнать moneyway</strong>

            <input name="selected_date" type=date>
            <input class="buttons"  type="submit" value="Узнать" />

    </form>
    <form method="get" action="avaible_car.php">
        <p><strong>Доступные авто на дату</strong>

            <input name="selected_date" type=date >
            <input class="buttons" type="submit" value="Получить" />
        </p>
    </form>

    <form method="get" action="vendor.php">
        <p><strong>Выберите производителя</strong>

            <select name='vend'>
                <option>Производители</option>

                <?php
        $sql = "SELECT * FROM lb_car.vendors";

        foreach($dbh->query($sql) as $row)
                {
                $name_vend = $row['Name'];
                echo "<option value = '$name_vend'> $name_vend</option>";
                }
                ?>
        </p>
        </select>
        <input class="buttons" type="submit" value="Посмотреть">

    </form>
    
</div>


</body>

</html>