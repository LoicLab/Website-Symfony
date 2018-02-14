<?php
namespace AppBundle\Entity;

class Formation
{
  private $titre;
  private $dateDebut;
  private $dateFin;
  private $description;
  private $obtenue;

  public function getTitre()
  {
    return $this->titre;
  }

  public function getDateDebut()
  {
    return $this->dateDebut;
  }

  public function getDateFin()
  {
    return $this->dateFin;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function getObtenue()
  {
    return $this->obtenue;
  }

  public function setTitre($titre)
  {
    return $this->titre = $titre;
  }

  public function setDateDebut($dateDebut)
  {
    $this->dateDebut=$dateDebut;
  }

  public function setDateFin($dateFin)
  {
    $this->dateFin=$dateFin;
  }

  public function setDescription($description)
  {
    $this->description=$description;
  }

  public function setObtenue($obtenue)
  {
    $this->obtenue = $obtenue;
  }

}
