<?php 
  include 'includes/libraries/read.php'; 
  include 'includes/templates/header.php';
?>

<div class="container">     
  <div class="row">
    <div class="col-md-12">
      <h3>Read a Customer</h3>
    </div>

    <div class="col-md-12">
      <p>
        <a class="btn btn-primary" href="index.php">Back</a>
      </p>
    </div>

    <div class="col-md-12">
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $data['name']; ?></td>
              <td><?php echo $data['email']; ?></td>
              <td><?php echo $data['mobile']; ?></td>
            </tr>
          </tbody>
        </table>  
      </div>
    </div>  
  </div> 
</div>

<?php
  include 'includes/templates/footer.php';
?>