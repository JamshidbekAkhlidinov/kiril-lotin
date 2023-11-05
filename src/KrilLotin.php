<?php

namespace ustadev\text;

class KrilLotin {

    public $bigLettersK = ["Э","Ё","Ю","Я","Ў","Ғ","Ш","Ч","НГ","A","Б","C","Д","Е","Ф","Г","Ҳ","И","Ж","К","Л"," М","Н","О","П","Қ","Р","С","Т","У","В","W","Х","Й","З"];
    public $bigLettersL = ["E","Yo","Yu","Ya","O'","G'","Sh","Ch","NG","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];


    public $smallLettersK = ["э","ё","ю","я","ў","ғ","ш","ч","нг","а","б","c","д","е","ф","г","ҳ","и","ж","к","л","м","н","о","п","қ","р","с","т","у","в","w","х","й","з","ъ"];
    public $smallLettersL = ["e","yo","yu","ya","o'","g'","sh","ch","ng","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","'"];

    public function convertLotinKiril($text=""){
        $textLK = str_replace($this->bigLettersL, $this->bigLettersK, $text);
        $textLK = str_replace($this->smallLettersL, $this->smallLettersK, $textLK);
        return $textLK;
    }

     public function convertKirilLotin($text=""){
        $textKL = str_replace($this->bigLettersK, $this->bigLettersL, $text);
        $textKL = str_replace($this->smallLettersK, $this->smallLettersL, $textKL);
        return $textKL;
    }
}



?>