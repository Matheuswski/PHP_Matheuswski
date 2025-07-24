<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $vogais = array("a", "e","o", "u");
                  array("A", "E","O", "U");
        echo"Hello World of PHP<br>";
        $cons = str_replace($vogais, "", "Hello World of PHP");
        echo "Consantes:".$cons,"<br>";
        //   012345678901
        $test = "Hello World! \n";
        print "Posição da letra 'o' :";
        print strpos($test, "o", 5)."<br>";
        print "Posição da letra 'o' apos 5 :";
        print strpos($test, "o", 5)."<hr/>";
        $message = "troca letra uma a uma";
        echo $message."<br>";
        $new_message = strtr($message, 'abcdef', '123456');
        echo "Criptogrando: ".$new_message."<br>";
        $new_message = strtr($message, '123456', 'abcdef');
        echo "Descriptorafando: ".$new_message."<br>";
    ?>

</body>
</html>