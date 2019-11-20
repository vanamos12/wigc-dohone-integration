<?php
 include('dbcon.php');

require("libs/config.php");
  include('header.php');
?>

<section class="mbr-section form4 cid-qUu84lQnfb" id="form4-1b">

    

    
    <div class="container">
            <div class="col-md-12">
                <h2 class="pb-3 align-left mbr-fonts-style display-2">Ajoutez un slider</h2>
                <div data-form-type="formoid">
                    <div data-form-alert="" hidden="">
                        Merci de remplir le formulaire !
                    </div>
                    <form class="block mbr-form" method="POST" enctype="multipart/form-data" data-form-title="Mobirise Form">
                        
                            <!--<div class="col-md-12" data-for="name">
                            <label class="control-label" for="inputEmail">Titre</label>
                                <input type="text" class="form-control input" name="title" data-form-field="Titre" required="" id="name-form4-1b">
                            </div>
                            <div class="col-md-12" data-for="name">
                            <label class="control-label" for="inputEmail">Brief</label>
                                <input type="text" class="form-control input" name="brief" data-form-field="Brief" required="" id="name-form4-1b">
                            </div>
                            <div class="col-md-12" data-for="message">
                            <label class="control-label" for="inputEmail">Description</label>
                                <textarea class="form-control input" name="content" rows="3" data-form-field="Message" style="resize:none" id="message-form4-1b"></textarea>
                            </div>-->
                            <div class="col-md-12" data-for="name">
                            <label class="control-label" for="input01">Fichier image:</label>
                                <input type="file" class="form-control input" name="image" class="font" required> 
                            </div>
                            <!--<div class="col-md-12" data-for="name">
                            <label class="control-label" for="input01">Fichier pdf:</label>
                                <input type="file" class="form-control input" name="pdf" class="font" required> 
                            </div>-->
                            <div class="col-md-12" style="margin-top: 10px;"><button href="" type="submit" name="addinfo" class="btn btn-primary">Poster</button></div>
                        
                    </form>
                </div>
            </div>
    </div>
</section>


<?php
		if(isset($_POST['addinfo'])){
		/*$title=$_POST['title'];
		$prodSlug = slug($title);	
		$brief = $_POST['brief'];
		$content = $_POST['content'];*/
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                $random_number = mt_rand();
                                $Photo = "upload/" .$random_number . $_FILES["image"]["name"];
                                move_uploaded_file($_FILES["image"]["tmp_name"], $Photo);
                                
		/*$pdf = addslashes(file_get_contents($_FILES['pdf']['tmp_name']));

                                $pdf_name = addslashes($_FILES['pdf']['name']);

                                $pdf_size = getimagesize($_FILES['pdf']['tmp_name']);



                                move_uploaded_file($_FILES["pdf"]["tmp_name"], "upload/" . $_FILES["pdf"]["name"]);

                                $Pdf = "upload/" . $_FILES["pdf"]["name"];*/
		
		$sql=$pdo->prepare("INSERT into tbl_slider (Photo) VALUES('$Photo')");
	    $sql->execute();
			
	    header('location:horizon.php');
		
		}
		
		?>

<?php   include('footer.php'); ?>
