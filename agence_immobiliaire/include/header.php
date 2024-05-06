
<?php 
include("config.php");
?>
<link rel="stylesheet" href="./css/notification.css" />
<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
            <div class="top-header bg-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="top-contact list-text-white  d-table">
                                <li><a href="#"><i class="fas fa-phone-alt text-success mr-1"></i>+213 111-222-333</a></li>
                                <li><a href="#"><i class="fas fa-envelope text-success mr-1"></i>agence-immobiliere@gmail.com</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <div class="top-contact float-right">
                                <ul class="list-text-white d-table">
								<li><i class="fas fa-user text-success mr-1"></i>
								<?php  if(isset($_SESSION['uemail']))
								{ ?>
								<a href="logout.php">Se déconnecter</a>&nbsp;&nbsp;<?php } else { ?>
								<a href="login.php">Se connecter</a>&nbsp;&nbsp;
								
								| </li>
								<li><i class="fas fa-user-plus text-success mr-1"></i><a href="register.php"> Registre</li><?php } ?>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-nav secondary-nav hover-success-nav py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative" href="index.php"><img class="nav-logo" src="images/logo/restatelg.png" alt=""></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item dropdown"> <a class="nav-link" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Accueille</a></li>
										
										<li class="nav-item"> <a class="nav-link" href="about.php">À propos</a> </li>
										
                                        <li class="nav-item"> <a class="nav-link" href="contact.php">Contact</a> </li>										
										
                                        <li class="nav-item"> <a class="nav-link" href="property.php">Immobilier</a> </li>
                                        
                                        <li class="nav-item"> <a class="nav-link" href="agent.php">Agent</a> </li>

										
										<?php  if(isset($_SESSION['uemail']))
										{ ?>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mon compte</a>
											<ul class="dropdown-menu">
												<li class="nav-item"> <a class="nav-link" href="profile.php">Profile</a> </li>
												<li class="nav-item"> <a class="nav-link" href="feature.php">Votre immobilier</a> </li>
												<li class="nav-item"> <a class="nav-link" href="logout.php">Se déconnecter</a> </li>	
											</ul>
                                        </li>
										<?php } else { ?>
										<li class="nav-item"> <a class="nav-link" href="login.php">Se connecter/Registre</a> </li>
										<?php } ?>
										
                                    </ul>
                                    <?php  
                                    if(isset($_SESSION['utype'])){
                                    $userType = $_SESSION['utype'];
                                    if($userType == "user"){
                                      ?>
									<a class="btn btn-success d-none d-xl-block" style="border-radius:30px;" href="demandeImmobilier.php">Demande Immobilier</a> 

                                    <?php }elseif($userType == "agent") {?>
                                     <a class="btn btn-success d-none d-xl-block" style="border-radius:30px;" href="submitproperty.php">Ajouter Immobilier</a> 
                                     <button type="button" class="icon-button" id="notification-btn">
                                        <span><img src="./images/notify.png" width="15" height="15" alt=""></span>
                                        <span class="icon-button_badge" id="show_notif">
                                            <?php 
                                            
                                            $sql = "select count(*) as count from `demandeimmobilier`";
                                            $result=$con->query($sql);
                                            $rows = array();
                                            if($result->num_rows > 0){
                                                while($userNotification = $result->fetch_assoc()){
                                                    echo ($userNotification['count']);
                                                }
                                                 
                                            } else {
                                                echo "0 results";
                                            }

                                            ?>
                                        </span>
                                     </button>
                                     <div class="notification show rounded bg-success text-white" id="not-list">
                                        <table class="table table-hover">
                                            <tr class="notif">
                                                <td>id</td>
                                                <td>title</td>
                                                <td>price</td>
                                            </tr>
                                            
                                            <?php 
                                                 $sql = "select *  from `demandeimmobilier`";
                                                 $result=$con->query($sql);
                                                
                                                 if($result->num_rows > 0){
                                                     while($userNotification = $result->fetch_assoc()){?>
                                                        <tr>
                                                            <td>
                                                            <?php echo '<a href="notificationDetails.php?id=' . $userNotification["id"] . '">'. $userNotification
                                                            ["id"] . '</a>' ?>
                                                            </td>
                                                            <td>

                                                            <?php echo '<a href="notificationDetails.php?id=' . $userNotification["id"] . '">'. $userNotification
                                                            ["title"] . '</a>' ?>

                                                            </td>
                                                            <td>
                                                            <?php echo '<a href="notificationDetails.php?id=' . $userNotification["id"] . '">'. $userNotification
                                                            ["price"] . 'DZA</a>' ?>
                                                            </td>
                                                        </tr>
                                                    <?php }
                                                      
                                                 } else {
                                                     echo "0 results";
                                                 }
                                            ?>
                                            
                                        </table>
                                     </div>
                                    <?php } else {echo "No user";}}?>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <script src="./js/notification.js"></script>