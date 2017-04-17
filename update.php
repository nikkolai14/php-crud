<?php 
  include 'includes/libraries/update.php'; 
  include 'includes/templates/header.php';
?>
	<div class="container">
        <div class="row">
        	<div class="col-md-12">
            	<h3>Update a Customer</h3>
        	</div>
				
			<div class="col-md-12">
		        <form class="form-horizontal" action="update.php?id=<?php echo $id?>" method="post">
		          <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
		            <label class="control-label">Name</label>
		            <div class="controls">
		                <input name="name" type="text"  placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
		                <?php if (!empty($nameError)): ?>
		                    <span class="help-inline"><?php echo $nameError;?></span>
		                <?php endif; ?>
		            </div>
		          </div>
		          <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
		            <label class="control-label">Email Address</label>
		            <div class="controls">
		                <input name="email" type="text" placeholder="Email Address" value="<?php echo !empty($email)?$email:'';?>">
		                <?php if (!empty($emailError)): ?>
		                    <span class="help-inline"><?php echo $emailError;?></span>
		                <?php endif;?>
		            </div>
		          </div>
		          <div class="control-group <?php echo !empty($mobileError)?'error':'';?>">
		            <label class="control-label">Mobile Number</label>
		            <div class="controls">
		                <input name="mobile" type="text"  placeholder="Mobile Number" value="<?php echo !empty($mobile)?$mobile:'';?>">
		                <?php if (!empty($mobileError)): ?>
		                    <span class="help-inline"><?php echo $mobileError;?></span>
		                <?php endif;?>
		            </div>
		          </div>
		          <div class="form-actions"><br>
		              <button type="submit" class="btn btn-success">Update</button>
		              <a class="btn" href="index.php">Back</a>
		            </div>
		        </form>
	        </div>
        </div>
    </div>

<?php
  include 'includes/templates/footer.php';
?>