<?php

namespace App\Manipulator;

use App\Mapping\Oiseaux;
use App\Mapping\OrdreEtFamilles;
use App\Mapping\Quizz;
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

//    public function listeOrdresEtFamilles(
//    ) {
//        $ordesEtFamilles = Oiseaux::$ordesEtFamilles;
//        $listeOiseaux = [];
//        $countOrdres = 0;
//        $countFamilles = 0;
//        $countOiseaux = 0;
//        foreach($ordesEtFamilles as $ordre => $familles) {
////            dump($ordre);die;
//            $listeOiseaux['ordre'][$ordre] = $familles;
//            $countOrdres++;
//            foreach($familles as $famille => $oiseaux) {
//                $countFamilles++;
//                foreach($oiseaux as $oiseau) {
//                    $countOiseaux++;
//                }
//            }
//        }
//        return [
//            'countOrdres' => $countOrdres,
//            'countFamilles' => $countFamilles,
//            'countOiseaux' => $countOiseaux,
//            'listeOiseaux' => $listeOiseaux
//        ];
//    }

    public function listeOrdresEtFamilles_3(
    ) {
        return
        $ordesEtFamilles = OrdreEtFamilles::$ordresEtFamilles;
        $infos = [
            'ordesEtFamilles' => OrdreEtFamilles::$ordresEtFamilles,
            'oiseaux' => Oiseaux::$oiseaux
        ];


        dump($ordesEtFamilles);die;

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
        $cheminVersDossierImagesOiseaux = $this->params->get('kernel.project_dir').'/public/build/images/oiseaux/';
        while(file_exists($cheminVersDossierImagesOiseaux.$string.'_'.$i.'.png')) {
            $images[$i] = '/build/images/oiseaux/'.$string.'_'.$i.'.png';
            $i++;
        }
        return $images;
    }

    protected function imageDUnOiseauAuHasard(
    ) {

        $cheminVersDossierImagesOiseaux = $this->params->get('kernel.project_dir').'/public/build/images/oiseaux/';
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

    public function quizzUnOiseau(
    ) {

        $heure = (new \DateTime())->format('H');
        $jourdui = 'j'.(new \DateTime())->format('Ymd').'_'.((int)$heure < 14 ? 'am' : 'pm');
        return Quizz::$$jourdui;
    }

    /*
     * PREND DIX IMAGES D OISEAUX AU HASARD
     * */
    public function imagesDixOiseauxAuHasard(
    ) {
        $imagesDixOiseauxAuHasard = array();
        for($i = 0; $i < 10; $i++) {
            $imagesDixOiseauxAuHasard[] = $this->imageDUnOiseauAuHasard();
        }
        return $imagesDixOiseauxAuHasard;
    }

    public function apprendre(
    ) {
        $oiseaux = Oiseaux::$oiseaux;
        /*
         * PREND UN OISEAU AU HASARD
         * martinetAVentreBlanc
         * */
        $imageDUnOiseauAuHasard = $this->imageDUnOiseauAuHasard();//'martinetAVentreBlanc_0.png';//
//        dump($imageDUnOiseauAuHasard);die;


        $arrayImage = explode('_', $imageDUnOiseauAuHasard);
        $stringOiseau = $arrayImage[0];
        $arrayImageExt = explode('.', $arrayImage[1]);
        $numeroImage = $arrayImageExt[0];
//        dump($numeroImage);die;
        /*
         * SI CET OISEAU EXISTE
         * */
        if(isset($oiseaux[$stringOiseau])) {
            $partsLien = explode('|', $oiseaux[$stringOiseau]['lien']);
            $stringOrdre = $partsLien[0];
            $stringFamille = $partsLien[1];
            $ordesEtFamilles = OrdreEtFamilles::$ordresEtFamilles;
//            dump($ordesEtFamilles);die;
            $ordre = '';
            $famille = '';
            $espece = '';
            if(isset($ordesEtFamilles[$stringOrdre])) {
                $ordre = $ordesEtFamilles[$stringOrdre]['nom'];
                if(isset($ordesEtFamilles[$stringOrdre]['familles'][$stringFamille])) {
                    $famille = $ordesEtFamilles[$stringOrdre]['familles'][$stringFamille]['nom'];
                    if(isset($ordesEtFamilles[$stringOrdre]['familles'][$stringFamille]['oiseaux'][$stringOiseau])) {
                        $espece = $ordesEtFamilles[$stringOrdre]['familles'][$stringFamille]['oiseaux'][$stringOiseau]['espece'];
                    }
                }
            }
            /*
             * COMMENTAIRE IMAGE
             * */
            $commentaireImage = '';
            if(isset($oiseaux[$stringOiseau]['images'][$numeroImage])) {
                $infosImage = $oiseaux[$stringOiseau]['images'][$numeroImage];
                if(isset($infosImage)) {
                    if(isset($infosImage['commentaire'])) {
                        $commentaireImage = $infosImage['commentaire'];
                    }
                }
            }
            return [
                'image' => $imageDUnOiseauAuHasard,
                'commentaireImage' => $commentaireImage,
                'nom' => $oiseaux[$stringOiseau]['nom'],
                'ordre' => $ordre,
                'famille' => $famille,
                'espece' => $espece,
                'string' => $stringOiseau
            ];
        }
        return [
            'image' => $imageDUnOiseauAuHasard,
            'nom' => '',
            'ordre' => '',
            'famille' => '',
            'espece' => '',
            'erreur' => $stringOiseau
        ];
    }
}