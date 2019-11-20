<?php

 include('dbcon.php');

 require("libs/config.php");

 include("header.php");

?>

<section class="features18 popup-btn-cards cid-qUhQ4nM5TX" id="features18-6">

    

    <div class="container">
        <div class="title col-12">
                
        <h3 class="mbr-section-title pb-3  mbr-fonts-style display-2">
                    
        <strong>Liste des livres</strong></h3>
                
        <div class="align-right">
            <a  class="btn btn-primary" type="button" href="add-info.php" > Poster un livre</a>
        </div>    
     
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">


       <thead>
    
        <tr>
    
          <th>Cover</th>
    
          <th>Titre</th>
    
          <!--<th>Description</th>-->
    
          <th width="180">Action</th>
    
        </tr>
    
      </thead>
    
     
    
      <tbody>
    
        <?php
    
            $query = $pdo->prepare("select * from tbl_livres");
    
 			$query->execute();
    
 			while($row = $query->fetch()){
    
            $id=$row['Information_ID'];
    
    
    	?>
        
        <tr>
        
            <td><img src="<?php echo $row['Photo']; ?>"  width="180"/></td>
    
            <td><?php echo $row['titre']; ?></td>
    
            <!--<td><?php //echo $row['Bref']; ?></td>-->
    
            <td> <a href="edit-info.php?id=<?php  echo $id;?>"  class="btn btn-warning" >&nbsp; Editer</a>
            

            <!--<a data-toggle="modal" href="#delete_info<?php //echo $id; ?>" class="btn btn-danger"> &nbsp;Effacer</a>-->
            <a href="delete_info.php<?php echo '?id='.$id; ?>" class="btn btn-danger"> &nbsp;Effacer</a>
            </td>
    
        </tr>
    
        <?php
            include('modal_delete_info.php');
            
             } 
        ?>	
    
        </tbody>
    
    
        </table>

        </div>


    </div>

</section>

<?php   include('footer.php'); ?>