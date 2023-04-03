<?php
class Client
{
    private ?int $idClient = null;
    private ?string $firstName = null;
    private ?string $lastName = null;    
    private ?string $addresse = null;
    private ?DateTime $dob = null;
    private ?string $genre= null;
    private ?int $age = null; 
    private ?string $passwords = null;
    private ?int $numeros = null;
    private ?string $role = null;

    public function __construct($id = null, $p, $n, $a, $d,$p1, $ag, $a1, $d1, $a11)
    {
        $this->idClient = $id;
        $this->firstName = $p;
        $this->lastName = $n;        
        $this->addresse = $a;
        $this->dob = $d;
        $this->genre = $p1;
        $this->age = intval($ag);        
        $this->passwords = $a1;
        $this->numeros = $d1;
        $this->role = $a11;
    }

    /**
     * Get the value of idClient
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of addresse
     */
    public function getaddresse()
    {
        return $this->addresse;
    }

    /**
     * Set the value of addresse
     *
     * @return  self
     */
    public function setaddresse($addresse)
    {
        $this->addresse = $addresse;

        return $this;
    }

    /**
     * Get the value of dob
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get the value of lastName
     */
    public function getage()
    {
        return $this->age;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setage($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getgenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setgenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get the value of addresse
     */
    public function getpasswords()
    {
        return $this->passwords;
    }

    /**
     * Set the value of addresse
     *
     * @return  self
     */
    public function setpasswords($passwords)
    {
        $this->passwords = $passwords;

        return $this;
    }

    /**
     * Get the value of dob
     */
    public function getnumeros()
    {
        return $this->numeros;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setnumeros($numeros)
    {
        $this->numeros = $numeros;

        return $this;
    }

    public function getrole()
    {
        return $this->role;
    }

    /**
     * Set the value of addresse
     *
     * @return  self
     */
    public function setrole($role)
    {
        $this->role = $role;

        return $this;
    }
}
