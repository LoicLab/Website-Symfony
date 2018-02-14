<?php
namespace AppBundle\Entity;

class Competence
{
  private $langage;
  private $BaseDeDonnee;
  private $langageModelisation;

  public function getLangage()
  {
    return $this->langage;
  }

  public function setLangage($langage)
  {
    $this->langage = $langage;
  }

  public function getBaseDeDonnee()
  {
    return $this->BaseDeDonnee;
  }

  public function setBaseDeDonnee($BaseDeDonnee)
  {
    $this->BaseDeDonnee = $BaseDeDonnee;
  }

  public function getlangageModelisation()
  {
    return $this->langageModelisation;
  }

  public function setlangageModelisation($langageModelisation)
  {
    $this->langageModelisation = $langageModelisation;
  }
}
