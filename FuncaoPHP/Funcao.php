<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        #index 0123456789012345
        $name = "Stefanie hatcher";
        $length = strlen($name);
        $cmp = strcmp($name, "Brian Le");
        $index = strpos($name, "e");
        $first = substr($name, 9, 5);
        $name =strtoupper($name);
        echo "$name <br>";
        echo "$length <br>"; 
        echo "$cmp <br>";
        echo "$index <br>";
        echo "$first <br>";
        echo "$name <br>"
        
    ?>
</body>
</html>