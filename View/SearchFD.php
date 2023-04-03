<?php
include '../Controller/FDC.php';
$FDC = new FDC();

if (isset($_GET['avis']) && !empty($_GET['avis'])) {
    $liste = $FDC->showFD2($_GET['avis']);
} else {
    $liste = $FDC->listFDs();
}
?>
<html>

<head></head>

<body>

    <div>
        <form action="" method="GET">
            <input type="text" name="avis" id="avis" placeholder="Enter avis">
            <input type="submit" value="Search">
        </form>
    </div>

    <center>
        <h1>List of FDs</h1>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id FD</th>
            <th>reclamation</th>
            <th>proposition</th>
            <th>avis</th>
            
  
        </tr>
        <?php
        foreach ($liste as $FD) {
        ?>
            <tr>
                <td><?= $FD['idFD']; ?></td>
                <td><?= $FD['reclamation']; ?></td>
                <td><?= $FD['proposition']; ?></td>
                <td><?= $FD['avis']; ?></td>
                
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>