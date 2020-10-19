<<?php
//definuji instanci
$instance = new Chyska;
//vytvarim class, a definuji atributy
class Chyska {
    public $necochyska1 = 10; 
    public $necochyska2 = 3;
    public $necochyska3 = 50;
    public $necochyska4 = 11;
    public $necochyska5 = 29 ;
    protected $necochyska6 = 26;
    protected $necochyska7 = 31; 
    protected $necochyska8 = 36;
    private $necochyska9 = 189;
    private $necochyska10 = 65;
    /**
     * @author Jan Chyška
     * @param $neco1
     * @return int
     */
    public function getchyskaneco1 () {
       return $this-> necochyska1;
    }
    /**
     * @author Jan Chyška
     * $param neco2
     * @return int
     */
    public function getchyskaneco2 () {
       return $this-> necochyska2;
    }
    /**
     * @author Jan Chyška
     * @param neco3
     * @return int
     */
    public function getchyskaneco3 () {
       return $this-> necochyska3;
    }
    /**
     * @author Jan Chyška
     * @param neco4
     * @return int
     */
    public function getchykaneco4 () {
       return $this-> necochyska4;
    }
    /**
     * @author Jan Chyška
     * @param $neco5
     * @return int
     */
    public function getchyskaneco5 () {
       return $this-> necochyska5;
    }
    /**
     * @author Jan Chyška
     * @param $neco9
     * @return int
     */
    private function setchyskaneco9 () {
       return $this-> necochyska9; 
    }    
    /**
     * @author Jan Chyška
     * @param $neco10
     * @return int
     */
    private function setchyskaneco10 () {
        return $this-> necochyska10;
    }
    /**
     * 
     */
    public function _construct () {
       
    }
    
    
    
} 
//vyvolavani
var_dump ($instance);
$cisla = new Chyska();
$cisla-> getneco1('10');
echo $cisla-> getneco1();
echo '<br>';
$cisla-> getneco2('3');
echo $cisla-> getneco2();
echo '<br>';
$cisla-> getneco3('50');
echo $cisla-> getneco3();
echo '<br>';
$cisla-> getneco4('11');
echo $cisla-> getneco4();
echo '<br>';
$cisla-> getneco5('29');
echo $cisla-> getneco5();

?>