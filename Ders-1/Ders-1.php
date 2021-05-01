<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-1</title>
</head>
<body>
<h4>Php Programlama</h4>
    <?php
    
    /* php açıklama satırı*/
    // php tek satır açıklama satırı
    echo "<h3> Php Dersi </h3>";
    //echo "<h3> Adü Aymes</h3> <hr>"." Bilgisayar Programcılığı";
    echo "<h3> Adü Aymes</h3> <hr> Bilgisayar Programcılığı";
    echo "<h3> Değişken Tanımlamada Dikkat Edilecek Husular </h3>";
    echo "<ol>
            <li>Php'de değişken isimleri $ işareti ile başlar. </li>
            <li>Php'de değişken isimleri numerik (Sayısal) ifadeler ile başlayamaz. </li>
            <li>Php'de değişken isimleri iki kelimeden oluşuyorsa '-' veya '_' kullanılır. </li>
            <li>Php'de değişken isimlerinde Türkçe karakter kullanılmamalıdır. </li>
            <li>Php'de değişken isimlerinde büyük küçük harf duyarlılığı vardır. </li>
            <li>Php'de değişken içeriğinde eğer metinsel ifade varsa \" veya ' kullanılır. </li>
            <li>Php'de değişken içeriğinde eğer sayısal ifade varsa tırnak işareti kullanmadan direkt yazılır. </li>
            </ol>
        ";
        echo "<h3> Değişken Tanımlama Örnekleri </h3>";
        $isim="Ayşe Nur";
        $soyisim="Bilir";
        echo "$isim $soyisim <br>";//echo $isim." ".$soyisim; aynı şeydir.
        echo '$isim $soyisim<br>';
       
        /*Üniversite-Ad-Soyad-No değişkenlerini tanımlayarak içeriğe uygun değerler giriniz ve bu 
        değerleri bir tablo yardımıyla satır satır ekrana yazdırınız. */
        
       $ad="Ayşe Nur";
       $soyad="Bilir";
       $no="206001040";
       $universite="Aydın Adnan Menderes";
           

        
    ?>
    <br>
    <table border =2px solid>
        <thead>
            <th>Ödev</th>

        </thead>
        <tbody >
            <tr>
                <td><?php echo $ad;?> </td>
                
             </tr>
             <tr>
                <td><?php echo $soyad;?> </td>
                
             </tr>
             <tr>
                <td><?php echo $no;?> </td>
                
             </tr>
             <tr>
                <td><?php echo $universite;?> </td>
                
             </tr>
        </tbody>
    </table>

<?php
    echo "<h3> Matematiksel İşlemler </h3>";
    echo "<h5> Toplama İşlemi </h5>";
    $sayi1=20;
    $sayi2=10;
    echo "İşlem Sonucu $sayi1+$sayi2 = ";
    echo $sayi1+$sayi2 ;



    echo "<h5> Çıkarma İşlemi </h5>";
    $sayi1=20;
    $sayi2=10;
    echo "İşlem Sonucu $sayi1-$sayi2 = ";
    echo $sayi1-$sayi2 ;


    echo "<h5> Çarpma İşlemi </h5>";
    $sayi1=20;
    $sayi2=10;
    echo "İşlem Sonucu $sayi1*$sayi2 = ";
    echo $sayi1*$sayi2 ;



    echo "<h5> Bölme İşlemi </h5>";
    $sayi1=20;
    $sayi2=10;
    echo "İşlem Sonucu $sayi1/$sayi2 = ";
    echo $sayi1/$sayi2 ;


    echo "<h3> Tırnaklar Arasındaki Fark </h3>";
    $uni="Adnan Menderes";
    echo "$uni'i bu sene kazandım.";//Değişken içeriği okunur.
    echo "<br>";
    echo '$uni\'sini bu sene kazandım.';//Değişken ismi yazılır.




    echo "<h3> Atama Opetatörleri </h3>";
    $sayi=300;
    echo "\$sayi değişkeni içerisindeki değer: $sayi <br>";

    $sayi += 150;//$sayi= $sayi + 150
    echo "\$sayi değişkeni içerisindeki değer: $sayi <br>";

    $sayi -= 50;
    echo "\$sayi değişkeni içerisindeki değer: $sayi <br>";

    $sayi /= 5;
    echo "\$sayi değişkeni içerisindeki değer: $sayi <br>";

    $sayi *= 15;
    echo "\$sayi değişkeni içerisindeki değer: $sayi <br>";

    $sayi++; //$sayi=$sayi+1
    echo "\$sayi değişkeni içerisindeki değer: $sayi <br>";


    $sayi --;
    echo "\$sayi değişkeni içerisindeki değer: $sayi <br>";

    --$sayi ;
    echo "\$sayi değişkeni içerisindeki değer: $sayi <br>";

    ++$sayi;
    echo "\$sayi değişkeni içerisindeki değer: $sayi <br>";

   

    echo "<h3> Hazır Fonksiyonlar </h3>";
    echo "<h5>Rand</h5>";
    //Rastgele sayı üretir.
    $sayi =rand(0, 100);
    echo "\$sayi değişkeni içerisindeki rastgele üretilen değer: $sayi <br>";
    //Örn:Rastgele 0-100 arasında üretilen değer 50'den küçükse kaldı büyükse geçti yazsın.
    if  ($sayi>=50){
        echo "Geçti= Notunuz: $sayi";
    }
    else{
        echo "Kaldı= notunuz: $sayi";
    }



?>



</body>
</html>