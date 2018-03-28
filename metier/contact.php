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

    //VERIFICATION TELEPHONE
    /* numeric, decimal passes */
    private function validate_numeric($telephone)
    {
        return is_numeric($telephone);
    }

    /* digits only */
    private function is_digits($telephone)
    {
        return !preg_match("/[^0-9]/", $telephone);
    }
  
    private function lengthDigit($digit)
    {
        return strlen($digit);
    }
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }

    public function setIdContact($idContact)
    {
        try{
            if (isset($idContact) && intval($idContact)===0) {
                throw new Exception("Erreur");
            } else {
                $this->idContact = $idContact;
            }

        }
        catch(Exception $e)
        {
var_dump($e->getMessage());
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
     /**Verification de la taille, des caractères et détermine si la variable est un type numérique */
     public function setTelContact($telContact)
     {
         try{
             if ($this->validate_numeric($telContact)&& $this->lengthDigit($telContact)===10 && $this->is_digits($telContact)) {
                 $this->telContact = $telContact;
                  } else {
                 throw new Exception("Veuillez saisir un numéro valide");
         
                  }
 
         }
         catch(Exception $e)
         {
 var_dump($e->getMessage());
         }
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
