<?php

//Base de donnée
/*if(!empty($_POST["send"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  $connexion = mysqli_connect("localhost", "root", "", "contact_form") or die("Erreur de connexion: " . mysqli_error($connexion));
  $result = mysqli_query($connexion, "INSERT INTO contact (name, email, subject, message) VALUES ('" . $name. "', '" . $email. "','" . $subject. "','" . $message. "')");
  if($result){
    $db_msg = "Vos informations de contact sont enregistrées avec succés.";
    $type_db_msg = "success";
  }else{
    $db_msg = "Erreur lors de la tentative d'enregistrement de contact.";
    $type_db_msg = "error";
  }
  
}*/

//l'envoie du mail

if(!empty($_POST["send"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  $toEmail = "admin@tciformation.net";
  $mailHeaders = "From: " . $name . "<". $email .">\r\n";
  if(mail($toEmail, $subject, $message, $mailHeaders)) {
      $mail_msg = "Vos informations de contact ont été reçues avec succès.";
    $type_mail_msg = "success";
  }else{
    $mail_msg = "Erreur lors de l'envoi de l'e-mail.";
    $type_mail_msg = "error";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>TCI FORMATION</title>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="css/toast.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/contact.css" />
    <script type="text/javascript" src="js/contact.js"></script>
  <script src="https://kit.fontawesome.com/12ea580127.js" crossorigin="anonymous"></script>

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="images/favicon.png"/>
<!--
  
Template 2075 Digital Team

http://www.tooplate.com/view/2075-digital-team

-->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/et-line-font.css">
  <link rel="stylesheet" href="css/nivo-lightbox.css">
  <link rel="stylesheet" href="css/nivo_themes/default/default.css">
  <link rel="stylesheet" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- preloader section --><!--
<div class="preloader">
  <div class="sk-spinner sk-spinner-circle">
       <div class="sk-circle1 sk-circle"></div>
       <div class="sk-circle2 sk-circle"></div>
       <div class="sk-circle3 sk-circle"></div>
       <div class="sk-circle4 sk-circle"></div>
       <div class="sk-circle5 sk-circle"></div>
       <div class="sk-circle6 sk-circle"></div>
       <div class="sk-circle7 sk-circle"></div>
       <div class="sk-circle8 sk-circle"></div>
       <div class="sk-circle9 sk-circle"></div>
       <div class="sk-circle10 sk-circle"></div>
       <div class="sk-circle11 sk-circle"></div>
       <div class="sk-circle12 sk-circle"></div>
    </div>
</div>-->

<!-- navigation section -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand"><img src="images\Logotci.png" class="logo"> </a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home" class="smoothScroll">TCI</a></li>
        <li><a href="#work" class="smoothScroll">NOS FILIERES</a></li>
        <li><a href="#about" class="smoothScroll">NOS SITES</a></li>
        <li><a href="#team" class="smoothScroll">TEMOIGNAGES</a></li>
        <li><a href="#portfolio" data-filter=".mobile" class="smoothScroll"  >GALERIE</a></li>
        <li><a href="#pricing" class="smoothScroll">NOS RENTREES</a></li>
        <li><a href="#actu" class="smoothScroll">ACTUALITES</a></li>
        <li><a href="#contact" class="smoothScroll">CONTACT</a></li>
      </ul>
    </div>
  </div>
</section>

<!-- home section -->
<section id="home">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <h3>CENTRE PRIVE DE FORMATION PROFESSIONNELLE ET D'APPRENTISSAGE</h3>
        <h1>TCI-FORMATION</h1>
        <h3>TECHNOLOGIE-COMMERCE-INFORMATIQUE</h3>
        <hr>
            <ul class="social-icon">
                <li><a href="https://www.facebook.com/tciBeninSarl" target="_blank" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
                <li><a href="https://www.youtube.com/channel/UCF_oqHqIXGJwU2QXgBCAcCQ" target="_blank" class="fa fa-youtube-play" data-wow-delay="0.6s"></a></li>
                <li><a href="https://api.whatsapp.com/send?phone=22997213210" target="_blank" class="fa fa-whatsapp" data-wow-delay="0.9s"></a></li>

                <li><a href="#contact" class="icon-envelope smoothScroll"  data-wow-delay="0.9s"></a></li>
              
              <!--  <li><a href="tel:+22997213210" class="fa fa-phone" data-wow-delay="0.9s"> -->
                  <p> <strong> +229 97 21 32 10 / +229 96 10 06 42 </strong></p> </a></li> 
            </ul>

        <a href="#work" class="smoothScroll btn btn-danger">NOS FORMATIONS</a>
        <a href="#contact" class="smoothScroll btn btn-default">NOUS ECRIRE</a>
      </div>
    </div>
  </div>    
</section>
<br>


<!-- alert -->
<!--
<div class="side" >
  <div class="plan plan-one wow bounceIn" data-wow-delay="0.3s" >
    <div class="plan_title " >
      <div class="alert   alert-dismissible  ">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: red;">&times;</button>
                  <img src="images\nwrntr1.png">
            </div>
    </div>
          
  </div>
</div>
-->


<style >






.side {
  z-index: 1;
  display: flex;
  float: right;
  position: -webkit-sticky;
  position: sticky;
  top: 60px;
  color: #fff;
}

</style>


<!-- work section -->
<section id="work">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="section-title">
          <strong  style="font-size: 43px;">Nos métiers de formation</strong>
          <h1 class="heading bold">Nos filières</h1>
          <hr>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
        <i class="fa-solid fa-network-wired" style="color:red;font-size:40px;"></i>
          <h3 style="font-family: 'arial black';"><strong>Génie Electrique Informatique &amp; Réseaux</strong></h3>
          <hr>
          <p style="text-align: justify;">Filière recommandée pour détenteur de l’un des diplômes suivants ou équivalents : CEP ; BEPC ou non ; BAC ou non ou   tout autre diplôme équivalent. Pour consulter les spécialités de cette filière, <a href="#" data-toggle="modal" data-target="#modal1" class="" style="color:red;">cliquez-ici</a></p>

          

      </div>

      <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                  <div class="modal-dialog"style="margin-top: 70px;">
                      <div class="modal-header" >
                          <div class="col-md-12">
                           <button type="button" class="close" data-dismiss="modal" style="font-size: 35px;margin-top: -25px;color:yellow;float: right;">
                   &times;
                    </button>
                  </div>
                 </div>
              
            
                    <div class="modal-content modal-popup" style="padding: 10px;">
                      <div class="col-md-12">
                        <h3 style="font-family: 'arial black'; font-size: 20px;"><strong>Génie Electrique Informatique &amp; Réseaux (GEIR)</strong></h3>
                        <p class="text-center" style="font-size:20px;font-weight: bold;color: #00C6D7;">Nos modules de formation : </p><br>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                            <img src="images/eb1.jpg" width="100%">
                          </div>
                          <div class="col-md-6">
                            <p style="font-family: 'Verdana' sans-serif;font-weight: bold;">
                              <ul style="font-size:15px;font-weight: bold;font-family: 'Verdana' sans-serif;list-style-type: square;" class="text-left">
                                <li>Word</li>
                                <li>Excel</li>
                                <li>PowerPoint</li>
                                <li>Photoshop</li>
                                <li>Installation et Maintenance des Systèmes Solaires Photovoltaïques</li>
                              </ul>
                            </p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6" >
                            <p style="font-family: 'Verdana' sans-serif;font-weight: bold;">
                              <ul style="font-size:15px;font-weight: bold;font-family: 'Verdana' sans-serif;list-style-type: square;" class="text-left">
                                <li>Maintenance Informatique</li>
                                <li>Réseaux Informatiques</li>
                                <li>Installation des Antennes Paraboliques</li>
                              </ul>

                            </p>
                          </div>
                          <div class="col-md-6">
                            <img src="images/eb2.jpg" width="80%">
                          </div>
                      </div>
                    
               </div>
            </div>
            </div>






      <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
        <i class="fa-solid fa-faucet-drip"  style="color:red;font-size:40px;"></i>
          <h3 style="font-family: 'arial black';font-weight: bold;">Génie Electrique Froid &amp; Plomberie</h3>
          <hr>
          <p style="text-align: justify;">Niveau minimum requis pour cette filière : Brevet d’Etude du Premier Cycle ou Certificat d’Aptitude Professionnelle ou tout autre Diplôme équivalent. Pour consulter les spécialités de cette filière, <a href="#" data-toggle="modal" data-target="#modal2" class="" style="color:red;">cliquez-ici</a></p>
      </div>

      <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:50px;">
                  <div class="modal-dialog">
                      <div class="modal-header" >
                          <div class="col-md-12">
                           <button type="button" class="close" data-dismiss="modal" style="font-size: 35px;margin-top: -25px;color:yellow;float: right;">
                   &times;
                    </button>
                  </div>
                 </div>
              
            
                    <div class="modal-content modal-popup" style="padding: 10px;background-color: #efeded;">
                      <div class="col-md-12">
                        <h3 style="font-family: 'arial black'; font-size: 20px;"><strong>Génie Electrique Froid &amp; Plomberie (GEFP)</strong></h3>
                        <p class="text-center" style="font-size:20px;font-weight: bold;color: #00C6D7;">Nos modules de formation : </p><br>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                            <img src="images/eb6.jpg" width="100%">
                          </div>
                          <div class="col-md-6">
                            <p style="font-family: 'Verdana' sans-serif;font-weight: bold;">
                              <ul style="font-size:15px;font-weight: bold;font-family: 'Verdana' sans-serif;list-style-type: square;" class="text-left">
                                <li>Word</li>
                                <li>Excel</li>
                                <li>PowerPoint</li>
                                <li>Photoshop</li>
                                <li>Installation et Maintenance des Systèmes Solaires Photovoltaïques</li>
                              </ul>
                            </p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6" >
                            <p style="font-family: 'Verdana' sans-serif;font-weight: bold;">
                              <ul style="font-size:15px;font-weight: bold;font-family: 'Verdana' sans-serif;list-style-type: square;" class="text-left">
                                <li>Froid & CLimatisation</li>
                                <li>Plomberie</li>
                                <li>Installation des Antennes Paraboliques</li>
                                <li>Electricité Bâtiment</li>
                    <li>H S E</li>
                              </ul>
                              </p>
                          </div>
                          <div class="col-md-6">
                            <img src="images/froi1d.jpg" width="100%">
                          </div>
                      </div>
                    
               </div>
            </div>
            </div>


      <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
        <i class="fa-solid fa-satellite-dish" style="color:red;font-size:40px;"></i>
          <h3 style="font-family: 'arial black';font-weight: bold;">Génie des Télécommunications &amp; Réseaux</h3>
          <hr>
          <p style="text-align: justify;">Niveau minimum requis pour cette filière : Brevet d’Etude du Premier Cycle ou Certificat d’Aptitude Professionnelle ou tout autre Diplôme équivalent. Pour consulter les spécialités de cette filière, <a href="#" data-toggle="modal" data-target="#modal3" class="" style="color:red;">cliquez-ici</a></p>
      </div>

      <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:50px;">
                  <div class="modal-dialog">
                      <div class="modal-header" >
                          <div class="col-md-12">
                           <button type="button" class="close" data-dismiss="modal" style="font-size: 35px;margin-top: -25px;color:yellow;float: right;">
                   &times;
                    </button>
                  </div>
                 </div>
              
            
                    <div class="modal-content modal-popup" style="padding: 10px;background-color: #efeded;">
                      <div class="col-md-12">
                        <h3 style="font-family: 'arial black'; font-size: 20px;"><strong>Génie des Télécommunications &amp; Réseaux (GTR)</strong></h3>
                        <p class="text-center" style="font-size:20px;font-weight: bold;color: #00C6D7;">Nos modules de formation : </p><br>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                            <img src="images/eb2.jpg" width="100%">
                          </div>
                          <div class="col-md-6">
                            <p style="font-family: 'Verdana' sans-serif;font-weight: bold;">
                              <ul style="font-size:15px;font-weight: bold;font-family: 'Verdana' sans-serif;list-style-type: square;" class="text-left">
                                <li>Word</li>
                                <li>Excel</li>
                                <li>PowerPoint</li>
                                <li>Installation et Maintenance des Systèmes Solaires Photovoltaïques</li>
                                <li>Electricité Bâtiment</li>
                                <li>MSI</li>
                              </ul>
                            </p>
                          </div>
                        </div><br>
                        <div class="row">
                          <div class="col-md-6" >
                            <p style="font-family: 'Verdana' sans-serif;font-weight: bold;">
                              <ul style="font-size:15px;font-weight: bold;font-family: 'Verdana' sans-serif;list-style-type: square;" class="text-left">
                                <li>Photoshop</li>
                                <li>Réseaux télécoms</li>
                                <li>Routage et commutation</li>
                                <li>Administraction réseaux</li>
                                <li>Installation des antennes paraboliques</li>
                    <li>Transmission</li>
                    <li>sécurité Informatique</li>
                    <li>H S E</li>
                              </ul>
                            </p>
                          </div>
                          <div class="col-md-6">
                            <img src="images/gtr1.jpg" height="200px;" width="70%">
                          </div>
                      </div>
                    
               </div>
            </div>
            </div>


      <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
          <i class="fa-solid fa-gears"style="color:red;font-size:40px;"></i>
            <h3 style="font-family: 'arial black';font-weight: bold;">Génie Electrique &amp; Maintenance Industrielle</h3>
            <hr>
            <p style="text-align: justify;">Niveau minimum requis pour cette filière : Brevet d’Etude du Premier Cycle ou Certificat d’Aptitude Professionnelle ou tout autre Diplôme équivalent. Pour consulter les spécialités de cette filière, <a href="#" data-toggle="modal" data-target="#modal4" class="" style="color:red;">cliquez-ici</a></p>
      </div>


      <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:50px;">
                  <div class="modal-dialog">
                      <div class="modal-header" >
                          <div class="col-md-12">
                           <button type="button" class="close" data-dismiss="modal" style="font-size: 35px;margin-top: -25px;color:yellow;float: right;">
                   &times;
                    </button>
                  </div>
                 </div>
              
            
                    <div class="modal-content modal-popup" style="padding: 10px;background-color: #efeded;">
                      <div class="col-md-12">
                        <h3 style="font-family: 'arial black'; font-size: 20px;"><strong>Génie Electrique &amp; Maintenance Industrielle (GEMIn)</strong></h3>
                        <p class="text-center" style="font-size:20px;font-weight: bold;color: #00C6D7;">Nos modules de formation : </p><br>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                            <img src="images/solaire1.jpg" width="70%">
                          </div>
                          <div class="col-md-6">
                            <p style="font-family: 'Verdana' sans-serif;font-weight: bold;">
                              <ul style="font-size:15px;font-weight: bold;font-family: 'Verdana' sans-serif;list-style-type: square;" class="text-left">
                                <li>Word</li>
                                <li>Excel</li>
                                <li>PowerPoint</li>
                                <li>Installation et Maintenance des Systèmes Solaires Photovoltaïque</li>
                              </ul>
                            </p>
                          </div>
                        </div><br>
                        <div class="row">
                          <div class="col-md-6" >
                            <p style="font-family: 'Verdana' sans-serif;font-weight: bold;">
                              <ul style="font-size:15px;font-weight: bold;font-family: 'Verdana' sans-serif;list-style-type: square;" class="text-left">
                                <li>Electricité Bâtiment & Industrielle</li>
                                <li>Froid & Climatisation</li>
                                <li>Photoshop</li>
                                <li>Installation des antennes paraboliques</li>
                    <li>H S E</li>
                              </ul>
                            </p>
                          </div>
                          <div class="col-md-6">
                            <img src="images/eb3.jpg" width="50%">
                          </div>
                      </div>
                    
               </div>
            </div>
            </div>


      

      <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
        <i class="fa-solid fa-solar-panel" style="color:red;font-size:40px;"> </i>
          <h3 style="font-family: 'arial black';font-weight: bold;">Génie Electrique &amp; Informatique<br></h3> 
          <hr>
          <p style="text-align: justify;">Filière recommandée pour toute personne passionnée des spécialités qu’elle contient. Pour consulter les spécialités de cette filière, <a href="#" data-toggle="modal" data-target="#modal5" class="" style="color:red;">cliquez-ici</a></p>
      </div>

      <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:50px;">
                  <div class="modal-dialog">
                      <div class="modal-header" >
                          <div class="col-md-12">
                           <button type="button" class="close" data-dismiss="modal" style="font-size: 35px;margin-top: -25px;color:yellow;float: right;">
                   &times;
                    </button>
                  </div>
                 </div>
              
            
                    <div class="modal-content modal-popup" style="padding: 10px;background-color: #efeded;">
                      <div class="col-md-12">
                        <h3 style="font-family: 'arial black'; font-size: 20px;"><strong>Génie Electrique &amp; Informatique (GEI)</strong></h3>
                        <p class="text-center" style="font-size:20px;font-weight: bold;color: #00C6D7;">Nos modules de formation : </p><br>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                            <img src="images/gallery3.jpg" width="100%">
                          </div>
                          <div class="col-md-6">
                            <p style="font-family: 'Verdana' sans-serif;font-weight: bold;">
                              <ul style="font-size:15px;font-weight: bold;font-family: 'Verdana' sans-serif;list-style-type: square;" class="text-left">
                                <li>Word</li>
                                <li>Excel</li>
                                <li>PowerPoint</li>
                                <li>Installation et maintenance des systèmes solaires photovoltaïques</li>
                                <li>Electricité Bâtiment</li>
                                <li>Création de site web</li>
                              </ul>
                            </p>
                          </div>
                        </div><br>
                        <div class="row">
                          <div class="col-md-6" >
                            <p style="font-family: 'Verdana' sans-serif;font-weight: bold;">
                              <ul style="font-size:15px;font-weight: bold;font-family: 'Verdana' sans-serif;list-style-type: square;" class="text-left">
                                <li>Photoshop</li>
                                <li>Installation et Maintenance des Systèmes de Vidéosurveillance</li>
                                <li>Installation des Antennes Paraboliques</li>
                              </ul>
                            </p>
                          </div>
                          <div class="col-md-6">
                            <img src="images/equipement3.jpg" width="100%">
                          </div>
                      </div>
                    
               </div>
            </div>
            </div>



      
      <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
        <i class="fa-solid fa-laptop-code"style="color:red;font-size:40px;" ></i>
          <h3 style="font-family: 'arial black';font-weight: bold;">Génie Logiciel &amp; Réseaux</h3>
          <hr>
          <p style="text-align: justify;">Niveau minimum requis pour cette filière : Baccalauréat ou tout autre diplôme équivalent. Pour consulter les spécialités de cette filière, <a href="#" data-toggle="modal" data-target="#modal6" class="" style="color:red;">cliquez-ici</a> <br><br><br> </p>
      </div>


      <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:50px;">
                  <div class="modal-dialog">
                      <div class="modal-header" >
                          <div class="col-md-12">
                           <button type="button" class="close" data-dismiss="modal" style="font-size: 35px;margin-top: -25px;color:yellow;float: right;">
                   &times;
                    </button>
                  </div>
                 </div>
              
            
                    <div class="modal-content modal-popup" style="padding: 10px;background-color: #efeded;">
                      <div class="col-md-12">
                        <h3 style="font-family: 'arial black'; font-size: 20px;"><strong>Génie Logiciel &amp; Réseaux (GLR)</strong></h3>
                        <p class="text-center" style="font-size:20px;font-weight: bold;color: #00C6D7;">Nos modules de formation : </p><br>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                            <img src="images/glr1.JPG" width="100%">
                          </div>
                          <div class="col-md-6">
                            <p style="font-family: 'Verdana' sans-serif;font-weight: bold;">
                            <ul style="font-size:15px;font-weight: bold;font-family: 'Verdana' sans-serif;list-style-type: square;" class="text-left">
                              <li>Word</li>
                              <li>Excel</li>
                              <li>PowerPoint</li>
                              <li>Photoshop</li>
                              <li>Analyse Informatique</li>
                              <li>Programmation Procédurale</li>
                              <li>Développement WINDEV</li>
                              <li>Programmation Orienté Objet</li>
                            </ul>
                          </p>
                          </div>
                        </div><br>
                        <div class="row">
                          <div class="col-md-6" >
                            <p style="font-family: 'Verdana' sans-serif;font-weight: bold;">
                              <ul style="font-size:15px;font-weight: bold;font-family: 'Verdana' sans-serif;list-style-type: square;" class="text-left">
                                <li>Développement des sites web</li>
                                <li>MSI</li>
                                <li>Versioning Git</li>
                                <li>Administraction réseaux</li>
                                <li>Administration de Bases de Données</li>
                              </ul>
                            </p>
                          </div>
                          <div class="col-md-6">
                            <img src="images/gallery3.jpg" width="100%">
                          </div>
                      </div>
                    
               </div>
            </div>
            </div>





      <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
        <i class=" medium-icon"> <img src="images\secretaire.png" style="height: 50px;"> </i>
          <h3 style="font-family: 'arial black';font-weight: bold;">Secrétariat</h3>
          <hr>
          <p style="text-align: justify;">Niveau minimum requis : troisième année des Lycées et Collèges ou Brevet d’Etude du Premier Cycle ou Certificat d’Aptitude professionnelle ou tout autre diplôme équivalent. Pour consulter les spécialités de cette filière, <a href="#" data-toggle="modal" data-target="#modal7" class="" style="color:red;">cliquez-ici</a></p>
      </div> 



      <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:50px;">
                  <div class="modal-dialog">
                      <div class="modal-header" >
                          <div class="col-md-12">
                           <button type="button" class="close" data-dismiss="modal" style="font-size: 35px;margin-top: -25px;color:yellow;float: right;">
                   &times;
                    </button>
                  </div>
                 </div>
              
            
                    <div class="modal-content modal-popup" style="padding: 10px;background-color: #efeded;">
                      <div class="col-md-12">
                        <h3 style="font-family: 'arial black'; font-size: 20px;"><strong>Secrétariat (SEC)</strong></h3>
                        <p class="text-center" style="font-size:20px;font-weight: bold;color: #00C6D7;">Nos modules de formation : </p><br>
                      </div>
                        <div class="row">
                          <div class="col-md-6" >
                            <p style="font-family: 'Verdana' sans-serif;font-weight: bold;">
                              <ul style="font-size:15px;font-weight: bold;font-family: 'Verdana' sans-serif;list-style-type: square;" class="text-left">
                                <li>Secrétariat Comptable</li>
                                <li>Secrétariat Informatique</li>
                                <li>Secrétariat Graphisme</li>
                              </ul>
                            </p>
                          </div>
                          <div class="col-md-6">
                            <img src="images/gallery3.jpg" width="100%">
                          </div>
                      </div>
                    
               </div>
            </div>
            </div>

      <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
        <i class=" medium-icon">  <img src="images\cr.png"style="height:45px;"> </i> <!--pour l'icone c'est ca = icon-browser -->
          <h3 style="font-family: 'arial black';font-weight: bold;">Cuisine &amp; Restauration</h3>
          <hr>
          <p style="text-align: justify;"></p>
      </div>      

      <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
        <i class=" medium-icon"> <img src="images\PB.png" style="height:45px;"> </i> <!--pour l'icone c'est ca = icon-browser -->
          <h3 style="font-family: 'arial black';font-weight: bold;">Patisserie &amp; Boulangerie</h3>
          <hr>
          <p style="text-align: justify;"></p>
      </div>
      
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
      <i class=" medium-icon">  <img src="images\HR.png"style="height:45px;"> </i> <!--pour l'icone c'est ca = icon-browser -->
        <h3 style="font-family: 'arial black';font-weight: bold;">Hôtellerie &amp; Restauration</h3>
        <hr>
        <p style="text-align: justify;"> </p>
    </div>      

    <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
      <i class=" medium-icon"> <img src="images\AP.png" style="height:45px;"> </i> <!--pour l'icone c'est ca = icon-browser -->
        <h3 style="font-family: 'arial black';font-weight: bold;">Agriculture</h3>
        <hr>
        <p style="text-align: justify;"></p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
      <i class=" medium-icon">  <img src="images\ELV.png"style="height:45px;"> </i> <!--pour l'icone c'est ca = icon-browser -->
        <h3 style="font-family: 'arial black';font-weight: bold;">Elevage</h3>
        <hr>
        <p style="text-align: justify;"> </p>
    </div>      

    <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
      <i class=" medium-icon"> <img src="images\cfde.png"style="height:50px;"> </i> <!--pour l'icone c'est ca = icon-laptop -->
        <h3 style="font-family: 'arial black';font-weight: bold;">Coiffure &amp;Esthétique</h3>
        <hr>
        <p style="text-align: justify;">Ensemble avec la filière Coiffure et Esthétique pour des défilés de mode annuels afin de donner plus de visibilités à nos formations et assurer une restitution de qualité.Pour consulter les types de formation disponibles pour cette filière veuillez <a href="#" data-toggle="modal" data-target="#modalcf" class="" style="color:red;"> cliquez-ici </a>  </p>
    </div>

    <div class="modal fade" id="modalcf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:50px;">
                  <div class="modal-dialog">
                      <div class="modal-header" >
                          <div class="col-md-12">
                           <button type="button" class="close" data-dismiss="modal" style="font-size: 35px;margin-top: -25px;color:yellow;float: right;">
                   &times;
                    </button>
                  </div>
                 </div>
              
            
                    <div class="modal-content modal-popup" style="padding: 10px;background-color: #efeded;">
                      <div class="col-md-12">
                        <h3 style="font-family: 'arial black'; font-size: 20px;"><strong>Coiffure & Esthétique</strong></h3>
                        <p  style="font-family: 'arial black'; font-size: 20px;font-weight: bold;">Types de formation : </p>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                             <img src="images\coiffure homme.png" style="height:45px;">
                             <h3 style="font-family: 'arial black';font-weight: bold;">Coiffure Homme</h3>
                          </div>

                          <div class="col-md-6">
                            <img src="images\cfd.png"style="height:45px;"> </i>
                            <h3 style="font-family: 'arial black';font-weight: bold;">Coiffure Dame &amp; Tresse</h3>
                          </div>

                        </div><br>

                        <div class="row">
                          <div class="col-md-6" >
                              <img src="images\est.png" style="height: 45px;">
                              <h3 style="font-family: 'arial black';font-weight: bold;">Esthétique</h3>
                            </div>

                          <div class="col-md-6">
                              <img src="images\cfde.png"style="height:50px;">
                              <h3 style="font-family: 'arial black';font-weight: bold;">Coiffure Dame &amp;Esthétique</h3>
                          </div>
                      </div>
                    
               </div>
            </div>
            </div>
<!-- ===========================================================================-->
<!-- ===========================================================================-->

     <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
      <i class=" medium-icon"> <img src="images\hc.png"style="height:50px;"> </i> <!--pour l'icone c'est ca = icon-laptop -->
        <h3 style="font-family: 'arial black';font-weight: bold;">Haute Couture</h3>
        <hr>
        <p style="text-align: justify;">Ensemble avec la filière Coiffure et Esthétique pour des défilés de mode annuels afin de donner plus de visibilités à nos formations et assurer une restitution de qualité.Pour consulter les types de formation disponibles pour cette filière veuillez <a href="#" data-toggle="modal" data-target="#modal9" class="" style="color:red;"> cliquez-ici </a>  </p>
    </div>

   <div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:50px;">
                  <div class="modal-dialog">
                      <div class="modal-header" >
                          <div class="col-md-12">
                           <button type="button" class="close" data-dismiss="modal" style="font-size: 35px;margin-top: -25px;color:yellow;float: right;">
                   &times;
                    </button>
                  </div>
                 </div>
              
            
                    <div class="modal-content modal-popup" style="padding: 10px;background-color: #efeded;">
                      <div class="col-md-12">
                        <h3 style="font-family: 'arial black'; font-size: 20px;"><strong>Haute Couture (H.C)</strong></h3>
            <p  style="font-family: 'arial black'; font-size: 20px;font-weight: bold;">Types de formation : </p>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                             <img src="images\hch.png"style="height:50px;">
                  <h3 style="font-family: 'arial black';font-weight: bold;">Couture Homme</h3>
                          </div>

                          <div class="col-md-6">
                            <img src="images\hcf.png"style="height:50px;">
                <h3 style="font-family: 'arial black';font-weight: bold;">Couture Dame</h3>
                          </div>

                        </div><br>
                    
               </div>
            </div>
            </div>

  </div>
  
</section>
<!-- about section -->
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 text-center">
        <div class="section-title">
          <strong style="font-size: 41px;">Leader des formations pratiques au Bénin</strong>
          <h1 class="heading bold">Nous disons bien la pratique</h1>
          <hr>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <img src="images/lieusite.jpg" style="height: 400px; margin-top: 60px;" class="img-responsive" alt="about img">
      </div>
      <div class="col-md-6 col-sm-12">
        <h3 class="bold" style="color:red;">TCI-FORMATION</h3>
        <h1 class="heading bold">LIEUX DES FORMATIONS</h1>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <div role="tabpanel" class="tab-pane active" id="design">
            <p> <span style="color: #00C6D7; font-weight: bold; font-size: 22px; "> Vèdoko : </span><span style="font-size:17px;"> Von Funai 4ème rue à droite.</p>
    <span style="font-size:17px;"> Tél : (+229) 96 10 06 42 / 63 10 23 05. </span>
            
          </div>
          <div role="tabpanel" class="tab-pane" id="mobile">
            <p><span style="color: #00C6D7; font-weight: bold; font-size: 22px; "> Godomey : </span><span style="font-size:17px;"> Rue en face du bar-Restaurant PARC DES PRINCES de Godomey.</p>
              <span style="font-size:17px;">  Tél : (+229) 95 33 89 73 / 47 37 44 59.</span>
          </div>

          <div role="tabpanel" class="tab-pane" id="social">
            <p> <span style="color: #00C6D7; font-weight: bold; font-size: 22px; "> Abomey-Calavi : </span><span style="font-size:17px;"> Ayitchédji à 150m du collège Privé Sainte Félicité.</span><a href="#"> </a> <br></p>
        <span style="font-size:17px;">  Tél : (+229) 67 25 58 74 / 47 37 44 55.</span>
          </div>

          <div role="tabpanel" class="tab-pane" id="parakou">
            <p> <span style="color: #00C6D7; font-weight: bold; font-size: 22px; "> Parakou :</span><span style="font-size:17px;"> Rue face Mosquée Centrale non loin du restaurant La FIESTA.</span></p>
            <span style="font-size:17px;">Tél : (+229) 44 37 44 60 / 43 37 44 58.</span>
            <p><a href="#"> </a> </p>
          </div>
          <div role="tabpanel" class="tab-pane" id="parakou">
            <p> <span style="color: #00C6D7; font-weight: bold; font-size: 22px; "> Porto-Novo :</span><span style="font-size:17px;"> Quatier DJASSIN à côté de la clinique Louis Pasteur.</span></p>
            <span style="font-size:17px;"> Tél : (+229) 63 10 23 00 / 97 00 85 83.</span>
            <p><a href="#"> </a> </p>
          </div>
        </ul>
        <!-- tab panes -->
        <div class="tab-content">
          
          
          
          
        

        </div>
      </div>
    </div>
  </div>
</section>

<!-- team section -->
<section id="team">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="section-title">
          <strong  style="font-size: 41px;">Témoignages</strong>
          <h1 class="heading bold">Ils parlent de nous</h1>
          <hr>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
        <div class="team-wrapper">
          <img src="images/codjo.jpg" class="img-responsive" alt="team img" width="70%"  style="border-radius: 100%;height: 200px;">
            <div class="team-des">
              <h4>CODJO Etienne Stéphane</h4>
              <h3></h3>
              <!--<hr><!--
              <ul class="social-icon">
                <li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
              </ul>-->
              
            </div>


        </div>
              <p style="text-align: justify;">              
                Je fais partie des lauréats de l'année 2021-2022. Nous tenons à remercier le Président Directeur Général de TCI-BENIN Sarl en la personne de Monsieur Alcide GOMEZ. Nous sommes fières d'être maintenant un entrepreneur et maitre de notre métier. Nous le remercions infiniment, que le Dieu Tout Puissant, l'Eternel des Armés, notre Père Céleste (Jehova) le comble infiniment et qu'il lui donne encore plus de sagesse pour qu'il puisse avancer dans son projet pour son pays et pour le développement de l'Afrique. Au cours de notre formation, il nous l'a rigoureusement enseigné et nous et nos parents sommes fiers d'être ce que nous sommes aujourd'hui grâce à la rigueur.
              </p>
      </div>
      <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.3s">
        <div class="team-wrapper">
          <img src="images/m.fredy.jpg" class="img-responsive" alt="team img" width="70%">
            <div class="team-des">
              <h4> HOUNDJO Freddy </h4>
              <h3></h3>
            </div>
        </div>
              <p style="text-align: justify;" >              
                Moi, je suis un parent d'apprenant, je suis très content car un de mes enfants est venu personnellement me voir pour me dire qu'il allait faire cette école mais par la grâce de Dieu il a fini. C'est un enfant qui est très respectueux et arrive déjà à gagner des marchés à travers les choses apprises dans cette école. 
              </p>
      </div>
      <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.6s">
        <div class="team-wrapper">
          <img src="images/robinos.jpg" class="img-responsive" alt="team img" width="70%">
            <div class="team-des">
              <h4> SAMEY Rubinos</h4>
              <h3> </h3>
            </div>
        </div>
              <p style="text-align: justify;">              
                J'ai personnellement eu la chance de suivre ma formation dans cette prestigieuse école. C'est une école dans laquelle la rigueur est de taille et un apprenant qui sait la raison de sa présence s'en sort toujours gagnant.

              </p>
      </div>
      <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.6s">
        <div class="team-wrapper">
          <img src="images/malarica.jpg" class="img-responsive" alt="team img" width="70%" style="border-radius: 100px;height: 200px;">
            <div class="team-des">
              <h4> NZANG Malarica</h4>
              <h3> </h3>
            </div>
        </div>
              <p style="text-align: justify;">              
                Moi, je suis Equato-Guinéenne. J'ai suivi ma formation à TCI. J'ai beaucoup apprécier la qualité des formations données et je suis très contente d'avoir suivi cette formation.
              </p>
      </div>
    </div>
  </div>
</section>

<!-- portfolio section -->
<div id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="section-title">
          <strong>Galerie</strong>
          <h1 class="heading bold">Notre galerie</h1>
          <hr>
        </div>
        <!-- ISO section -->
        <div class="iso-section" style="margin-top: 0px;">
          <ul class="filter-wrapper clearfix" style="margin-top: -40px;">
                       <li><a href="#" data-filter="*" class="selected opc-main-bg">TOUT</a></li>
                       <li><a href="#" class="opc-main-bg" data-filter=".html">EQUIPEMENTS ET OUTILS DE TRAVAIL</a></li>
                       <li><a href="#" class="opc-main-bg" data-filter=".photoshop">CHANTIERS D'APPLICATION</a></li>
                       <li><a href="#" class="opc-main-bg" data-filter=".wordpress">SORTIE DE PROMOTION</a></li>
                       <li><a href="#" class="opc-main-bg" data-filter=".mobile">EVENEMENTS RECENTS</a></li>
                  </ul>
                  <div class="iso-box-section wow fadeIn" data-wow-delay="0.9s">
                    <div class="iso-box-wrapper col4-iso-box">

                       <div class="iso-box mobile col-lg-4 col-md-4 col-sm-6">
                        <a href="images/evenement1.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/evenement1.JPG" alt=" diplome img"></a>
                       </div>

                       <div class="iso-box mobile col-lg-4 col-md-4 col-sm-6">
                        <a href="images/evenement2.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/evenement2.JPG" alt="portfolio img"></a>
                       </div>
                       <div class="iso-box mobile col-lg-4 col-md-4 col-sm-6">
                        <a href="images/evenement3.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/evenement3.JPG" alt="portfolio img"></a>
                       </div>




                       <div class="iso-box wordpress col-lg-4 col-md-4 col-sm-6">
                        <a href="images/diplome1.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/diplome1.JPG" alt="portfolio img"></a>
                       </div>

                       <div class="iso-box wordpress col-lg-4 col-md-4 col-sm-6">
                        <a href="images/diplome2.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/diplome2.JPG" alt="portfolio img" ></a>
                       </div>

                       <div class="iso-box wordpress col-lg-4 col-md-4 col-sm-6">
                        <a href="images/diplome3.JPG" data-lightbox-gallery="portfolio-gallery"><img src="images/diplome3.JPG" alt="portfolio img" ></a>
                       </div>


                       
                        <div class="iso-box photoshop col-lg-4 col-md-4 col-sm-6">
                        <a href="images/chantier1.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/chantier1.jpg" alt="portfolio img" ></a>
                       </div>

                       <div class="iso-box  photoshop col-lg-4 col-md-4 col-sm-6">
                        <a href="images/chantier2.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/chantier2.jpg" alt="portfolio img" ></a>
                       </div>
                       <div class="iso-box  photoshop col-lg-4 col-md-4 col-sm-6">
                        <a href="images/chantier3.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/chantier3.jpg" alt="portfolio img" ></a>
                       </div>
 


                        <div class="iso-box html col-lg-4 col-md-4 col-sm-6">
                        <a href="images/equipement1.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/equipement1.jpg" alt="portfolio img" ></a>
                       </div>
                       <div class="iso-box html col-lg-4 col-md-4 col-sm-6">
                        <a href="images/equipement2.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/equipement2.jpg" alt="portfolio img" ></a>
                       </div>
                       <div class="iso-box html col-lg-4 col-md-4 col-sm-6">
                        <a href="images/equipement3.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/equipement3.jpg" alt="portfolio img" ></a>
                       </div>





                      
                    </div>
                  </div>

        </div>
      </div>
    </div>
  </div>
</div>      

<!-- pricing section -->
<section id="pricing">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 text-center">
        <div class="section-title">
          <strong>Nos rentrées</strong>
          <h1 class="heading bold">Dates des rentrées sur l'ensemble de nos sites de formations</h1>
          <hr>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">

        <div class="plan plan-one wow bounceIn" data-wow-delay="0.3s">
          <div class="plan_title">
            <i class=" medium-icon"> <img class=" medium-icon" src="images\mache1.jpg" style="width: 210px; height: 180px; margin-top: -50px; ">  </i>
            <!--<h3>BASIC</h3> -->
            <p><br></p>
            <h2 style="margin-top: -30px;" >09 Septembre 2024 </h2> <!--<span>per year</span></h2>-->
            <h2>08 Octobre 2024 </h2>
            <h2>05 Novembre 2024 </h2>
            

          </div>
        <!--  <ul>

                      <li>07 Septembre 2021</li>
            <li>08 Novembre 2021</li>
            <li></li>
                        <li></li>
          </ul>
          <button class="btn btn-warning">EN SAVOIR PLUS</button> -->
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="plan plan-two wow bounceIn" data-wow-delay="0.3s">
          <div class="plan_title">
            <i class=" medium-icon"> <img class=" medium-icon" src="images\cococoes.jpg" style="width: 210px; height: 180px; margin-top: -50px; ">  </i>
            <!--<h3>BUSINESS</h3>
            <h2>$260 <span>per year</span></h2>-->
            <h2 style="color: #3740b5; margin-top: 5px;">TCI-FORMATION </h2>
            
            <h2>08 Janvier 2025 </h2>
            <h2>03 Février 2025 </h2>


          </div>
      <!--    <ul>
            <li > 06 Octobre 2021</li>
            <li> 04 Janvier 2022 </li>
            <li> 01 Février 2022</li>

          </ul>
          <button class="btn btn-warning">EN SAVOIR PLUS</button> -->
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="plan plan-three wow bounceIn" data-wow-delay="0.3s">
          <div class="plan_title">
            <i class=" medium-icon"> <img class=" medium-icon" src="images\mache2.jpg" style="width: 210px; height: 180px; margin-top: -50px; ">  </i>
            <!--<h3>PROFESSIONAL</h3>
            <h2>$380 <span>per year</span></h2>-->
            <br><br>
            <h2 >10 Mars 2025 </h2>

          </div>
          <br>
          
          <!--<ul> -->
          <!--  <li>02 Mars 2022</li>
            <li>05 Avril 2022</li> -->
            <h2 style="color: #3740b5; margin-top: -5px; ">Nous disons bien la pratique</h2>
            
        <!--  </ul>  -->
        <!--  <button class="btn btn-warning">EN SAVOIR PLUS</button> -->
        </div>
      </div>
    </div>
  </div>    
</section>

<!-- actu section -->


<section id="actu">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="section-title">
          <strong  style="font-size: 40px;">Actualités</strong>
          <h1 class="heading bold">Nos actualités</h1>
          <hr>
        </div>
      </div>
      <div class="row">
      <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.6s">
        <div class="team-wrapper">
          <img src="images/1.PNG" class="img-responsive" alt="team img">
            
        </div>
            <p style="text-align: justify;"><!-- href="https://youtu.be/9tEdLfhXkAk" target="_blank"-->
              <strong>TCI FORMATION - Découvrez nos filières de formation.<a href="https://youtu.be/mogJrw6o0dc" target="_blank" data-wow-delay="0.6s" style="text-decoration: underline; color: red ">Suivre l'actualité</a> </strong>
            </p>

      
      </div>
      <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.6s">
        <div class="team-wrapper">
          <img src="images/2.PNG" class="img-responsive" alt="team img">
            
        </div>
            <p style="text-align: justify;"><!-- href="https://youtu.be/9tEdLfhXkAk" target="_blank"-->
              <strong>TCI FORMATION - Comment vaincre la chômage grâce à une formation professionnelle. <a href="https://youtu.be/XfSDrlb_N_8" target="_blank"  data-wow-delay="0.6s" style="text-decoration: underline; color: red ;" id="hov">Suivre l'actualité</a> </strong>
            </p>

      
      </div>

      <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.6s">
        <div class="team-wrapper">
          <img src="images/3.PNG" class="img-responsive" alt="team img">
            
        </div>
            <p style="text-align: justify;">
              <strong>TCI FORMATION - Nouvelle Rentrée 2024-2025.  <a href="https://youtu.be/ox1IPtBNfNo" target="_blank" data-wow-delay="0.6s" style="text-decoration: underline; color: red ">Suivre l'actualité</a> </strong>
            </p>  
      </div>

      <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.6s">
        <div class="team-wrapper">
          <img src="images/4.PNG" class="img-responsive" alt="team img">
            
        </div>
            <p style="text-align: justify;">
              <strong>TCI FORMATION - PROSPECTUS 2024-2025. <a href="https://youtu.be/kK9DBw3AF-U" target="_blank" data-wow-delay="0.6s" style="text-decoration: underline; color: red ">Suivre l'actualité</a> </strong>
            </p>  
      </div>

      
  
</div><br>
      <div class="row">
      <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.6s">
        <div class="team-wrapper">
          <img src="images/5.PNG" class="img-responsive" alt="team img">
            
        </div>
            <p style="text-align: justify;">
              <strong>TCI FORMATION - SORTIE DE PROMOTION DES ENTREPRENEURS FORMES A TCI BENIN. <a href="https://youtu.be/YJ_rk5Xl6JY" target="_blank" data-wow-delay="0.6s" style="text-decoration: underline; color: red ">Suivre l'actualité</a> </strong>
            </p>  
      </div>
      <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.6s">
        <div class="team-wrapper">
          <img src="images/6.PNG" class="img-responsive" alt="team img">
            
        </div>
            <p style="text-align: justify;">
              <strong> TCI BENIN RENFORCE LES CAPACITES DES ARTISANS DE LA CNAP A DOGBO. <br><a href="https://youtu.be/A8tBL0IcNeU" target="_blank" data-wow-delay="0.6s" style="text-decoration: underline; color: red ">Suivre l'actualité</a> </strong>
            </p>  
      </div>

      <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.6s">
        <div class="team-wrapper"> 
            <img src="images/7.PNG" class="img-responsive" alt="team img"></a>  
        </div>
            <p style="text-align: justify;">
              <strong>TCI FORMATION - AVIS DE RESPONSABLES CNAP ET DE PARTICIPANTS AU RENFORCEMENT DE CAPACITES. <br> <a href="https://youtu.be/ar0DdDI0Jo0" target="_blank" style="text-decoration: underline; color: red ">Suivre l'actualité </a> </strong>
            </p>

      </div>

      <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.6s">
        <div class="team-wrapper">
          <img src="images/8.PNG" class="img-responsive" alt="team img">
            
        </div>
            <p style="text-align: justify;">
              <strong>TCI FORMATION - LANCEMENT DES FESTIVITÉS DES DIX ANS DE CRÉATION DE TCI BENIN. <br> <a href="https://youtu.be/CNLSHfzZEVA" target="_blank" data-wow-delay="0.6s" style="text-decoration: underline; color: red ">Suivre l'actualité</a> </strong>
            </p>
      </div>
    </div><br>
    <div class="row">
      <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.3s">
        <div class="team-wrapper">
          <img src="images/9.PNG" class="img-responsive" alt="team img">
            
        </div>

          <p style="text-align: justify;">
            <strong>TCI FORMATION - DIX ANS D'ANNIVERSAIRE DE TCI BENIN.<br> <a href="https://youtu.be/tcWbPhTx-Mg" target="_blank" data-wow-delay="0.6s" style="text-decoration: underline; color: red "> Suivre l'actualité </a> </strong>
          </p>
            
      </div>
    </div>

    <div class="row">
      <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.3s">
        <div class="team-wrapper">
          <img src="images/10.PNG" class="img-responsive" alt="team img">
            
        </div>

          <p style="text-align: justify;">
            <strong>TCI FORMATION - Sortie de la 11ème promotion de TCI FORMATION.<br> <a href="https://youtu.be/Fpfx9gZ2Yng" target="_blank" data-wow-delay="0.6s" style="text-decoration: underline; color: red "> Suivre l'actualité </a> </strong>
          </p>
            
      </div>
    </div>

    <div id="toast">
            <div id="img">Notification</div>
            <div id="desc">
              <span >Cette actualité n'est pas <br>disponible pour le moment.</span>
            </div>
          </div>
          <script src="js/notification.js">launch_toast();</script> 

    </div>
  </div>
</section>


<!-- contact section -->
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 text-center">
        <div class="section-title">
          <strong style="font-size: 43px;">TCI-FORMATION </strong>

          <h1 class="heading bold">Nous disons bien la pratique</h1>
          <hr>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 contact-info">
        <h2 class="heading bold">CONTACT INFO</h2>
        <p>Vous avez besoin d'une précision. <br> Pas de problème, envoyez nous un message et  <br> vous aurez une satisfaction assurée.</p>
        <div class="col-md-6 col-sm-4">
          <h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> AVEZ-VOUS DES QUESTIONS?</h3>
          
        </div>
        <div class="col-md-6 col-sm-4">
          <h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> APPELEZ NOUS</h3>
          <p>+229 97213210 | +229 96100642</p>
          <p>+229 60845687 | +229 63102302</p>
          <p>+229 63102300 | +229 95338973</p>
        </div> 
      </div>

      <div class="col-md-6 col-sm-12" style="background-color:white;">
        <script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/shell.js"></script>
<script>
  hbspt.forms.create({
  region: "eu1",
  portalId: "25068629",
  formId: "e5abb85d-c5b8-42bc-acaf-ce99d2d1dc8a"
});
</script>

      <!--
        <script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/shell.js"></script>
<script>
  hbspt.forms.create({
  region: "eu1",
  portalId: "25165938",
  formId: "104e95c2-2b44-4b6b-a8d9-eafc8c311042"
});
</script>

        <form action="" method="post" class="wow fadeInUp" data-wow-delay="0.6s">
           <div class="col-md-6 col-sm-6">
            <input type="text" class="form-control" placeholder="Votre nom" name="name" required>
          </div>
          <div class="col-md-6 col-sm-6">
            <input type="email" class="form-control" placeholder="Email" name="email" required>
          </div>
          <div class="col-md-12 col-sm-12">
            <input type="text" class="form-control" placeholder="Object" name="subject" required>
          </div>
          <div class="col-md-12 col-sm-12">
            <textarea class="form-control" required placeholder="Message" rows="5" name="message" ></textarea>
          </div>
          <div class="col-md-offset-4 col-md-8 col-sm-offset-4 col-sm-8">
             <input type="submit" class="form-control" value="ENVOYEZ LE MESSAGE" name="send" required >
            
              <div id="statusMessage"> 
            <?php if (! empty($db_msg)) { ?>
              <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
            <?php } ?>
            <?php if (! empty($mail_msg)) { ?>
              <p class='<?php echo $type_mail_msg; ?>Message'><?php echo $mail_msg; ?></p>
            <?php } ?>
            </div>
          </div>
        </form> -->
      </div>






    </div>
  </div>
</section>

<!-- footer section -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <p>© 2022 TCI FORMATION. Développé par le Département Génie Logiciel de TCI </a> </p>
        <ul class="social-icon">
          <li><a href="https://www.facebook.com/tciBeninSarl" target="_blank" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
          <li><a href="https://api.whatsapp.com/send?phone=22996100642" target="_blank" class="fa fa-whatsapp wow fadeIn" data-wow-delay="0.9s"></a></li>
          <li><a href="https://www.youtube.com/channel/UCF_oqHqIXGJwU2QXgBCAcCQ" target="_blank" class="fa fa-youtube-play wow fadeIn" data-wow-delay="0.9s"></a></li>
          <li><a href="https://instagram.com/tciBeninSarl" target="_blank" class="fa fa-instagram wow fadeIn" data-wow-delay="0.9s"></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>