<?php
// 配列を初期化する。
$array = [];
for ($i = 0; $i < 1000; $i++) {
    $array[] = $i;
}


// array_key_exists計測開始
$start = microtime(true);
for ($i = 0; $i < 10000000; $i++) {
    if (array_key_exists(990, $array)) {
        $a = 1 + 1;
    }
}
$end = microtime(true);

echo "-------array_key_exists-------\n";
echo $end - $start . "秒\n";

// isset 計測開始
$start = microtime(true);
for ($i = 0; $i < 10000000; $i++) {
    if (isset($array[990])) {
        $a = 1 + 1;
    }
}
$end = microtime(true);

echo "-------isset-------\n";
echo $end - $start . "秒\n";
