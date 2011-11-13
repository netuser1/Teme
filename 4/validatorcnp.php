<?php
$cnp = “”;
if ( calcCNP ( $cnp ) ) 
{
echo $cnp.” e valid”;
} 
else {
echo $cnp.” e invalid”;
}
function calcCNP ($cnp)
{
if ( strlen ($cnp) != 13 )
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
