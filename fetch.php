<?php  
 //fetch.php  
 if(isset($_POST["id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "avl");  
      $query = "SELECT * FROM scores WHERE id='".$_POST["id"]."'";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output = '  
                <p><label>Email : </label><br />'.$row['email'].'</p>  
                <p><label>VD Casting Score : </label>'.$row['vd_casting_score'].'</p>  
                <p><label>SCM Casting Score : </label>'.$row['scm_casting_score'].' </p>  
                <p><label>Quality Casting Score : </label>'.$row['qu_casting_score'].' </p>  
                <p><label>VD Extrusion Score : </label>'.$row['vd_extrucion_score'].'</p>  
                <p><label>SCM Extrusion Score : </label>'.$row['scm_extrusion_score'].'</p>  
                <p><label>Quality Extrusion Score : </label>'.$row['qu_extrusion_score'].'</p>  
           ';  
      }  
      echo $output;  
 }  
 ?>  