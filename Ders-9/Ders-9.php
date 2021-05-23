<?php 
#parametresiz fonksiyon
echo "<h1>.:Fonksiyonlar:.</h1>";

function yaz()
{
    return "Merhaba Dünya";
}
echo yaz();

echo "<br><br>";

function yaz2()
{
    $yazi = "Yazi Return Edildi.";
    return $yazi;
}
echo yaz2();

echo "<br><br>";

#parametreli fonksiyon
function yazAd($isim="İsim Belirtilmedi")
{
    $yazi = "Selamlar : ".$isim;
    return $yazi;
}
echo yazAd("Kullanıcı1");
echo "<br>";
echo yazAd("Kullanıcı2");
echo "<br>";
echo yazAd("Kullanıcı3");
echo "<br>";
echo yazAd();

echo "<br><br>";

function yazAdEcho($isim="İsim Belirtilmedi")
{
    echo "Selamlar : ".$isim."<br>";
}
yazAdEcho();
yazAdEcho("Kullanıcı4");

echo "<br><br>";

function topla($sayi1,$sayi2)
{
    echo "İki Sayının Toplamı : ".$sayi1+$sayi2;
}
topla(23,11);

echo "<br><br>";

function topla2($sayi1=0,$sayi2=0)
{
    return $sayi1+$sayi2;
}
echo "İki Sayının Toplamı : ".topla2(27,11)."<br>";
echo "İki Sayının Toplamı : ".topla2(27);

echo "<br><br>";

function topla3($sayi1=10,$sayi2=15)
{
    echo $sayi1+$sayi2."<br>";
}
topla3(237,11);
topla3(24);

echo "<br><br>";

echo "<h1>.:Veri Tabanı:.</h1>";

$mysqlsunucu = "localhost";
$mysqlkullanici = "root";
$mysqlsifre = "";

try {
    $conn = new PDO("mysql:host=$mysqlsunucu;dbname=webprog;charset=utf8", $mysqlkullanici, $mysqlsifre);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Bağlantı başarılı"; 
    }
catch(PDOException $e)
    {
    echo "Bağlantı hatası: " . $e->getMessage();
    }  
?>

<table border=2>
    <tr>
        <td>Id</td>
        <td>Ad </td>
        <td>SoyAd </td>
        <td>Gsm </td>
    </tr>
    <?php 
    $query = $conn->query("SELECT * FROM ogrenciler", PDO::FETCH_ASSOC);
        foreach( $query as $row )
        {
        echo "
        <tr>
        <td>".$row['id']."</td>
        <td>".$row['ad']."</td>
        <td>".$row['soyad']."</td>
        <td>".$row['gsm']."</td>
        </tr> ";
        }

    ?>
</table>
