<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="Website icon" type="png" href="../upload/logo head.PNG " width="40px" height="40px">

        <title>CreArt'Com</title>
        <link href="affichagepubdesign.css" rel="stylesheet" />
        <link href="pubadddesign.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body style="background-color: #2c3845;">
    <style>
               body {
  background-image: url('bkg.PNG');
  background-repeat: no-repeat;
  background-size: 1550px 650px;

}
    </style>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" action="" method="GET">
                <div class="input-group">
                    <input class="form-control" type="text" name="Nom_Domaine" id="idDomaine" placeholder="Enter Nom_Domaine" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button type="submit" value="Search" class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>

              
                                             
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">
                            <a href="index.html"><img src="../upload/logo ecrit.png" width="190px" height="50px"></a>

                            </div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Acceuil
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="utilisateur.php">utilisateur</a>
                                   
                                </nav>
                            </div>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="domaine.php">domaine</a>
                                   
                                </nav>
                            </div>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="Publication.php">Publication</a>
                                   
                                </nav>
                            </div>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="event.php">event</a>
                                   
                                </nav>
                            </div>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="Feedback.php">Feedback</a>
                                   
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.php">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                      
                                </nav>
                            </div>
                       
                           
                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">

                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                       
                                                            <!-- add domaine -->
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
                                                }
                                            } else
                                                $error = "Missing information";
                                        }


                                        ?>
                        <table >
                            <tr><center>
                                    <table >
                                        
                                            <thead>
                                                <th style="color: #fff;"><center> <h1>ajouter Domaine </h1></center></th>
                                                <th>&emsp;&emsp;&emsp;&emsp;</th>
                                                <th> CreArt'Com </th>
                                            </thead>
                                            <tbody>
                                        <tr>
                                            <td>

                                                            <div id="error">
                                                            <?php echo $error; ?>
                                                            </div>





                                                       
                                                <div class="contact-form" style="width: 400px;">
                                                <form action="" method="POST"  enctype="multipart/form-data" > 
                                                   
                                                <label for="Nom_Domaine">nom domaine:</label>
                                                <input type="text" name="Nom_Domaine" id="Nom_Domaine" maxlength="20" required="" style="width: 300px;">

                                                <label for="description_d">description description</label>
                                                <input type="text" name="description_d" id="description_d"required="" style="width: 300px;">

                                              

                                                <label for="imageD">image descriptif</label>
                                                <input type="file" name="imageD" id="imageD" required="">


                                                <button type="submit" value="Save" style="width: 300px;">submit</button>
                                                <button type="reset" value="Reset" style="width: 300px; background-color: royalblue; color:#fff;" >reset</button>
                                                </form>
                                            </td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;</td>
                                            <td>
                                            &emsp;&emsp;&emsp;&emsp;     
                                             <center><img src="../upload/logo final transparant.png" width="500px" height="500px"></center>

                                          
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </tr>
                            <tr>
                               <!-- voir tous les domaine  -->
                              
                                <center>
                                            <hr style="color: #fff; ">
                                        <span class="heading" style="color: #fff;"><h1>liste des Domaine</h1></span>
                                        <hr>

                                                    <?php
                                                        $DomaineC = new DomaineC();

                                                        if (isset($_GET['Nom_Domaine']) && !empty($_GET['Nom_Domaine'])) {
                                                            $liste = $DomaineC->showDomaine2($_GET['Nom_Domaine']);
                                                        } else {
                                                            $liste = $DomaineC->listDomaines();
                                                        }
                                                        ?>
                                          
                                                        <?php
                                                    foreach ($liste as $Domaine) {
                                                    ?>
                                                                    <table>
                                                                        <tr>
                                                                            <td>
                                                                            <div class="cookie-card" style="width: 650px;">
                                                    <span class="title"><?= $Domaine['idDomaine']; ?>⭐<?= $Domaine['Nom_Domaine']; ?></span>
                                                    <p class="description"><?= $Domaine['description_d']; ?>
                                                    <br>
                                                    <div class="actions">
                                                   
                                                    <form method="POST" action="updateDomaine.php">
                                                                    <input type="submit" name="update" value="Update" style="color:limegreen">
                                                                    <input type="hidden" value=<?PHP echo $Domaine['idDomaine']; ?> name="idDomaine">
                                                                </form>
                                                                <button class="accept">
                                                    <a href="deleteDomaine.php?idDomaine=<?php echo $Domaine['idDomaine']; ?>" style="color: red;" >Delete</a>
                                                    </button>
                                                  
                                                    </div>
                                                    </div>
                                                        </td>
                                                        <td><img src="../storage/images/<?= $Domaine['imageD']; ?>" width="160px" height="160px" ></td>
                                                    </tr>
                                                    </table> 
                                                    <br>
                                                    <hr> 
                                                    <?php
                                                    }
                                                    ?>

                                </center>
                        </center>
                            </tr>
                        </table>
                        


                        <hr>
                        <div style="height: 100vh"></div>
                        <div class="card mb-4"><div class="card-body">Meilleur projet web 2A29 2023 - nom de groupe CAC : CreArt'Com. communiquer avec votre communité</div></div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; CAC-2A29</div>
                            <div>
                    CreArt'Com
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
