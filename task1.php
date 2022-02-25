<html>

<head></head>

<body>
    <div style="font-size: 30px">
        <?php
            $color = array('white', 'green', 'red');

            echo nl2br("$color[0], $color[1], $color[2]\n");

            foreach ($color as $item)
            {
                echo ("<span style='color: $item;'>•  </span>");
                echo nl2br("$item\n");
            }
        ?>
    </div>
</body>

</html