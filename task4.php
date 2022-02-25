<html>

<head></head>

<body>
    <div style="font-size: 30px">
        <?php
            $randomItem = '%';
            $array = array('1', '2', '3', '4', '5');
            $extractedItems = array_splice($array, 2);
            array_push($array, $randomItem, $extractedItems);
            print_r ($array);
        ?>
    </div>
</body>

</html