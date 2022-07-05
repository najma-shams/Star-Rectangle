<?php
function rectangle($rows)
{
    for ($i = 1; $i <= $rows; $i++)
    {
        if ($i == 1 || $i == $rows)
            for ($j = 1; $j <= $rows; $j++)
                echo "*";
        else
            for ($j = 1; $j <= $rows; $j++)

                if ($j == 1 || $j == $rows)
                    echo "*";
                else
                    echo " ";
        echo "\n";
    }
}
 

function printPattern($rows)
{
    echo "\nrectangle:\n"; 
    rectangle($rows);
}
    $rows = 5;
    printPattern ($rows);
 
// This code is contributed by Najma Shams
?>