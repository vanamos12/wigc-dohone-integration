<?php

 include('dbcon.php');

 require("libs/config.php");

 include("header.php");

?>

  
<section class="features18 popup-btn-cards cid-qUhQ4nM5TX" id="features18-6">

    

    <div class="container">
        <div class="title col-12">
                
                <h2 class="pb-3 align-left mbr-fonts-style display-2">Administration</h2>
   
        <div class="align-right">
            <a class="btn btn-primary" type="button" href="#addadmin" role="button"  data-toggle="modal"> Ajout administrateur</a>
        </div>  
        
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">

          <thead>
        
            <tr>
        
              <th>Pseudo</th>
        
              <th width="80">Mot de passe</th>
        
              <th>Nom complet</th>
        
              <th width="180">Action</th>
        
            </tr>
        
        	
        
          </thead>
        
          <tbody>

            <?php
        
            $query = $pdo->prepare("SELECT * FROM tbl_admin");
        
        	$query->execute();
        
        	while($row = $query->fetch()){
        
        	$id=$row['User_ID'];
        	
        
        
        	
        
        	?>

            <tr>
        
              <td><?php echo $row['Username'];?></td>
        
              <td><?php echo $row['Password'];?></td>
        
              <td><?php echo $row['Full_Name'];?></td>
              
              <td> <a href="edit-admin.php?id=<?php  echo $id;?>" class="btn btn-warning" >&nbsp; Editer</a>
    
                <!--<a href="#delete<?php //echo $id; ?>" data-toggle="modal" class="btn btn-danger"> &nbsp;Effacer</a>-->
              </td>
        
        
            
            <?php include('modal_delete_admin.php');?>
        
        	
            <?php include('modal_edit_admin.php');?>
        
            </tr>
        
        	<?php } ?> 
        
          </tbody> 
        
          </table>	  







	  </div>

	  

		<?php include("modal_addadmin.php");?>


	  </div>
</section>

<?php   include('footer.php'); ?>