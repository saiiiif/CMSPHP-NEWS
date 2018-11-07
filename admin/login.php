<?php include"../includes/db.php"; ?>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/plugins/loginStyle.css" rel="stylesheet" >              
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
       <!-- Icon here please -->
      <h1>Alshahed News</h1>
    </div>

    <!-- Login Form -->
    <form action="login.php" method="POST">

      <input type="text"  class="fadeIn second" name="username" placeholder="username">
      <input type="text"  class="fadeIn third" name="user_password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In" name="login">


    </form>

<?php if(isset($_POST['submit'])){


    $username=$_POST['username'];
    $user_password=$_POST['user_password'];

    $username=mysqli_real_escape_string($connection,$username);

    $user_password=myssqli_real_escape_string($connection,$user_password);

    $query="SELECT * FROM users WHERE username='{$username}'";
    
    $select_user_query=mysqli_query($connection,$query);

    if(!select_user_query){

   die("QUERY FAILD".mysqli_error($connection));


    }

    while ($row=mysqli_fetch_array($select_user_query)) {
      
      
      $db_username=$row['username'];
      $db_password=$row['password'];

    }
    if($username !==$db_username && $password !==$db_password){

     header("location: ../index.php");

     


     



    }elseif($username ==$db_username && $password ==$db_password) {
      header("location: index.php");
      
    }



   }


?>
   

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="../index.php">Go back to the Website if your not authorized</a>
    



    </div>

  </div>
</div>








 