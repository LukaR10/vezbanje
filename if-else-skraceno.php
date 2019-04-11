<?php

//promenljiva             uslov                rezultat  else
$is_admin = ($user['permissions'] == 'admin') ? true : false;

if ($user['permissions'] == 'admin') {
    $is_admin = true;
} else {
    $is_admin = false;
}

//skraceni oblik
$device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
    
if(is_null($coffeeMaker)) {
    $device = 'hands';
} else {
    $device = $coffeeMaker;
}

//skraceni oblik
$luka = is_array($podaci) ? $podaci['dzudza'] : NULL;

if(is_array($podaci)) {
    $luka = $podaci['dzudza'];
} else {
    $luka = null;
}