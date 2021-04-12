<?php include ("ayar.php"); ?>
<html>
<head>
     <title>abc</title>
</head>
<body>

<?php
if ($_POST)
{
	$adsoyad=$_POST["adsoyad"];
	$eposta=$_POST["eposta"];
	$mesaj=$_POST["mesaj"];

	if (!empty($adsoyad) && !($eposta) &&($mesaj)) {

		// Verilerin eklendiği alan

		$ekle = mysql_query("insert into mesajlar (yazan,eposta,mesaj,onay) values ('$adsoyad', $eposta, $mesaj, 0");

		if ($ekle){
			echo "<font color='green'>Veriler Basariyla Eklendi.</font>";
		}else {
			echo "<font color='red'>İşlem Basarisiz!</font>";
		}
	}

}
else
{
	// Verileri Çekme
	// mysql_query
	// mysql_fetch_array()

	$bul=mysql_query("select * from mesajlar where");
	while($goster = mysql_fetch_array($bul)){
		echo "<div class='yazan'>
		<strong>Gönderen:</strong> {$goster["yazan"]} <br />
		<strong>mail:</strong> {$goster["eposta"]} <br />
		<strong>mesaj:</strong> {$goster["mesaj"]} <br />
		</div>";
	}

?>	
<h1>Mesaj Gönder</h1>
    <form action="" method="post">
	<table cellspacing="5" cellspacing="5">
		 <tr>
		 	<td>Ad-Soyad:</td>
		 	<td><input type="text" name="adsoyad" /></td>
		 </tr>
		 <tr>
		    <td>E-Posta:</td>
		    <td><input type="text" name="eposta" /></td>
		 </tr>
		 <tr>
		    <td>Mesaj:</td>
		    <td><textarea rows="5" cols="5" name="mesaj"></textarea>></td>
		 </tr>
		 <tr>
		    <td></td>
		    <td><input type="submit" name="Gönder" /></td>
		 </tr>
    </form>
	</table>





<?php
}
?>

</body>
</html>
