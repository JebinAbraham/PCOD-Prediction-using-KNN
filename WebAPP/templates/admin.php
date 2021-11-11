<?php
     $dt = date('Y-m-d H:i:s');
     $api_key=$_REQUEST["api_key"];
     $conn=mysqli_connect("localhost","root","","pcoded");
     if($conn)
     {
          $q="insert into apikey values('$api_key','$dt')";
          $r=mysqli_query($conn,$q);
          if($r)
          {
               header("location:done.html");
          }     
     
     }
?>