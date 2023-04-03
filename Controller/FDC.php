<?php
include '../config2.php';
include '../Model/FD.php';

class FDC
{
    public function listFDs()
    {
        $sql = "SELECT * FROM FD";
        $db = config2::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteFD($id)
    {
        $sql = "DELETE FROM FD WHERE idFD = :id";
        $db = config2::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addFD($FD)
    {
        $sql = "INSERT INTO FD  
        VALUES (NULL, :ln,:fn, :ad)";
        $db = config2::getConnexion();
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'ln' => $FD->getreclamation(),
                'fn' => $FD->getproposition(),
                'ad' => $FD->getavis(),
                
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateFD($FD, $id)
    {
        try {
            $db = config2::getConnexion();
            $query = $db->prepare(
                'UPDATE FD SET 
                    reclamation = :reclamation, 
                    proposition = :proposition,
                    avis = :avis
                WHERE idFD= :idFD'
            );
            $query->execute([
                'idFD' => $id,
                'reclamation' => $FD->getreclamation(),
                'proposition' => $FD->getproposition(),
                'avis' => $FD->getavis()
              
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    function showFD($id)
    {
        $sql = "SELECT * from FD where idFD = $id";
        $db = config2::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $FD = $query->fetch();
            return $FD;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
 
    function showFD2($id)
    {
        $sql = "SELECT * FROM FD WHERE avis LIKE '%" . $id . "%'";
        $db = config2::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $FDs = $query->fetchAll();
            return $FDs;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
