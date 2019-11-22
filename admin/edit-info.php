<?php
 include('dbcon.php');

require("libs/config.php");
  include('header.php');
?>

<section class="mbr-section form4 cid-qUu84lQnfb" id="form4-1b">

    

    
    <div class="container">
            <div class="col-md-12">
                <h2 class="pb-3 align-left mbr-fonts-style display-2">Editer le livre</h2>
                <div data-form-type="formoid">
                    <div data-form-alert="" hidden="">
                        Merci d'avoir rempli ce formulaire!
                    </div>
                    <form class="block mbr-form" method="POST" enctype="multipart/form-data" data-form-title="Mobirise Form">
                    

  <?php 



            $res = $pdo->query("SELECT * FROM tbl_livres WHERE Information_ID = ".$_GET['id']);

			$row = $res->fetch();

	?>
                            <input name="id" value="<?php echo $row['Information_ID']; ?>" type="hidden" id="name-form4-1b" placeholder="ID">
                            <!--<div class="col-md-12" data-for="name">
                            <label class="control-label" for="inputEmail">Titre</label>
                                <input type="text" class="form-control input" name="titre" data-form-field="Titre" required="" id="name-form4-1b" value="<?php //echo $row['Title']; ?>">
                            </div>-->
                            
                            <!--<div class="col-md-12" data-for="name">
                            <label class="control-label" for="inputEmail">Brief</label>
                                <input type="text" class="form-control input" name="brief" data-form-field="Brief" required="" id="name-form4-1b" value="<?php //echo $row['Bref']; ?>">
                            </div>
                            <div class="col-md-12" data-for="message">
                            <label class="control-label" for="inputEmail">Description</label>
                                <textarea class="form-control input" name="content" rows="3" data-form-field="Message" style="resize:none" id="message-form4-1b"><?php //echo $row['Content']; ?></textarea>
                            </div>-->
                            <img src="<?php echo $row['Photo']; ?>"  width="180"/>
                            <input type="hidden" name="Photo" value="<?php echo $row['Photo']; ?>"/>
                            <input type="hidden" name="ancienlivreachete" value="<?php echo $row['livreachete']; ?>"/>
                            <div class="col-md-12" data-for="name">
                            <label class="control-label" for="input01">Fichier image:</label>
                                <input type="file" class="form-control input" name="image" class="font"> 
                            </div>
                            <div class="col-md-12" data-for="name">
                            <label class="control-label" for="inputEmail">Titre</label>
                                <input type="text" class="form-control input" name="titre" data-form-field="Titre" required="" id="name-form4-1b" value="<?php echo $row['titre']; ?>">
                            </div>
                            <div class="col-md-12" data-for="name">
                            <label class="control-label" for="inputEmail">Auteur</label>
                                <input type="text" class="form-control input" name="auteur" data-form-field="Brief" required="" id="name-form4-1b" value="<?php echo $row['auteur']; ?>">
                            </div>
                            <div class="col-md-12" data-for="name">
                            <label class="control-label" for="inputEmail">Parution</label>
                                <input type="text" class="form-control input" name="parution" data-form-field="Brief" required="" id="name-form4-1c" value="<?php echo $row['parution']; ?>">
                            </div>
                            <div class="col-md-12" data-for="name">
                            <label class="control-label" for="inputEmail">Editeur</label>
                                <input type="text" class="form-control input" name="editeur" data-form-field="Brief" required="" id="name-form4-1d" value="<?php echo $row['editeur']; ?>">
                            </div>
                            <div class="col-md-12" data-for="name">
                            <label class="control-label" for="inputEmail">R&eacute;&eacute;diteur</label>
                                <input type="text" class="form-control input" name="reediteur" data-form-field="Brief" required="" id="name-form4-1e" value="<?php echo $row['autreediteur']; ?>">
                            </div>
                            <div class="col-md-12" data-for="name">
                            <label class="control-label" for="inputEmail">Prix papier</label>
                                <input type="text" class="form-control input" name="prixpapier" data-form-field="Brief" required="" id="name-form4-1g" value="<?php echo $row['prixpapier']; ?>">
                            </div>
                            <div class="col-md-12" data-for="name">
                            <label class="control-label" for="inputEmail">Prix num&eacute;rique</label>
                                <input type="text" class="form-control input" name="prixnumerique" data-form-field="Brief" required="" id="name-form4-1h" value="<?php echo $row['prixnumerique']; ?>">
                            </div>
                            <div class="col-md-12" data-for="message">
                            <label class="control-label" for="inputEmail">Description</label>
                                <textarea class="form-control input" name="description" rows="3" data-form-field="Message" style="resize:none" id="message-form4-1b"><?php echo $row['contenu']; ?></textarea>
                            </div>
                            
                            <object
                                data="data:application/pdf;base64,<?php echo $row['livreachete']; ?>"
                                type="application/pdf"
                                width="50%"
                                height="100%">
                                <iframe
                                src="<?php echo $row['livreachete']; ?>"
                                width="50%"
                                height="100%"
                                style="border: none;">
                                <p>Your browser does not support PDFs.
                                    <a href="<?php echo $row['livreachete']; ?>">Download the PDF</a>.</p>
                                </iframe>
                            </object>
                            <p>
                                <a href="<?php echo $row['livreachete']; ?>">T&eacute;l&eacute;charger le livre enregistr&eacute;</a>.
                            </p>
                            
                            <div class="col-md-12" data-for="name">
                            <label class="control-label" for="input01">Fichier Livre (PDF):</label>
                                <input type="file" class="form-control input" name="livreachete" class="font"> 
                            </div>

                            <div class="col-md-12" style="margin-top: 10px;"><button href="" type="submit" name="edit" class="btn btn-primary">Poster</button></div>
                        
                    </form>
                </div>
            </div>
    </div>
</section>


		<?php

	if (isset($_POST['edit'])){

		$id = $_POST['id'];
        $titre=$_POST['titre'];
        $prodSlug = slug($title);
        $auteur=$_POST['auteur'];
        $parution=$_POST['parution'];
        $editeur=$_POST['editeur'];
        $reediteur=$_POST['reediteur'];	
        $prixpapier=intval($_POST['prixpapier']);
        $prixnumerique=intval($_POST['prixnumerique']);
        $description=$_POST['description'];
        $Photo = "";
        if (strcmp($_FILES["image"]["name"], "") == 0){
            $Photo = $_POST["Photo"];
        }else{
            $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $image_name = addslashes($_FILES['image']['name']);
            $image_size = getimagesize($_FILES['image']['tmp_name']);

            $random_number = mt_rand();
            $Photo = "upload/" . $random_number . $_FILES["image"]["name"];
            move_uploaded_file($_FILES["image"]["tmp_name"], $Photo);
        }

        $livreachete = "";
        if (strcmp($_FILES["livreachete"]["name"], "") == 0){
            $livreachete = $_POST["ancienlivreachete"];
        }else{
            $random_number = mt_rand();
            $livreachete = "upload/" . $random_number . $_FILES["livreachete"]["name"];
            move_uploaded_file($_FILES["livreachete"]["tmp_name"], $livreachete);
        }
		//$brief = $_POST['brief'];
		//$content = $_POST['content'];
        
        
                                
		/*$pdf = addslashes(file_get_contents($_FILES['pdf']['tmp_name']));

                                $pdf_name = addslashes($_FILES['pdf']['name']);

                                $pdf_size = getimagesize($_FILES['pdf']['tmp_name']);



                                move_uploaded_file($_FILES["pdf"]["tmp_name"], "upload/" . $_FILES["pdf"]["name"]);

                                $Pdf = "upload/" . $_FILES["pdf"]["name"];*/

	
											
	$smt = "UPDATE tbl_livres SET titre=:titre, auteur=:auteur, Photo=:Photo, parution=:parution, editeur=:editeur, autreediteur=:autreediteur, prixpapier=:prixpapier, prixnumerique=:prixnumerique, contenu=:contenu, livreachete=:livreachete
                                WHERE Information_ID = :id";
	$qly = $pdo->prepare($smt);
    $qly->execute(array('id'=>$id,
                        'titre'=>$titre,
                        'Photo'=>$Photo, 
                        'auteur' => $auteur, 
                        'parution' => $parution,
                        'editeur' => $editeur, 
                        'autreediteur' => $reediteur, 
                        'prixpapier' => $prixpapier, 
                        'prixnumerique' => $prixnumerique, 
                        'contenu' => $description,
                        'livreachete' => $livreachete
                    ));

	header('location:info.php');


	

	}

	?>



<?php   include('footer.php'); ?>

