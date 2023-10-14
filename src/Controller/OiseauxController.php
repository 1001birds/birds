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
        $listeOiseaux = $this->oiseauxManipulator->listeOiseaux();
        dump($listeOiseaux);
        dump('birds');
//        die;
        return $this->render('index.html.twig', [
            'oiseaux' => $this->oiseauxManipulator->listeOiseaux()
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
        $infosOiseau = array();
        $images = array();
        $from = ['é', 'è', ' à ', 'à'];
        $to = ['e', 'e', ' A ', 'a'];
        $nomOriginal = ucwords($request->get('nom'));
        $string = str_replace($from, $to, $nomOriginal);
        $string = explode(' ', $string);
        $string = implode('', $string);
        $string = strtolower($string[0]).substr($string, 1);


        $oiseau = Oiseaux::$oiseaux;
        /*
         * SI YA BIEN DES INFOS SUR CET OISEAU
         * */
        if(isset($oiseau[$string])) {
            $infosOiseau = $oiseau[$string];

            foreach ($infosOiseau['images'] as $i => $infos) {
                $images[$i] = '/img/'.$string.'_'.$i.'.png';

            }
        }

        dump($images);

//        die;




        $listeOiseaux = $this->oiseauxManipulator->listeOiseaux();
        dump($listeOiseaux);
//        die;
        return $this->render('oiseau.html.twig', [
            'nomOriginal' => $nomOriginal,
            'images' => $images,
            'commentaire' => isset($infosOiseau['commentaire']) ? $infosOiseau['commentaire'] : ''
        ]);
//        $cheminLocal = $this->params->get('kernel.project_dir').'/public/img';
//        if(file_exists($cheminLocal) && is_dir($cheminLocal)) {
//        }
    }

    /**
     * @OA\Response(response=200,description="Index")
     * @OA\Tag(name="Default")
     * @Nelmio\Security(name="Bearer")
     */
    public function apprendre(
        Request $request
    ) {
        $listeOiseaux = $this->oiseauxManipulator->listeOiseaux();
        dump($listeOiseaux);
//        die;
        return $this->render('apprendre.html.twig', [
            'bird' => 1
        ]);
    }

    /**
     * @OA\Response(response=200,description="Index")
     * @OA\Tag(name="Default")
     * @Nelmio\Security(name="Bearer")
     */
    public function quizUnOiseau(
        Request $request
    ) {
        $listeOiseaux = $this->oiseauxManipulator->listeOiseaux();
        dump($listeOiseaux);
//        die;
        return $this->render('quizUnOiseau.html.twig', [
            'bird' => 1
        ]);
    }
}