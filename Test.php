<?php

include "../../../vendor/autoload.php";

use jamshidbekakhlidinov\KrilLotin;

$textK = "Ўзбекистон бўйлаб иссиқхоналарнинг газдан узилгани ва қайта улангани – бутун ҳафта давомида деярли ҳар куни янгилик чиқиб турган мавзу бўлди. Совуқ тушиши билан табиий газни биринчи навбатда аҳолига беришни кўзлаган энергетиклар иссиқхоналарга газ узатишни тўхтатиб қўйди ва норозиликлардан кейин бу ҳаракатлари учун жавоб берадиган бўлди. Экспортчи-тадбиркорлар етиштирган ҳосиллари нобуд бўлиши, расмийлар айтаётган кўмирга ўтиш эса тезда бўладиган иш эмаслигини айтиб эътироз билдирди, уларнинг мурожаатлари оммавий ахборот воситаларида кенг ёритилди. Шу билан бирга, турли вилоятлардан бўлган тадбиркорлар Telegram'да гуруҳ очиб, жамоавий мурожаат билан Тошкентга боришга келишиб олишди ва Вазирлар Маҳкамаси биноси олдида йиғилишди. Бунинг учун улар ички ишлар органларига чақирилган бўлса ҳам, охир-оқибатда ўзлари учун ижобий натижага эриша олди.

";


$textL = "O'zbekiston bo'ylab issiqxonalarning gazdan uzilgani va qayta ulangani – butun hafta davomida deyarli har kuni yangilik chiqib turgan mavzu bo'ldi. Sovuq tushishi bilan tabiiy gazni birinchi navbatda aholiga berishni ko'zlagan energetiklar issiqxonalarga gaz uzatishni to'xtatib qo'ydi va noroziliklardan keyin bu harakatlari uchun javob beradigan bo'ldi. Eksportchi-tadbirkorlar etishtirgan hosillari nobud bo'lishi, rasmiylar aytayotgan ko'mirga o'tish esa tezda bo'ladigan ish emasligini aytib e'tiroz bildirdi, ularning murojaatlari ommaviy axborot vositalarida keng yoritildi. Shu bilan birga, turli viloyatlardan bo'lgan tadbirkorlar Telegram'da guruh ochib, jamoaviy murojaat bilan Toshkentga borishga kelishib olishdi va VazirlarMahkamasi binosi oldida yig'ilishdi. Buning uchun ular ichki ishlar organlariga chaqirilgan bo'lsa ham, oxir-oqibatda o'zlari uchun ijobiy natijaga erisha oldi.

";

$d = new KrilLotin();
echo $d->convertKirilLotin($textK);
echo $d->convertLotinKiril($textL)


?>