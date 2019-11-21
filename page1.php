<?php

 include('admin/dbcon.php');

 require("admin/libs/config.php");

?>
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.10.8, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.8, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/imageedit-1-9898143526-133x134.png" type="image/x-icon">
  <meta name="description" content="Web Page Builder Description">
  
  <title>Librairie</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-ruZckFmgH6" once="menu" id="menu1-2a">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://mobirise.co">
                         <img src="assets/images/imageedit-1-9898143526-133x134.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-secondary display-4" href="https://mobirise.co">W.I.G.C</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-secondary display-4" href="index.php"><strong>Accueil</strong></a>
                </li><li class="nav-item"><a class="nav-link link text-secondary display-4" href="page2.php"><strong>Organisation</strong></a></li><li class="nav-item"><a class="nav-link link text-secondary display-4" href="page1.php" aria-expanded="false"><strong>Librairie</strong></a></li><li class="nav-item"><a class="nav-link link text-secondary display-4" href="page3.php"><strong>Faites un don</strong></a></li><li class="nav-item"><a class="nav-link link text-secondary display-4" href="page6.php">Actualités<strong></strong></a></li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="page5.php"><span class="socicon socicon-viber mbr-iconfont mbr-iconfont-btn"></span>Contact</a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info/a">online web builder</a></section><section class="mbr-section content5 cid-rvCAcrAumP mbr-parallax-background" id="content5-3m">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">LIBRAIRIE</h2>
                
                
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content1 cid-rvlJzvKwEs" id="content1-2j">
    
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 mbr-fonts-style display-2 col-md-8"><strong>TOUTES NOS PRODUCTIONS</strong></div>
        </div>
    </div>
</section>

<section class="services4 cid-rB78rYgJBB" xmlns="http://www.w3.org/1999/html" id="services4-63">
    <!---->
    
    <!---->
    <!--Overlay-->
    
    <!--Container-->
    <div class="container">
        <div class="row">
        <?php
            
            $query = $pdo->prepare("select * from tbl_livres");

            $query->execute();

            while($row = $query->fetch()){
                

        ?>
            <!--Card-1-->
            <div class="card p-3 col-12">
                <div class="card-wrapper media-container-row media-container-row">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="wrapper">
                                    <!--Image-->
                                    <div class="mbr-figure" style="width: 80%;">
                                        <img src="admin/<?php echo $row["Photo"]; ?>" alt="Mobirise" title="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-7 col-lg-4">
                                <div class="wrapper col-left">
                                    <!--Title-->
                                    <h4 class="card-title mbr-fonts-style display-5"><?php echo $row["titre"]; ?></h4>
                                    <!--Subtitle-->
                                    <p class="mbr-text mbr-fonts-style pt-3 display-7"><strong>Auteur: <?php echo $row["auteur"]; ?> 
<br>Parution: <?php echo $row["parution"]; ?>&nbsp;<br>Editeur: <?php echo $row["editeur"]; ?></strong><br><strong>Réédition : <?php echo $row["autreediteur"]; ?><br></strong>&nbsp;<br>
<br><?php echo $row["contenu"]; ?><br></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 col-lg-4">
                                <div class="wrapper border_wrapper">
                                    <!--Cost-->
                                    <p class="mbr-text mbr-fonts-style col-right mbr-black align-center display-7"><strong> <?php echo $row["titre"]; ?> annotée</strong><br><strong><br></strong>***************<strong><br></strong>&nbsp; &nbsp; &nbsp; Papier &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Numérique<br>&nbsp; &nbsp; <?php echo $row["prixpapier"]; ?> Fcfa &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $row["prixnumerique"]; ?> Fcfa <br><br></p>
                                    <!--Btn-->
                                    <div class="mbr-section-btn col-right align-center"><a id="<?php echo $row["Information_ID"]; ?>" href="#form1-5n" class="btn-acheter btn m-0 btn-primary display-4">
                                            Acheter</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
        </div>
    </div>
</section>



<section class="mbr-section form1 cid-rwX0AbiKtL mbr-parallax-background" id="form1-5n">

    

    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(193, 193, 193);">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2"><strong>Formulaire d'achat de livres</strong></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">Veuillez remplir vos informations pour continuer la procédure d'achat des livres.
<div><br></div></h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!---Formbuilder Form--->
                <form action="" id="myform-livre" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="IG/C/ERS8e2MrT4f1dvCb9FDWgY8mEVUUnWQDgLeuYEAclrD1wVhODIQ/8PVkFoGUA7+c2CA0AIChMRZiUMHPxt4P+NqzQ13kDia+ucYr+aXi3w+jqfaprM9dQPHQLMc">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md-4  form-group" data-for="name">
                            <label for="name-form1-5n" class="form-control-label mbr-fonts-style display-7">Nom</label>
                            <input type="text" id="name" name="name" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-5n">
                        </div>
                        <div class="col-md-4  form-group" data-for="email">
                            <label for="email-form1-5n" class="form-control-label mbr-fonts-style display-7">Email</label>
                            <input id="email" type="email" name="email" data-form-field="Email" required="required" class="form-control display-7" id="email-form1-5n">
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-5n" class="form-control-label mbr-fonts-style display-7">Telephone</label>
                            <input type="tel" id="phone" name="phone" data-form-field="Phone" class="form-control display-7" id="phone-form1-5n">
                        </div>
                        <!--
                        <div data-for="message" class="col-md-12 form-group">
                            <label for="message-form1-5n" class="form-control-label mbr-fonts-style display-7">Message</label>
                            <textarea name="message" data-form-field="Message" class="form-control display-7" id="message-form1-5n"></textarea>
                        </div>
                        -->
                        <div class="col-md-12 input-group-btn align-center"><button type="submit" class="btn btn-form btn-secondary display-4">VALIDER L'ACHAT</button></div>
                    </div>
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
</section>

<section class="cid-rvDiQ7kblG" id="footer1-4j">

    

    

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="https://mobirise.co/">
                        <img src="assets/images/imageedit-1-9898143526-122x123.png" alt="Mobirise" title="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Siege social<br><br></h5>
                <p class="mbr-text">&nbsp;Baham-Ouest – Cameroun  derrière tribune officielle  Tél : (237) 243 527 864</p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Contacts
                </h5>
                <p class="mbr-text">
                    Email: wigc2000@yahoo.fr                    <br>Phone:&nbsp; (237) 673 97 38 17 / 691 43 51 20 <br>Fax: (237) 243 175 021 / 243 527 864
                </p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Links
                </h5>
                <p class="mbr-text"><a href="https://mail42.lwspanel.com/webmail/">Webmail</a></p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2019 W.I.G.C - All Rights Reserved-webmark-up</p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com/mobirise" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.behance.net/Mobirise" target="_blank">
                                <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <!--<script src="assets/formoid/formoid.min.js"></script>-->
  <script type="text/javascript">
    $(document).ready(function(){
        $("a.btn-acheter").click(function(event){
            event.preventDefault();
            $("<input>").attr({
                type:"hidden",
                name:"id-livre",
                id:"id-livre",
                value: $(this).attr('id')
            }).appendTo($("#myform-livre"))
        });
        $("#myform-livre").submit(function(event){
            event.preventDefault();
            $.ajax({
                url:"getbooksinfo.php", 
                method:"GET",
                data:{
                    id:$("#id-livre").val(),
                    phone:$("#phone").val()
                },
                success:function(data){
                    data = JSON.parse(data);
                    const fields = {
                        "cmd":"start",
                        "rN":"WIGC",
                        "rT":$("#phone").val(),
                        "rE":$("#email").val(),
                        "rH":"WA197M601771",
                        "rI":data.command,
                        "rMt":data.prixnumerique,
                        "rDvs":"XAF",
                        "rLocale":"fr",
                        "source":"WIGC E-commerce",
                        "endPage":"http://wigccameroun.org/endPage.php",
                        "notifyPage":"http://wigccameroun.org/notifyPage.php",
                        "cancelPage":"http://wigccameroun.org/cancelPage.php",
                        "logo":"http://wigccameroun.org/assets/images/imageedit-1-9898143526-133x134.png",
                        "motif":"Payement d'un livre"
                    };
                    var $form = $('<form>', {
                        action: 'https://www.my-dohone.com/dohone/pay',
                        method: 'post'
                    });
                    $.each(fields, function(key, val) {
                        $('<input>').attr({
                            type: "hidden",
                            name: key,
                            value: val
                        }).appendTo($form);
                    });
                    $form.appendTo('body').submit();
                    
                },
                error:function(){
                    alert("Erreur de récupération des informations");
                }
            })
        });
        $("span.btn-acheter-1").click(function(event){
            event.preventDefault();
            
        });
    });
  </script>
  
  <input name="animation" type="hidden">
   <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
  </body>
</html>