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
  	public function pageCV()
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
      $apprenti->setPoste("experienceBloc2.1.poste");
      $apprenti->setEntreprise("experienceBloc2.1.entreprise");
      $apprenti->setDateDebut("experienceBloc2.1.dateDebut");
      $apprenti->setDateFin("experienceBloc2.1.dateFin");
      $apprenti->setSecteur("experienceBloc2.1.secteur");
      $apprenti->setMission("experienceBloc2.1.mission");

      $magasinierAuversun = new Experience();
      $magasinierAuversun->setPoste("experienceBloc2.2.poste");
      $magasinierAuversun->setEntreprise("experienceBloc2.2.entreprise");
      $magasinierAuversun->setDateDebut("experienceBloc2.2.dateDebut");
      $magasinierAuversun->setDateFin("experienceBloc2.2.dateFin");
      $magasinierAuversun->setSecteur("experienceBloc2.2.secteur");
      $magasinierAuversun->setMission("experienceBloc2.2.mission");

      $magasinierGedimat = new Experience();
      $magasinierGedimat->setPoste("experienceBloc1.1.poste");
      $magasinierGedimat->setEntreprise("experienceBloc1.1.entreprise");
      $magasinierGedimat->setDateDebut("experienceBloc1.1.dateDebut");
      $magasinierGedimat->setDateFin("experienceBloc1.1.dateFin");
      $magasinierGedimat->setSecteur("experienceBloc1.1.secteur");
      $magasinierGedimat->setMission("experienceBloc1.1.mission");

      $agentConstellium = new Experience();
      $agentConstellium->setPoste("experienceBloc1.2.poste");
      $agentConstellium->setEntreprise("experienceBloc1.2.entreprise");
      $agentConstellium->setDateDebut("experienceBloc1.2.dateDebut");
      $agentConstellium->setSecteur("experienceBloc1.2.secteur");
      $agentConstellium->setMission("experienceBloc1.2.mission");

       $langage = new Competence;
       $langage->setLangage("Shell (Bash)/ C / JAVA 7 / HTML 5 / CSS 3 / PHP 5 / Javascript / symfony 3 (framework PHP)");
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
       * @Route("/{_locale}/monsite", name="maBase")
       */
    public function monSite()
    {
      return $this->render('base.html.twig');
    }

    /**
       * @Route("/{_locale}/contactez-moi", name="contactezMoi")
       */
    public function pageForm()
    {
      return $this->render('default/formulaire.html.twig');
    }

}
