<?php
class Domaine
{
    private ?int $idDomaine = null;
    private ?string $Nom_Domaine = null;
    private ?string $description_d = null;
    private ?string $imageD= null;



    public function __construct($id = null, $p, $n,$imageD=NULL)
    {
        $this->idDomaine = $id;
        $this->Nom_Domaine = $p;
        $this->description_d = $n;
        $this->imageD = $imageD;

 
    }

    /**
     * Get the value of idDomaine
     */
    public function getIdDomaine()
    {
        return $this->idDomaine;
    }

     /**
     * Get the value of Nom_Domaine
     */
    public function getNom_Domaine()
    {
        return $this->Nom_Domaine;
    }

    /**
     * Set the value of Nom_Domaine
     *
     * @return  self
     */
    public function setNom_Domaine($Nom_Domaine)
    {
        $this->Nom_Domaine = $Nom_Domaine;

        return $this;
    }

    /**
     * Get the value of description_d
     */
    public function getdescription_d()
    {
        return $this->description_d;
    }

    /**
     * Set the value of description_d
     *
     * @return  self
     */
    public function setdescription_d($description_d)
    {
        $this->description_d = $description_d;

        return $this;
    }

 /**
     * Set the value of image
     *
     * @return  self
     */
    public function setImageD($imageD)
    {
        $this->imageD = $imageD;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImageD()
    {
        return $this->imageD;
    }


   
}
