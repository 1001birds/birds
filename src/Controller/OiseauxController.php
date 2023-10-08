<?php

namespace App\Controller;

use App\Manipulator\OiseauxManipulator;
use App\Mapping\Oiseaux;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Nelmio\ApiDocBundle\Annotation as Nelmio;
use OpenApi\Annotations as OA;

class OiseauxController extends AbstractController
{
    protected $managerRegistry;
    protected $env;
    protected $oiseauxManipulator;

    public function __construct(
        ManagerRegistry $managerRegistry,
        ContainerInterface $container,
        OiseauxManipulator $oiseauxManipulator
    ) {
        $this->managerRegistry = $managerRegistry;
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