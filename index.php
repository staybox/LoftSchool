<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 24.02.2018
 * Time: 18:59
 */

/*  echo "Hello World";

    echo "Hello Second World2";

    echo "Hello Second World_3_4_5";
*/

$data = [0, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597, 2584, 1, 4181, 6765, 10946, 17711];

sort($data);

for($i=0; $i < count($data); $i++)
{
    "<pre>".
    print_r("$i:$data[$i] ")
    ."<pre/>";
}