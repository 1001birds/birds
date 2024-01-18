<?php

namespace App\Manipulator;

use App\Mapping\Oiseaux;
use App\Mapping\OrdreEtFamilles;
use App\Mapping\Quizz;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class PortfolioManipulator
{
    protected $params;

    public function __construct(
        ContainerBagInterface $params
    ) {
        $this->params = $params;
    }

    public function az(
    ) {

        $heure = (new \DateTime())->format('H');
        $jourdui = 'j'.(new \DateTime())->format('Ymd').'_'.((int)$heure < 14 ? 'am' : 'pm');
        return Quizz::$$jourdui;
    }
}