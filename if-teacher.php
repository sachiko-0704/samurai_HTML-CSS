<?php
$even_num = [];
$odd_num = [];

function sort_number($num){
    global $even_num, $odd_num;
    if($num % 2 == 0) {
        $even_num[] = $num;
    } else if($num % 2 == 1) {
        $odd_num[] = $num;
    }
}

function add_evet_number($num) {
    global $even_num;
    $even_num[] = $num;
}

function add_odd_number($num) {
    global $odd_num;
    $odd_num[] = $num;
}

for ($i=1; $i<=100; $i++){
    if ($i % 2 == 0) {
        add_evet_number($i);
    } elseif($i % 2 == 1) {
        add_odd_number($i);
    }
    //sort_number($i);
}
print_r($even_num);
print_r($odd_num);
// for ($i = 1; $i <= 10; $i++) {
//     print("Hello World!"."\n");
// }
?>