<?php

class Contact
{
    private $idClient;
    private $idContact;
    private $nomContact;
    private $photo;
    private $prenomContact;
    private $telContact;
    private $fonctionContact;


    public function __constructorContact()
    {
    }


    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }

    public function setIdContact($idContact)
    {
        if (isset($idContact) && intval($idContact)===0) {
            throw new Exception("Erreur");
        } else {
            $this->idContact = $idContact;
        }
    }

    public function setNomContact($nomContact)
    {
        $this->nomContact = $nomContact;
    }

    public function setPrenomContact($prenomContact)
    {
        $this->prenomContact = $prenomContact;
    }

    public function setTelContact($telContact)
    {
        $this->telContact = $telContact;
    }

    public function setFonctionContact($fonctionContact)
    {
        $this->fonctionContact = $fonctionContact;
    }



    public function getIdClient()
    {
        return $this->idClient;
    }
    public function getIdContact()
    {
        return $this->idContact;
    }
    public function getNomContact()
    {
        return $this->nomContact;
    }
    public function getPhoto()
    {
        return $this->photo;
    }
    public function getPrenomContact()
    {
        return $this->prenomContact;
    }
    public function getTelContact()
    {
        return $this->telContact;
    }
    public function getFonctionContact()
    {
        return $this->fonctionContact;
    }

    public function __toString()
    {
        return $this->nomContact;
    }
}
