<?php 
include_once('koneksi.php');
$sql     = "SELECT n.name, n.id, w.name as work, k.salary from name as n join work as w on n.id_work = w.id join kategori as k on n.id_salary = k.id";
$data    = $conn->query($sql);
$sql1    = "SELECT name from work";
$data1   = $conn->query($sql1);
$sql2    = "SELECT salary from kategori";
$data2   = $conn->query($sql2);
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
      <a class="navbar-brand" href="#">ARKADEMY BOOTCAMP</a>
    </div>   
  </div>
</nav>



<div class="row"">

<div class="col-md-6" style="margin-left:85%; margin-top:5%;">
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Add">ADD</button>
</div>
</div>
<div class="row">
        <div class="panel panel-default" style="margin-left:10%; margin-right:10%; margin-top:1%;">
        <!-- Default panel contents -->
        <!-- Table -->
        
        
        <table class="table table-bordered" style="text-align:center;">
        <thead>
            <th style="text-align:center;">Name</th>
            <th style="text-align:center;">Work</th>
            <th style="text-align:center;">Salary</th>
            <th style="text-align:center;" colspan="2">Acion</th>
        </thead>
        <tbody>
            <?php 
            while($row=$data->fetch_array()){
            
            ?>

            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['work']; ?></td>
                <td><?php echo "Rp.".number_format($row['salary'],0,',','.'); ?></td>
                <td>
                    <a href="form_edit_data.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-info" data-toggle="modal" data-target="#Edit">Edit</a>
                    <a href="hapus_data.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-danger">Hapus</a>
                </td>
            </tr>

            

            <?php 
            }
            ?>
        </tbody>
        </table>
        </div>
</div>


<br><br><br>


<!– Modal –>

<div id="Add" class="modal fade" role="dialog">

<div class="modal-dialog">


<!– Modal content–>

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">ADD DATA</h4>

</div>

<div class="modal-body">

        <form class="form-horizontal" method="get" action="tambah_data.php">
            <div class="form-group">
                <div class="col-sm-12">
                <input type="text" class="form-control" name="nama" placeholder="Name">
                </div>
            </div>

            <div class="form-group">  
                <div class="col-sm-12">
                <select class="form-control" name="work">
                <?php 
                while($row=$data1->fetch_array()){
                
                ?>
                    <option><?php echo $row['name']; ?></option>

                <?php }?>
                </select>
                </div>
            </div>

            <div class="form-group">  
                <div class="col-sm-12">
                <select class="form-control" name="salary">
                <?php 
                while($row=$data2->fetch_array()){
                
                ?>
                    <option><?php echo "Rp.".number_format($row['salary'],0,',','.'); ?></option>
                <?php }?>
                </select>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-offset-10 col-sm-10">
                <button type="submit" class="btn btn-warning">ADD</button>
                </div>
            </div>
        </form>

</div>

</div>

 

</div>

</div>


<!– Modal –>

<div id="Edit" class="modal fade" role="dialog">

<div class="modal-dialog">


<!– Modal content–>

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">EDIT DATA</h4>

</div>

<div class="modal-body">


</div>

</div>

 

</div>

</div>


  </body>
</html>