<?php
class event
{
    private ?int $idevent = null;
    private ?string $Nom_event = null;
    private ?string $description_e = null;
    private ?string $address = null;
    private ?DateTime $time_e = null;

    public function __construct($id = null, $p, $n, $a, $d)
    {
        $this->idevent = $id;
        $this->Nom_event = $p;
        $this->description_e = $n;
        $this->address = $a;
        $this->time_e = $d;
    }

    /**
     * Get the value of idevent
     */
    public function getIdevent()
    {
        return $this->idevent;
    }

     /**
     * Get the value of Nom_event
     */
    public function getNom_event()
    {
        return $this->Nom_event;
    }

    /**
     * Set the value of Nom_event
     *
     * @return  self
     */
    public function setNom_event($Nom_event)
    {
        $this->Nom_event = $Nom_event;

        return $this;
    }

    /**
     * Get the value of description_e
     */
    public function getdescription_e()
    {
        return $this->description_e;
    }

    /**
     * Set the value of description_e
     *
     * @return  self
     */
    public function setdescription_e($description_e)
    {
        $this->description_e = $description_e;

        return $this;
    }

   

    /**
     * Get the value of address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of time_e
     */
    public function gettime_e()
    {
        return $this->time_e;
    }

    /**
     * Set the value of time_e
     *
     * @return  self
     */
    public function settime_e($time_e)
    {
        $this->time_e = $time_e;

        return $this;
    }
}
