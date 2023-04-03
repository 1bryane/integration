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
    isset($_POST["description"]) 
    
) {
    if (
        !empty($_POST["idPub"]) &&
        !empty($_POST['Nom_p']) &&
        !empty($_POST["statut"]) &&
        !empty($_POST["description"]) 
        
    ) {
        $Pub = new Pub(
            $_POST['idPub'],
            $_POST['Nom_p'],
            $_POST['statut'],
            $_POST['description']
            
        );
        $PubC->updatePub($Pub, $_POST["idPub"]);
        header('Location:acceuil.php');
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
    <button><a href="acceuil.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idPub'])) {
        $Pub = $PubC->showPub($_POST['idPub']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idPub">Id Pub:
                        </label>
                    </td>
                    <td><input type="text" name="idPub" id="idPub" value="<?php echo $Pub['idPub']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Nom_p">nom pub:
                        </label>
                    </td>
                    <td><input type="text" name="Nom_p" id="Nom_p" value="<?php echo $Pub['Nom_p']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="statut">statut:
                        </label>
                    </td>
                    <td><input type="text" name="statut" id="statut" value="<?php echo $Pub['statut']; ?>" maxlength="300"></td>
                </tr>
                <tr>
                    <td>
                        <label for="description">description:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="description" value="<?php echo $Pub['description']; ?>" id="description">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                    <td>
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>