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


    #[Route(path: '/foo/{id}/bar', name: 'my_route_to_expose', options: ['expose' => true])]

    /**
     * @Route ("/one", name="one", options={"expose"=true})
     *
     * @OA\Response(response=200,description="Index")
     * @OA\Tag(name="Default")
     * @Nelmio\Security(name="Bearer")
     */
    public function one(
        Request $request
    ) {
        return $this->render('Birds/oiseau.html.twig',
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
        return $this->render('Birds/apprendre.html.twig',
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
        return $this->render('Birds/apprendre.html.twig',
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
        return $this->render('Birds/quizzUnOiseau.html.twig', [
            'images' => $this->oiseauxManipulator->quizzUnOiseau()
        ]);
    }
}