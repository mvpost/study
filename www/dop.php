<?php
class dop
{
    public $var1, $var2;
    function dopfunc()
    {
        $func = __FUNCTION__;
        $clas = __CLASS__;
        echo "��� ����� $func � ������ $clas";
    }
}

class dopmore extends dop
{
    static public $var3 = "apple";
    function dopfunc2()
    {
        echo "<br>";
        echo "����� ".__FUNCTION__;
    }
}


