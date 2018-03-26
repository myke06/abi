<?php

class cnsDao
{
    private static function connect()
    {
        try {
            $mysqlPDO = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('<h1>Erreur de connexion: </h1>' . $e->getMessage());
        }
        return $mysqlPDO;
    }


    private static function disconnect($mysqlPDO)
    {
        unset($mysqlPDO);
    }



    public static function existLogin($email, $password)
    {
        $mysqlPDO = cnsDao::connect();
        $sql = "select * from user where MAIL_USER= ? and PWD_USER= ? " ;

        $rs = $mysqlPDO->prepare($sql);

        $rs->execute(array($email, $password));

        $data=$rs->fetchAll();

        $nombre = count($data);

        $rs->closeCursor();
        cnsDao::disconnect($mysqlPDO);

        return ($nombre != 0);
    }



    public static function getGroupUser($email)
    {
        $mysqlPDO = cnsDao::connect();

        $sql = "select USERGROUP from user where MAIL_USER=?";

        $rs = $mysqlPDO->prepare($sql);
        $rs->execute(array($email));
        $data=$rs->fetch(PDO::FETCH_ASSOC);
        $group = $data['USERGROUP'];
        $rs->closeCursor();
        cnsDao::disconnect($mysqlPDO);
        return $group;
    }


    public static function ListeClients()
    {
        $mysqlPDO = cnsDAO::connect();
        $sql = 'SELECT * from client;';
        try {
            $rs = $mysqlPDO->prepare($sql);

            $rs->execute();

            $data=$rs->fetchAll();

            $rs->closeCursor();
            cnsDAO::disconnect($mysqlPDO);
        } catch (Exception $e) {
            die('<h1>Erreur de lecture en base de données : </h1>' .$e->getMessage());
        }

        return $data;
    }

    public static function getClientById($idClient)
    {
        $mysqlPDO = cnsDao::connect();

        $sql = 'select
              ID_CLIENT,
              RAISON_SOCIALE,
              TELEPHONE,
              CA,
              EFFECTIF,
              VILLE,
              CODE_POSTAL,
              NOM_NATURE,
              TYPE_SOCIETE,
              ADRESSE_DU_CLIENT,
              COMMENTAIRE,
              ID_CLIENT
              from client
              where ID_CLIENT ='.$idClient.';';

        try {
            $result =$mysqlPDO->prepare($sql);
            $result->execute();
            $data=$result->fetch(PDO::FETCH_ASSOC);
            if ($data["NOM_NATURE"]==="principale") {
                $data["NOM_NATURE"]="Principale";
            }
            if ($data["TYPE_SOCIETE"]==="prive") {
                $data["TYPE_SOCIETE"]="Privé";
            }
            $result->closeCursor();
            cnsDao::disconnect($mysqlPDO);
            return $data;
        } catch (Exception $e) {
            die('<h1>Erreur de lecture du Client'.$idClient.'en base de données : </h1>'.$e->getMessage());
        }
    }

    public static function getContactById($idContact)
    {
        $mysqlPDO = cnsDao::connect();

        $sql = 'select
              ID_CLIENT,
              NOM_CONTACT,
              PRENOM_CONTACT,
              TEL_CONTACT,
              FONCTION_CONTACT,
              ID_CONTACT_CLIENT
              from contacts
              where ID_CONTACT_CLIENT =' . $idContact . ';';

        try {
            $result =$mysqlPDO->prepare($sql);
            $result->execute();
            $contact=$result->fetch(PDO::FETCH_ASSOC);

            $result->closeCursor();
            cnsDao::disconnect($mysqlPDO);
            return $contact;
        } catch (Exception $e) {
            die('<h1>Erreur de lecture du Contact' . $idContact . 'en base de données : </h1>'.$e->getMessage());
        }
    }

    public static function getContactsList($idClient)
    {
        $mysqlPDO = cnsDao::connect();


        $sql="select contacts.ID_CLIENT, ID_CONTACT_CLIENT, NOM_CONTACT, PRENOM_CONTACT, TEL_CONTACT, FONCTION_CONTACT from contacts inner join client on contacts.ID_CLIENT = client.ID_CLIENT where contacts.ID_CLIENT=$idClient;";

        try {
            $rs=$mysqlPDO->prepare($sql);
            $rs->execute();
            $contacts=$rs->fetchAll();
            $rs->closeCursor();
            cnsDao::disconnect($mysqlPDO);
        } catch (Exception $e) {
            die('<h1>Erreur de lecture en base de données : </h1>'. $e->getMessage());
        }

        return $contacts;
    }

    public static function AjouterClient(&$client)
    {
        $mysqlPDO = cnsDao::connect();

        $sql = "insert into client (CA,
                                    EFFECTIF,
                                    RAISON_SOCIALE,
                                    CODE_POSTAL,
                                    VILLE,
                                    TELEPHONE,
                                    NOM_NATURE,
                                    TYPE_SOCIETE,
                                    ADRESSE_DU_CLIENT,
                                    COMMENTAIRE)
                                    values(
                                      :ca,
                                      :effectif,
                                      :raisonSociale,
                                      :codePostal,
                                      :ville,
                                      :telephone,
                                      :nature,
                                      :type,
                                      :adresse,
                                      :commentaire)";

        try {
            $statement =$mysqlPDO->prepare($sql);
            $mysqlPDO->beginTransaction();
            $statement->execute(array(':ca'=>$client->getCa(),
                                    ':effectif'=>$client->getEffectif(),
                                    ':raisonSociale'=>$client->getRaisonSociale(),
                                    ':codePostal'=>$client->getCodePostal(),
                                    ':ville'=>$client->getVille(),
                                    ':telephone'=>$client->getTelephone(),
                                    ':nature'=>$client->getNature(),
                                    ':type'=>$client->getType(),
                                    ':adresse'=>$client->getAdresse(),
                                    ':commentaire'=>$client->getCommentaire()));

            $client->setIdClient($mysqlPDO->lastInsertId());
            $mysqlPDO->commit();
            $nombre= $statement->rowCount();
            $statement->closeCursor();
            cnsDao::disconnect($mysqlPDO);

            return $nombre;
        } catch (PDOException $e) {
            $mysqlPDO->rollBack();
            return $e->getMessage();
        }
    }

    public static function AjouterContact(&$contact)
    {
        $mysqlPDO = cnsDao::connect();

        $sql = "insert into contacts (NOM_CONTACT, PRENOM_CONTACT, TEL_CONTACT, FONCTION_CONTACT, ID_CLIENT) values(:nomContact, :prenomContact, :telContact, :fonctionContact, :idClient)";

        $statement =$mysqlPDO->prepare($sql);

        try {
            $mysqlPDO->beginTransaction();
            $statement->execute(array(':nomContact'=>$contact->getNomContact(),
                                    ':prenomContact'=>$contact->getPrenomContact(),
                                    ':telContact'=>$contact->getTelContact(),
                                    ':fonctionContact'=>$contact->getFonctionContact(),
                                    ':idClient'=>$contact->getIdClient()));

            $contact->setIdContact($mysqlPDO->lastInsertId());
            $mysqlPDO->commit();
            $nombre= $statement->rowCount();
            $statement->closeCursor();
            cnsDao::disconnect($mysqlPDO);

            return $nombre;
        } catch (PDOException $e) {
            $mysqlPDO->rollBack();
            return 0;
        }
    }
}
