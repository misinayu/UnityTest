<?php

$key = ""; // ここにgoogleスプレッドシートのAPIKEYを入れてください
$url = "https://sheets.googleapis.com/v4/spreadsheets/11BCnspCt2Mut3nhc4WMY6CYTd0zF9C3eCzsk1AEpKLM/values/sales!A1:E6?key=" . $key;
$json = file_get_contents($url);
$json_decode = json_decode($json);

$values = $json_decode->values;

foreach ($values as $cells) {
    foreach ($cells as $cell) {
        printf("'%s',", $cell);
    }
    printf("\n");
}
