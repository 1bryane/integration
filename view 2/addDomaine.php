<?php

include '../Controller/DomaineC.php';

$error = "";

// create Domaine
$Domaine = null;

// create an instance of the controller
$DomaineC = new DomaineC();
if (
    isset($_POST["Nom_Domaine"]) &&
    isset($_POST["description_d"]) 
)  {
    if (
        !empty($_POST['Nom_Domaine']) &&
        !empty($_POST["description_d"]) &&
        !empty($_FILES['imageD']) 
    ) {
        $imageD = $_FILES['imageD'];

        $imageD_path = DomaineC::upload($imageD);
        if ($imageD_path == "Sorry, there was an error uploading your file."){
            $error = "Sorry, there was an error uploading your file.";
        }else {
            $Domaine = new Domaine(
                null,
                $_POST['Nom_Domaine'],
                $_POST['description_d'],

                $imageD_path
            );
            $DomaineC->addDomaine($Domaine);
            header('Location:ListDomaines.php');
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

<body>
    <a href="ListDomaines.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST" enctype="multipart/form-data">
        <table border="1" align="center">
       
            <tr>
                <td>
                    <label for="Nom_Domaine">nom de l'évenement:
                    </label>
                </td>
                <td><input type="text" name="Nom_Domaine" id="Nom_Domaine" maxlength="20"></td>
            </tr>
            <tr>
            
                <td>
                    <label for="Domaine">description Domaine:
                    </label>
                </td>
                <td><input type="text" name="description_d" id="description_d" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="imageD">Image:
                    </label>
                </td>
                <td>
                    <input type="file" name="imageD" id="imageD">
                </td>
            </tr>
           
            <tr align="center">
                <td>
                    <input type="submit" value="Save">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>