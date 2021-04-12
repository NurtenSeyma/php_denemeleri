<?php

if ($_POST){ 

    $diger='MIME-VERSION: 1.0'."\r\n";
    $diger='Content-type: text/html; charset=iso-8859-9'."\r \n";
	$adsoyad=$_POST["adsoyad"];
	$email=$_POST["email"];
	$mesaj=$_POST["mesaj"];

	$konu="ILETİSİM BİLGİLERİ";
	$kime="nurten.akgun@haus.com.tr";
	$icerik="Gönderen :".$adsoyad. <br />
	        "E-Mail :".$email. <br />
	        "konu :".$konu. <br /

//kimden geldiğini belirlemek için 
	$diger= 'From:('.$adsoyad.').$email;       

	        $gonder= mail($kime, $konu, $icerik, $diger);
	        if($gonder){
	        	echo "Iletisime gecildi";
	        }

}else {
	echo '<form action="" method="post">
<h2>İletişim Formu</h2>
<table cellpading="5" cellspacing="5">
 <tr>
   <td>Ad-Soyad:</td>
   <td><input type="text" name"adsoyad" /></td>
  </tr>  
 <tr>
   <td>E-Mail:</td>
   <td><input type="text" name"email" /></td>
  </tr> 
 <tr>
   <td>Mesaj:</td>
   <td><textarea row="3" cols="30" name="mesaj"></textarea></td>
  </tr> 
   <tr>
   <td></td>
   <td><input type="submit" value=Gönder" /></td>
  </tr> 


</table>
</form>';
}
?>