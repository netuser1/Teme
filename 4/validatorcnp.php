<?php
$cnp = fgets(STDIN);
$sex = $cnp[0];
$an = $cnp[1].$cnp[2];
$luna = $cnp[3].$cnp[4];
$ziua = $cnp[5].$cnp[6];
$judet = $cnp[7].$cnp[8];
$nnn = $cnp[9].$cnp[10].$cnp[11];
$control = $cnp[12];
if ( calcCNP ( $cnp ) ) 
{
echo $cnp.” e valid”;

	
else {
echo $cnp.” e invalid”;
}


function calcCNP ($cnp);
{
if ( strlen ($cnp) != 13 )
elseif ($s<"1" || $s>"2")
     echo "cnp invalid \n";
elseif ($a>"99")
     echo "cnp invalid \n";
elseif ($l<"1" || %l>"12")
     echo "cnp invalid \n";
elseif ($z<"1" || $z>"31")
     echo "cnp invalid \n";
elseif ($j<"1" || $j>"52")
     echo "cnp invalid \m";
elseif ($n<"1" || $n>"999")
     echo "Cnp invalid \n";
elseif ($rest=="10" && $c!="1" || $rest!="10" && $c!=$rest)
     echo "Cnp invalid \n";
elseif ($n<"1" || $n>"999")
     echo "Cnp invalid \n";
{
return FALSE;
}
$s = $cnp{0}*2+$cnp{1}*7+$cnp{2}*9+$cnp{3}*1+$cnp{4}*4+$cnp{5}*6+$cnp{6}*3+$cnp{7}*5+$cnp{8}*8+$cnp{9}*2+$cnp{10}*7+$cnp{11}*9;
$rest = $s%11;
if ( $cnp{12} == $rest ) 
{
return TRUE;
} else 
{
return FALSE;
}
}
?>
