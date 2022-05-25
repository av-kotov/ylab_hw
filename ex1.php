<?php
$array = [
    'SKLAD1' => [
       'EDA' => [
          'TOVAR1' => [
             'NAME' => '....',
             'PRICE' => 11150
          ],
          'TOVAR2' => [
             'NAME' => '....',
             'PRICE' => 278
          ],
       ],
       'NAPITKI' => [
            'TOVAR55' => [
                'NAME' => '....',
                'PRICE' => 38
            ],
            'TOVAR54' => [
                'NAME' => '....',
                'PRICE' => 4
            ],
       ],
   ],
    'SKLAD2' => [
        'EDA' => [
            'TOVAR66' => [
                'NAME' => '....',
                'PRICE' => 150
             ],
            'TOVAR67' => [
               'NAME' => '....',
               'PRICE' => 22
            ],
        ],
        'NAPITKI' => [
             'TOVAR77' => [
                    'NAME' => '....',
                    'PRICE' => 250
                ],
             'TOVAR78' => [
                    'NAME' => '....',
                    'PRICE' => 100
                ],
        ],
   ],
];

function sortArray(&$array) {
    foreach ($array as &$value) {
        foreach ($value as &$item) {
            usort($item, function ($a, $b) {
                return ($a['PRICE'] - $b['PRICE']);
            });
        }
    }
}
sortArray($array);

echo "<pre>";print_r($array);echo "</pre>";