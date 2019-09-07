<?php 
	include_once("koneksi.php");


					$id        	   = $_GET['id'];
					
					
         $sql =mysqli_query($conn,"DELETE from name WHERE id='$id'");
								

if ($sql) {
	echo "
	<script>
	  alert('Data Berhasil Dihapus');
	  window.location = 'index.php';
	</script>
	";
}

else{

	echo "
	<script>
	  alert('Data Gagal Dihapus');
	  window.location = 'index.php';
	</script>
	";	
}							


      
         									
	
 ?>