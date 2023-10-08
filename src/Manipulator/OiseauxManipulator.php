<?php

namespace App\Manipulator;

use App\Mapping\Oiseaux;
use Doctrine\ORM\EntityManagerInterface;

class OiseauxManipulator
{
    private $em;

    public function __construct(
        EntityManagerInterface $em
    ) {
    }

    public function listeOiseaux(
    ) {
        $ordesEtFamilles = Oiseaux::$ordesEtFamilles;
        $listeOiseaux = [];
        $countOrdres = 0;
        $countFamilles = 0;
        $countOiseaux = 0;
        foreach($ordesEtFamilles as $ordre => $familles) {
//            dump($ordre);die;
            $listeOiseaux['ordre'][$ordre] = $familles;
            $countOrdres++;
            foreach($familles as $famille => $oiseaux) {
                $countFamilles++;
                foreach($oiseaux as $oiseau) {
                    $countOiseaux++;
                }
            }
        }
        return [
            'countOrdres' => $countOrdres,
            'countFamilles' => $countFamilles,
            'countOiseaux' => $countOiseaux,
            'listeOiseaux' => $listeOiseaux
        ];
    }
}