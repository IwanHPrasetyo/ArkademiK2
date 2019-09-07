<?php 
  include_once("koneksi.php");
  session_start();
  

         
          $nama              = $_POST['nama'];
          $work              = $_POST['work'];
          $salary            = $_POST['salary'];

          if ($work == "Frontend Dev") {
            $iwork = 1;
          }
          elseif ($work == "Backend Dev") {
            $iwork = 2;
          }

          if ($salary == "Rp.10.000.000") {
            $isalary = 1;
          }
          elseif ($salary == "Rp.12.000.000") {
            $isalary = 2;
          }


          $id    = $_GET['id'];
   
          $sql =mysqli_query($conn,"UPDATE name set name = '$nama', id_work = '$iwork', id_salary = '$isalary' where id = '$id'")or die (mysqli_error());
  
      if($sql){
        echo "
        <script>
          alert('Data Berhasil Diubah');
          window.location = 'index.php';
        </script>
        ";


      }elseif(!$sql){
    //    echo "
      //  <script>
      //   alert('Data Gagal Diubah');
      //    window.location = '../form_jadwal.php';
      //  </script>
      //  ";
         
      }
   
					
	
	
 ?>