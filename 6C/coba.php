<!DOCTYPE html>
<html lang="en">
<head>
<title>Pagination</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>

</head>
<body>

<?php
include 'koneksidb.php';
?>

<div class="col-sm-6" style="padding-top: 20px; padding-bottom: 20px;">
<h3>DataTabels dengan PHP dan Bootstrap</h3>
<hr>

<table class="table table-stripped table-hover datatab">
<thead>
<tr>
<th>No</th>
<th>Id</th>
<th>Nama</th>
<th>Fakultas</th>
<th>Action</th>                         
</tr>
</thead>  
<tbody>
<?php 
$query = mysql_query("SELECT * FROM mhs");
$no = 1;
while ($data = mysql_fetch_assoc($query)) 
{
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $data['id']; ?></td>
<td><?php echo $data['nama']; ?></td>
<td><?php echo $data['fakultas']; ?></td>
<td>
<!-- Button untuk modal -->
<a href="#" type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal<?php echo $data['id']; ?>">Edit</a>
</td>
</tr>
<!-- Modal Edit Mahasiswa-->
<div class="modal fade" id="myModal<?php echo $data['id']; ?>" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Update Data Mahasiswa</h4>
</div>
<div class="modal-body">
<form role="form" action="editmhs.php" method="get">

<?php
$id = $data['id']; 
$query_edit = mysql_query("SELECT * FROM mhs WHERE id='$id'");
//$result = mysqli_query($conn, $query);
while ($row = mysql_fetch_array($query_edit)) {  
?>

<input type="hidden" name="id_mhs" value="<?php echo $row['id']; ?>">

<div class="form-group">
<label>Nama</label>
<input type="text" name="nama_mhs" class="form-control" value="<?php echo $row['nama']; ?>">      
</div>

<div class="form-group">
<label>Fakultas</label>
<input type="text" name="fakultas_mhs" class="form-control" value="<?php echo $row['fakultas']; ?>">      
</div>

<div class="modal-footer">  
<button type="submit" class="btn btn-success">Update</button>
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

<?php 
}
//mysql_close($host);
?>        
</form>
</div>
</div>

</div>
</div>
<?php               
} 
?>
</tbody>
</table>          
</div>

</body>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
$('.datatab').DataTable();
} );
</script>
</html>