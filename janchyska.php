<!DOCTYPE html>
<html>
    <head>
        <title>TimeForNegr</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/css.css">       
    </head>
    <body>
        <h1>negr</h1>
        <p>V moderním jazyce je negr jakýkoli člověk s velkou gunou v ruce. </p>
        <h2>Desatero dokonalého negra</h2>
        <form>
            <ol>
                <li>negr nemluví slušně</li>
                <li>negr je sečtělý</li>
                <li>negr neprokazuje úctu ženám</li>
                <li>negr nedbá o svůj zevnějšek</li>
                <li> negr nemá ve věcech pořádek</li>
                <li>negr dělá podrazy</li>
                <li>negr nosí (alespoň občas) oblečšní</li>
                <li>negr nevyzkoušel holení</li>
                <li>negr nepoužívá kvalitní kolínskou</li>
                <li>negr se brání novému poznání</li>
            </ol>
            <h2>Co negr nosí?</h2>
            <p>Každý negr by měl nosit špinavé, prostorné a levné oblečení, aby se mu tam vešly zbraně a drogy.</p>
            <ul>
                <li>mikina</li>
                <li>kalhoty u prdele</li>
                <li>řetězy</li>
                <li>glock</li>
                <li>nůž</li>
                <li>tenisky</li>
            </ul>
            <h3>Chcete vidět více? Klikněte zde.</h3>
            <a href=https://www.google.com/search?q=gentleman+fashion&rlz=1C1PRFI_enCZ822CZ822&source=lnms&tbm=isch&sa=X&ved=0ahUKEwioobmfv_DfAhVHMewKHRbzBXIQ_AUIDigB&biw=1536&bih=792>Negrův outfit</a>
            <br>
            <br>
            <p>Váš účet</p>   
            <table> 
                <input type="text" name="firstname" value="Vase jmeno"><br>
                <input type="password" size="10" name="heslo" value="heslo"><br>
                <input type="radio" value="prvni">robot
                <input type="checkbox" value="druha">muz<br>
            </table>
            <dl>
                <dd><input  type="button">klikni zde </dd>
                <dt><input  type="submit">přihlásit</dt>
            </dl><br>          
            <p>Datum vzniku webové stránky</p>
            <table border="7">   
                <tr>
                    <td>1.</td>
                    <td>1.</td>
                    <td>2019</td>
                </tr>
            </table><br>
            <textarea>Zanechte zde váš komentář.</textarea>
            <dd><input  type="submit"</dd>
        </form>
        <img src="obrr.jpg" alt=""/>
    </body>
   
</html>

<?PHP
echo "Ahoj";
print_r("ahoj");
var_dump("ahoj");
echo "\$fdsfdsf";
echo "<a href=\"index.php\">Homepage<a/>";

$a=10;
$b=20;
$c=30;
var_dump ($a === $b);
echo "<br>";
var_dump ($a === $c);
echo "<br>";
var_dump ($a == $b);
echo "<br>";
var_dump ($a == $c);
echo "<br>";
var_dump ($a.$c);
echo "<br>";
var_dump ($a+$c);
echo "<br>";
var_dump ($a || $c);
echo "<br>";
$cena1= 12;
$cena2= 13;

if ($cena1 > $cena2){ 
    echo "je vetsi";
}else {
    echo "je mensi";
}
echo "<br>";
echo "<br>";

$cenaa= 21;
$cenab= 21;

if ($cenaa === $cenab){ 
    echo "cisla se rovnaji";
}else {
    echo "cisla se nerovnaji";
}
$bmwe36=40;
$bmwe30=30;
        
if ($bmwe36 == $bmwe30){ 
    echo "se rovnaji";

         
} {
    echo "cisla se nerovnaji";
}

$ovoce = array('pomeranč', 'banán', 'jablko', 'meruňka', 'broskev', 'citron', 'hruška', 'pomelo', 'kokos', 'jahoda');
$ovoce = array(10 => 'pomeranč', 20 => 'banán', 30 => 'jablko');
$ovoce[31] = 'pomeranč';   
$ovoce[35] = 'jahoda';
       
$auto['osobní']['škoda'][] = 'Ovce';  
$auto['osobní']['škoda'][] = 'Ovce RS';
$auto['osobní']['škoda'][] = 'Yeti';
$auto['osobní']['Fiat'][] = 'Cinquecento';
$auto['osobní']['Audi'][] = 'A4';
$auto['osobní']['Audi'][] = 'A5';
$auto['osobní']['Audi'][] = 'A6';
$auto['osobní']['Audi'][] = 'A6 RS';
$auto['osobní']['Audi'][] = 'A7';
$auto['osobní']['Audi'][] = 'A7 avant';
$auto['osobní']['Audi'][] = 'A7 RS';
$auto['osobní']['BMW'][] = 'X4';
$auto['osobní']['BMW'][] = 'X5';
$auto['osobní']['BMW'][] = 'X6';
$auto['osobní']['BMW'][] = 'X7';
$auto['osobní']['Porsche'][] = 'GT RS2';
$auto['osobní']['Porsche'][] = 'GT RS3';
$auto['osobní']['Mercedes'][] = 'CLS';
$auto['osobní']['Mercedes'][] = 'SLS';
$auto['osobní']['Mercedes'][] = 'CLS Coupe';
$auto['nákladní']['Ford'][] = 'Transit';

var_dump ($auto);
var_dump ($ovoce);


foreach ($ovoce as $key => $value);
   var_dump ($key);
    var_dump ($value);

    
 echo $value, "<br>";


 echo "</table>"; 
 
 $count = 10;
 $count2 = 5;        
 
 echo "<br>";
 
  echo "<table border='1'>";
  
 for ($index = 1; $index < $count+1; $index++){
 
     echo "</tr>";
 
  for ($index2 = 1; $index2 < $count2+1; $index2++){
  echo "<td>".$index."-".$index2."<td>";
  
  }
  
  echo "</tr>";
  
 }
   echo "</table>";  
   
   
   
   function isValid (array $param1, string $param2) {
     var_dump ($param1);
       var_dump ($param2);
       
   foreach ($param1 as $key => $value) {
  
   }
      
   $param2 ='Tak dlouh1 se chodí se džbánem pro vodu, až se ucho utrhne.
            Už dlouho tu píšu, že šel tomuhle "štěstíčku" dost naproti. Napřed s Erbovou, která ovšem byla ještě zlatá
            proti tomu současnému pometlu, které neumí už vůbec nic, ale jako zlatokopka se neztratí.
            Inu Tomáši, je to tvrdé, ale varování bylo dost a holt když si někdo nedá říct, musí přijít facka pořádná.'; 
           
           $param1= array('štěstíčku', 'Erbovou');
   echo isValid($param1, $param2);
   
        $i = 16;
        while($podminka = 0)
        {
            if($i % 3 == 0)
            {
                $vysledek = $i;
                $podminka = 1;
            }
            else
            {
                $i=$i + 1;
            }
        }
        echo("výsledek: $vysledek");

    
   
  
   }
   //phpinfo();
   
   
  // include 'classtrings.php';
   
  // include 'tracy-2.7.5';
 // use Tracy\Debugger;

 // Debugger::enable();
   
   
 ?>
        
        

