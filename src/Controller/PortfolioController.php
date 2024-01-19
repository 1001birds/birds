<?php

namespace App\Controller;

use App\Manipulator\OiseauxManipulator;
use App\Manipulator\PortfolioManipulator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Nelmio\ApiDocBundle\Annotation as Nelmio;
use OpenApi\Annotations as OA;

class PortfolioController extends AbstractController
{
    protected $params;
    protected $portfolioManipulator;

    public function __construct(
        ContainerBagInterface $params,
        PortfolioManipulator $portfolioManipulator
    ) {
        $this->params = $params;
        $this->portfolioManipulator = $portfolioManipulator;
    }

    /**
     * @OA\Response(response=200,description="Index")
     * @OA\Tag(name="Default")
     * @Nelmio\Security(name="Bearer")
     */
    public function home(
        Request $request
    ) {
        return $this->render('Portfolio/home.html.twig');
    }

    /**
     * @OA\Response(response=200,description="Index")
     * @OA\Tag(name="Default")
     * @Nelmio\Security(name="Bearer")
     */
    public function etudes(
        Request $request
    ) {
        return $this->render('Portfolio/etudes.html.twig');
    }

    /**
     * @OA\Response(response=200,description="Index")
     * @OA\Tag(name="Default")
     * @Nelmio\Security(name="Bearer")
     */
    public function creations(
        Request $request
    ) {
        return $this->render('Portfolio/creations.html.twig');
    }

    /**
     * @OA\Response(response=200,description="Création tortue")
     * @OA\Tag(name="Default")
     * @Nelmio\Security(name="Bearer")
     */
    public function creationTortue(
        Request $request
    ) {
        return $this->render('Portfolio/creation.html.twig', [
            'string' => 'tortue',
            'nom' => 'Tortue',
            'titre' => "La tortue"
        ]);
    }

    /**
     * @OA\Response(response=200,description="Création aventurine")
     * @OA\Tag(name="Default")
     * @Nelmio\Security(name="Bearer")
     */
    public function creationAventurine(
        Request $request
    ) {
        return $this->render('Portfolio/creation.html.twig', [
            'string' => 'aventurine',
            'nom' => 'Aventurine',
            'titre' => "Bague argent serti d'une aventurine"
        ]);
    }

    /**
     * @OA\Response(response=200,description="Création chevaliere")
     * @OA\Tag(name="Default")
     * @Nelmio\Security(name="Bearer")
     */
    public function creationChevaliere(
        Request $request
    ) {
        return $this->render('Portfolio/creation.html.twig', [
            'string' => 'chevaliere',
            'nom' => 'Chevalière',
            'titre' => 'Chevalière argent'
        ]);
    }

    /**
     * @OA\Response(response=200,description="Création pendentif")
     * @OA\Tag(name="Default")
     * @Nelmio\Security(name="Bearer")
     */
    public function creationPendentif(
        Request $request
    ) {
        return $this->render('Portfolio/creation.html.twig', [
            'string' => 'pendentif',
            'nom' => 'Pendentif',
            'titre' => "Pendentif argent serti d'une tourmaline rose"
        ]);
    }
}