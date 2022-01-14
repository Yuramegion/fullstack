<?php
$a = 9; 

if ($a == 10) {
    echo 'а равно 10';
} else if ($a == 9) {
    echo 'a =9';
} else {
    echo '$a != 10';
}

if ($israin = true)  {
    echo '<br> Возьмите зонтик';
}

$age = 19;
$havedrivelicense = true;
$candrive = $age >= 18;
if ($candrive && $havedrivelicense) {
    echo '<br> you can drive';
} else echo 'fuck off';