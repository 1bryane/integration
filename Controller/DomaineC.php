<?php
include '../config3.php';
include '../Model/Domaine.php';

class DomaineC
{
    public function listDomaines()
    {
        $sql = "SELECT * FROM Domaine";
        $db = config3::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteDomaine($id)
    {
        $sql = "DELETE FROM Domaine WHERE idDomaine = :id";
        $db = config3::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addDomaine($Domaine)
    {
        $sql = "INSERT INTO Domaine  
        VALUES (NULL, :fn,:ln,:img)";
        $db = config3::getConnexion();
        try {
           
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $Domaine->getNom_Domaine(),
                'ln' => $Domaine->getdescription_d(),
                'img' => $Domaine->getImageD()
      
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateDomaine($Domaine, $id)
    {
        try {
            $db = config3::getConnexion();
            if ($Domaine->getImageD() == null ) {
                $query = $db->prepare(
                    'UPDATE Domaine SET 
                        Nom_Domaine = :Nom_Domaine, 
                        description_d = :description_d, 
                    WHERE idDomaine= :idDomaine'
                );
                
                $query->execute([
                    'idDomaine' => $id,
                    'Nom_Domaine' => $Domaine->getNom_Domaine(),
                    'description_d' => $Domaine->getdescription_d()
                ]);
            }
            else {

                $query = $db->prepare(
                    'UPDATE Domaine SET 
                        Nom_Domaine = :Nom_Domaine, 
                        description_d = :description_d, 
                        `imageD`=:img
                    WHERE idDomaine= :idDomaine'
                );
                echo $Domaine->getImageD();                
                $query->execute([
                    'idDomaine' => $id,
                    'Nom_Domaine' => $Domaine->getNom_Domaine(),
                    'description_d' => $Domaine->getdescription_d(),
                    'img' => $Domaine->getImageD(),
                ]);
            }
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showDomaine($id)
    {
        $sql = "SELECT * from Domaine where idDomaine = $id";
        $db = config3::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $Domaine = $query->fetch();
            return $Domaine;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    function showDomaine2($id)
    {
        $sql = "SELECT * FROM Domaine WHERE Nom_Domaine LIKE '%" . $id . "%'";
        $db = config3::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $Domaines = $query->fetchAll();
            return $Domaines;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    //function to upload image
    public static function upload($imageD){
        $target_dir = "../storage/images/";
        $target_file = $target_dir . basename($imageD["name"]);
        $uploadOk = 0;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        $check = getimagesize($imageD["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        
    
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
    
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            return "Sorry, there was an error uploading your file.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($imageD["tmp_name"], $target_file)) {
                return htmlspecialchars( basename( $imageD["name"]));
                echo "The file ". htmlspecialchars( basename( $imageD["name"])). " has been uploaded.";
            } else {
                return "Sorry, there was an error uploading your file.";
    
            }
        }
    }
}
