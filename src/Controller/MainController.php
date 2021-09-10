<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/notre-histoire", name="app_notre_histoire")
     */
    public function notreHistoire(): Response
    {
        return $this->render('main/page.html.twig', [
            'title' => 'Notre Histoire',
            'subtitle' => 'Une épopée familiale',
            'content' => 'Les Vignobles Jean Coste existent depuis maintenant huit générations. Aujourd’hui c’est Emmanuel qui s’occupe de la propriété, il continue de protéger et de perpétuer la tradition. Pour mieux respecter l’environnement et plus particulièrement le terroir, la conversion des terres en Agriculture Biologique a été lancée en 2019, certifiée par Ecocert. Conscient que la monoculture n’est pas un idéal agronomique, Emmanuel a choisi d’établir une diversité culturale au sein de la propriété. Le château typique de la région bordelaise, fut construit en 1881 par la famille COSTE. Il se situe sur la commune de Saint Magne de Castillon, en Appellation d’Origine Contrôlée (AOC) Castillon Côtes de Bordeaux, aux pieds des coteaux de Saint-Emilion.'
        ]);
    }
    /**
     * @Route("/notre-equipe", name="app_notre_equipe")
     */
    public function notreEquipe(): Response
    {
        return $this->render('main/page.html.twig', [
            'title' => 'Notre Equipe',
            'subtitle' => 'La passion: moteur du domaine',
        ]);
    }
    /**
     * @Route("/nos-evenements", name="app_nos_evenements")
     */
    public function nosEvenements(): Response
    {
        return $this->render('main/page.html.twig', [
            'title' => 'Nos Evenements',
            'subtitle' => 'Notre maître mot: la convivialité',
            'content' =>  'Nos prochains évenements'
        ]);
    }
    /**
     * @Route("/nos-chambres-hote", name="app_nos_chambres_hote")
     */
    public function notreChambresHote(): Response
    {
        return $this->render('main/page.html.twig', [
            'title' => 'Nos chambres d\'hôtes',
            'subtitle' => 'Vivez une expérience authentique',
            'content' => 'Découvrez nos chambres'
        ]);
    }
    /**
     * @Route("/travail-de-la-vigne", name="app_travail_de_la_vigne")
     */
    public function travailDeLaVigne(): Response
    {
        return $this->render('main/page.html.twig', [
            'title' => 'Le travail de la vigne',
            'subtitle' => 'De la matière première au produit fini',
            'content' => 'Le travail de la vigne .................................................................'
        ]);
    }
}
