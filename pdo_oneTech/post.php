
<?php
  include_once './db/dbconfig.php';

  if(isset($_GET['id']))
  {
    $id = $_GET['id'];
    extract($crud->getID_Detail($id)); 
  }

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title>

  <?php include_once('inc/script.php');  ?>
  </head>

  <body>

    <!-- Navigation -->
    <?php  
      // include_once('folder/filename');
      include_once('inc/nav.php');
    ?>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3"><?php echo $title; ?>       
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active"><?php echo $title; ?></li>
      </ol>

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="uploads/img/<?php echo $image; ?>" alt="">

          <hr>

          <!-- Date/Time -->
          <p>Posted on <?php echo $create_date; ?> | <span>by
          <a href="#">SENG Sourng</a>
        </span> </p>​

          <hr>

          <!-- Post Content -->
          <?php echo $detail; ?>

          <hr>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

          <!-- Single Comment -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
          </div>

          <!-- Comment with nested comments -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

            </div>
          </div>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card mb-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Web Design</a>
                    </li>
                    <li>
                      <a href="#">HTML</a>
                    </li>
                    <li>
                      <a href="#">Freebies</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">JavaScript</a>
                    </li>
                    <li>
                      <a href="#">CSS</a>
                    </li>
                    <li>
                      <a href="#">Tutorials</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

   
    <!-- Footer -->
    <?php include_once('inc/footer.php'); ?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  </body>

</html>
