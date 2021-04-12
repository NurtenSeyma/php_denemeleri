<?php

// MYSQL BAGLANMA
// mysql _connect()

$baglan= mysql_connect("localhost", "root", "");
if($baglan){
	
	echo "<font color='green'>MYSQL'e baglanti saglandi.</font><br />";

	// mysql veritabanını secme
	// mysql_select_db()

	$vt_sec = mysql_select_db("nDeneme", $baglan);

    if ($vt_sec){
    echo "<font color='green'>Veritabanı baglantisi saglandi.</font><br />";
    }else{
    die ("Veritabanı secilemedi!")
    }

}else{
	die ("Baglanti Saglanamadi!)";
}

// MYSQL Baglanti sonlandırma
// Mysql_close()

mysql_close($baglan)
echo "<font color='red'>MYSQL ile baglanti sonlandirildi.</font>";

?>