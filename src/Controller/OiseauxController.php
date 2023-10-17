<?php

namespace App\Controller;

use App\Manipulator\OiseauxManipulator;
use App\Mapping\Oiseaux;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Symfony\Component\HttpFoundation\Request;
use Nelmio\ApiDocBundle\Annotation as Nelmio;
use OpenApi\Annotations as OA;

class OiseauxController extends AbstractController
{
    protected $managerRegistry;
    protected $params;
    protected $env;
    protected $oiseauxManipulator;

    public function __construct(
        ManagerRegistry $managerRegistry,
        ContainerBagInterface $params,
        ContainerInterface $container,
        OiseauxManipulator $oiseauxManipulator
    ) {
        $this->managerRegistry = $managerRegistry;
        $this->params = $params;
        $this->container = $container;
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
        $listeOiseaux = $this->oiseauxManipulator->listeOrdreEtFamille();
        dump($listeOiseaux);
        dump('birds');
//        die;
        return $this->render('index.html.twig', [
            'oiseaux' => $this->oiseauxManipulator->listeOrdreEtFamille()
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
     * @OA\Response(response=200,description="Index")
     * @OA\Tag(name="Default")
     * @Nelmio\Security(name="Bearer")
     */
    public function apprendre(
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
    public function quizUnOiseau(
        Request $request
    ) {
//        dump(
//            $this->oiseauxManipulator->quizUnOiseau()
//        );
//        die;
//        return $this->oiseauxManipulator->quizUnOiseau();

//        $listeOiseaux = $this->oiseauxManipulator->listeOiseaux();
//        dump($listeOiseaux);
//        die;
        return $this->render('quizUnOiseau.html.twig', [
            'images' => [
                'combattantVarie_0',
                'chevecheDAthena_0',
                'goelandArgente_0',
                'grandGravelot_0',
                'grandLabbe_0',
                'grueCendree_0',
                'guepierDEurope_0',
                'hirondelleDeFenetre_0',
                'huitrierPie_0',
                'oedicnemeCriard_0'
            ]
        ]);

        $jour20231017 = [
            'bargeAQueueNoire_0',
            'becasseauVariable_0',
            'coucouGris_0',
            'effraieDesClochers_0',
            'fauconCrecerelle_0',
            'fauconPelerin_0',
            'hirondelleRustique_0',
            'picNoir_0',
            'pyguargueAQueueBlanche_0',
            'rollierDEurope_0'
        ];

        $jour20231016 = [
            'alouetteDesChamps_0',
            'becassineDesMarais_0',
            'balbuzardPecheur_0',
            'bergeronnetteGrise_0',
            'buseVariable_0',
            'chevalierAboyeur_0',
            'chevalierCulBlanc_0',
            'chevalierArlequin_0',
            'chevalierGambette_0',
            'courlisCendre_0'
        ];

        $jour20231015 = [
            'manchotDuCap_0',
            'cigogneNoire_0',
            'cailleDesBles_1',
            'canardSiffleur_0',
            'engoulventDEurope_0',
            'martinetAVentreBlanc_0',
            'bihoreauGris_0',
            'grebeHuppe_0',
            'fulmarBoreal_0',
            'martinetNoir_0'
        ];
    }
}