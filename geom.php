<?php 

function par($a, $b)
{
	$spar = $a*$b;
	echo "paralelogram = $spar <br />";
}

par(2, 2);


function circ($d)
{
	
	$p = PI();
	$scirc = $d*$d*$p;
	return $scirc;
	//echo "$scirc <br />";
}

$circle = circ(8);
echo "Krug = $circle <br />";


function tre($a, $b, $c)
{
	$p=$a+$b+$c;
	$stre=sqrt($p*($p-$a)*($p-$b)*($p-$c));
	echo "Treugolnik = $stre <br />";
}

tre(3, 4, 5);

