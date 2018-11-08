 
<?php include "../includes/db.php" ; ?>
 <?php include "includes/header.php"; ?>

<body>
     <?php 
          if(isset($_GET['edit']))
          {
         $the_post_id=$_GET['edit'];
         $post_title=$_GET['title'];
         $post_author=$_GET['author'];
         $post_image=$_GET['image'];
         $post_content=$_GET['content'];
         $post_date=$_GET['date'];
          }
          ?>  

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>Saif ej </strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> saif ej  <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                   <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Posts</a>
                    </li>
                    <li>
                        <a href="Posts.php"><i class="fa fa-fw fa-view"></i> View all Posts</a>
                    </li>

                      <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-edit"></i> Add New Posts</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to admin 
                            <small>Dashbord </small>
                        </h1>
                <!-- select from category db -->
                    <?php 

                    $query="SELECT * FROM posts";
                    $select_posts_query=mysqli_query($connection,$query);

                    ?>

                    

                  
                        <div class="col-xs-6">

                <form action="" method="POST" enctype="multipart/form-data"> 
                      <div class="form-group">
                    <label for="post-id">
                        ID
                    </label>
                    <input type="text" name="post_id" class="form-control"   <?php echo "value= '{$the_post_id}'" ?>  >
                </div>
                    
                    <div class="form-group">
                    <label for="post-title">
                        Post title
                    </label>
                    <input type="text" name="post_title" class="form-control"   <?php echo "value= '{$post_title}'" ?>  >
                </div>
                <div class="form-group">
                      <label for="post_author">
                        Post Author
                    </label>
                    <input type="text" name="post_author" class="form-control" <?php echo "value= '{$post_author}'" ?>>
                </div>
                <div class="form-group">
                      <label for="post_date">

                        Post Date
                    </label>
                    <input type="Date" name="date" class="form-control" <?php echo "value= '{$post_date}'" ?>>
                </div>
                <div class="form-group">
                    <label> Upload image </label>
                    <input type="file" name="post_image" class="form-control" <?php echo "value= '{$post_image}'" ?>>


                </div> 


                <div class="form-group">
                    <label for="post_content" > Post content </label>
                    <textarea class="form-control" name="post_content" cols="30" rows="10" <?php echo "value= '{$post_content}'" ?>></textarea>
                </div> 

              

             <input type="submit" name="submit" value="ajouter" class="btn-info" >

                </form>

              <?php
                        if(isset($_POST['submit'])){

                        $post_title=$_POST['post_title'];
                        $post_author=$_POST['post_author'];
                        $post_image=addslashes (file_get_contents ($_FILES['post_image']['tmp_name']));
                        $post_content=$_POST['post_content'];
                        $post_date=$_POST['date'];
                        $post_id=$_POST['post_id'];
                        if($post_title =="" || empty($post_title)){
                            
                            echo "this field should not be empty";
                        } else{
                            $query="Update posts Set post_title ='{$post_title}',post_author ='{$post_author}',post_date={$post_date},post_content='{$post_content}',post_image={$post_image}) where post_id={$post_id}";
                            $edit_post_query=mysqli_query($connection,$query);
                            if(!$edit_post_query){

                             die('QUERY faild'.mysqli_error($connection));

                            }

                        }

                        }

                        ?>

                 </div>
                        <ol class="breadcrumb">

                        </ol>

                    </div>
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
  <?php include "includes/footer.php"; ?>