<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Formation;
use AppBundle\Entity\Experience;
use AppBundle\Entity\Competence;

class DefaultController extends Controller
{
    /**
     * @Route("/{_locale}", name="homepage")
     */
    public function indexAction(Request $request)
    {
      $date = new \DateTime();
        return $this->render('default/index.html.twig',[
          'createDate'=> $date
        ]);
    }

  	/**
       * @Route("/{_locale}/pagecv", name="page-cv")
       */
  	public function testAction()
  	{
      $permis = true;
      $age = new \DateTime('05-04-1991');

      $bep = new Formation();
      $bep->setTitre("formation.1.titre");
      $bep->setDateDebut("formation.1.dateDebut");
      $bep->setDateFin("formation.1.dateFin");
      $bep->setDescription("formation.1.description");
      $bep->setObtenue("formation.1.obtenu");
      $adrec = new Formation();
      $adrec->setTitre("formation.2.titre");
      $adrec->setDateDebut("formation.2.dateDebut");
      $adrec->setDateFin("formation.2.dateFin");
      $adrec->setDescription("formation.2.description");
      $adrec->setObtenue("formation.2.obtenu");

      $apprenti = new Experience();
      $apprenti->setPoste("Apprenti Magasinier Cariste");
      $apprenti->setEntreprise("J.Sauret à Clermont - Ferrand");
      $apprenti->setDateDebut("Juin 2008 à");
      $apprenti->setDateFin("Juin 2010");
      $apprenti->setSecteur("Secteur : Automobile : Commerce et réparation d’automobiles et motocycles");
      $apprenti->setMission("Missions : Conduite de machines industrielles, manutention avec pont roulant et chariot élévateur du métal,
      préparation de programmes d’alimentation pour les machines, expédition et alimentation des machines, gestion des flux de copeaux
      générés par les machines.");

      $magasinierAuversun = new Experience();
      $magasinierAuversun->setPoste("Magasinier Cariste - CDI");
      $magasinierAuversun->setEntreprise("Auversun Clermont - Ferrand");
      $magasinierAuversun->setDateDebut("Octobre 2010 à");
      $magasinierAuversun->setDateFin("Novembre 2012");
      $magasinierAuversun->setSecteur("Secteur : Energie renouvelable : Conception et fabrication de panneaux solaires");
      $magasinierAuversun->setMission("Missions :  Préparation de commandes, réception et expédition de colis et de palettes, mise en stock,
       inventaire, contact avec la clientèle, chargement et déchargement de camions sur quai ou à l'extérieur, manutention de grande longueur
       ou palette, création manuelle et informatique de bons de livraison, bons de préparation et remplissage bons de transport.");

      $magasinierGedimat = new Experience();
      $magasinierGedimat->setPoste("Magasinier Cariste - CDD");
      $magasinierGedimat->setEntreprise("Gedimat à Clermont - Ferrand");
      $magasinierGedimat->setDateDebut("Mars 2013 à");
      $magasinierGedimat->setDateFin("Mais 2013");
      $magasinierGedimat->setSecteur("Secteur : Bâtiment : Vente de matériaux de construction et de bricolage");
      $magasinierGedimat->setMission("Missions : Préparation de commandes, réception et expédition de colis et de palettes,
       chargement et déchargement de camions, contact avec la clientèle
       permanent, mise en stock et connaissance des produits du bâtiment.");

      $agentConstellium = new Experience();
      $agentConstellium->setPoste("Agent de Fabrication - CDI");
      $agentConstellium->setEntreprise("Constellium à Issoire");
      $agentConstellium->setDateDebut("Depuis Juin 2013");
      $agentConstellium->setSecteur("Secteur : Métallurgie – Sidérurgie : Fabrication de produits en aluminium");
      $agentConstellium->setMission("Missions : Conduite de machines industrielles, manutention avec pont roulant et chariot élévateur du métal,
       préparation de programmes d’alimentation pour les machines, expédition et alimentation des machines, gestion des flux de copeaux
       générés par les machines.");

       $langage = new Competence;
       $langage->setLangage("Shell (Bash) / MySQL / JAVA 7 / HTML 5 / CSS 3 / PHP 5 / Javascript / symfony 3 (framework PHP)");
       $langage->setBaseDeDonnee("MySql");
       $langage->setLangageModelisation("UML (Unified Modeling Language) Github");

  		return $this->render('default/pagecv.html.twig',[
        'avoirPermis'=> $permis,
        'createDateDeNaissance' => $age,
        'formationsBloc1'=> [$adrec],
        'formationBloc2'=>[$bep],
        'ExperiencesBloc1'=>[$agentConstellium, $magasinierGedimat],
        'ExperiencesBloc2'=>[$magasinierAuversun, $apprenti],
        'langages'=>[$langage],
        'baseDeDonnees'=>[$langage],
        'langageModelisation'=>[$langage]
      ]);
  	}

    /**
       * @Route("/{_locale}/monsite", name="monTest")
       */
    public function monSite()
    {
      return $this->render('base.html.twig');
    }

}
