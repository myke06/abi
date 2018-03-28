<?php

class Client
{
    private $idClient;
    private $raisonSociale;
    private $nature;
    private $type;
    private $adresse;
    private $ville;
    private $codePostal;
    private $telephone;
    private $ca;
    private $effectif;
    private $commentaire;

    public function __constructor()
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

    public function setRaisonSociale($raisonSociale)
    {
        $this->raisonSociale =$raisonSociale;
    }

    public function setNature($nature)
    {
        $this->nature = $nature;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;
    }
     /**Verification Code Postal */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
        $check = "/^([0-9]{5})$/";
        if (preg_match($check, $codePostal)===1) {
            $this->codePostal = $codePostal;
        } else {
            throw new Exception("Ce code postal n'est pas valable");
        }
    }
      /**Verification de la taille, des caractères et détermine si la variable est un type numérique */
    public function setTelephone($telephone)
    { 
        if ($this->validate_numeric($telephone)&& $this->lengthDigit($telephone)===10 && $this->is_digits($telephone)) {
        $this->telephone = $telephone;
    } else {
        throw new Exception("Veuillez saisir un numéro valide");
    }
    }



    public function setCa($ca)
    {
        if (!is_numeric($ca)) {
            throw new Exception(" Le chiffre d'affaire ne peut être que des chiffres ");
        } else {
        $this->ca = $ca;
        }
    }


    public function setEffectif($effectif)
    {
        if ($effectif<=0) {
            throw new Exception("L'effectif ne peut pas être égal à 0 ");
        } elseif (!is_numeric($effectif)) {
            throw new Exception("L'effectif n'est pas un nombre entier");
        } else {
        $this->effectif =$effectif;
        }
        
    }

    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    }


    public function getIdClient()
    {
        return $this->idClient;
    }
    public function getRaisonSociale()
    {
        return $this->raisonSociale;
    }
    public function getNature()
    {
        return $this->nature;
    }
    public function getType()
    {
        return $this->type;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function getVille()
    {
        return $this->ville;
    }
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function getCa()
    {
        return $this->ca;
    }
    public function getEffectif()
    {
        return $this->effectif;
    }
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    public function __toString()
    {
        return $this->raisonSociale;
    }
}
