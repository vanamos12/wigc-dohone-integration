<?php
 include('dbcon.php');

require("libs/config.php");
  include('header.php');
?>

<section class="mbr-section form4 cid-qUu84lQnfb" id="form4-1b">

    

    
    <div class="container">
            <div class="col-md-12">
                <h2 class="pb-3 align-left mbr-fonts-style display-2">Editer l'administrateur</h2>
                <div data-form-type="formoid">
                    <div data-form-alert="" hidden="">
                        Thanks for filling out the form!
                    </div>
                    <form class="block mbr-form" method="POST" action="" enctype="multipart/form-data" data-form-title="Mobirise Form">
                    

  <?php 



            $res = $pdo->query("SELECT * FROM tbl_admin WHERE User_ID = ".$_GET['id']);

			$row = $res->fetch();

	?>

                    <div class="control-group">
                
                    <label class="control-label" for="inputEmail">Pseudo</label>
                
                    <div class="controls">
                
                    <input name="id" value="<?php echo $row['User_ID']?>" type="hidden" id="inputEmail" placeholder="ID">
                
                    <input name="un" value="<?php echo $row['Username']; ?>" type="text" id="inputEmail" class="form-control input" placeholder="Pseudo">
                
                    </div>
                
                    </div>
                
                    <div class="control-group">
                
                    <label class="control-label" for="inputPassword">Mot de passe</label>
                
                    <div class="controls">
                
                    <input name="pw" value="<?php echo $row['Password']; ?>" type="text" id="inputPassword" class="form-control input" placeholder="Mot de passe">
                
                    </div>
                
                    </div>
                
                	<div class="control-group">
                
                    <label class="control-label" for="inputPassword">Nom complet</label>
                
                    <div class="controls">
                
                    <input name="fname" value="<?php echo $row['Full_Name']; ?>" type="text" id="inputName" class="form-control input" placeholder="Nom complet">
                
                    </div>
                
                    </div>
                
                    <div class="control-group">
                
                    <div class="controls">
                
                	 <div class="modal-footer">
                
                	<button name="edit" type="submit" class="btn btn-large btn-warning"><i class="icon-save"></i>&nbsp;Sauvegarder</button>
                
                	<button class="btn btn-large" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Fermer</button>
                
                    </div>

                    </div>
                
                    </div>

    </form>

	

	

			<?php

	if (isset($_POST['edit'])){

	$id = $_POST['id'];

	$un = $_POST['un'];

	$pw = $_POST['pw'];
	
	//$enc_password = hash('sha256', $pw);
    $enc_password = md5($pw);

	$name = $_POST['fname'];

						
	$smt = "UPDATE tbl_admin SET Username=:un, Password=:password, Full_Name=:name WHERE User_ID = :id";
	$qly = $pdo->prepare($smt);
	$qly->execute(array(':id'=>$id,':un'=>$un,':password'=>$enc_password,':name'=>$name));

		
	header('location:admin.php');

	?>

	

	<?php



	

	}

	?>

</div>
</div>
</div>

</section>



<?php   include('footer.php'); ?>

