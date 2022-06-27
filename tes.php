<?php

$x = [3,5,4,6,12,4,2,7,3];
$z = [3,1,12,4,2,9,0,11,2];

$isi=[];
$isi_fix=[];

$temp=0;
$temp_banding=0;

$atur=0;
//$panjang[0]=1;


for ($i=0; $i < count($x); $i++) {
echo "<br>(".$x[$i].")- at (".$atur.")<br>";
	for ($j=$atur; $j < count($z); $j++) {
		echo $z[$j].", ";
		if ($x[$i] == $z[$j]) {
			$atur=$j;
			$j = count($z) + 1;
			$temp = $temp +1;
			$isi[] = $x[$i];
			
		} else {
			if ($temp_banding < $temp) {
				$atur=0;
				$temp_banding = $temp;
				unset ($isi_fix);
				for ($b=0; $b < count($isi); $b++) { 
					$isi_fix[$b]=$isi[$b];
				}
				//$temp=0;

			}  else {
				$atur=0;
				unset ($isi);
				//$j=0;
				//$temp=0;
			}
		}
	}
}
echo "<br>";
echo "Input X : ";
foreach ($x as $key) {
	echo $key.",";
}
echo "<br>";
echo "Input Z : ";
foreach ($z as $key) {
	echo $key.",";
}
echo "<br>";
echo "<br> Hasil :";
foreach ($isi_fix as $key) {
	echo $key.",";
}



?>

coba tes aja ya...
coba lagi...
halooo.....