<?php
if(isset($_POST['mailForm'])){
    $diger = 'MIME-Version: 1.0'."\r\n";
    $diger.='Content-type: text/html; charset=UTF-8'."\r\n";
    $adsoyad=$_POST['isim'];
    $mail=$_POST['mail'];
    $telefon=$_POST['telefon'];
    $konu="Konu post edilmedi"; // post edilseydi $_POST['konu'] diyecektik
    $mesaj=$_POST['mesaj'];
    $kime ="eposta adresi yazılacak buraya";
    $icerik = "Gönderen: ".$adsoyad."<br/> E-posta:".$mail."<br/> Konu: ". $konu."<br/> Telefon: ".$telefon."<br/> Mesaj: ".$mesaj;
    $gonder=mail($kime,$konu,$icerik,$diger);
    if($gonder){
        Header("Location:index.html?durum=ok");
    }else{
        Header("Location:index.html?durum=no");
    }
}
?>