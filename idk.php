<?php

 /* $i = 16;
        $vysledek = 0;
        $podminka = 0;
        while($podminka == 0)
        {
            if($i % 3 == 0)
            {
                $vysledek = $i;
                $podminka = 1;
            }
            else
            {
                $i = $i + 1;
            }
        }
        echo("výsledek: $vysledek");
  * 
  */
   $x = 0;
    while($x < 6)
    {
        $i = 16;
        $vysledek = 0;
        $podminka = 0;
        while($podminka == 0)
        {
            if($i % 4 == 0)
            {
                $vysledek[$x] = $i;
                $podminka = 1;
            }
            else if($i % 3 == 0)
            {
                $vysledek[$x] = $i;
                $podminka = 1;
            }

            else
            {
                $i = $i + 1;
            }
        }
        $x = $x + 1;
    }
    echo("$vysledek[0]");
    echo("$vysledek[1]");
    echo("$vysledek[2]");
    echo("$vysledek[3]");
    echo("$vysledek[4]");

