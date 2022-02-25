<html>

<head></head>

<body>
    <div style="font-size: 30px">
        <?php
            $file = file("webdictionary.txt");

            $keys = array();
            $values = array();

            foreach ($file as $line)
            {
                $lineArray = explode(" ", $line);

                $keys[] = $lineArray[0];
                $values[] = $lineArray[1];
            }

            $result = array_combine($keys, $values);

            foreach ($result as $key => $value)
            {
                // removing the new line after the value
                $value = substr_replace($value, "", -2);
                // print
                echo nl2br("Key: '$key', Value: '$value'\n");
            }
        ?>
    </div>
</body>

</html