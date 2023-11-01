<?php

namespace App\Mapping;

class OrdreEtFamilles
{
    public static $ordresEtFamilles = [
        'anseriformes' => [
            'nom' => 'Ansériformes',
            'familles' => [
                'anatides' => [
                    'nom' => 'Anatides',
                    'oiseaux' => [
                        'bernacheCravant' => [
                            'nom' => 'Bernache cravant',
                            'string' => 'bernacheCravant',
                            'espece' => 'Branta bernicla'
                        ],
                        'eiderADuvet' => [
                            'nom' => 'Eider à duvet',
                            'string' => 'eiderADuvet',
                            'espece' => 'Somateria mollissima'
                        ],
                        'tadorneDeBelon' => [
                            'nom' => 'Tadorne de Belon',
                            'string' => 'tadorneDeBelon',
                            'espece' => 'Tadorna tadorna'
                        ],
                        'canardSouchet'=> [
                            'nom' => 'Canard souchet',
                            'string' => 'canardSouchet',
                            'espece' => 'Anas clypeata'
                        ]
                    ]
                ]
            ],
        ],
        'galliformes' => [
            'nom' => 'Galliformes',
            'familles' => [
                'phasianides' => [
                    'nom' => 'Phasianidés',
                    'oiseaux' => [
                        'cailleDesBles' => [
                            'nom' => 'Caille des blés',
                            'string' => 'cailleDesBles',
                            'espece' => 'Coturnix coturnix'
                        ]
                    ]
                ],
                'tetraonides' => [
                    'nom' => 'Tétraonidés',
                    'oiseaux' => [
                        'grandTetras' => [
                            'nom' => 'Grand Tétras',
                            'string' => 'grandTetras',
                            'espece' => 'Tetrao urogallus'
                        ]
                    ]
                ]
            ]
        ],
        'columbiformes' => [
            'nom' => 'Columbiformes',
            'familles' => [
                'columbides' => [
                    'nom' => 'Columbidés',
                    'oiseaux' => [
                        'tourterelleDesBois' => [
                            'nom' => 'Tourterelle des bois',
                            'string' => 'tourterelleDesBois',
                            'espece' => 'Streptopelia turtur'
                        ],
                        'pigeonRamier' => [
                            'nom' => 'Pigeon ramier',
                        'string' => 'pigeonRamier',
                        'espece' => 'Columba palumbus'
                        ]
                    ]
                ]
            ]
        ],
        'pterocliformes' => [
            'nom' => 'Ptérocliformes',
            'familles' => [
                'pteroclides' => [
                    'nom' => 'Ptéroclides',
                    'oiseaux' => [
                        'gangaCata' => [
                            'nom' => 'Ganga cata',
                            'string' => 'gangaCata',
                            'espece' => 'Pterocles alchata'
                        ]
                    ]
                ]
            ]
        ],
        'podicipediformes' => [
            'nom' => 'Podicipédiformes',
            'familles' => [
                'podicipedides' => [
                    'nom' => 'Podicipédidés',
                    'oiseaux' => [
                        'grebeCastagneux' => [
                            'nom' => 'Grèbe castagneux',
                            'espece' => 'Tachybaptus ruficollis'
                        ],
                        'grebeHuppe' => [
                            'nom' => 'Grèbe huppé',
                            'espece' => 'Podiceps cristatus'
                        ]
                    ]
                ]
            ]
        ],
        'phoenicopteriformes' => [
            'nom' => 'Phoenicoptériformes',
            'familles' => [
                'phoenicopterides' => [
                    'nom' => 'Phoenicoptéridés',
                    'oiseaux' => [
                        'flamantRose' => [
                            'nom' => 'Flamant rose',
                            'espece' => 'Phoenicopterus roseus'
                        ]
                    ]
                ]
            ]
        ],
        'caprimulgiformes' => [
            'nom' => 'Caprimulgiformes',
            'familles' => [
                'caprimulgides' => [
                    'nom' => 'Caprimulgidés',
                    'oiseaux' => [
                        'engouleventDEurope' => [
                            'nom' => "Engoulevent d'Europe",
                            'espece' => 'Caprimulgus europaeus'
                        ]
                    ]
                ]
            ]
        ],
        'apodiformes' => [
            'nom' => 'Apodiformes',
            'familles' => [
                'apodides' => [
                    'nom' => 'Apodidés',
                    'oiseaux' => [
                        'martinetNoir' => [
                            'nom' => 'Martinet noir',
                            'espece' => 'Apus apus'
                        ],
                        'martinetAVentreBlanc' => [
                            'nom' => 'Martinet à ventre blanc',
                            'espece' => 'Apus apus'
                        ]
                    ]
                ]
            ]
        ],
        'sphenisciformes' => [
            'nom' => 'Sphénisciformes',
            'familles' => [
                'spheniscides' => [
                    'nom' => 'Sphéniscidés',
                    'oiseaux' => [
                        'manchotDuCap' => [
                            'nom' => 'Manchot du Cap',
                            'espece' => 'Spheniscus demersus'
                        ],
                        'manchotEmpereur' => [
                            'nom' => 'Manchot empereur',
                            'espece' => 'Aptenodytes forsteri'
                        ]
                    ]
                ]
            ]
        ],
        'gaviiformes' => [
            'nom' => 'Gaviiformes',
            'familles' => [
                'gaviides' => [
                    'nom' => 'Gaviidés',
                    'oiseaux' => [
                        'plongeonImbrin' => [
                            'nom' => 'Plongeon imbrin',
                            'espece' => 'Gavia immer'
                        ],
                        'plongeonCatmarin' => [
                            'nom' => 'Plongeon catmarin',
                            'espece' => 'Gavia stellata'
                        ]
                    ]
                ]
            ]
        ],
        'procellariiformes' => [
            'nom' => 'Procellariiformes',
            'familles' => [
                'procellariides' => [
                    'nom' => 'Procéllariidés',
                    'oiseaux' => [
                        'puffinDesBaleares' => [
                            'nom' => 'Puffin des Baléares',
                            'espece' => 'Puffinus mauretanicus'
                        ],
                        'fulmarBoréal' => [
                            'nom' => 'Fulmar boréal',
                            'espece' => 'Fulmarus glacialis'
                        ]
                    ]
                ],
                'hydrobatides' => [
                    'nom' => 'Hydrobatidés',
                    'oiseaux' => [
                        'oceaniteTempete' => [
                            'nom' => 'Océanite tempête',
                            'espece' => 'Hydrobates pelagicus'
                        ]
                    ]
                ]
            ]
        ],
        'ciconiiformes' => [
            'nom' => 'Ciconiiformes',
            'familles' => [
                'ciconiides' => [
                    'nom' => 'Ciconiidés',
                    'oiseaux' => [
                        'cigogneNoire' => [
                            'nom' => 'Cigogne noire',
                            'espece' => 'Ciconia nigra'
                        ],
                        'cigogneBlanche' => [
                            'nom' => 'Cigogne blanche',
                            'espece' => 'Ciconia ciconia'
                        ]
                    ]
                ]
            ]
        ],
        'pelecaniformes' => [
            'nom' => 'Pélécaniformes',
            'familles' => [
                'ardeides' => [
                    'nom' => 'Ardéidés',
                    'oiseaux' => [
                        'heronPourpre' => [
                            'nom' => 'Héron pourpré',
                            'espece' => 'Ardea purpurea'
                        ],
                        'aigretteGarzette' => [
                            'nom' => 'Aigrette garzette',
                            'espece' => 'Egretta garzetta'
                        ],
                        'bihoreauGris' => [
                            'nom' => 'Bihoreau gris',
                            'espece' => 'Nycticorax nycticorax'
                        ]
                    ]
                ],
                'threskiornithides' => [
                    'nom' => 'Threskiornithidés',
                    'oiseaux' => [
                        'spatuleBlanche' => [
                            'nom' => 'Spatule blanche',
                            'espece' => 'Platalea leucorodia'
                        ],
                        'ibiSacre' => [
                            'nom' => 'Ibis sacré',
                            'espece' => 'Threskiornis aethiopicus'
                        ]
                    ]
                ]
            ]
        ],
        'suliformes' => [
            'nom' => 'Suliformes',
            'familles' => [
                'phalacrocoracides' => [
                    'nom' => 'Phalacrocoracidés',
                    'oiseaux' => [
                        'grandCormoran' => [
                            'nom' => 'Grand Cormoran',
                            'espece' => 'Phalacrocorax carbo'
                        ]
                    ]
                ],
                'sulides' => [
                    'nom' => 'Sulidés',
                    'oiseaux' => [
                        'fouDeBassan' => [
                            'nom' => 'Fou de Bassan',
                            'espece' => 'Morus bassanus'
                        ]
                    ]
                ]
            ]
        ],
        'otidiformes' => [
            'nom' => 'Otidiformes',
            'familles' => [
                'phalacrocoracides' => [
                    'nom' => 'Phalacrocoracidés',
                    'oiseaux' => [
                        'outardeCanepetiere' => [
                            'nom' => 'Outarde canepetière',
                            'espece' => 'Tetrax tetrax'
                        ],
                        'outardeBarbue' => [
                            'nom' => 'Outarde barbue',
                            'espece' => 'Otis tarda'
                        ]
                    ]
                ]
            ]
        ],
        'gruiformes' => [
            'nom' => 'Gruiformes',
            'familles' => [
                'gruides' => [
                    'nom' => 'Gruidés',
                    'oiseaux' => [
                        'grueCendree' => [
                            'nom' => 'Grue cendrée',
                            'espece' => 'Grus grus'
                        ]
                    ]
                ],
                'rallides' => [
                    'nom' => 'Rallidés',
                    'oiseaux' => [
                        'foulqueMacroule' => [
                            'nom' => 'Foulque macroule',
                            'espece' => 'Fulica atra'
                        ],
                        'gallinulePouleDEau' => [
                            'nom' => "Gallinule poule d'eau",
                            'espece' => 'Gallinula chloropus'
                        ]
                    ]
                ]
            ]
        ],
        'cuculiformes' => [
            'nom' => 'Cuculiformes',
            'familles' => [
                'cuculidés' => [
                    'nom' => 'Cuculidés',
                    'oiseaux' => [
                        'coucouGris' => [
                            'nom' => 'Coucou gris',
                            'espece' => 'Cuculus canorus'
                        ]
                    ]
                ]
            ]
        ],
        'charadriiformes' => [
            'nom' => 'Charadriiformes',
            'familles' => [
                'charadriides' => [
                    'nom' => 'Charadriidés',
                    'oiseaux' => [
                        'grandGravelot' => [
                            'nom' => 'Grand Gravelot',
                            'espece' => 'Charadrius hiaticula'
                        ],
                        'vanneauHuppe' => [
                            'nom' => 'Vanneau huppé',
                            'espece' => 'Vanellus vanellus'
                        ]
                    ]
                ],
                'haematopodides' => [
                    'nom' => 'Haematopodidés',
                    'oiseaux' => [
                        'huitrierPie' => [
                            'nom' => 'Huîtrier pie',
                            'espece' => 'Haematopus ostralegus'
                        ]
                    ]
                ],
                'recurvirostrides' => [
                    'nom' => 'Récurvirostridés',
                    'oiseaux' => [
                        'echasseBlanche' => [
                            'nom' => 'Échasse blanche',
                            'espece' => 'Himantopus himantopus'
                        ],
                        'avocetteElegante' => [
                            'nom' => 'Avocette élégante',
                            'espece' => 'Recurvirostra avosetta'
                        ]
                    ]
                ],
                'burhinides' => [
                    'nom' => 'Burhinidés',
                    'oiseaux' => [
                        'oedicnemeCriard' => [
                            'nom' => 'Oedicnème criard',
                            'espece' => 'Burhinus oedicnemus'
                        ]
                    ]
                ],
                'scolopacides' => [
                    'nom' => 'Scolopacidés',
                    'oiseaux' => [
                        'chevalierGambette' => [
                            'nom' => 'Chevalier gambette',
                            'espece' => 'Tringa totanus'
                        ],
                        'chevalierArlequin' => [
                            'nom' => 'Chevalier arlequin',
                            'espece' => 'Tringa erythropus'
                        ],
                        'chevalierAboyeur' => [
                            'nom' => 'Chevalier aboyeur',
                            'espece' => 'Tringa nebularia'
                        ],
                        'combattantVarie' => [
                            'nom' => 'Combattant varié',
                            'espece' => 'Philomachus pugnax'
                        ],
                        'chevalierCulBlanc' => [
                            'nom' => 'Chevalier cul-blanc',
                            'espece' => 'Tringa ochropus'
                        ],
                        'chevalierGuignette' => [
                            'nom' => 'Chevalier guignette',
                            'espece' => 'Actitis hypoleucos'
                        ],
                        'courlisCendre' => [
                            'nom' => 'Courlis cendré',
                            'espece' => 'Numenius arquata'
                        ],
                        'bargeAQueueNoire' => [
                            'nom' => 'Barge à queue noire',
                            'espece' => 'Limosa limosa'
                        ],
                        'becasseauVariable' => [
                            'nom' => 'Bécasseau variable',
                            'espece' => 'Calidris alpina'
                        ],
                        'becassineDesMarais' => [
                            'nom' => 'Bécassine des marais',
                            'espece' => 'Gallinago gallinago'
                        ]
                    ]
                ],
                'larides' => [
                    'nom' => 'Laridés',
                    'oiseaux' => [
                        'goelandArgente' => [
                            'nom' => 'Goéland argenté',
                            'espece' => 'Larus argentatus'
                        ],
                        'sternePierregarin' => [
                            'nom' => 'Sterne pierregarin',
                            'espece' => 'Sterna hirundo'
                        ]
                    ]
                ],
                'alcides' => [
                    'nom' => 'Alcidés',
                    'oiseaux' => [
                        'macareuxMoine' => [
                            'nom' => 'Macareux moine',
                            'espece' => 'Fratercula arctica'
                        ],
                        'pingouinTorda' => [
                            'nom' => 'Pingouin torda',
                            'espece' => 'Alca torda'
                        ]
                    ]
                ],
                'stercorarides' => [
                    'nom' => 'Stercoraridés',
                    'oiseaux' => [
                        'grandLabbe' => [
                            'nom' => 'Grand Labbe',
                            'espece' => 'Stercorarius skua'
                        ]
                    ]
                ]
            ]
        ],
        'accipitriformes' => [
            'nom' => 'Accipitriformes',
            'familles' => [
                'accipitrides' => [
                    'nom' => 'Accipitridés',
                    'oiseaux' => [
                        'buseVariable' => [
                            'nom' => 'Buse variable',
                            'espece' => 'Buteo buteo'
                        ],
                        'pygargueAQueueBlanche' => [
                            'nom' => 'Pygargue à queue blanche',
                            'espece' => 'Haliaeetus albicilla'
                        ]
                    ]
                ],
                'pandionides' => [
                    'nom' => 'Pandionidés',
                    'oiseaux' => [
                        'balbuzardPecheur' => [
                            'nom' => 'Balbuzard pêcheur',
                            'espece' => 'Pandion haliaetus'
                        ]
                    ]
                ]
            ]
        ],
        'strigiformes' => [
            'nom' => 'Strigiformes',
            'familles' => [
                'tytonides,' => [
                    'nom' => 'Tytonidés,',
                    'oiseaux' => [
                        'effraieDesClochers' => [
                            'nom' => 'Effraie des clochers',
                            'espece' => 'Tyto alba'
                        ]
                    ]
                ],
                'strigides' => [
                    'nom' => 'Strigidés',
                    'oiseaux' => [
                        'chevecheDAthena' => [
                            'nom' => "Chevêche d'Athéna",
                            'espece' => 'Athene noctua'
                        ]
                    ]
                ]
            ]
        ],
        'coraciiformes' => [
            'nom' => 'Coraciiformes',
            'familles' => [
                'alcedinides' => [
                    'nom' => 'Alcédinidés',
                    'oiseaux' => [
                        'martinPecheurDEurope' => [
                            'nom' => "Martin-pêcheur d'Europe",
                            'espece' => 'Alcedo atthis'
                        ]
                    ]
                ],
                'meropides' => [
                    'nom' => 'Méropidés',
                    'oiseaux' => [
                        'guepierDEurope' => [
                            'nom' => "Guêpier d'Europe, ",
                            'espece' => 'Merops apiaster'
                        ]
                    ]
                ],
                'coraciides' => [
                    'nom' => 'Coraciidés',
                    'oiseaux' => [
                        'rollierDEurope' => [
                            'nom' => "Rollier d'Europe",
                            'espece' => 'Coracias garrulus'
                        ]
                    ]
                ]
            ]
        ],
        'bucerotiformes' => [
            'nom' => 'Bucérotiformes',
            'familles' => [
                'upupides,' => [
                    'nom' => 'Upupidés,',
                    'oiseaux' => [
                        'huppeFasciee' => [
                            'nom' => 'Huppe fasciée',
                            'espece' => 'Upupa epops'
                        ]
                    ]
                ]
            ]
        ],
        'piciformes' => [
            'nom' => 'Piciformes',
            'familles' => [
                'upupides,' => [
                    'nom' => 'Upupidés,',
                    'oiseaux' => [
                        'picNoir' => [
                            'nom' => 'Pic noir',
                            'espece' => 'Dryocopus martius'
                        ],
                        'picEpeichette' => [
                            'nom' => 'Pic épeichette',
                            'espece' => 'Dendrocopos minor'
                        ]
                    ]
                ]
            ]
        ],
        'falconiformes' => [
            'nom' => 'Falconiformes',
            'familles' => [
                'falconides,' => [
                    'nom' => 'Falconidés,',
                    'oiseaux' => [
                        'fauconPelerin' => [
                            'nom' => 'Faucon pèlerin',
                            'espece' => 'Falco peregrinus'
                        ],
                        'fauconCrecerelle' => [
                            'nom' => 'Faucon crécerelle',
                            'espece' => 'Falco tinnunculus'
                        ]
                    ]
                ]
            ]
        ],
    ];
}