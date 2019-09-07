<?php 
include_once('koneksi.php');

$id	= $_GET['id']; 

$sql = mysqli_query($conn,"SELECT * FROM name where id = '$id'");

$data = mysqli_fetch_array($sql);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Arcademy Bootcamp</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand">EDIT DATA</a>
    </div>   
  </div>
</nav>
    
<div class="row">

<div class="col-md-10" style="margin-top:5%; margin-left:10%;">

        <form class="form-horizontal" action="edit_data.php?id=<?php echo $id?>" method="POST">
            <div class="form-group">
                <div class="col-sm-12">
                <input type="text" class="form-control" name="nama" id="Name" placeholder="Name" value="<?php echo $data['name'] ?>">
                </div>
            </div>

            <div class="form-group">  
                <div class="col-sm-12">
                <select class="form-control" name="work">
                    <option <?php if($data['id_work']=="1") echo 'selected="selected"'; ?>>Frontend Dev</option>
                    <option <?php if($data['id_work']=="2") echo 'selected="selected"'; ?>>Backend Dev</option>
                </select>
                </div>
            </div>

            <div class="form-group">  
                <div class="col-sm-12">
                <select class="form-control" name="salary">
                    <option <?php if($data['id_salary']=="1") echo 'selected="selected"'; ?>>Rp.10.000.000</option>
                    <option <?php if($data['id_salary']=="2") echo 'selected="selected"'; ?>>Rp.12.000.000</option>
                </select>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-offset-10 col-sm-10">
                <input type="submit" name="submit1" class="btn btn-warning" value="EDIT">
                </div>
            </div>
        </form>

</div>
</div>

  </body>
</html>

      

        