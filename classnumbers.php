<?php

 


class numbersChyska{
    //staticka fuknce round
    static public function roundChyska($zaokrouhli) {
        return round($zaokrouhli);
        
    }
    //staticka fuknce ceil
   static public function ceilChyska($zaokrouhlinahoru) {
       return ceil($zaokrouhlinahoru);
   }
   //staticka fuknce floor
   static public function floorChyska($zaokrouhlidolu) {
       return floor($zaokrouhlidolu);
   }
   //staticka fuknce sqrt
   static public function sqrtChyska($druhaodmocnina) {
       return sqrt($druhaodmocnina);
   }
   //staticka fuknce pow
   static public function powChyska($mocnina,$mocnitel) {
       return pow($mocnina, $mocnitel);
   }
   //staticka fuknce sin
   static public function sinChyska($uhel) {
       return sin($uhel);
   }
   //staticka fuknce cos
   static public function cosChyska($uhel) {
       return cos($uhel);
}
//staticka fuknce tan
static public function tanChyska($uhel) {
       return tan($uhel);
}
//staticka fuknce asin
static public function asinChyska($zcislanauhel) {
       return asin($zcislanauhel);
   }
   //staticka fuknce acos
   static public function acosChyska($zcislanauhel) {
       return acos($zcislanauhel);
}
//staticka fuknce atan
static public function atanChyska($zcislanauhel) {
       return atan($zcislanauhel);
}
//staticka fuknce fmod
static public function fmodChyska($zaklad,$delitel) {
    return fmod($zaklad, $delitel);
}
//staticka fuknce max
static public function maxChyska($pole) {
    return max($pole);
}
//staticka fuknce min
static public function minChyska($pole) {
    return min($pole);
}
//staticka fuknce abs
static public function absChyska($abscislo) {
    return abs($abscislo);
}
//staticka fuknce odcitani
static public function odecitaniChyska($a,$b) {
    return $a-$b;
}
//staticka fuknce scitani
static public function scitaniChyska($a,$b) {
    return $a+$b;
}
//staticka fuknce deleni
static public function deleniChyska($a,$b) {
    return $a/$b;
}
//staticka fuknce nasobeni
static public function nasobeniChyska($a,$b) {
    return $a*$b;
}
//staticka fuknce formatovani
static public function number_formatChyska($formatuje) {
    return number_format($formatuje);
}
}
//nadefinovani promennych
$zaokrouhli = 3.55;
$zaokrouhlinahoru = 7.55;
$zaokrouhlidolu = 6.75;
$druhaodmocnina = 4;
$mocnina = 5;
$mocnitel = 2;
$uhel = 45;
$zcislanauhel = 50;
$zaklad = 15 ;
$delitel = 3;
$pole  = array ('1','2','3','4','5','12','16','25','69');
$abscislo = 57.12;
$a = 8;
$b = 2;
$formatuje = 10;
//vypíše informace o stringu a funkci round
var_dump(numbersChyska::roundChyska($zaokrouhli)); 
//vypíše informace o stringu a funkci ceil
var_dump(numbersChyska::ceilChyska($zaokrouhlinahoru));
//vypíše informace o stringu a funkci floor
var_dump(numbersChyska::floorChyska($zaokrouhlidolu));
//vypíše informace o stringu a funkci sqrt
var_dump(numbersChyska::sqrtChyska($druhaodmocnina));
//vypíše informace o stringu a funkci pow
var_dump(numbersChyska::powChyska($mocnina, $mocnitel));
//vypíše informace o stringu a funkci sininus
var_dump(numbersChyska::sinChyska($uhel));
//vypíše informace o stringu a funkci cosinus
var_dump(numbersChyska::cosChyska($uhel));
//vypíše informace o stringu a funkci tangens
var_dump(numbersChyska::tanChyska($uhel));
//vypíše informace o stringu a funkci asin
var_dump(numbersChyska::asinChyska($zcislanauhel));
//vypíše informace o stringu a funkci acos
var_dump(numbersChyska::acosChyska($zcislanauhel));
//vypíše informace o stringu a funkci atan
var_dump(numbersChyska::atanChyska($zcislanauhel));
//vypíše informace o stringu a funkci fmod
var_dump(numbersChyska::fmodChyska($zaklad, $delitel));
//vypíše informace o stringu a funkci max
var_dump(numbersChyska::maxChyska($pole));
//vypíše informace o stringu a funkci min
var_dump(numbersChyska::minChyska($pole));
//vypíše informace o stringu a funkci abs
var_dump(numbersChyska::absChyska($abscislo));
//vypíše informace o stringu a funkci odcitani
var_dump(numbersChyska::odecitaniChyska($a, $b));
//vypíše informace o stringu a funkci scitani
var_dump(numbersChyska::scitaniChyska($a, $b));
//vypíše informace o stringu a funkci deleni
var_dump(numbersChyska::deleniChyska($a, $b));
//vypíše informace o stringu a funkci nasobeni
var_dump(numbersChyska::nasobeniChyska($a, $b));
//vypíše informace o stringu a funkci number_format
var_dump(numbersChyska::number_formatChyska($formatuje));

?>


