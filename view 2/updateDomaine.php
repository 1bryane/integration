<?php

include '../Controller/DomaineC.php';

$error = "";

// create Domaine
$Domaine = null;

// create an instance of the controller
$DomaineC = new DomaineC();
if (
    isset($_POST["idDomaine"]) &&
    isset($_POST["Nom_Domaine"]) &&
    isset($_POST["description_d"]) 
) {
    if (
        !empty($_POST["idDomaine"]) &&
        !empty($_POST['Nom_Domaine']) &&
        !empty($_POST["description_d"])
    ) {
        if ($_FILES["imaged"]["error"] == 4 ){
            $Domaine = new Domaine(
                $_POST['idDomaine'],
                $_POST['Nom_Domaine'],
                $_POST['description_d']
            );
            $DomaineC->updateDomaine($Domaine, $_POST["idDomaine"]);
            header('Location:domaine.php');
        }else {
            $imageD = $_FILES['imaged'];
            $imageD_path = DomaineC::upload($imageD);
            if ($imageD_path == "Sorry, there was an error uploading your file."){
                $error = $imageD_path;
            }else {
                $Domaine = new Domaine(
                    $_POST['idDomaine'],
                    $_POST['Nom_Domaine'],
                    $_POST['description_d'],

                    $imageD_path
                );
                $DomaineC->updateDomaine($Domaine, $_POST["idDomaine"]);
                header('Location:domaine.php');
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
    <button style="background-color: darkcyan;"><a href="domaine.php" >Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idDomaine'])) {
        $Domaine = $DomaineC->showDomaine($_POST['idDomaine']);

    ?>

        <form action="" method="POST"enctype="multipart/form-data">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idDomaine" style="color:red;">Id Domaine:
                        </label>
                    </td>
                    <td><input type="text" name="idDomaine" id="idDomaine" value="<?php echo $Domaine['idDomaine']; ?>" maxlength="20"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="Nom_Domaine" style="color:red;">nom de l'evennement:
                        </label>
                    </td>
                    <td><input type="text" name="Nom_Domaine" id="Nom_Domaine" value="<?php echo $Domaine['Nom_Domaine']; ?>" maxlength="20"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="description_d" style="color:red;">descriptin Domaine:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="description_d" value="<?php echo $Domaine['description_d']; ?>" id="description_d">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="imageD" style="color:red;">Image:
                        </label>
                    </td>
                    <td><input type="file" name="imaged" id="imageD" ></td>
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