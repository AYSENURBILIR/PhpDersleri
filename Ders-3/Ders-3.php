<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-3</title>
</head>
<body>
    <h2>Diziler-3</h2>
    
    <?php
    echo "<hr>";
    echo "<b> Dizilerde Sık Kullanılan Fonksiyonlar:</b>"."<br>";
    $sayilar=[802,22,53,654,58,987,2153,1];
    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";

    echo "<br> Dizinin Sıralanmış Hali: <br>";
    sort($sayilar);
    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";

    echo "<br> Dizinin Büyükten Küçüğe Sıralanmış Hali: <br>";
    rsort($sayilar);
    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";

   //Uygulama: dizistr isminde bir dizi tanımlayarak 5 tane string değer giriniz. Sonrasında sort ve rsort ile sıralayınız.
    echo "<br>String Değerlerin Sıralanmış Hali: <br>";
    $dizistr=['Ayşe','Fatma','Ali','Veli','Osman'];
    sort($dizistr);
    echo "<pre>";
    print_r($dizistr);
    echo "</pre>";

    echo "<br> Dizinin Büyükten Küçüğe Sıralanmış Hali: <br>";
    $dizistr=['Ayşe','Fatma','Ali','Veli','Osman'];
    rsort($dizistr);
    echo "<pre>";
    print_r($dizistr);
    echo "</pre>";

    echo "Dizinin İçerisinde Arama İşlemi Yapma: <br>";
    $harfler=array("a","b","c","d","e");
    //Değer yoksa Boş Varsa 1 Döner!!!
    $sonuc=in_array("b",$harfler);
    echo "<br> <br>" ;
    if($sonuc){
        echo "Aranılan Harf Bulundu . Durum 1";
    }
    else{
        echo "Maalesef AranılanDeğer Bulunamadı. Durum 1";

    }
    echo "<br><br> ";
    if(in_array("b",$harfler)){
        echo "Aranılan Harf Bulundu . Durum 2";
    }
    else{
        echo "Maalesef AranılanDeğer Bulunamadı. Durum 2";

    }
    echo "<br><br> <br><br> ";
    echo "Dizinin İndislerindeki Elemanların Birleştirilmesi(İmplode) :"."<br>";
    $dizibir=array("php","java","asp","web prog.");
    echo "<pre>";
    print_r($dizibir);
    echo "</pre>";

    $birlestir=implode(",",$dizibir);
    echo $birlestir."<br>";

    $birlestir=implode(" ",$dizibir);
    echo $birlestir."<br>";

    $birlestir=implode("-",$dizibir);
    echo $birlestir."<br>";
    echo "<br><br> <br><br> ";


    echo "Değişkeni Parçalayarak Dizine Dönüştürür (Explode): "."<br>";
    $pizza ="Place1 Place2 Place3 Place4 Place5 Place6 ";
    echo "Parçalanacak Değer\ $pizza Değişkeni: $pizza <br>";
    $dilimler =explode(" ",$pizza);
    echo "<pre>";
    print_r($dilimler);
    echo "</pre>";












    ?>

</body>
</html>