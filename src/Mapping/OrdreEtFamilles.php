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
                        'canardColvert' => [
                            'nom' => 'Canard colvert',
                            'espece' => ''
                        ],
                        'canardPilet' => [
                            'nom' => 'Canard pilet',
                            'espece' => 'Anas acuta'
                        ],
                        'canardSiffleur' => [
                            'nom' => 'Canard siffleur',
                            'espece' => 'Anas penelope'
                        ],
                        'canardSouchet'=> [
                            'nom' => 'Canard souchet',
                            'espece' => 'Anas clypeata'
                        ],
                        'fuliguleMorillon'=> [
                            'nom' => 'Fuligule morillon',
                            'espece' => ''
                        ],
                        'sarcelleDHiver' => [
                            'nom' => "Sarcelle d'Hiver",
                            'espece' => 'Anas crecca'
                        ],
                        'tadorneDeBelon' => [
                            'nom' => 'Tadorne de Belon',
                            'espece' => 'Tadorna tadorna'
                        ],
                        'canardChipeau' => [
                            'nom' => 'Canard chipeau',
                            'espece' => 'Anas strepera'
                        ],
                        'eiderADuvet' => [
                            'nom' => 'Eider à duvet',
                            'espece' => 'Somateria mollissima'
                        ],
                        'harleHuppe'=> [
                            'nom' => 'Harle huppé',
                            'espece' => ''
                        ],
                        'oieRieuse'=> [
                            'nom' => 'Oie rieuse',
                            'espece' => ''
                        ],
                        'oieCendree'=> [
                            'nom' => 'Oie cendrée',
                            'espece' => ''
                        ],
                        'bernacheCravant' => [
                            'nom' => 'Bernache cravant',
                            'espece' => 'Branta bernicla'
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
                            'espece' => 'Coturnix coturnix'
                        ],
                        'lagopedeAlpin' => [
                            'nom' => 'Lagopède alpin',
                            'espece' => ''
                        ]
                    ]
                ],
                'tetraonides' => [
                    'nom' => 'Tétraonidés',
                    'oiseaux' => [
                        'grandTetras' => [
                            'nom' => 'Grand Tétras',
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
                        'pigeonRamier' => [
                            'nom' => 'Pigeon ramier',
                            'espece' => 'Columba palumbus'
                        ],
                        'tourterelleDesBois' => [
                            'nom' => 'Tourterelle des bois',
                            'espece' => 'Streptopelia turtur'
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
        'gaviiformes' => [
            'nom' => 'Gaviiformes',
            'familles' => [
                'gaviides' => [
                    'nom' => 'Gaviidés',
                    'oiseaux' => [
                        'plongeonCatmarin' => [
                            'nom' => 'Plongeon catmarin',
                            'espece' => 'Gavia stellata'
                        ],
                        'plongeonImbrin' => [
                            'nom' => 'Plongeon imbrin',
                            'espece' => 'Gavia immer'
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
                        'cigogneBlanche' => [
                            'nom' => 'Cigogne blanche',
                            'espece' => 'Ciconia ciconia'
                        ],
                        'cigogneNoire' => [
                            'nom' => 'Cigogne noire',
                            'espece' => 'Ciconia nigra'
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
                        'aigretteGarzette' => [
                            'nom' => 'Aigrette garzette',
                            'espece' => 'Egretta garzetta'
                        ],
                        'butorEtoile' => [
                            'nom' => 'Butor étoilé',
                            'espece' => ''
                        ],
                        'bihoreauGris' => [
                            'nom' => 'Bihoreau gris',
                            'espece' => 'Nycticorax nycticorax'
                        ],
                        'heronPourpre' => [
                            'nom' => 'Héron pourpré',
                            'espece' => 'Ardea purpurea'
                        ],
                        'heronCendre' => [
                            'nom' => 'Héron cendré',
                            'espece' => 'Ardea cinerea'
                        ],
                        'blongiosNain' => [
                            'nom' => 'Blongios nain',
                            'espece' => ''
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
                        ],
                        'cormoranHuppe' => [
                            'nom' => 'Cormoran huppé',
                            'espece' => ''
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
                'otidides' => [
                    'nom' => 'Otididés',
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
                'cuculides' => [
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
                'recurvirostrides' => [
                    'nom' => 'Récurvirostridés',
                    'oiseaux' => [
                        'avocetteElegante' => [
                            'nom' => 'Avocette élégante',
                            'espece' => 'Recurvirostra avosetta'
                        ],
                        'echasseBlanche' => [
                            'nom' => 'Échasse blanche',
                            'espece' => 'Himantopus himantopus'
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
                        'bargeAQueueNoire' => [
                            'nom' => 'Barge à queue noire',
                            'espece' => 'Limosa limosa'
                        ],
                        'bargeRousse' => [
                            'nom' => 'Barge rousse',
                            'espece' => ''
                        ],
                        'becasseauCocorli' => [
                            'nom' => 'Bécasseau cocorli',
                            'espece' => ''
                        ],
                        'becasseauVariable' => [
                            'nom' => 'Bécasseau variable',
                            'espece' => 'Calidris alpina'
                        ],
                        'becassineDesMarais' => [
                            'nom' => 'Bécassine des marais',
                            'espece' => 'Gallinago gallinago'
                        ],
                        'chevalierArlequin' => [
                            'nom' => 'Chevalier arlequin',
                            'espece' => 'Tringa erythropus'
                        ],
                        'chevalierGambette' => [
                            'nom' => 'Chevalier gambette',
                            'espece' => 'Tringa totanus'
                        ],
                        'chevalierAboyeur' => [
                            'nom' => 'Chevalier aboyeur',
                            'espece' => 'Tringa nebularia'
                        ],
                        'chevalierCulBlanc' => [
                            'nom' => 'Chevalier cul-blanc',
                            'espece' => 'Tringa ochropus'
                        ],
                        'chevalierGuignette' => [
                            'nom' => 'Chevalier guignette',
                            'espece' => 'Actitis hypoleucos'
                        ],
                        'combattantVarie' => [
                            'nom' => 'Combattant varié',
                            'espece' => 'Philomachus pugnax'
                        ],
                        'courlisCendre' => [
                            'nom' => 'Courlis cendré',
                            'espece' => 'Numenius arquata'
                        ],
                    ]
                ],
                'charadriides' => [
                    'nom' => 'Charadriidés',
                    'oiseaux' => [
                        'grandGravelot' => [
                            'nom' => 'Grand Gravelot',
                            'espece' => 'Charadrius hiaticula'
                        ],
                        'pluvierDore' => [
                            'nom' => 'Pluvier doré',
                            'espece' => ''
                        ],
                        'vanneauHuppe' => [
                            'nom' => 'Vanneau huppé',
                            'espece' => 'Vanellus vanellus'
                        ],
                    ]
                ],
                'larides' => [
                    'nom' => 'Laridés',
                    'oiseaux' => [
                        'goelandMarin' => [
                            'nom' => 'Goéland marin',
                            'espece' => ''
                        ],
                        'goelandArgente' => [
                            'nom' => 'Goéland argenté',
                            'espece' => 'Larus argentatus'
                        ],
                        'sternePierregarin' => [
                            'nom' => 'Sterne pierregarin',
                            'espece' => 'Sterna hirundo'
                        ],
                        'sterneCaugek' => [
                            'nom' => 'Sterne caugek',
                            'espece' => ''
                        ],
                        'mouetteRieuse' => [
                            'nom' => 'Mouette rieuse',
                            'espece' => ''
                        ],
                    ]
                ],
                'stercorarides' => [
                    'nom' => 'Stercoraridés',
                    'oiseaux' => [
                        'labbePomarin' => [
                            'nom' => 'Labbe pomarin',
                            'espece' => ''
                        ],
                        'grandLabbe' => [
                            'nom' => 'Grand Labbe',
                            'espece' => 'Stercorarius skua'
                        ]
                    ]
                ],
                'alcides' => [
                    'nom' => 'Alcidés',
                    'oiseaux' => [
                        'pingouinTorda' => [
                            'nom' => 'Pingouin torda',
                            'espece' => 'Alca torda'
                        ],
                        'guillemotDeTroil' => [
                            'nom' => 'Guillemot de troïl',
                            'espece' => ''
                        ],
                        'macareuxMoine' => [
                            'nom' => 'Macareux moine',
                            'espece' => 'Fratercula arctica'
                        ],
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
                        'epervierDEurope' => [
                            'nom' => "Epervier d'Europe",
                            'espece' => ''
                        ],
                        'percnoptereDEgypte' => [
                            'nom' => "Percnoptère d'Egypte",
                            'espece' => ''
                        ],
                        'vautourFauve' => [
                            'nom' => 'Vautour fauve',
                            'espece' => ''
                        ],
                        'gypaeteBarbu' => [
                            'nom' => 'Gypaète barbu',
                            'espece' => ''
                        ],
                        'circaeteJeanLeBlanc' => [
                            'nom' => 'Circaète Jean-le-Blanc',
                            'espece' => ''
                        ],
                        'pygargueAQueueBlanche' => [
                            'nom' => 'Pygargue à queue blanche',
                            'espece' => 'Haliaeetus albicilla'
                        ],
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
                'strigides' => [
                    'nom' => 'Strigidés',
                    'oiseaux' => [
                        'chevecheDAthena' => [
                            'nom' => "Chevêche d'Athéna",
                            'espece' => 'Athene noctua'
                        ],
                        'chouetteHulotte' => [
                            'nom' => 'Chouette hulotte',
                            'espece' => ''
                        ],
                        'hibouMoyenDuc' => [
                            'nom' => 'Hibou moyen-duc',
                            'espece' => ''
                        ],
                        'hibouDesMarais' => [
                            'nom' => 'Hibou des marais',
                            'espece' => ''
                        ],
                        'petitDucScops' => [
                            'nom' => 'Petit-duc scops',
                            'espece' => ''
                        ],
                        'grandDucDEurope' => [
                            'nom' => "Grand-duc d'Europe",
                            'espece' => ''
                        ],
                        'chouetteDeTengmalm' => [
                            'nom' => 'Chouette de tengmalm',
                            'espece' => ''
                        ]
                    ]
                ],
                'tytonides' => [
                    'nom' => 'Tytonidés',
                    'oiseaux' => [
                        'effraieDesClochers' => [
                            'nom' => 'Effraie des clochers',
                            'espece' => 'Tyto alba'
                        ]
                    ]
                ],
            ]
        ],
        'coraciiformes' => [
            'nom' => 'Coraciiformes',
            'familles' => [
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
                ],
                'alcedinides' => [
                    'nom' => 'Alcédinidés',
                    'oiseaux' => [
                        'martinPecheurDEurope' => [
                            'nom' => "Martin-pêcheur d'Europe",
                            'espece' => 'Alcedo atthis'
                        ]
                    ]
                ],
            ]
        ],
        'bucerotiformes' => [
            'nom' => 'Bucérotiformes',
            'familles' => [
                'upupides' => [
                    'nom' => 'Upupidés',
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
                'picides' => [
                    'nom' => 'Picidés',
                    'oiseaux' => [
                        'picNoir' => [
                            'nom' => 'Pic noir',
                            'espece' => 'Dryocopus martius'
                        ],
                        'picEpeichette' => [
                            'nom' => 'Pic épeichette',
                            'espece' => 'Dendrocopos minor'
                        ],
                        'picEpeiche' => [
                            'nom' => 'Pic épeiche',
                            'espece' => 'Dendrocopos major'
                        ],
                        'picVert' => [
                            'nom' => 'Pic vert',
                            'espece' => 'Picus viridis'
                        ]
                    ]
                ]
            ]
        ],
        'falconiformes' => [
            'nom' => 'Falconiformes',
            'familles' => [
                'falconides' => [
                    'nom' => 'Falconidés',
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
        'passeriformes' => [
            'nom' => 'Passériformes',
            'familles' => [
                'fringillides' => [
                    'nom' => 'Fringillidés',
                    'oiseaux' => [
                        'pinsonDesArbres' => [
                            'nom' => 'Pinson des arbres',
                            'espece' => 'Fringilla coelebs'
                        ],
                        'bouvreuilPivoine' => [
                            'nom' => 'Bouvreuil pivoine',
                            'espece' => 'Pyrrhula pyrrhula'
                        ],
                        'grosBecCasseNoyaux' => [
                            'nom' => 'Gros-bec casse-noyaux',
                            'espece' => 'C. coccothraustes'
                        ],
                        'verdierDEurope' => [
                            'nom' => "Verdier d'Europe",
                            'espece' => 'Chloris chloris'
                        ]
                    ]
                ],
                'turdides' => [
                    'nom' => 'Turdidés',
                    'oiseaux' => [
                        'griveMusicienne' => [
                            'nom' => 'Grive musicienne',
                            'espece' => ''
                        ],
                        'merleNoir' => [
                            'nom' => 'Merle noir',
                            'espece' => 'Turdus merula'
                        ]
                    ]
                ],
                'parides' => [
                    'nom' => 'Paridés',
                    'oiseaux' => [
                        'mesangeBleue' => [
                            'nom' => 'Mésange bleue',
                            'espece' => ''
                        ],
                        'mesangeCharbonniere' => [
                            'nom' => 'Mésange charbonnière',
                            'espece' => ''
                        ]
                    ]
                ],
                'passerides' => [
                    'nom' => 'Passéridés',
                    'oiseaux' => [
                        'moineauDomestique' => [
                            'nom' => 'Moineau domestique',
                            'espece' => 'Passer domesticus'
                        ]
                    ]
                ],
                'prunellides' => [
                    'nom' => 'Prunellidés',
                    'oiseaux' => [
                        'accenteurMouchet' => [
                            'nom' => 'Accenteur mouchet',
                            'espece' => ''
                        ]
                    ]
                ],
                'troglodytides' => [
                    'nom' => 'Troglodytidés',
                    'oiseaux' => [
                        'troglodyteMignon' => [
                            'nom' => 'Troglodyte mignon',
                            'espece' => ''
                        ]
                    ]
                ],
                'muscicapides' => [
                    'nom' => 'Muscicapidés',
                    'oiseaux' => [
                        'rougegorgeFamilier' => [
                            'nom' => 'Rougegorge familier',
                            'espece' => ''
                        ]
                    ]
                ],
                'hirundinides' => [
                    'nom' => 'Hirundinidés',
                    'oiseaux' => [
                        'hirondelleRustique' => [
                            'nom' => 'Hirondelle rustique',
                            'espece' => 'Hirundo rustica'
                        ],
                        'hirondelleDeFenetre' => [
                            'nom' => 'Hirondelle de fenêtre',
                            'espece' => 'Delichon urbicum'
                        ]
                    ]
                ],
                'corvides' => [
                    'nom' => 'Corvidés',
                    'oiseaux' => [
                        'choucasDesTours' => [
                            'nom' => 'Choucas des tours',
                            'espece' => ''
                        ],
                        'geaiDesChenes' => [
                            'nom' => 'Geai des chênes',
                            'espece' => ''
                        ]
                    ]
                ],
                /*
                 * Y SONT PAS
                 * */
                'alaudides' => [
                    'nom' => 'Alaudidés',
                    'oiseaux' => [
                        'alouetteDesChamps' => [
                            'nom' => 'Alouette des champs',
                            'espece' => 'Alauda arvensis'
                        ]
                    ]
                ],
                'motacillides' => [
                    'nom' => 'Motacillidés',
                    'oiseaux' => [
                        'bergeronnetteGrise' => [
                            'nom' => 'Bergeronnette grise',
                            'espece' => 'Motacilla alba'
                        ]
                    ]
                ],
            ]
        ],
        /*
         * Y SONT PAS
         * */
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
        ]
    ];
}