<?php

for ($i = 1; $i <= 30; $i++) {
    for ($j = 1; $j <= 2; $j++) {
        $y = date('Y');
        $m = date('m');
        $today = date('d-m-Y', strtotime("25-{$m}-{$y}"));
        $date = date_create($today);
        date_add($date, date_interval_create_from_date_string("{$i} days"));
        $gen = date_format($date, "d/m/Y");
        bb($gen);
        // $date = date("d/m/Y", strtotime("25/{$m}/{$y}" . "+{i} days"));
        // echo $date . "\r\n";
        file_put_contents(date('m') . ".txt", $gen . "\r\n", FILE_APPEND);
    }
}

function bb($data)
{
    echo $data . "\r\n";
}
