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
     * @param $necochyska1
     * @return int
     */
    public function getnecochyska1 ():int {
       return $this-> necochyska1;
    }
    //vyvola necochyska1
    /**
     * @author Jan Chyška
     * $param necochyska2
     * @return int
     */
    public function getnecochyska2 ():int {
       return $this-> necochyska2;
    }
    //vyvola necochyska2
    /**
     * @author Jan Chyška
     * @param necochyska3
     * @return int
     */
    public function getnecochyska3 ():int {
       return $this-> necochyska3;
    }
    //vyvola necochyska3
    /**
     * @author Jan Chyška
     * @param neco4
     * @return int
     */
    public function getnecochyska4 ():int {
       return $this-> necochyska4;
    }
    //vyvola necochyska4
    /**
     * @author Jan Chyška
     * @param $necochyska5
     * @return int
     */
    public function getnecochyska5 ():int {
       return $this-> necochyska5;
    }
    //vyvola necochyska5
    /**
     * @author Jan Chyška
     * @param $necochyska9
     * @return int
     */
    private function setnecochyska9 ():int {
       return $this-> necochyska9; 
    }
//nastavi necochyska9    
    /**
     * @author Jan Chyška
     * @param $necochyska10
     * @return int
     */
    private function setnecochyska10 ():int {
        return $this-> necochyska10;
    }
    //nastavi necochyska
    public function _construct () {
       
    }
    //konstruktor
    
    
} 
//vyvolavani
var_dump ($instance);
$cisla = new Chyska();
$cisla-> getnecochyska1('10');
echo $cisla-> getnecochyska1();
//vyvola necochyska1
echo '<br>';
$cisla-> getnecochyska2('3');
echo $cisla-> getnecochyska2();
//vyvola necochyska2
echo '<br>';
$cisla-> getnecochyska3('50');
echo $cisla-> getnecochyska3();
//vyvloa necochyska3
echo '<br>';
$cisla-> getnecochyska4('11');
echo $cisla-> getnecochyska4();
//vyvola necochyska4
echo '<br>';
$cisla-> getnecochyska5('29');
echo $cisla-> getnecochyska5();
//vyvola necochyska5

?>