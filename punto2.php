<?php

    /*2.El gimnasio Bodytech, lo contrata para desarrollar una
    aplicación web que permita a sus usuarios calcular el índice
    de masa corporal basado en el formula:
        imc = peso / altura * altura
*/

        $peso = 62;
        $altura = 1.65;
        $altura2;
        $imc;

        $altura2 = $altura * $altura;
         $imc = round ( $peso / $altura2 , 2);
      

        if ($imc < 18.5)
        {
            echo ("su indice se masa corporal es: ".$imc);
            echo ("<br>");
            echo "peso insufiente";
        }
        else
            if ($imc >= 18.5 && $imc < 24.9)
            {
                echo ("su indice se masa corporal es: ".$imc);
                echo ("<br>");
                echo "peso normal";
            }
        else
            if ($imc > 25 && $imc < 26.9)
            {
                echo ("su indice se masa corporal es: ".$imc);
                echo ("<br>");
                echo "sobrepeso tipo 1";
            }
        else
            if ($imc > 27 && $imc < 29.9)
            {
                echo ("su indice se masa corporal es: ".$imc);
                echo ("<br>");
                echo "sobre peso tipo 2";
            }
        else
            if ($imc > 30 && $imc < 34.9)
            {
                echo ("su indice se masa corporal es: ".$imc);
                echo ("<br>");
                echo "obesidad tipo 1";
            }
        else
            if ($imc > 35 && $imc < 39.9)
            {
                echo ("su indice se masa corporal es: ".$imc);
                echo ("<br>");
                echo "obesidad tipo 2";
            }              
        else
            if ($imc > 40 && $imc < 49.9)
            {
                echo ("su indice se masa corporal es: ".$imc);
                echo ("<br>");
                echo "obesidad tipo 3"; 
            }
        else
            if ($imc > 50)
            {
                echo ("su indice se masa corporal es: ".$imc);
                echo ("<br>");
                echo "obesidad tipo 4"; 
            }           
?>