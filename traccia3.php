<?php

$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    [
        'oscura',
        'era',
        89,
        [
            'mezzo',
            [
                'cammin',
                'Nel',
                [
                    'selva',
                    'la',
                    [
                        'via',
                        'una',
                        true,
                    ]
                ],
            ]
        ],
        'ritrovai',
        'per'
    ],
    'diritta'
];

$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
        'Virgilio',
        'smarrita',
        'ché'
    ]
];

// var_dump($words1);
// echo "\n";
// echo "\n";
// echo "\n";
// echo "\n";
// var_dump($words2);

// “Nel mezzo del cammin di nostra vita mi ritrovai per una selva oscura, ché la diritta via era smarrita“.
echo $words1[6][3][1][1] . " " . $words1[6][3][0] . " del " . $words1[6][3][1][0] . " di " . $words2["elemento2"] . " " . $words1[2] . " " . $words1[4] . " " . $words1[6][4] . " " . $words1[6][5] . " " . $words1[0] . " " . $words1[6][3][1][2][0] . " " . $words1[6][0] . ", ";
echo $words2["elemento3"][2] . " " . $words1[6][3][1][2][1] . " " . $words1[7] . " " . $words1[6][3][1][2][2][0] . " " . $words1[6][1] . " " . $words2["elemento3"][1];
