<<?php

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
$instance = new Chyška;
/*
$neco1 = 10;
$neco2 = 3;
$neco3 = 50;
$neco4 = 11;
$neco5 = 29 ;
$neco6 = 26;
$neco7 = 31; 
$neco8 = 36;
$neco9 = 189;
$neco10 = 65;
 * 
 */
class Chyška {
    public $neco1 = 10; 
    public $neco2 = 3;
    public $neco3 = 50;
    public $neco4 = 11;
    public $neco5 = 29 ;
    protected $neco6 = 26;
    protected $neco7 = 31; 
    protected $neco8 = 36;
    private $neco9 = 189;
    private $neco10 = 65;
    
    public function getneco1 () {
       return $this-> neco1;
    }
    public function getneco2 () {
       return $this-> neco2;
    }
    public function getneco3 () {
       return $this-> neco3;
    }
    public function getneco4 () {
       return $this-> neco4;
    }
    public function getneco5 () {
       return $this-> neco5;
    }
    
    private function setneco9 () {
       return $this-> neco9; 
    }        
    private function setneco10 () {
        return $this-> neco10;
    }
    public function _construct () {
       
    }
    
} 
var_dump ($instance);
$neco1 = new Chyška();
$neco1-> getneco1('10');
echo $neco1-> getneco1();
echo '<br>';
$neco2 = new Chyška();
$neco2-> getneco2('3');
echo $neco2-> getneco2();
echo '<br>';
$neco3 = new Chyška();
$neco3-> getneco3('50');
echo $neco3-> getneco3();
echo '<br>';
$neco4 = new Chyška();
$neco4-> getneco4('11');
echo $neco4-> getneco4();
echo '<br>';
$neco5 = new Chyška();
$neco5-> getneco5('29');
echo $neco5-> getneco5();



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
?>