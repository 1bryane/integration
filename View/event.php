<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CreArt'Com</title>
        <link rel="Website icon" type="png" href="../upload/logo head.PNG " width="40px" height="40px">
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="reclamation.css">
        <link rel="stylesheet" href="./style.css">
<!-- <link rel="stylesheet" href="./deletecss.css"> -->
        

    </head>
    
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->

            <form action="" method="GET" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">



                <div class="input-group">
                    <input class="form-control" type="text" name="Nom_event" id="Nom_event" placeholder="Enter Nom_event" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="submit" value="Search"><i class="fas fa-search"></i></button>
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
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                                                    <!-- add feedback -->
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
                                                    } else
                                                        $error = "Missing information";
                                                }


                                                ?>
                                
                                    <hr>

                                    <div id="error">
                                        <?php echo $error; ?>
                                    </div>

                                    <form action="" method="POST">
                                    <center>
                                <div class="form">
                                    <div class="subtitle"><h2>Ajout EVENT</h2></div>
                                    <div class="input-container ic1">
                                    <input type="text" name="Nom_event" id="Nom_event" maxlength="200"class="input" placeholder="Nom event"> 
                                    </div>
                                    <div class="input-container ic2">
                                    <input type="text" name="description_e" id="description_e" maxlength="200"class="input" placeholder="description event">
                                        <div class="cut"></div>
                                    </div>
                                    <div class="input-container ic2">
                                    <input type="text" name="address" id="address" maxlength="200"class="input"  placeholder="address">
                                        <div class="cut cut-short"></div>
                                    </div>
                                    <div class="input-container ic2">
                                    <input type="date" name="time_e" id="time_e" maxlength="200"class="input"  placeholder="date event">
                                        <div class="cut cut-short"></div>
                                    </div>
                                    <input type="submit" value="Save"class="submit">
                                    </div>
                                    </center>


                                    </form>
                                    

                               
                                <!-- search fd -->
                                <?php

                                    $eventC = new eventC();

                                    if (isset($_GET['Nom_event']) && !empty($_GET['Nom_event'])) {
                                        $liste = $eventC->showevent2($_GET['Nom_event']);
                                    } else {
                                        $liste = $eventC->listevents();
                                    }
                                ?>
<html>

<head></head>

<body>
<br><br><br>
   
   <center style="color: #fff;"><h1>events cherchés</h1></center>
   <br>
   
    <table border="1" align="center" width="70%">
        <tr>
        <th style="color:lightslategray">Id event</th>
            <th style="color:lightslategray">Nom_event</th>
            <th style="color:lightslategray">description_e</th>
            <th style="color:lightslategray">address</th>
            <th style="color:lightslategray">time_e</th>
            <th style="color:lightslategray">Update</th>
            <th style="color:lightslategray">Delete</th>
  
        </tr>
        <?php
        foreach ($liste as $event) {
        ?>
            <tr>
                <td style="color: #fff;"><?= $event['idevent']; ?></td>
                <td style="color: #fff;"><?= $event['Nom_event']; ?></td>
                <td style="color: #fff;"><?= $event['description_e']; ?></td>
                <td style="color: #fff;"><?= $event['address']; ?></td>
                <td style="color: #fff;"><?= $event['time_e']; ?></td>
                <td class='select' >
              <form method="POST" action="updateevent.php">
           <input type="submit" name="update" value="Update" style="color:limegreen">
             <input type="hidden" value=<?PHP echo $event['idevent']; ?> name="idevent">
                </form>
         </td>
             <td class='select'>
                                        
                                        
                                        
         <button  class="noselect" style="border-color: red;"><span class="text"><a href="deleteevent.php?idevent=<?php echo $event['idevent']; ?>" style="color: crimson;">Delete</a></span>
         <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"></path></svg></span></button>
             </td>
                
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>
<hr>
<br> <br> <br>
                                <center>
                           <h1 style="color: #fff;">List des feedbacks</h1>
                                 </center>
                                <!-- liste fd -->
                                <?php
                                    $eventC = new eventC();
                                    $list = $eventC->listevents();
                                    ?>

                                <table>
                                    <thead>
                                    <tr>
                                    <th>Id event</th>
                                    <th>Nom_event</th>
                                    <th>description_e</th>
                                    <th>address</th>
                                    <th>time_e</th>
                                    <th >Update</th>
                                    <th >Delete</th>
                                    </tr>
                                    </thead>
                                    <?php
                                        foreach ($list as $event) {
                                            ?>
                                        
                                    <tbody style="color: #fff;">
                                    
                                    <tr>
                                        <td data-title='E-mail'>
                                        <?= $event['idevent']; ?>                             
                                    </td>
                                        <td data-title='E-mail'>
                                        <?= $event['Nom_event']; ?>
                                        </td>
                                        <td data-title='E-mail'>
                                        <?= $event['description_e']; ?>
                                        </td>
                                        <td data-title='E-mail'>
                                        <?= $event['address']; ?>
                                        </td>
                                        <td data-title='E-mail'>
                                        <?= $event['time_e']; ?>
                                        </td>
                                    
                                        <td class='select' >
                                        <form method="POST" action="updateevent.php">
                                                        <input type="submit" name="update" value="Update" style="color:limegreen" >
                                                        <input type="hidden" value=<?PHP echo $event['idevent']; ?> name="idevent">
                                                    </form>
                                        </td>
                                        <td class='select'>
                                        
                                        
                                        
                                        <button  class="noselect" style="border-color: red;"><span class="text"><a href="event.php" style="color: crimson;">Delete</a></span><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"></path></svg></span></button>
                                        </td>
                                        
                                    </tr>
                                    <?php
                                        }
                                        ?>
                                    
                                    
                                    </tbody>
                                </table>
                                


                        
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
