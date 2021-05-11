<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>100 e kadar olan çift tek sayılar</title>
</head>
<body>
    <?php 
    $tekSayilar=0;
    $ciftSayilar=0;
    for($i =0;$i <=100;$i++){
        if($i%2==0){
            echo "$i Sayi Çifttir<br>";
            $ciftSayilar++;
        }
        else{
            echo "$i Sayi Tektir<br>";
            $tekSayilar++;
        }
    }
    echo "Döngüdeki Çift Sayı Sayısı = $ciftSayilar<br>";
    echo "Döngüdeki Tek Sayı Sayısı = $tekSayilar<br>";
    ?>
</body>
</html>