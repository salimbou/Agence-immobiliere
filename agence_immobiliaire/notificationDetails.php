
<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" href="css/notification.css">
    <title>Notification Details</title>
</head>
<body>
<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
       
		 
		 
		<!--	Submit property   -->
        <div class="full-row">
            <div class="container">
                    <div class="row">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">Details De La Demande</h2>
                        </div>
					</div>
                    <div class="row p-5 bg-white">
                        <form method="post" enctype="multipart/form-data">
								<div class="description">
									<h5 class="text-secondary">Information De Base</h5><hr>
									
									<?php
                                    $title = '';
                                    $contenu = '';
                                    $utilisateur = '';
                                    $stype = '';
                                    $price = 0;
                                    $size = 0;
                                    $lieu = '';
                                    $contact = '';
                                        $id = $_GET['id'];
                                        $sql = "select *  from `demandeimmobilier` join `user` on demandeimmobilier.uid = user.uid where id =$id";
                                        $result=$con->query($sql);
                                        if($result->num_rows > 0){
                                            while($notDetails = $result->fetch_assoc()){
                                                $title = $notDetails['title'];
                                                $utilisateur = $notDetails['uname'];
                                                $stype = $notDetails['stype'];
                                                $price = $notDetails['price'];
                                                $size = $notDetails['asize'];
                                                $lieu = $notDetails['city'].', '.$notDetails['state'];
                                                $contact = $notDetails['uemail']. ' , '.$notDetails['uphone'];
                                            }
                                        }
                                    ?>
                                    <div class="row">
											<div class="col-lg-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Utilisateur</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="title" required placeholder="Enter Titre" value=<?php echo $utilisateur;?>>
													</div>
												</div>
										    </div>
                                        </div>
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Titre</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="title" required placeholder="Enter Titre" value=<?php echo $title;?>>
													</div>
												</div>
										    </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group row">
                                                <label class="col-lg-2 col-form-label">Details</label>
                                              <div class="col-lg-9 notifDetails">
                                                <p>Type De L'immobilier : <?php echo $stype;?></p>
                                                <p>Prix                 : <?php echo $price;?> DZA</p>
                                                <p>Surface              : <?php echo $size;?> metre carre</p>
                                                <p>Lieu                 : <?php echo $lieu;?></p>
                                                <p>Contact Informations : <?php echo $contact;?></p>
                                                
                                              </div>
                                                </div>
                                            </div>
                                        </div>
								</div>
												

										<hr>

						</form>
                    </div>            
            </div>
        </div>
	<!--	Submit property   -->
        
        
        <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<script src="js/tinymce/tinymce.min.js"></script>
<script src="js/tinymce/init-tinymce.min.js"></script>
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>
