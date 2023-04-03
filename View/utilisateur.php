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
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
<!-- <link rel="stylesheet" href="./deletecss.css"> -->

    </head>
    <body style="background-color: #2c3845;">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
           



            <form action="" method="GET" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Enter firstName" aria-label="Search for..." name="firstName" id="firstName" aria-describedby="btnNavbarSearch" />
                    <button input type="submit" value="Search" class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
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
                                <a href="index.html">
                            <img src="../upload/logo ecrit.png" width="190px" height="50px" >
                            </a>
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
                  <div >
                    
 
                    
<!-- search -->
<?php
include '../Controller/ClientC.php';

$ClientC = new ClientC();

if (isset($_GET['firstName']) && !empty($_GET['firstName'])) {
    $liste = $ClientC->showClient2($_GET['firstName']);
} else {
    $liste = $ClientC->listClients();
}
?>
 

    <center>
        <h1 style="color: #fff;">utilisateur trouvé</h1>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
        <th style="color:lightslategray">Id Client</th>
            <th style="color:lightslategray">First Name</th>
            <th style="color:lightslategray">Last Name</th>
            <th style="color:lightslategray">addresse</th>
            <th style="color:lightslategray">Date of Birth</th>
            <th style="color:lightslategray">genre</th>
            <th style="color:lightslategray">age</th>
            <th style="color:lightslategray">passwords</th>
            <th style="color:lightslategray">numeros</th>
            <th style="color:lightslategray">role</th>
            <th style="color:lightslategray">Update</th>
            <th style="color:lightslategray">Delete</th>
            

         



  
        </tr>
        <?php
        foreach ($liste as $Client) {
        ?>
            <tr>
                <td style="color: #fff;"><?= $Client['idClient']; ?></td>
                <td style="color: #fff;"><?= $Client['firstName']; ?></td>
                <td style="color: #fff;"><?= $Client['lastName']; ?></td>
                <td style="color: #fff;"><?= $Client['addresse']; ?></td>
                <td style="color: #fff;"><?= $Client['dob']; ?></td>
                <td style="color: #fff;"><?= $Client['genre']; ?></td>
                <td style="color: #fff;"><?= $Client['age']; ?></td>
                <td style="color: #fff;"><?= $Client['passwords']; ?></td>
                <td style="color: #fff;"><?= $Client['numeros']; ?></td>
                <td style="color: #fff;"><?= $Client['role']; ?></td>
                <td align="center">
                    <form method="POST" action="updateClient.php">
                        <input type="submit" name="update" value="Update" style="color:limegreen">
                        <input type="hidden" value=<?PHP echo $Client['idClient']; ?> name="idClient">
                    </form>
                </td>
                <td>
                    <a style="color: crimson;" href="deleteClient.php?idClient=<?php echo $Client['idClient']; ?>">Delete</a>
                </td>
            </tr>
                
            </tr>
        <?php
        }
        ?>
    </table>



                  <?php
$clientC = new ClientC();
$list = $clientC->listClients();
?>

<!-- --search---- -->


<center>
        <h1 style="color: #fff;">Tous les utilisateurs</h1>
        
    </center>
    &nbsp;&nbsp;&nbsp;&nbsp;<a style="color:blanchedalmond" href="register.php" > ajout utilisateur</a>
    <br><br>
    

<!-- partial:index.partial.html -->


<main>
  <table>
    <thead>
      <tr>
         <th>Id Client</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>addresse</th>
            <th>Date of Birth</th>
            <th>genre</th>
            <th>age</th>
            <th>passwords</th>
            <th>numeros</th>
            <th>role</th>
            <th>Update</th>
            <th>Delete</th>
      </tr>
    </thead>
    <?php
        foreach ($list as $client) {
        ?>
    <tbody style="color: #fff;">
      
      <tr>
        <td data-title='E-mail'>
        <?= $client['idClient']; ?>
        </td>
        <td data-title='E-mail'>
        <?= $client['firstName']; ?>
        </td>
        <td data-title='E-mail'>
        <?= $client['lastName']; ?>
        </td>
        <td data-title='E-mail'>
        <?= $client['addresse']; ?>
        </td>
        <td data-title='E-mail'>
        <?= $client['dob']; ?>
        </td>
        <td data-title='E-mail'>
          <?= $client['genre']; ?>
        </td>
        <td data-title='E-mail'>
        <?= $client['age']; ?>
        </td>
        <td data-title='E-mail'>
        <?= $client['passwords']; ?>
        </td>
        <td data-title='E-mail'>
        <?= $client['numeros']; ?>
        </td>
        <td data-title='E-mail'>
        <?= $client['role']; ?>
        </td>
        <td class='select' >
        <form method="POST" action="updateClient.php" >
                        <input style="color:limegreen" type="submit" name="update" value="Update" >
                        <input type="hidden" value=<?PHP echo $client['idClient']; ?> name="idClient">
                    </form>
        </td>
        <td class='select'>
          
          
          
         <button style="border-color: red;" class="noselect"><span class="text"><a href="deleteClient.php?idClient=<?php echo $client['idClient']; ?>" style="color: crimson;">Delete</a></span><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"></path></svg></span></button>
        </td>
        
      </tr>
      <?php
        }
        ?>
     
      
    </tbody>
  </table>
  
  
</main>


<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>
  </body>




                  </div>
            <div id="layoutSidenav_content">
                <main>
                    <!-- <div class="container-fluid px-4">
        
                        
                        <div style="height: 100vh"></div>
                        <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the page domaine.</div></div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; CAC-2A29</div>
                            <div>
                    CreArt'Com
                            </div> -->
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
