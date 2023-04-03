<?php
class FD
{
    private ?int $idFD = null;
    private ?string $reclamation = null;
    private ?string $proposition = null;
    private ?string $avis = null;
   

    public function __construct($id = null, $n, $p, $a)
    {
        $this->idFD = $id;
        $this->reclamation = $n;
        $this->proposition = $p;
        $this->avis = $a;
       
    }

    /**
     * Get the value of idFD
     */
    public function getIdFD()
    {
        return $this->idFD;
    }

    /**
     * Get the value of reclamation
     */
    public function getreclamation()
    {
        return $this->reclamation;
    }

    /**
     * Set the value of reclamation
     *
     * @return  self
     */
    public function setreclamation($reclamation)
    {
        $this->reclamation = $reclamation;

        return $this;
    }

    /**
     * Get the value of proposition
     */
    public function getproposition()
    {
        return $this->proposition;
    }

    /**
     * Set the value of proposition
     *
     * @return  self
     */
    public function setproposition($proposition)
    {
        $this->proposition = $proposition;

        return $this;
    }

    /**
     * Get the value of avis
     */
    public function getavis()
    {
        return $this->avis;
    }

    /**
     * Set the value of avis
     *
     * @return  self
     */
    public function setavis($avis)
    {
        $this->avis = $avis;

        return $this;
    }

   
}
