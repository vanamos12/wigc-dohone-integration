

<!-- Modal -->

<div id="edit<?php echo  $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

<div class="modal-header">

<div class="alert alert-gray">

	Edit Admin

  </div>



<div class="modal-body">

<hr>

                  <form class="form-horizontal" method="POST">

    <div class="control-group">

    <label class="control-label" for="inputEmail">Username</label>

    <div class="controls">

    <input name="id" value="<?php echo $row['User_ID']?>" type="hidden" id="inputEmail" placeholder="ID">

    <input name="un" value="<?php echo $row['Username']; ?>" type="text" id="inputEmail" placeholder="UserName">

    </div>

    </div>

    <div class="control-group">

    <label class="control-label" for="inputPassword">Password</label>

    <div class="controls">

    <input name="pw" value="<?php echo $row['Password']; ?>" type="text" id="inputPassword" placeholder="Password">

    </div>

    </div>

	<div class="control-group">

    <label class="control-label" for="inputPassword">Full Name</label>

    <div class="controls">

    <input name="fname" value="<?php echo $row['Full_Name']; ?>" type="text" id="inputPassword" placeholder="Password">

    </div>

    </div>

    <div class="control-group">

    <div class="controls">

	 <div class="modal-footer">

	<button name="edit" type="submit" class="btn btn-large btn-warning"><i class="icon-save"></i>&nbsp;Save</button>

	<button class="btn btn-large" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;No</button>

    </div>

    </div>

    </div>

    </form>

	

	

			<?php

	if (isset($_POST['edit'])){

	$id = $_POST['id'];

	$un = $_POST['un'];

	$pw = $_POST['pw'];
	
	$enc_password = hash('sha256', $pw);

	$name = $_POST['fname'];

	

	$query = $pdo->prepare("update tbl_admin set Username = '$un' , Password = '$enc_password', Full_Name='$name' where User_ID = '$id' ");

	header('location:admin.php');

	?>

	

	<?php



	

	}

	?>

	

	

</div>



</div>