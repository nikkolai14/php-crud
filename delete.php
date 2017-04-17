<?php 
  include 'includes/libraries/delete.php'; 
  include 'includes/templates/header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Delete a Customer</h3>
        </div>
         
     	<div class="col-md-12">
	        <form class="form-horizontal" action="delete.php" method="post">
	          <input type="hidden" name="id" value="<?php echo $id;?>"/>
	          <p class="alert alert-error">Are you sure to delete ?</p>
	          <div class="form-actions">
	              <button type="submit" class="btn btn-danger">Yes</button>
	              <a class="btn" href="index.php">No</a>
	            </div>
	        </form>
        </div>
    </div>
</div> 
    
    
<?php
  include 'includes/templates/footer.php';
?>