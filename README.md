# Kiril-Lotin

    <?php
    include_once "./KrilLotin.php";

    $textK = "Ўзбекистон бўйлаб иссиқхоналарнинг газдан узилгани ва қайта улангани";


    $textL = "O'zbekiston bo'ylab issiqxonalarning gazdan uzilgani va qayta ulangani";

    $d = new KrilLotin();
    echo $d->convertKirilLotin($textK);
    echo $d->convertLotinKiril($textL)


    ?>