<?php
session_start();
require("config.php");
////code
 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}
?>  
  <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="dashboard.php" class="logo">
						<img src="assets/img/rsadmin.png" alt="Logo">
					</a>
					<a href="dashboard.php" class="logo logo-small">
						<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
					</a>
                </div>
				<!-- /Logo -->
				
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>
				

				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">

					
					<!-- User Menu -->
					<!-- <h4 style="color:white;margin-top:13px;text-transform:capitalize;"><?php echo $_SESSION['auser'];?></h4> -->
					<li class="nav-item dropdown app-dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.png" width="31" alt="Ryan Taylor"></span>
						</a>
						
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="assets/img/profiles/avatar-01.png" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6><?php echo $_SESSION['auser'];?></h6>
									<p class="text-muted mb-0">Administrateur</p>
								</div>
							</div>
							<a class="dropdown-item" href="profile.php">Profile</a>
							<a class="dropdown-item" href="logout.php">Se Deconnecte</a>
						</div>
					</li>

					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			
			<!-- header --->
			
			
			
						<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li> 
								<a href="dashboard.php"><i class="fe fe-home"></i> <span>Tableau De Bord</span></a>
							</li>
							
							
							<li class="menu-title"> 
								<span>tous les utilisateurs</span>
							</li>
						
							<li class="submenu">
								<a href="#"><i class="fe fe-user"></i> <span> tous les utilisateurs </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="adminlist.php"> Admine </a></li>
									<li><a href="userlist.php"> Utilisateur </a></li>
									<li><a href="useragent.php"> Agent </a></li>
									<!-- <li><a href="userbuilder.php"> Builder </a></li> -->
								</ul>
							</li>

							<li class="menu-title"> 
								<span>Commune & Wilaya</span>
							</li>
						
							<li class="submenu">
								<a href="#"><i class="fe fe-location"></i> <span>Commune & Wilaya</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="stateadd.php"> Wilaya </a></li>
									<li><a href="cityadd.php"> Commune </a></li>
								</ul>
							</li>
						
							<li class="menu-title"> 
								<span>Gestion de l'immobilier</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-map"></i> <span> Immobilier</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="propertyadd.php"> Add Immobilier</a></li>
									<li><a href="propertyview.php"> View Immobilier </a></li>
									
								</ul>
							</li>
							
							
							
							<li class="menu-title"> 
								<span>Query</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-comment"></i> <span> Contact,Feedback </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="contactview.php"> Contact </a></li>
									<li><a href="feedbackview.php"> Feedback </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>À propos</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-browser"></i> <span> À propos Page </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="aboutadd.php"> Add À propos Contenu </a></li>
									<li><a href="aboutview.php"> View À propos </a></li>
								</ul>
							</li>
							
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
