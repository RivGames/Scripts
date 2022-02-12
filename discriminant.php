<?php
function discriminant($x,$y,$z)
{
    $a = $x;
    $b = $y;
    $c = $z;
    $d = $b**2 - 4 * ($b) * ($c);
    $d = $d**0.5;
    if($d<0)
    {
        return "Discriminant <0";
    }else if($d === 0)
    {
        $solution_1 = -$b / 2*$a;
        return $solution_1;
    }else{
        $solution_1 = (-$b + $d)/2*$a;
        $solution_2 = (-$b - $d)/2*$a;
        return "X1=$solution_1
                X2=$solution_2";
    }
}
echo discriminant(1,1,-6);//2
echo'<br />';
echo discriminant(-100,100,100);//NAN