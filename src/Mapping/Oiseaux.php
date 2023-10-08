<?php

namespace App\Mapping;

class Oiseaux
{
    public static $ordesEtFamilles = [
        'ansériformes' => [
            /*
             * ANATIDES
             * */
            'anatides' => [
                [
                    'nom' => 'Bernache cravant',
                    'espece' => 'Branta bernicla'
                ],
                [
                    'nom' => 'Eider à duvet',
                    'espece' => 'Somateria mollissima'
                ],
                [
                    'nom' => 'Tadorne de Belon',
                    'espece' => 'Tadorna tadorna'
                ]
            ]
        ],
        'galliformes' => [
            /*
             * PHASIANIDES
             * */
            'phasianidés' => [
                [
                    'nom' => 'Caille des blés',
                    'espece' => 'Coturnix coturnix'
                ],
                [
                    'nom' => 'Grand Tétras',
                    'espece' => 'Tetrao urogallus'
                ]
            ]
        ],
        'columbiformes' => [
            /*
             * COLUMBIDES
             * */
            'columbides' => [
                [
                    'nom' => 'Tourterelle des bois',
                    'espece' => 'Streptopelia turtur'
                ],
                [
                    'nom' => 'Pigeon ramier',
                    'espece' => 'Columba palumbus'
                ]
            ]
        ],
        'ptérocliformes' => [
            /*
             * PTEROCLIDES
             * */
            'ptéroclides' => [
                [
                    'nom' => 'Ganga cata',
                    'espece' => 'Pterocles alchata'
                ]
            ]
        ],
        'procellariiformes' => [
            /*
             * PTEROCLIDES
             * */
            'procéllariidés' => [
                [
                    'nom' => 'Puffin des Baléares',
                    'espece' => 'Puffinus mauretanicus'
                ]
            ],
            /*
             * PTEROCLIDES
             * */
            'hydrobatidés' => [
                [
                    'nom' => 'Océanite tempête',
                    'espece' => 'Hydrobates pelagicus'
                ]
            ]
        ]
    ];
}