<!DOCTYPE html>
<html>
<head>
    <title>����</title>
</head>
<body>
<?php
    require_once "dop.php";
    require_once "getsmth.php";
    $massiv = array("foo1","foo2",array(1,2,3));
    echo $massiv[2][0];
    echo "<br>";
        $i=0;
        while ($i<10)
        {
            echo "��";
            echo "";
            $i++;
        }
    echo "<br>";

    $obj = new dopmore();
    $obj->var1 = 1;
    $obj->var2 = 5;
    echo $obj->var1 + $obj->var2 . " " . $obj->var3 . "<br>";
    $obj->dopfunc();
    $obj->dopfunc2();
?>
</body>
</html>