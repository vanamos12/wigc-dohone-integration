<div id="addadmin" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">






  <div class="modal-body">
<section class="mbr-section form4 cid-qUu84lQnfb" id="form4-1b">

    

    
    <div class="container">
            <div class="col-md-12">
                <h2 class="pb-3 align-left mbr-fonts-style display-2">Ajouter administrateur</h2>
                <div data-form-type="formoid">
                    <div data-form-alert="" hidden="">
                        Thanks for filling out the form!
                    </div>
                    <form class="block mbr-form" method="POST" enctype="multipart/form-data" data-form-title="Mobirise Form">
                    

                      <div class="control-group">
                    
                    
                        <div class="controls">
                    
                          <input type="text" id="inputEmail" name="username" class="form-control input" placeholder="Pseudo" required>
                    
                        </div>
                    
                      </div>
                    
                      <div class="control-group">
                    
                    
                        <div class="controls">
                    
                          <input type="password" id="inputPassword" name="password" class="form-control input" placeholder="Mot de passe" required>
                    
                        </div>
                    
                      </div>
                    
                      
                    
                       <div class="control-group">
                    
                    
                        <div class="controls">
                    
                          <input type="text" id="inputPassword"  name="fullname" class="form-control input" placeholder="Nom complet" required>
                    
                        </div>
                    
                      </div>
                    
                     
                    
                    
                    
                      </div>
                    
                      <div class="modal-footer">
                    
                        <button name="save" type="submit" class="btn btn-success"><i class="icon-save"></i>&nbsp;Save</button>
                    
                          <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Close</button>
                      </div>
                      
                      
                    </form>  

	

	 <?php
     
include_once 'dbconfig.php';

		if(isset($_POST['save'])){

		$Username=$_POST['username'];

		$Password=$_POST['password'];
		
		$enc_password = hash('sha256', $Password);

		$FullName=$_POST['fullname'];

		

			try {

		$smt=$DB->prepare("INSERT INTO tbl_admin(Username, Password, Full_Name) VALUES('$Username','$enc_password','$FullName')");

	    $smt->execute();

			
	//redirect to index page
		header('location:admin.php');
				exit;

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}

		


		}

		?>

</div>
</div>
</div>

</section>
</div>
	

	

</div>

