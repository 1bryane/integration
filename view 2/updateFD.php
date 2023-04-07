<?php

include '../Controller/FDC.php';

$error = "";

// create FD
$FD = null;

// create an instance of the controller
$FDC = new FDC();
if (
  
    isset($_POST["idFD"]) &&
    isset($_POST["reclamation"]) &&
    isset($_POST["proposition"]) &&
    isset($_POST["avis"]) 
   
) {
    if (
        
        !empty($_POST["idFD"]) &&
        !empty($_POST["reclamation"]) &&
        !empty($_POST['proposition']) &&
        !empty($_POST["avis"]) 
        
    ) {
        $FD = new FD(
            $_POST['idFD'],
            $_POST['reclamation'],
            $_POST['proposition'],
            $_POST['avis']
            
        );
        $FDC->updateFD($FD, $_POST["idFD"]);
        header('Location:feedback.php');
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
    <button style="background-color: darkcyan;"><a href="feedback.php">Back to list</a></button>
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
                        <label for="idFD" style="color:red;">Id FD:
                        </label>
                    </td>
                    <td><input type="text" name="idFD" id="idFD" value="<?php echo $FD['idFD']; ?>" maxlength="21"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="reclamation" style="color:red;">reclamation:
                        </label>
                    </td>
                    <td><input type="text" name="reclamation" id="reclamation" value="<?php echo $FD['reclamation']; ?>" maxlength="22"></td>
                </tr>
                <tr>
                    <td>
                        <label for="proposition" style="color:red;">proposition:
                        </label>
                    </td>
                    <td><input type="text" name="proposition" id="proposition" value="<?php echo $FD['proposition']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="avis" style="color:red;">avis:
                        </label>
                    </td>
                    <td>
                        <select name="avis" value="<?php echo $FD['avis']; ?>"id="avis">
        <option value="exellent!">exellent</option>
        <option value="moyen">moyen</option>
        <option value="bas">bas</option>
    </select>
                    </td>
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