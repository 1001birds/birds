<?php

namespace App\Controller;

use App\Manipulator\OiseauxManipulator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Symfony\Component\HttpFoundation\Request;
use Nelmio\ApiDocBundle\Annotation as Nelmio;
use OpenApi\Annotations as OA;

class OiseauxController extends AbstractController
{
    protected $params;
    protected $oiseauxManipulator;

    public function __construct(
        ContainerBagInterface $params,
        OiseauxManipulator $oiseauxManipulator
    ) {
        $this->params = $params;
        $this->oiseauxManipulator = $oiseauxManipulator;
    }

    /**
     * @OA\Response(response=200,description="Index")
     * @OA\Tag(name="Default")
     * @Nelmio\Security(name="Bearer")
     */
    public function index(
        Request $request
    ) {
        $countFamilles = 0;
        $countOiseaux = 0;
        $listeOrdresEtFamilles = $this->oiseauxManipulator->listeOrdresEtFamilles_3();
        $countOrdres = count($listeOrdresEtFamilles);
        foreach ($listeOrdresEtFamilles as $ordreEtFamille) {
            foreach ($ordreEtFamille['familles'] as $famille) {
                $countFamilles++;
                foreach ($famille['oiseaux'] as $oiseau) {
                    $countOiseaux++;
                }
            }
        }
        /*
         * COUNT IMAGES
         * */
        $cheminVersDossierImagesOiseaux = $this->params->get('kernel.project_dir').'/public/build/images/oiseaux/';
        $countImages = count(glob($cheminVersDossierImagesOiseaux.'*'));
//        $numbers = range(1, $count);
//        shuffle($numbers);
//        $indiceImage = $numbers[0];
//        $i = 0;
//        $imageChoisie = null;
//        $scanDIR = scandir($cheminVersDossierImagesOiseaux);
//        foreach($scanDIR as $file) {
//            if(strpos($file, 'png') !== false) {
//                $i++;
//                if($indiceImage == $i) {
//                    $imageChoisie = $file;
//                }
//            }
//        }
//
//
        return $this->render('index.html.twig', [
            'ordresEtFamilles' => $this->oiseauxManipulator->listeOrdresEtFamilles_3(),
            'countOrdres' => $countOrdres,
            'countFamilles' => $countFamilles,
            'countOiseaux' => $countOiseaux,
            'countImages' => $countImages
        ]);
    }

    /**
     * @OA\Response(response=200,description="Index")
     * @OA\Tag(name="Default")
     * @Nelmio\Security(name="Bearer")
     */
    public function oiseau(
        Request $request
    ) {
        return $this->render('oiseau.html.twig',
            $this->oiseauxManipulator->oiseau(
                $request->get('string')
            )
        );
    }

    /**
     * @OA\Response(response=200,description="Apprendre")
     * @OA\Tag(name="Default")
     * @Nelmio\Security(name="Bearer")
     */
    public function apprendre(
        Request $request
    ) {
        return $this->render('apprendre.html.twig',
            $this->oiseauxManipulator->apprendre()
        );
    }

    /**
     * @OA\Response(response=200,description="Apprendre JS")
     * @OA\Tag(name="Default")
     * @Nelmio\Security(name="Bearer")
     */
    public function apprendreJS(
        Request $request
    ) {

//        dump($this->oiseauxManipulator->apprendre());die;


//        $listeOiseaux = $this->oiseauxManipulator->listeOiseaux();
//        dump($listeOiseaux);
//        die;
        return $this->render('apprendre.html.twig',
            $this->oiseauxManipulator->apprendre()
        );
    }

    /**
     * @OA\Response(response=200,description="Index")
     * @OA\Tag(name="Default")
     * @Nelmio\Security(name="Bearer")
     */
    public function quizzUnOiseau(
        Request $request
    ) {
//        dump(
//            $this->oiseauxManipulator->imagesDixOiseauxAuHasard()
//        );
//        die;
//        return $this->oiseauxManipulator->quizzUnOiseau();

//        $listeOiseaux = $this->oiseauxManipulator->listeOiseaux();
//        dump($listeOiseaux);
//        die;
        return $this->render('quizzUnOiseau.html.twig', [
            'images' => $this->oiseauxManipulator->quizzUnOiseau()
        ]);

//        $jour20231022 = [
//            'pyguargueAQueueBlanche_3',
//            'outardeBarbue_0',
//            'plongeonCatmarin_0',
//            'sternePierregarin_2',
//            'rollierDEurope_2',
//            'cailleDesBles_2',
//            'canardChipeau_2',
//            'chevalierArlequin_3',
//            'bergeronnetteGrise_7',
//            'alouetteDesChamps_8'
//        ];

//
//        $jour20231019 = [
//            'picEpeichette_0',
//            'pigeonRamier_0',
//            'pingouinTorda_0',
//            'sternePierregarin_0',
//            'picNoir_2',
//            'tourterelleDesBois_0',
//            'martinPecheurDEurope_4',
//            'hirondelleRustique_6',
//            'fauconCrecerelle_7',
//            'eiderADuvet_0'
//        ];
//
//        $jour20231018 = [
//            'combattantVarie_0',
//            'chevecheDAthena_0',
//            'goelandArgente_0',
//            'grandGravelot_0',
//            'grandLabbe_0',
//            'grueCendree_0',
//            'guepierDEurope_0',
//            'hirondelleDeFenetre_0',
//            'huitrierPie_0',
//            'oedicnemeCriard_0'
//        ];
//
//        $jour20231017 = [
//            'bargeAQueueNoire_0',
//            'becasseauVariable_0',
//            'coucouGris_0',
//            'effraieDesClochers_0',
//            'fauconCrecerelle_0',
//            'fauconPelerin_0',
//            'hirondelleRustique_0',
//            'picNoir_0',
//            'pyguargueAQueueBlanche_0',
//            'rollierDEurope_0'
//        ];
//
//        $jour20231016 = [
//            'alouetteDesChamps_0',
//            'becassineDesMarais_0',
//            'balbuzardPecheur_0',
//            'bergeronnetteGrise_0',
//            'buseVariable_0',
//            'chevalierAboyeur_0',
//            'chevalierCulBlanc_0',
//            'chevalierArlequin_0',
//            'chevalierGambette_0',
//            'courlisCendre_0'
//        ];
//
//        $jour20231015 = [
//            'manchotDuCap_0',
//            'cigogneNoire_0',
//            'cailleDesBles_1',
//            'canardSiffleur_0',
//            'engoulventDEurope_0',
//            'martinetAVentreBlanc_0',
//            'bihoreauGris_0',
//            'grebeHuppe_0',
//            'fulmarBoreal_0',
//            'martinetNoir_0'
//        ];
    }
}