<?php
include '../config1.php';
include '../Model/Client.php';

class ClientC
{
    public function listClients()
    {
        $sql = "SELECT * FROM client";
        $db = config1::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteClient($id)
    {
        $sql = "DELETE FROM client WHERE idClient = :id";
        $db = config1::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addClient($client)
    {
        $sql = "INSERT INTO client  
        VALUES (NULL, :fn,:ln, :ad,:dob, :fag ,:lag, :adp,:numeros,:adpp)";
        $db = config1::getConnexion();
        try {
            print_r($client->getDob()->format('Y-m-d'));
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $client->getFirstName(),
                'ln' => $client->getLastName(),
                'ad' => $client->getaddresse(),
                'dob' => $client->getDob()->format('Y/m/d'),
                'fag' => $client->getgenre(),
                'lag' => $client->getage(),
                'adp' => $client->getpasswords(),
                'numeros' => $client->getnumeros(),
                'adpp' => $client->getrole()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateClient($client, $id)
    {
        try {
            $db = config1::getConnexion();
            $query = $db->prepare(
                'UPDATE client SET 
                    firstName = :firstName, 
                    lastName = :lastName, 
                     addresse = :addresse, 
                       dob = :dob,
                       genre = :genre, 
                       age = :age, 
                      passwords= :passwords, 
                       numeros = :numeros,
                       role= :role
                WHERE idClient= :idClient'
            );
            $query->execute([
                'idClient' => $id,
                'firstName' => $client->getFirstName(),
                'lastName' => $client->getLastName(),
                'addresse' => $client->getaddresse(),
                'dob' => $client->getDob()->format('Y/m/d'),
                'genre' => $client->getgenre(),
                'age' => $client->getage(),
                'passwords' => $client->getpasswords(),
                'numeros' => $client->getnumeros(),
                'role' => $client->getrole()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showClient($id)
    {
        $sql = "SELECT * from client where idClient = $id";
        $db = config1::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $client = $query->fetch();
            return $client;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    function showClient2($id)
    {
        $sql = "SELECT * FROM Client WHERE firstName LIKE '%" . $id . "%'";
        $db = config1::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $Clients = $query->fetchAll();
            return $Clients;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
