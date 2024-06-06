


<form action="" method="post">
<input type="submit" name="submit" value="Ambil Data">
<input type="submit" name="submit2" value="Reboot">
<input type="submit" name="submit3" value="Hapus">

</form>
<?php
if(isset($_POST['submit']))
{
exec('delete.bat');
exec('ambil.bat');
echo "<br> Done! <br>";
$e = "disabled";
} 


if(isset($_POST['submit2']))
{
exec('reboot.bat');
echo "<br> Done!<br>";
} 
 

if(isset($_POST['submit3']))
{
exec('delete.bat');
header("location:index.php");
echo "<br> Done! <br>";
}
 

//$myfile = fopen("biodata.csv", "r") or die("Unable to open file!");
//echo fread($myfile,filesize("biodata.csv"));

$mydata = "biodata.csv";
try {
if(file_exists($mydata)){
$myfile = file_get_contents($mydata);
$log = file_get_contents("reading_ektp.log");
$riwayat = file_get_contents("riwayat_transaksi.log");
//  $txt='"esa","asep","esa","mamang"';
  $re1='\"(.*?)\"';	# Non-greedy match on filler
  $re2='.*?';	# Non-greedy match on filler
  $re3='\"(.*?)\"';	# Uninteresting: string
  $re4='.*?';	# Non-greedy match on filler
  $re5='\"(.*?)\"';	# Double Quote String 1
  $re6='.*?';	# Non-greedy match on filler
  $re7='\"(.*?)\"';	# Double Quote String 1
  $re8='.*?';	# Non-greedy match on filler
  $re9='\"(.*?)\"';	# Double Quote String 1
  $re10='.*?';	# Non-greedy match on filler
  $re11='\"(.*?)\"';	# Double Quote String 1
  $re12='.*?';	# Non-greedy match on filler
  $re13='\"(.*?)\"';	# Double Quote String 1
  $re14='.*?';	# Non-greedy match on filler
  $re15='\"(.*?)\"';	# Double Quote String 1
  $re16='.*?';	# Non-greedy match on filler
  $re17='\"(.*?)\"';	# Double Quote String 1
  $re18='.*?';	# Non-greedy match on filler
  $re19='\"(.*?)\"';	# Double Quote String 1
  $re20='.*?';	# Non-greedy match on filler
  $re21='\"(.*?)\"';	# Double Quote String 1
  $re22='.*?';	# Non-greedy match on filler
  $re23='\"(.*?)\"';	# Double Quote String 1
  $re24='.*?';	# Non-greedy match on filler
  $re25='\"(.*?)\"';	# Double Quote String 1
  $re26='.*?';	# Non-greedy match on filler
  $re27='\"(.*?)\"';	# Double Quote String 1
  $re28='.*?';	# Non-greedy match on filler
  $re29='\"(.*?)\"';	# Double Quote String 1
  $re30='.*?';	# Non-greedy match on filler
  $re31='\"(.*?)\"';	# Double Quote String 1
  $re32='.*?';	# Non-greedy match on filler
  $re33='\"(.*?)\"';	# Double Quote String 1
  $re34='.*?';	# Non-greedy match on filler
  $re35='\"(.*?)\"';	# Double Quote String 1
  $re36='.*?';	# Non-greedy match on filler
  $re37='\"(.*?)\"';	# Double Quote String 1
  $re38='.*?';	# Non-greedy match on filler
  $re39='\"(.*?)\"';	# Double Quote String 1
  $re40='.*?';	# Non-greedy match on filler
  $re41='\"(.*?)\"';	# Double Quote String 1
 //if ($c=preg_match_all ("/".$re1.$re2.$re3."/is", $myfile, $matches))
  if ($c=preg_match_all ("/".$re1.$re2.$re3.$re4.$re5.$re6.$re7.$re8.$re9.$re10.$re11.$re12.$re13.$re14.$re15.$re16.$re17.$re18.$re19.$re20.$re21.$re22.$re23.$re24.$re25.$re26.$re27.$re28.$re29.$re30.$re31.$re32.$re33.$re34.$re35.$re36.$re37.$re38.$re39.$re40.$re41."/is", $myfile, $matches))
  {
      $string1=$matches[1][0];
	    $string2=$matches[2][0];
	    $string3=$matches[3][0];
	    $string4=$matches[4][0];
	  $string5=$matches[5][0];
	    $string6=$matches[6][0];
	    $string7=$matches[7][0];
	    $string8=$matches[8][0];
	  $string9=$matches[9][0];
	    $string10=$matches[10][0];
	    $string11=$matches[11][0];
	    $string12=$matches[12][0];
	  $string13=$matches[13][0];
	    $string14=$matches[14][0];
	    $string15=$matches[15][0];
	    $string16=$matches[16][0];
	  $string17=$matches[17][0];
	    $string18=$matches[18][0];
	    $string19=$matches[19][0];
	    $string20=$matches[20][0];
		$string21=$matches[21][0];
		
		echo "
		<br>
		<center>
<table width='1000' border='0'>
  <tr>
    <td width='200'>Provinsi </td>
    <td width='350'>: <input type='text' name='16' value='$string16' size='35'></td>
    <td width='450' rowspan='10'><center><b>FOTO</b><br><img src='image.jpg' width='150' height='150'></center></td>
  </tr>
  <tr>
    <td>Daerah </td>
    <td> : ";
	$pos = strrpos($string8, "KOTA");
if ($pos === false) { // note: three equal signs
echo "<input type='text' name='14' value='KABUPATEN $string8' size='35'>";    
}else{
echo "<input type='text' name='14' value='$string8' size='35'>";
}
	echo "
    </td></tr>
  <tr>
    <td>NIK  </td>
    <td>: <input type='text' name='15' value='$string1' ></td>
    </tr>
  <tr>
    <td>Nama </td>
    <td> : <input type='text' name='1' value='$string14' size='35'></td>
    </tr>
  <tr>
    <td>Tempat / Tanggal Lahir  </td>
    <td> : <input type='text' name='5' value='$string5' size='16'> / <input type='text' name='2' value='$string15' size='14'></td>
    </tr>
  <tr>
    <td>Jenis Kelamin </td>
    <td>: <input type='text' name='3' value='$string9'></td>
    </tr>
  <tr>
    <td>Alamat </td>
    <td> : <input type='text' name='4' value='$string2' size='35'></td>
    </tr>
  <tr>
    <td>RT / RW  </td>
    <td> : <input type='text' name='9' value='$string3' size='5'> / <input type='text' name='8' value='$string4' size='5'> </td>
    </tr>
  <tr>
    <td>Kel / Desa  </td>
    <td>: <input type='text' name='6' value='$string7' size='35'></td>
    </tr>
  <tr>
    <td>Kecamatan </td>
    <td>: <input type='text' name='7' value='$string6' size='35'></td>
  </tr>
  <tr>
    <td>Agama </td>
    <td>: <input type='text' name='11' value='$string11'></td>
    <td rowspan='6'><center><b>Tanda Tangan </b><br><img src='signature.jpg' width='150' height='70'></center></td>
      
   </tr>
  <tr>
    <td>Status Perkawinan </td>
    <td>:  <input type='text' name='12' value='$string12'></td>
    </tr>
  <tr>
    <td>Pekerjaan</td>
    <td>: <input type='text' name='13' value='$string13' size='35'></td>
    </tr>
  <tr>
    <td>Kewarganegaraan </td>
    <td>: <input type='text' name='20' value='$string20'></td>
    </tr>
  <tr>
    <td>Berlaku Hingga</td>
    <td>: <input type='text' name='17' value='$string17'></td>
    </tr>
  <tr>
    <td>Golongan Darah </td>
    <td>: <input type='text' name='10' value='$string10'></td>
    </tr>
 
  <tr>
    <td colspan='3'><b>Riwayat KTP - el </b>
	<textarea name='textarea2' size = '150' cols='150'  rows='9'>$riwayat</textarea></td>
    </tr>
  <tr>
    <td colspan='3'><b>Log KTP - el </b>
	<textarea name='textarea1' size = '150' cols='150' rows='9' >$log</textarea>
	</td>
    </tr>
</table>
</center>


		
		
		
		
		
		
		
		
		";
	  
  }
  }else {
  echo "<center>Data Tidak Ada ....!  </center>";
  }
}catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

// display the form
?>