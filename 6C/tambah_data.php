<?php 
  include_once("koneksi.php");
  

          $nama              = $_GET['nama'];
          $work              = $_GET['work'];
          $salary            = $_GET['salary'];

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
          
            
            $sql = mysqli_query($conn,"insert into name values ('','$nama','$iwork','$isalary')")or die (mysqli_error()); 
            
       
    

    if($sql){

      echo "
      <script>
        alert('Data Berhasil Ditambahkan');
        window.location = 'index.php';
      </script>
      ";

    }

    elseif(!$sql){
      
            echo "
            <script>
              alert('Data Sudah Ditambahkan');
              window.location = 'index.php';
            </script>
            ";
            
      
          }

      

         
  
      
   
					
	
	
 ?>