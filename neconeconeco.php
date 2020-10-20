<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//abstraktní trida ustredny a v ni protected $napetí
/*abstract class  ustredny_Chyška_Jan {

    protected $napeti_Chyška_Jan;
    //nastavení napeti
    public function setNapeti_Chyška_Jan($napeti_Chyška_Jan){
        $this->napeti_Chyška_Jan = $napeti_Chyška_Jan;
    }
    //precteni napeti
    public function getNapeti_Chyška_Jan() {
        return $this-> napeti_Chyška_Jan;
    }
}
// class ustredna se dedi do abs. class ustredny
class  ustredna_Chyška_Jan extends ustredny_Chyška_Jan{
   public $Napeti_Chyška_Jan= 15;
   //nastaveni konstanty type
   const TYPE ="12";
}
//class iustredna dedi interface od abs. class ustredny
interface iustredna_Chyška_Jan extends ustredny_Chyška_Jan{
    //vypise nastavene hodnoty
    public function _contruct ($Napeti_Chyška_Jan);
}
 * 
 */
/*echo $instance-> getneco1($neco1); 
echo $instance-> getneco2($neco2);
echo $instance-> getneco3($neco3);
echo $instance-> getneco4($neco4);
echo $instance-> getneco5($neco5);
//pres vardummp vypise hodnotu v type a hodnotu napeti na ustredne
 var_dump (ustredna_Chyška_Jan::TYPE);
 var_dump ($Napeti_Chyška_Jan);
 
  * 
  */