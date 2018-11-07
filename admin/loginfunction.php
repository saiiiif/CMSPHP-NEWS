<?php include"../includes/db.php"; ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php if(isset($_POST['login'])){


    $username=$_POST['username1'];
    $user_password=$_POST['user_password1'];
    $db_username="";
    $db_password="";
    

    $query="SELECT * FROM users WHERE username='{$username}'";
    
    $select_user_query=mysqli_query($connection,$query);

    if(!$select_user_query){

   die("QUERY FAILD".mysqli_error($connection));


    }


    while ($row=mysqli_fetch_array($select_user_query)) {
      
      $db_id=$row['user_id'];
      $db_username=$row['username'];
      $db_password=$row['user_password'];
      $db_email=$row['user_email'];
      $db_image=$row['user_image'];
      $db_role=$row['user_role'];

    }
    if($username !== $db_username && $user_password !==$db_password){

     
      header("location: login.php");

     
   

    

     


     



    }
    elseif($username ==$db_username && $user_password ==$db_password) {
      header("location: index.php");
      
    }
  



   }
   ?>