<?php
class Pub
{
    private ?int $idPub = null;
    private ?string $Nom_p = null;
    private ?string $statut = null;    
    private ?string $description_p = null;
    private ?string $domaine_p= null;
    private ?string $image= null;

    public function __construct($id = null, $Nom_p, $statut, $description_p,$domaine_p,$image=null)
    {
        $this->idPub = $id;
        $this->Nom_p = $Nom_p;
        $this->statut = $statut;        
        $this->description_p = $description_p;
        $this->domaine_p = $domaine_p;
        $this->image = $image;

    }

    /**
     * Get the value of idPub
     */
    public function getIdPub()
    {
        return $this->idPub;
    }

    /**
     * Get the value of statut
     */
    public function getstatut()
    {
        return $this->statut;
    }

    /**
     * Set the value of statut
     *
     * @return  self
     */
    public function setstatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get the value of Nom_p
     */
    public function getNom_p()
    {
        return $this->Nom_p;
    }

    /**
     * Set the value of Nom_p
     *
     * @return  self
     */
    public function setNom_p($Nom_p)
    {
        $this->Nom_p = $Nom_p;

        return $this;
    }

    /**
     * Get the value of description_p
     */
    public function getdescription_p()
    {
        return $this->description_p;
    }

    /**
     * Set the value of description_p
     *
     * @return  self
     */
    public function setdescription_p($description_p)
    {
        $this->description_p = $description_p;

        return $this;
    }


   

    /**
     * Get the value of Nom_p
     */
    public function getdomaine_p()
    {
        return $this->domaine_p;
    }

    /**
     * Set the value of Nom_p
     *
     * @return  self
     */
    public function setdomaine_p($domaine_p)
    {
        $this->domaine_p = $domaine_p;

        return $this;
    }

      /**
     * Set the value of image
     *
     * @return  self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

   
}
