<?php
//header('Content-Type : text');
$message = 'Helo';

if ($message == true) {
    echo 'yes';
} else  { 
    echo 'no';
}

$res = true;

$data = $res ? 100 : 0; 
echo '<br>' . $data; 


$res = 0;

$data = $res ?: 5;

echo '<br>' . $data;

$res = null;

$data = $res ?? 100;

$a = 10;
$b = 5;
$res = $a <=> $b; 

echo '<br>';

$age = 19;

if ($age <7) {
    echo 'вы дошкольник';
} elseif ($age >= 7 && $age <= 18) {
        echo 'вы учитесь в школе';
} else {
    echo 'вы закончили школу';
}


// циклы 

for ($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
}

echo '<select>';
echo '<option selected disabled>выбери</option>';
$i = 0;
while ($i < 10) {
    echo "<option>$i</option>";
    $i++;

}

echo '</select>';


for ($i = 0; $i <10; $i++) {
    if ($i % 2 == 0 ) {
        echo $i;
    } else {
        continue;
    }
    echo '!<br>';
}


// вывести температуры по цельсию от -50 до 50 
// рядом вывести значения по фаренгейту ( *9/5+32)

$temp = -50; 
while ($temp <= 50) {
    $f = $temp *9/5+32;
    echo $temp. 'C : '.$f.'F<br>';
    $temp++; 
} 