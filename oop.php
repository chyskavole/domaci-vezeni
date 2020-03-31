<<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//abstraktní trida ustredny a v ni protected $napetí
abstract class  ustredny_Chyška_Jan {

    protected $napeti_Pokorny_Jakub;
    //nastavení napeti
    public function setNapeti_Chyška_Jan($napeti_Pokorny_Jakub){
        $this->napeti_Pokorny_Jakub = $napeti_Pokorny_Jakub;
    }
    //precteni napeti
    public function getNapeti_Chyška_Jan() {
        return $this-> napeti_Chyška_Jan;
    }
}
// class ustredna se dedi do abs. class ustredny
class  ustredna_Chyška_Jan extends ustredny_Pokorny_Jakub{
   public $Napeti_Chyška_Jan= 15;
   //nastaveni konstanty type
   const TYPE ="12";
}
//class iustredna dedi interface od abs. class ustredny
interface iustredna_Chyška_Jan extends ustredny_Chyška_Jan{
    //vypise nastavene hodnoty
    public function _contruct ($Napeti_Chyška_Jan);
}

//pres vardummp vypise hodnotu v type a hodnotu napeti na ustredne
 var_dump (ustredna_Chyška_Jan::TYPE);
 var_dump ($Napeti_Chyška_Jan);
?>