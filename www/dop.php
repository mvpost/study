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
        echo "�����".__FUNCTION__;
    }
}

class dopmax extends dopmore
{
    public $var4 = "strawberry";
    function dopfunc3()
    {
        echo "<br>";
        echo "�����".__FUNCTION__;
        echo $var5 = Dopmore::$var3 . $this->var4;
        //echo "<br>" . $this->var1 . $this->var2 . $this->var4;
    }
}

class dopmax2 extends dopmore
{
    public $var6 = 1;
}


