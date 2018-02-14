<?php
namespace AppBundle\Entity;

class Experience
{
  private $poste;
  private $entreprise;
  private $dateDebut;
  private $dateFin;
  private $secteur;
  private $mission;


  public function getPoste()
  {
    return $this->poste;
  }

  public function getEntreprise()
  {
    return $this->entreprise;
  }

  public function getDateDebut()
  {
    return $this->dateDebut;
  }

  public function getDateFin()
  {
    return $this->dateFin;
  }

  public function getSecteur()
  {
    return $this->secteur;
  }

  public function getMission()
  {
    return $this->mission;
  }

  public function setPoste($poste)
  {
    $this->poste = $poste;
  }

  public function setEntreprise($entreprise)
  {
    $this->entreprise = $entreprise;
  }

  public function setDateDebut($dateDebut)
  {
    $this->dateDebut = $dateDebut;
  }

  public function setDateFin($dateFin)
  {
    $this->dateFin = $dateFin;
  }

  public function setSecteur($secteur)
  {
    $this->secteur = $secteur;
  }

  public function setMission($mission)
  {
    return $this->mission = $mission;
  }


}
