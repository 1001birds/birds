<?php

namespace App\Manipulator;

use App\Mapping\Oiseaux;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class OiseauxManipulator
{
    protected $params;

    public function __construct(
        ContainerBagInterface $params
    ) {
        $this->params = $params;
    }

    public function listeOrdreEtFamille(
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

    public function oiseau(
        $string
    ) {
        $infosOiseau = array();
        $images = array();
        $commentairesImages = array();
        $oiseaux = Oiseaux::$oiseaux;

//        dump($keysOiseaux);die;
//        dump($oiseaux[$string]);die;
        /*
         * SI CET OISEAU EXISTE
         * */
        if(isset($oiseaux[$string])) {
            /*
             * CHECK LES IMAGES
             * */
            $images = $this->imagesDUnOiseau($string);
            /*
             * SI YA DES INFOS 'IMAGES' POUR CET OISEAU
             * */
            if(isset($oiseaux[$string]['images'])) {
                /*
                 * POUR CHAQUE IMAGE
                 * */
                foreach($images as $i => $image) {
                    /*
                     * SI YA DES INFOS POUR CETTE IMAGE
                     * */
                    if(isset($oiseaux[$string]['images'][$i])) {
                        /*
                         * SI YA UN COMMENTAIRE POUR CETTE IMAGE
                         * */
                        if($oiseaux[$string]['images'][$i]['commentaire'] !== '') {
                            $commentairesImages[$i] = $oiseaux[$string]['images'][$i]['commentaire'];
                        }

                    }
                }
            }
        }
        /*
         * CHOISI UN OISEAU AU HASARD POUR FICHE SUIVANTE
         * */
        $nextString = $this->oiseauAuHasard($oiseaux);
        return [
            'oiseau' => isset($oiseaux[$string]) ? $oiseaux[$string] : [],
            'images' => $images,
            'commentaireOiseau' => isset($infosOiseau['commentaire']) ? $infosOiseau['commentaire'] : '',
            'commentairesImages' => $commentairesImages,
            'string' => $string,
            'nextString' => $nextString,
            'nextNom' => $oiseaux[$nextString]['nom']
        ];
//        $from = ['é', 'è', ' à ', 'à'];
//        $to = ['e', 'e', ' A ', 'a'];
//        $nomOriginal = ucwords($request->get('string'));
//        $string = str_replace($from, $to, $nomOriginal);
//        $string = explode(' ', $string);
//        $string = implode('', $string);
//        $string = strtolower($string[0]).substr($string, 1);
    }

    protected function oiseauAuHasard(
        $oiseaux
    ) {
        $numbers = range(1, (count($oiseaux)) - 1);
        shuffle($numbers);
        $keysOiseaux = array_keys($oiseaux);
        return $keysOiseaux[$numbers[0]];
    }

    protected function imagesDUnOiseau(
        $string
    ) {
        $i = 0;
        $images = array();
        $cheminVersDossierImagesOiseaux = $this->params->get('kernel.project_dir').'/public/build/images/';
        while(file_exists($cheminVersDossierImagesOiseaux.$string.'_'.$i.'.png')) {
            $images[$i] = '/images/'.$string.'_'.$i.'.png';
            $i++;
        }
        return $images;
    }

    protected function imageDUnOiseauAuHasard(
        $oiseaux
    ) {

        $cheminVersDossierImagesOiseaux = $this->params->get('kernel.project_dir').'/public/build/images/';
        $count = count(glob($cheminVersDossierImagesOiseaux.'*'));
        $numbers = range(1, $count);
        shuffle($numbers);
        $indiceImage = $numbers[0];
        $i = 0;
        $imageChoisie = null;
        $scanDIR = scandir($cheminVersDossierImagesOiseaux);
        foreach($scanDIR as $file) {
            if(strpos($file, 'png') !== false) {
                $i++;
                if($indiceImage == $i) {
                    $imageChoisie = $file;
                }
            }
        }
        return $imageChoisie;


//        while(file_exists($cheminVersDossierImagesOiseaux.$string.'_'.$i.'.png')) {
//            $images[$i] = '/img/'.$string.'_'.$i.'.png';
//            $i++;
//        }

//        /*
//         * PREND UN OISEAU AU HASARD
//         * */
//        $stringOiseau = $this->oiseauAuHasard($oiseaux);
    }

    public function quizUnOiseau(
    ) {
        $oiseaux = Oiseaux::$oiseaux;
        /*
         * PREND DIX IMAGES D OISEAUX AU HASARD
         * */
        $imageDdDixOiseauxAuHasard = array();
        for($i = 0; $i < 10; $i++) {
            $imageDdDixOiseauxAuHasard[] = $this->imageDUnOiseauAuHasard($oiseaux);
        }
        return $imageDdDixOiseauxAuHasard;
    }

    public function apprendre(
    ) {
        $oiseaux = Oiseaux::$oiseaux;
        /*
         * PREND UN OISEAU AU HASARD
         * */
        $imageDUnOiseauAuHasard = $this->imageDUnOiseauAuHasard($oiseaux);
        $arrayImage = explode('_', $imageDUnOiseauAuHasard);
        $stringOiseau = $arrayImage[0];
        /*
         * SI CET OISEAU EXISTE
         * */
        if(isset($oiseaux[$stringOiseau])) {
            return [
                'image' => $imageDUnOiseauAuHasard,
                'nom' => $oiseaux[$stringOiseau]['nom']
            ];
        }
        return [
            'erreur' => $stringOiseau
        ];
    }
}