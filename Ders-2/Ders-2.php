<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-2</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders</title>
</head>
<body>
    <h3>Ödev-2 Devamını Oku Uygulaması</h3>
    <h4> Uygulama Açıklaması: Metnin ilk 200 karakterini göstererek DEVAMINI OKU butonu eklenecektir.Butona tıklandığında yeni bir sekmede üniversitenin web sitesi açılacaktır.</h4>
   
    <?php
        $yazi="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae numquam odit architecto aliquam, dolorem alias officiis nemo expedita odio laboriosam veritatis, porro est nostrum sed quo non neque debitis maiores.
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae numquam odit architecto aliquam, dolorem alias officiis nemo expedita odio laboriosam veritatis, porro est nostrum sed quo non neque debitis maiores.
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae numquam odit architecto aliquam, dolorem alias officiis nemo expedita odio laboriosam veritatis, porro est nostrum sed quo non neque debitis maiores.
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae numquam odit architecto aliquam, dolorem alias officiis nemo expedita odio laboriosam veritatis, porro est nostrum sed quo non neque debitis maiores.
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae numquam odit architecto aliquam, dolorem alias officiis nemo expedita odio laboriosam veritatis, porro est nostrum sed quo non neque debitis maiores.
        ";
        echo "<b>\$yazi Değişkeni içirisndeki 200 karakter:</b>" . substr($yazi,0,200);
    
    ?>
    <button><a href="https://www.adu.edu.tr/" target="blank"> DEVAMINI OKU</a></button>
</body>
</html>
</body>
</html>