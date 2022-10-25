<?php 
echo "kombinasi angka 5 sampai 9<br>";
$angka1=5;
$angka2=6;
for ($i=1; $i<=4; $i++) {
echo' kombinasi ke ' .$i.' => '.'('.$angka1,', '.$angka2.')'.'<br>';
$angka2+=1;
if ($angka2==10) {
	$angka2=7;
	$angka1=6;
for ($j=1; $j<=3; $j++) {
	$a=1+$i;
echo ' kombinasi ke '.$a.' => '.'('.$angka1,', '.$angka2.')'.'<br>';
$angka2+=1;
$i+=1;
	}
	if ($angka1==6) {
	$angka2=8;
	$angka1=7;
for ($h=1; $h <=2 ; $h++) { 
	$a+=1;
echo 'kombinasi ke '.$a.' => '.'('.$angka1,', '.$angka2.')'.'<br>';
$angka2+=1;
	}
	if ($angka1==7){
	$angka2=9;
	$angka1=8;
for ($h=1; $h<=1 ; $h++) { 
	$a+=1;
echo ' kombinasi ke '.$a.' => '.'('.$angka1,', '.$angka2.')'.'<br>';
$angka2+=1;

}
}
}
}
}
 ?>