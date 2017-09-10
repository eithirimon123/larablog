<?php define('BASEPATH', "localhost");
require_once("autoload.php");

$product_m = new ProductModel();

$products  = $product_m->getRows();

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PHP PDO CRUD Example</title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">PHP PDO</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
          </ul>
        </li>
      </ul>
      
     
    </div><!-- /.navbar-collapse -->


  </div><!-- /.container-fluid -->
</nav>


<div class="container">

<a href="create.php" class="btn btn-primary pull-right">Add New</a>

  <table class="table table-striped">
    <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Price</th>
      <th>Description</th>
      <th>Photo</th>
    </tr>
    </thead>

    <tbody>

<?php if(is_array($products) && count($products)>0): ?>

  <?php foreach($products as $product): ?>
    <tr>
      <td><?php echo $product['id']; ?></td>
      <td><?php echo $product['title']; ?></td>
      <td><?php echo $product['price']; ?></td>
      <td><?php echo $product['description']; ?></td>
      <td>
          <?php if(!empty($product['photo'])): ?>
           <img src="uploads/<?php echo $product['photo']; ?>"  style="height:150px;" class="thumbnail" />
          <?php endif; ?>
      </td>
      <td>
        <a href="edit.php?id=<?php echo $product['id']; ?>" class="btn btn-info btn-xs">Edit</a>   
        <a href="delete.php?id=<?php echo $product['id']; ?>" class="btn btn-danger btn-xs">Delete</a>   
      </td>
    </tr>

  <?php endforeach; ?>

<?php else: ?>
      <tr>
        <td colspan="7">
          <p class="alert alert-info">
            No record found!
          </p>
        </td>
      </tr>
<?php endif; ?>

    </tbody>
    

  </table>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </body>
</html>