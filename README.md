# Kiril-Lotin

    <?php
    include "vendor/autoload.php";

    use ustadev\text\KrilLotin;


    $textK = "Ўзбекистон бўйлаб иссиқхоналарнинг газдан узилгани ва қайта улангани";


    $textL = "O'zbekiston bo'ylab issiqxonalarning gazdan uzilgani va qayta ulangani";

    $d = new KrilLotin();
    echo $d->convertKirilLotin($textK);
    echo $d->convertLotinKiril($textL)


    ?>

**Kutubxonani o'rnatish**

    composer require ustadev/kiril-lotin