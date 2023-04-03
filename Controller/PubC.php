<?php
include '../config.php';
include '../Model/Pub.php';

class PubC
{
    public function listPubs()
    {
        $sql = "SELECT * FROM Pub";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deletePub($id)
    {
        $sql = "DELETE FROM Pub WHERE idPub = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addPub($Pub)
    {
        $sql = "INSERT INTO Pub  
        VALUES (NULL, :fn,:ln, :ad,:fag,:im)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $Pub->getNom_p(),
                'ln' => $Pub->getstatut(),
                'ad' => $Pub->getdescription_p(),
                'fag' => $Pub->getdomaine_p(),
                'im' => $Pub->getImage()

            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updatePub($Pub, $id)
    {
        try {
            $db = config::getConnexion();
            if ($Pub->getImage() == null ) {
                $query = $db->prepare(
                    'UPDATE Pub SET 
                        Nom_p = :Nom_p, 
                        statut = :statut, 
                        description_p = :description_p, 
                        domaine_p = :domaine_p
                    WHERE idPub= :idPub'
                );
                
                $query->execute([
                    'idPub' => $id,
                    'Nom_p' => $Pub->getNom_p(),
                    'statut' => $Pub->getstatut(),
                    'description_p' => $Pub->getdescription_p(),
                    'domaine_p' => $Pub->getdomaine_p()
                ]);
            }
            else {
                $query = $db->prepare(
                    'UPDATE Pub SET 
                        Nom_p = :Nom_p, 
                        statut = :statut, 
                        description_p = :description_p, 
                        domaine_p = :domaine_p,
                        `image`=:im
                    WHERE idPub= :idPub'
                );
                
                $query->execute([
                    'idPub' => $id,
                    'Nom_p' => $Pub->getNom_p(),
                    'statut' => $Pub->getstatut(),
                    'description_p' => $Pub->getdescription_p(),
                    'domaine_p' => $Pub->getdomaine_p(),
                    'im' => $Pub->getImage(),
                ]);
            }
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showPub($id)
    {
        $sql = "SELECT * from Pub where idPub = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $Pub = $query->fetch();
            return $Pub;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    function showPub2($id)
    {
        $sql = "SELECT * FROM Pub WHERE Nom_p LIKE '%" . $id . "%'";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $Pubs = $query->fetchAll();
            return $Pubs;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    //function to upload image
    public static function upload($image){
        $target_dir = "../storage/images/";
        $target_file = $target_dir . basename($image["name"]);
        $uploadOk = 0;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        $check = getimagesize($image["tmp_name"]);
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
            if (move_uploaded_file($image["tmp_name"], $target_file)) {
                return htmlspecialchars( basename( $image["name"]));
                echo "The file ". htmlspecialchars( basename( $image["name"])). " has been uploaded.";
            } else {
                return "Sorry, there was an error uploading your file.";
    
            }
        }
    }
}
