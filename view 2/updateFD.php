<?php

include '../Controller/FDC.php';

$error = "";

// create FD
$FD = null;

// create an instance of the controller
$FDC = new FDC();
if (
    isset($_POST["idFD"]) &&
    isset($_POST["proposition"]) &&
    isset($_POST["reclamation"]) &&
    isset($_POST["avis"]) 
   
) {
    if (
        !empty($_POST["idFD"]) &&
        !empty($_POST['proposition']) &&
        !empty($_POST["reclamation"]) &&
        !empty($_POST["avis"]) 
        
    ) {
        $FD = new FD(
            $_POST['idFD'],
            $_POST['proposition'],
            $_POST['reclamation'],
            $_POST['avis']
            
        );
        $FDC->updateFD($FD, $_POST["idFD"]);
        header('Location:ListFDs.php');
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
    <button><a href="ListFDs.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idFD'])) {
        $FD = $FDC->showFD($_POST['idFD']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idFD">Id FD:
                        </label>
                    </td>
                    <td><input type="text" name="idFD" id="idFD" value="<?php echo $FD['idFD']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="proposition">reclamation:
                        </label>
                    </td>
                    <td><input type="text" name="proposition" id="proposition" value="<?php echo $FD['proposition']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="reclamation">proposition:
                        </label>
                    </td>
                    <td><input type="text" name="reclamation" id="reclamation" value="<?php echo $FD['reclamation']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="avis">avis:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="avis" value="<?php echo $FD['avis']; ?>" id="avis">
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