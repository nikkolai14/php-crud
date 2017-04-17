<?php 
  include 'includes/libraries/home.php'; 
  include 'includes/templates/header.php';
?>


  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Customer Data</h1>      
        </div>

        <div class="col-md-12">
          <p><a href="create.php" class="btn btn-success">Create</a></p>          
        </div>

        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>  
                <th style="width: 20%;">Action</th>
              </thead>
              <tbody>
                <?php foreach($pdo->query($sql) as $row): ?>
                  <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                    <td>
                      <a class="btn btn-primary" href="<?php echo 'read.php?id=' . $row['id']; ?>">Read</a>
                      <a class="btn btn-success" href="<?php echo 'update.php?id=' . $row['id']; ?>">Update</a>
                      <a class="btn btn-danger" href="<?php echo 'delete.php?id=' . $row['id']; ?>">Delete</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>  
          </div>   
        </div>
      </div>
    </div>
    
    
<?php
  Database::disconnect();

  include 'includes/templates/footer.php';
?>