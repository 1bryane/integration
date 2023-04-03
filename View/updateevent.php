<?php

include '../Controller/eventC.php';

$error = "";

// create event
$event = null;

// create an instance of the controller
$eventC = new eventC();
if (
    isset($_POST["idevent"]) &&
    isset($_POST["Nom_event"]) &&
    isset($_POST["description_e"]) &&
    isset($_POST["address"]) &&
    isset($_POST["time_e"])
) {
    if (
        !empty($_POST["idevent"]) &&
        !empty($_POST['Nom_event']) &&
        !empty($_POST["description_e"]) &&
        !empty($_POST["address"]) &&
        !empty($_POST["time_e"])
    ) {
        $event = new event(
            $_POST['idevent'],
            $_POST['Nom_event'],
            $_POST['description_e'],
            $_POST['address'],
            new DateTime($_POST['time_e'])
        );
        $eventC->updateevent($event, $_POST["idevent"]);
        header('Location:event.php');
    } else
        $error = "Missing information";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
    <link rel="Website icon" type="png" href="../upload/logo head.PNG " width="40px" height="40px">

</head>

<body  style="background-color: #2c3845;">
    <button style="background-color: darkcyan;"><a href="event.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idevent'])) {
        $event = $eventC->showevent($_POST['idevent']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idevent" style="color:red;">Id event:
                        </label>
                    </td>
                    <td><input type="text" name="idevent" id="idevent" value="<?php echo $event['idevent']; ?>" maxlength="20"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="Nom_event" style="color:red;">nom de l'evennement:
                        </label>
                    </td>
                    <td><input type="text" name="Nom_event" id="Nom_event" value="<?php echo $event['Nom_event']; ?>" maxlength="20"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="address" style="color:red;">adress:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="address" value="<?php echo $event['address']; ?>" id="address">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="description_e" style="color:red;">descriptin event:
                        </label>
                    </td>
                    <td><input type="text" name="description_e" id="description_e" value="<?php echo $event['description_e']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="time_e" style="color:red;">Date of event:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="time_e" id="time_e" value="<?php echo $event['time_e']; ?>">
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