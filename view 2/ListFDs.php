<?php
include '../Controller/FDC.php';
$FDC = new FDC();
$list = $FDC->listFDs();
?>
<html>

<head></head>

<body>

    <center>
        <h1>List des feedbacks</h1>
        <h2>
            <a href="addFD.php">Add FD</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id FD</th>
            <th>reclamation</th>
            <th>proposition</th>
            <th>avis</th>
          
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $FD) {
        ?>
            <tr>
                <td><?= $FD['idFD']; ?></td>
                <td><?= $FD['reclamation']; ?></td>
                <td><?= $FD['proposition']; ?></td>
                <td><?= $FD['avis']; ?></td>
               
                <td align="center">
                    <form method="POST" action="updateFD.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $FD['idFD']; ?> name="idFD">
                    </form>
                </td>
                <td>
                    <a href="deleteFD.php?idFD=<?php echo $FD['idFD']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>