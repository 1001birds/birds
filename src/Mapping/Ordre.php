<?php

namespace App\Mapping;

class Ordre
{
    public static $ordre = [
        'Ansériformes',
        /*
         * ANATIDES
         * */
        'anatides' => [
            0 => [
                'nom' => 'Bernache cravant',
                'espece' => 'Branta bernicla'
            ],
            1 => [
                'nom' => 'Eider à duvet',
                'espece' => 'Somateria mollissima'
            ],
            2 => [
                'nom' => 'Tadorne de Belon',
                'espece' => 'Tadorna tadorna'
            ]
        ],
        /*
         * PHASIANIDES
         * */
        'phasianides' => [
            0 => [
                'nom' => 'Caille des blés',
                'espece' => 'Coturnix coturnix'
            ],
            1 => [
                'nom' => 'Grand Tétras',
                'espece' => 'Tetrao urogallus'
            ]
        ],
        /*
         * COLUMBIDES
         * */
        'columbides' => [
            0 => [
                'nom' => 'Tourterelle des bois',
                'espece' => 'Streptopelia turtur'
            ],
            1 => [
                'nom' => 'Pigeon ramier',
                'espece' => 'Columba palumbus'
            ]
        ],
        /*
         * PTEROCLIDES
         * */
        'ptéroclides' => [
            0 => [
                'nom' => 'Ganga cata',
                'espece' => 'Pterocles alchata'
            ]
        ]
    ];
}