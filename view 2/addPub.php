<?php

include '../Controller/PubC.php';

$error = "";



// create Pub
$Pub = null;

// create an instance of the controller
$PubC = new PubC();
if (
    isset($_POST["Nom_p"]) &&
    isset($_POST["statut"]) &&
    isset($_POST["description_p"]) &&
    isset($_POST["domaine_p"])
) {
    if (
        !empty($_POST['Nom_p']) &&
        !empty($_POST["statut"]) &&
        !empty($_POST["description_p"]) &&
        !empty($_POST['domaine_p']) &&
        !empty($_FILES['image']) 
    ) {
        $image = $_FILES['image'];

        $image_path = PubC::upload($image);
        if ($image_path == "Sorry, there was an error uploading your file."){
            $error = "Sorry, there was an error uploading your file.";
        }else {
            $Pub = new Pub(
                null,
                $_POST['Nom_p'],
                $_POST['statut'],
                $_POST['description_p'],
                $_POST['domaine_p'],
                $image_path
            );
            $PubC->addPub($Pub);
            header('Location:ListPubs.php');
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
    <a href="ListPubs.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST"  enctype="multipart/form-data">
        <table border="1" align="center">

            <tr>
                <td>
                    <label for="Nom_p">nom:
                    </label>
                </td>
                <td><input type="text" name="Nom_p" id="Nom_p" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="statut">statut:
                    </label>
                </td>
                <td><input type="text" name="statut" id="statut" maxlength="300"></td>
            </tr>
            <tr>
                <td>
                    <label for="description_p">description_p:
                    </label>
                </td>
                <td>
                    <input type="text" name="description_p" id="description_p">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="domaine_p">domaine_p:
                    </label>
                </td>
                <td><input type="text" name="domaine_p" id="domaine_p" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="image">Image:
                    </label>
                </td>
                <td>
                    <input type="file" name="image" id="image">
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