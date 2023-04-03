<?php

include '../Controller/eventC.php';

$error = "";

// create event
$event = null;

// create an instance of the controller
$eventC = new eventC();
if (
    isset($_POST["Nom_event"]) &&
    isset($_POST["description_e"]) &&
    isset($_POST["address"]) &&
    isset($_POST["time_e"])
) {
    if (
        !empty($_POST['Nom_event']) &&
        !empty($_POST["description_e"]) &&
        !empty($_POST["address"]) &&
        !empty($_POST["time_e"])
    ) {
        $event = new event(
            null,
            $_POST['Nom_event'],
            $_POST['description_e'],
            $_POST['address'],
            new DateTime($_POST['time_e'])
        );
        $eventC->addevent($event);
        header('Location:Listevents.php');
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
    <a href="Listevents.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="1" align="center">
       
            <tr>
                <td>
                    <label for="Nom_event">nom de l'évenement:
                    </label>
                </td>
                <td><input type="text" name="Nom_event" id="Nom_event" maxlength="20"></td>
            </tr>
            <tr>
            
                <td>
                    <label for="address">description event:
                    </label>
                </td>
                <td><input type="text" name="description_e" id="description_e" maxlength="20"></td>
            </tr>
            
            <tr>
                <td>
                    <label for="description_e">Address:
                    </label>
                </td>
                <td>
                    <input type="text" name="address" id="address">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="time_e">Date de l'evennement:
                    </label>
                </td>
                <td>
                    <input type="date" name="time_e" id="time_e">
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