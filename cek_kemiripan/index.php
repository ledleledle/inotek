<?php
//hasil penelitian #2, modifikasi metode Rabin Karp
include "function_basic.php";
$teks1=$_POST['teks1'];
$teks2=$_POST['teks2'];
//nilai gram default 2
echo "
<h1>Test Function - Menghitung Kemiripan Kata</h1>
<form action='' method='post'>
<table>
<tr valign='top'><td>Teks 1 </td><td><textarea name='teks1' cols='40' rows='4'>$teks1</textarea></td></tr>
<tr valign='top'><td>Teks 2 </td><td><textarea name='teks2' cols='40' rows='4'>$teks2</textarea></td></tr>

<tr valign='top'><td></td><td><input type='submit' name='submit' value='proses'></td></tr>
</table>
</form>
";


if (isset($_POST['submit']))
{
	
	$kemiripan2=cek_kemiripan($teks1, $teks2);

	echo "Nilai Kemiripan = $kemiripan2 <br>";

}

$string = $teks1;
$string2 = $teks2;
$PecahStr = explode(" ", $string);
$PecahStr2 = explode(" ", $string2);

for ( $i = 0; $i < count( $PecahStr ); $i++ ) {
  if(@$PecahStr[$i] == @$PecahStr2[$i]){
    echo $PecahStr[$i]." ";
  }else{
    echo "<a style='color: red;'>".@$PecahStr[$i]."</a> ";
  }
}
echo "<br>"; 
for ( $i = 0; $i < count( $PecahStr2 ); $i++ ) {
if(@$PecahStr[$i] == @$PecahStr2[$i]){
    echo $PecahStr2[$i]." ";
  }else{
    echo "<a style='color: red;'>".@$PecahStr2[$i]."</a> ";
  }
}
?>