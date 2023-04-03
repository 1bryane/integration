<?php

include '../Controller/PubC.php';

$error = "";

// create Pub
$Pub = null;

// create an instance of the controller
$PubC = new PubC();
if (
    isset($_POST["idPub"]) &&
    isset($_POST["Nom_p"]) &&
    isset($_POST["statut"]) &&
    isset($_POST["description_p"]) &&
    isset($_POST["domaine_p"])
) {
    if (
        !empty($_POST["idPub"]) &&
        !empty($_POST['Nom_p']) &&
        !empty($_POST["statut"]) &&
        !empty($_POST["description_p"]) &&
        !empty($_POST['domaine_p']) 
        
    ) {
        if ($_FILES["image"]["error"] == 4 ){
            $Pub = new Pub(
                $_POST['idPub'],
                $_POST['Nom_p'],
                $_POST['statut'],
                $_POST['description_p'],
                $_POST['domaine_p']
            );
            $PubC->updatePub($Pub, $_POST["idPub"]);
            header('Location:publication.php');
        }else {
            $image = $_FILES['image'];
            $image_path = PubC::upload($image);
            if ($image_path == "Sorry, there was an error uploading your file."){
                $error = $image_path;
            }else {
                $Pub = new Pub(
                    $_POST['idPub'],
                    $_POST['Nom_p'],
                    $_POST['statut'],
                    $_POST['description_p'],
                    $_POST['domaine_p'],
                    $image_path
                );
                $PubC->updatePub($Pub, $_POST["idPub"]);
                header('Location:publication.php');
            }


        }

        
    } else
        $error = "Missing information";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body  style="background-color: #2c3845;">
    <button style="background-color: darkcyan;"><a href="publication.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idPub'])) {
        $Pub = $PubC->showPub($_POST['idPub']);

    ?>

        <form action="" method="POST"  enctype="multipart/form-data">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idPub" style="color:red;">Id Pub:
                        </label>
                    </td>
                    <td><input type="text" name="idPub" id="idPub" value="<?php echo $Pub['idPub']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Nom_p" style="color:red;">nom:
                        </label>
                    </td>
                    <td><input type="text" name="Nom_p" id="Nom_p" value="<?php echo $Pub['Nom_p']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="statut" style="color:red;">statut:
                        </label>
                    </td>
                    <td><input type="text" name="statut" id="statut" value="<?php echo $Pub['statut']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="description_p" style="color:red;">description_p:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="description_p" value="<?php echo $Pub['description_p']; ?>" id="description_p">
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label for="domaine_p" style="color:red;">domaine_p:
                        </label>
                    </td>
                    <td><input type="text" name="domaine_p" id="domaine_p" value="<?php echo $Pub['domaine_p']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="image" style="color:red;">Image:
                        </label>
                    </td>
                    <td><input type="file" name="image" id="image" ></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Update">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
        <center><img src="../upload/logo final transparant.png" width="300px" height="300px"></center>

    <?php
    }
    ?>
</body>

</html>