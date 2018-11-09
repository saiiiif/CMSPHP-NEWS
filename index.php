 
<?php include "includes/db.php"; ?>


<?php  
       include "includes/header.php" ;


   ?>


<body id="page-top" data-spy="scroll" data-target=".navbar">
<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>
<!-- preloader -->

<div class="uc-mobile-menu-pusher">
<div class="content-wrapper">
<section id="header_section_wrapper" class="header_section_wrapper">
    <div class="container">
        <div class="header-section">
            <div class="row">
                <div class="col-md-4">
                    <div class="left_section">
                                            <span class="date">
                                                 الأحد18 
                                            </span>
                        <!-- Date -->
                                            <span class="time">
                                                مارس 2018
                                            </span>
                        <!-- Time -->
                        <div class="social">
                            <a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                            <!--Twitter-->
                            <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                            <!--Google +-->
                            <a class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
                            <!--Linkedin-->
                            <a class="icons-sm tmb-ic"><i class="fa fa-tumblr"> </i></a>
                            <!--Pinterest-->
                            <a class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                        </div>
                        <!-- Top Social Section -->
                    </div>
                    <!-- Left Header Section -->
                </div>
                <div class="col-md-4">
                    <div class="logo">
                        <a href="index.html"><img src="assets/img/logo.png" alt="Tech NewsLogo"></a>
                    </div>
                    <!-- Logo Section -->
                </div>
                <div class="col-md-4">
                    <div class="right_section">
                        <ul class="nav navbar-nav">
                           
                            <li class="dropdown lang">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">اللغة <i
                                        class="fa fa-angle-down"></i></button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">اللغة</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Language Section -->

                        <ul class="nav-cta hidden-xs">
                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i
                                    class="fa fa-search"></i></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="head-search">
                                            <form role="form">
                                                <!-- Input Group -->
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                           placeholder="Type Something"> <span class="input-group-btn">
                                                                            <button type="submit"
                                                                                    class="btn btn-primary">بحث
                                                                            </button>
                                                                        </span></div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Search Section -->
                    </div>
                    <!-- Right Header Section -->
                </div>
            </div>
        </div>
        <!-- Header Section -->

        <div class="navigation-section">
            <nav class="navbar m-menu navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="#navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav">
                            <li class="active"><a href="index.html"></a></li>
							<li class="dropdown m-menu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">المزيد
                                <span><i class="fa fa-angle-down"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="m-menu-content">
										
                                            <ul class="col-sm-3">
											<?php
											$query="SELECT * FROM category";
											$select_all=mysqli_query($connection,$query);
											while($row=mysqli_fetch_assoc($select_all)){
												
												$cat_title=$row['cat_title'];
												echo   "<li><a href='#'>{$cat_title} </a></li>" ;
												
											}
											
											
											
											
											
                                                
                                             
                                                
                                            
										?>
										</ul>
                                            <ul class="col-sm-3">
                                                <li class="dropdown-header">Widget Haeder</li>
                                                <li><a href="#">تونس</a></li>
                                                <li><a href="#">تونس</a></li>
                                                <li><a href="#">تونس</a></li>
                                                <li><a href="#">تونس</a></li>
                                                <li><a href="#">تونس</a></li>
                                            </ul>
                                            <ul class="col-sm-3">
                                                <li class="dropdown-header">Widget Haeder</li>
                                                <li><a href="#">تونس</a></li>
                                                <li><a href="#">تونس</a></li>
                                                <li><a href="#">تونس</a></li>
                                                <li><a href="#">تونس</a></li>
                                                <li><a href="#">تونس</a></li>
                                            </ul>
                                            <ul class="col-sm-3">
                                                <li class="dropdown-header">Widget Haeder</li>
                                                <li><a href="#">تونس</a></li>
                                                <li><a href="#">تونس</a></li>
                                                <li><a href="#">تونس</a></li>
                                                <li><a href="#">تونس</a></li>
                                                <li><a href="#">تونس</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="category.html">ثقافة</a></li>
                            <li><a href="blog.html">الرياضة</a></li>
                            <li><a href="blog.html">السياسة</a></li>
                            <li><a href="blog.html">العالم العربي</a></li>
                            <li><a href="blog.html">تونس</a></li>
                            
                        </ul>
                    </div>
                    <!-- .navbar-collapse -->
                </div>
                <!-- .container -->
            </nav>
            <!-- .nav -->
        </div>
        <!-- .navigation-section -->
    </div>
    <!-- .container -->
</section>
<!-- header_section_wrapper -->

					 	<?php
											$query="SELECT * FROM posts";
											$select_all=mysqli_query($connection,$query);
											while($row=mysqli_fetch_assoc($select_all)){
												
												$post_title=$row['post_title'];
												$post_author=$row['post_author'];
												$post_date=$row['post_date'];
												$post_image=$row['post_image'];
												$post_content=$row['post_content'];
												
												
												
											}
											
											
											
											
											
                                                
                                             
                                                
                                            
										?>

<section id="feature_news_section" class="feature_news_section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="feature_article_wrapper">
                    <div class="feature_article_img">
                        <img class="img-responsive top_static_article_img" src="assets/img/ardogan.jpg"
                             alt="feature-top"  height="400" width="600">
                    </div>
                    <!-- feature_article_img -->
                     
					 
                    <div class="feature_article_inner">
                        <div class="tag_lg red"><a href="category.html">حصريا</a></div>
                        <div class="feature_article_title">
                            <h1><a href="single.html" target="_self"><?php echo $post_title ?></a></h1>
                        </div>
                        <!-- feature_article_title -->

                        <div class="feature_article_date"><a href="#" target="_self"><?php echo $post_author ?></a>,<a href="#"
                                                                                                         target="_self"><?php echo $post_date ?>
                            </a></div>
                        <!-- feature_article_date -->

                        <div class="feature_article_content">
                          <?php echo $post_content ?>
                        </div>
                        <!-- feature_article_content -->

                        <div class="article_social">
                            <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
                        </div>
                        <!-- article_social -->

                    </div>
                    <!-- feature_article_inner -->

                </div>
                <!-- feature_article_wrapper -->

            </div>
            <!-- col-md-7 -->

            <div class="col-md-5">
                <div class="feature_static_wrapper">
                    <div class="feature_article_img">
                        <img class="img-responsive" src="assets/img/feature-static1.jpg" alt="feature-top">
                    </div>
                    <!-- feature_article_img -->

                    <div class="feature_article_inner">
                        <div class="tag_lg purple"><a href="category.html">الأكثر مشاهدة</a></div>
                        <div class="feature_article_title">
                            <h1><a href="single.html" target="_self">ملف خاشقجي.. أمر ملكي سعودي بإعفاء سعود القحطاني وأحمد عسيري من منصبيهما </a></h1>
                        </div>
                        <!-- feature_article_title -->

                        <div class="feature_article_date"><a href="#" target="_self">Saif</a>,<a href="#"
                                                                                                         target="_self">Aug
                            4, 2018</a></div>
                        <!-- feature_article_date -->

                        <div class="feature_article_content">
                           ملف خاشقجي.. أمر ملكي سعودي بإعفاء سعود القحطاني وأحمد عسيري من منصبيهما
                        </div>
                        <!-- feature_article_content -->

                        <div class="article_social">
                            <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
                        </div>
                        <!-- article_social -->

                    </div>
                    <!-- feature_article_inner -->

                </div>
                <!-- feature_static_wrapper -->

            </div>
            <!-- col-md-5 -->

            <div class="col-md-5">
                <div class="feature_static_last_wrapper">
                    <div class="feature_article_img">
                        <img class="img-responsive" src="assets/img/feature-static2.jpg" alt="feature-top">
                    </div>
                    <!-- feature_article_img -->

                    <div class="feature_article_inner">
                        <div class="tag_lg blue"><a href="category.html">الأكثر مشاهدة</a></div>

                        <div class="feature_article_title">
                            <h1><a href="single.html" target="_self">أردوغان: مشاريع تركيا وأذربيجان تعزز تحولهما إلى قوة إقليمية</a></h1>
                        </div>
                        <!-- feature_article_title -->

                        <div class="feature_article_date"><a href="#" target="_self">Saif</a>,<a href="#"
                                                                                                         target="_self">Aug
                            4, 2018</a></div>
                        <!-- feature_article_date -->

                        <div class="feature_article_content">
                           أردوغان: مشاريع تركيا وأذربيجان تعزز تحولهما إلى قوة إقليمية
                        </div>
                        <!-- feature_article_content -->

                         <div class="article_social">
                            <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
                        </div>
                        <!-- article_social -->

                    </div>
                    <!-- feature_article_inner -->

                </div>
                <!-- feature_static_wrapper -->

            </div>
            <!-- col-md-5 -->

        </div>
        <!-- Row -->

    </div>
    <!-- container -->

</section>
<!-- Feature News Section -->

<section id="category_section" class="category_section">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="category_section mobile">
    <div class="article_title header_purple">
        <h2><a href="category.html" target="_self">محلية</a></h2>
    </div>
    <!----article_title------>
    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="top_article_img">
                    <a href="single.html" target="_self"><img class="img-responsive"
                                                               src="assets/img/tunisfree.jpg" alt="feature-top">
                    </a>
                </div>
                <!----top_article_img------>
            </div>
            <div class="col-md-6">
                <span class="tag purple">محلية</span>

                <div class="category_article_title">
                    <h2><a href="single.html" target="_self">تونس دولة الحرية  </a></h2>
                </div>
                <!----category_article_title------>
                <div class="category_article_date"><a href="#">10Aug- 2018</a>, by: <a href="#">saif</a></div>
                <!----category_article_date------>
                <div class="category_article_content">
                   تونس دولة الحرية  تونس دولة الحرية تونس دولة الحرية  تونس دولة الحرية تونس دولة الحرية 
                </div>
                <!----category_article_content------>
                <div class="media_social">
                     <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
                </div>
                <!----media_social------>
            </div>
        </div>
    </div>
    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="assets/img/cat-mobi-sm1.jpg"
                                         alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <span class="tag purple">محلية</span>

                        <h3 class="media-heading"><a href="single.html" target="_self">حاسوب جديد بسعة 16 جيجا </a></h3>
                        <span class="media-date"><a href="#">10Aug- 2018</a>,  by: <a href="#">saif</a></span>

                        <div class="media_social">
                             <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="assets/img/cat-mobi-sm3.jpg"
                                         alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <span class="tag purple">محلية</span>

                        <h3 class="media-heading"><a href="single.html" target="_self">حاسوب جديد بسعة 16 جيجا e</a></h3>
                        <span class="media-date"><a href="#">10Aug- 2018</a>,  by: <a href="#">saif</a></span>

                        <div class="media_social">
                            <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="assets/img/cat-mobi-sm2.jpg"
                                         alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <span class="tag purple">محلية</span>

                        <h3 class="media-heading"><a href="single.html" target="_self">Iphone 6 حاسوب جديد ب</a></h3>
                        <span class="media-date"><a href="#">10Aug- 2018</a>,  by: <a href="#">saif</a></span>

                        <div class="media_social">
                             <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="assets/img/cat-mobi-sm4.jpg"
                                         alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <span class="tag purple">محلية</span>

                        <h3 class="media-heading"><a href="single.html" target="_self">حاسوب جديد بسعة 16 جيجا </a></h3>
                        <span class="media-date"><a href="#">10Aug- 2018</a>,  by: <a href="#">saif</a></span>

                        <div class="media_social">
                            <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="divider"><a href="#">للمزيد من الأخبار&nbsp;&raquo;</a></p>
</div>
<!-- Mobile News Section -->

<div class="category_section tablet">
    <div class="article_title header_pink">
        <h2><a href="category.html" target="_self">تكنولوجيا</a></h2>
    </div>
    <!-- Mobile News Section -->

    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="category_article_body">
                    <div class="top_article_img">
                        <a href="single.html" target="_self"><img class="img-responsive" src="assets/img/tab_top1.jpg"
                                                                   alt="feature-top">
                        </a>
                    </div>
                    <!-- top_article_img -->

                    <span class="tag pink"><a href="category.html" target="_self">تكنولوجيا</a></span>

                    <div class="category_article_title">
                        <h2><a href="single.html" target="_self"> حاسوب جديد بسعة 16 جيجا </a></h2>
                    </div>
                    <!-- category_article_title -->

                    <div class="article_date"><a href="#">10Aug- 2018</a>, by: <a href="#">saif</a></div>
                    <!----article_date------>
                    <!-- article_date -->

                    <div class="category_article_content">
                      حاسوب جديد بسعة 16 جيجا 
                    </div>
                    <!-- category_article_content -->

                    <div class="media_social">
                         <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
                    </div>
                    <!-- media_social -->

                </div>
                <!-- category_article_body -->

            </div>
            <!-- col-md-6 -->

            <div class="col-md-6">
                <div class="category_article_body">
                    <div class="top_article_img">
                        <a href="single.html" target="_self">
                            <img class="img-responsive" src="assets/img/tab_top2.jpg" alt="feature-top">
                        </a>
                    </div>
                    <!-- top_article_img -->

                    <span class="tag pink"><a href="category.html" target="_self">تكنولوجيا</a></span>

                    <div class="category_article_title">
                        <h2><a href="single.html" target="_self">حطم هذا الحاسوب جميع الأرقم في البورصة </a>
                        </h2>
                    </div>
                    <!-- category_article_title -->

                    <div class="article_date"><a href="#">10Aug- 2018</a>, by: <a href="#">saif</a></div>
                    <!----article_date------>
                    <!-- article_date -->

                    <div class="category_article_content">
                      حطم هذا الحاسوب جميع الأرقم في البورصة
                    </div>
                    <!-- category_article_content -->

                    <div class="media_social">
                        <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
                    </div>
                    <!-- media_social -->

                </div>
                <!-- category_article_body -->

            </div>
            <!-- col-md-6 -->

        </div>
        <!-- row -->

    </div>
    <!-- category_article_wrapper -->

    <p class="divider"><a href="#">للمزيد من الأخبار&nbsp;&raquo;</a></p>
</div>
<!-- Tablet News Section -->

<div class="category_section gadget">
    <div class="article_title header_black">
        <h2><a href="category.html" target="_self">منوعات</a></h2>
    </div>
    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="category_article_body">
                    <div class="top_article_img">
                        <a href="single.html" target="_self">
                            <img class="img-responsive" src="assets/img/gad_top1.jpg" alt="feature-top">
                        </a>
                    </div>
                    <!-- top_article_img -->

                    <span class="tag black"><a href="category.html" target="_self">Gadgets</a></span>

                    <div class="category_article_title">
                        <h2><a href="single.html" target="_self">تونس تصنع أول طائرة بدون طيار</a>
                        </h2>
                    </div>
                    <!-- category_article_title -->

                    <div class="article_date"><a href="#">10Aug- 2018</a>, by: <a href="#">saif</a></div>
                    <!----article_date------>
                    <div class="category_article_content">
                        تونس تصنع أول طائرة بدون طيار
                    </div>
                    <!-- category_article_content -->

                    <div class="media_social">
                         <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
                    </div>
                    <!-- media_social -->

                </div>
                <!-- category_article_body -->

                <div class="category_article_list">
                    <div class="media">
                        <div class="media-left">
                            <a href="#"><img class="media-object" src="assets/img/cat-mobi-sm1.jpg"
                                             alt="Generic placeholder image"></a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><a href="single.html" target="_self">تونس تصنع أول هاتف ذكي</a></h3>
                            <span class="media-date"><a href="#">10Aug- 2018</a>,  by: <a href="#">saif</a></span>

                            <div class="media_social">
                                <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#"><img class="media-object" src="assets/img/cat-mobi-sm3.jpg"
                                             alt="Generic placeholder image"></a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><a href="single.html" target="_self">تونس تصنع أول</a></h3>
                            <span class="media-date"><a href="#">10Aug- 2018</a>,  by: <a href="#">saif</a></span>

                            <div class="media_social">
                                 <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- category_article_list -->

            </div>
            <!-- col-md-6 -->

            <div class="col-md-6">
                <div class="category_article_body">
                    <div class="top_article_img">
                        <img class="img-responsive" src="assets/img/gad_top2.jpg" alt="feature-top">
                    </div>
                    <!-- top_article_img -->

                    <span class="tag black">منوعات</span>

                    <div class="category_article_title">
                        <h2><a href="single.html" target="_self">تونس تصنع أول</a></h2>
                    </div>
                    <!-- category_article_title -->

                    <div class="article_date"><a href="#">10Aug- 2015</a>, by: <a href="#">saif</a></div>
                    <!-- article_date -->

                    <div class="category_article_content">
                       لال مشاركته في افتتاح مصفاة "ستار" النفطية
                    </div>
                    <!-- category_article_content -->

                    <div class="article_social">
                        <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
                    </div>
                    <!-- article_social -->

                </div>
                <!-- category_article_body -->
            </div>
        </div>
        <!-- row -->

    </div>
    <!-- category_article_wrapper -->

    <p class="divider"><a href="#">للمزيد من الأخبار&nbsp;&raquo;</a></p>
</div>
<!-- Gadget News Section -->

<div class="category_section camera">
    <div class="article_title header_orange">
        <h2><a href="category.html" target="_self"> العالم العربي</a></h2>
    </div>
    <!-- article_title -->

    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-5">
                <div class="top_article_img">
                    <a href="single.html" target="_self">
                        <img class="img-responsive" src="assets/img/turkya.jpg" alt="feature-top">
                    </a>
                </div>
                <!-- top_article_img -->

            </div>
            <div class="col-md-7">
                <span class="tag orange">العالم العربي</span>

                <div class="category_article_title">
                    <h2><a href="single.html" target="_self">تركيا تعلن عن مقتل خشجي</a></h2>
                </div>
                <!-- category_article_title -->

                <div class="article_date"><a href="#">10Aug- 2015</a>, by: <a href="#">saif</a></div>
                <!----article_date------>
                <!-- category_article_wrapper -->

                <div class="category_article_content">
                   تركيا تعلن عن مقتل خشجي
                </div>
                <!-- category_article_content -->

                <div class="media_social">
                   <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
                </div>
                <!-- media_social -->

            </div>
            <!-- col-md-7 -->

        </div>
        <!-- row -->

    </div>
    <!-- category_article_wrapper -->

    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-5">
                <div class="top_article_img">
                    <a href="single.html" target="_self">
                        <img class="img-responsive" src="assets/img/turkya1.jpg" alt="feature-top">
                    </a>
                </div>
                <!-- top_article_img -->

            </div>
            <div class="col-md-7">
                <span class="tag orange">العالم العربي</span>

                <div class="category_article_title">
                    <h2><a href="single.html" target="_self">تركيا تعلن عن مقتل خشجي </a></h2>
                </div>
                <!-- category_article_title -->

                <div class="article_date"><a href="#">10Aug- 2018</a>, by: <a href="#">saif</a></div>
                <!----article_date------>
                <!-- article_date -->

                <div class="category_article_content">
                   تركيا تعلن عن مقتل خشجي
                </div>
                <!-- category_article_content -->

                <div class="media_social">
                  <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
                </div>
                <!-- media_social -->

            </div>
        </div>
    </div>
    <!-- category_article_wrapper -->

    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-5">
                <div class="top_article_img">
                    <a href="single.html" target="_self">
                        <img class="img-responsive" src="assets/img/turkya2.jpg" alt="feature-top">
                    </a>
                </div>
                <!-- media_social -->

            </div>
            <div class="col-md-7">
                <span class="tag orange"><a href="single.html" target="_self">العالم العربي</a></span>

                <div class="category_article_title">
                    <h2><a href="single.html" target="_self">تركيا تعلن عن مقتل خشجي</a></h2>
                </div>
                <!-- category_article_title -->

                <div class="article_date"><a href="#">10Aug- 2018</a>, by: <a href="#">saif</a></div>
                <!----article_date------>
                <!-- article_date -->

                <div class="category_article_content">
                   تركيا تعلن عن مقتل خشجي
                </div>
                <!-- category_article_content -->

                <div class="media_social">
                                  <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
                </div>
                <!-- media_social -->

            </div>
            <!-- col-md-7 -->

        </div>
        <!-- row -->

    </div>
    <!-- category_article_wrapper -->

    <p class="divider"><a href="#">للمزيد من الأخبار&nbsp;&raquo;</a></p>
</div>
<!-- Camera News Section -->

<div class="category_section design">
    <div class="article_title header_blue">
        <h2><a href="category.html" target="_self">رياضة</a></h2>
    </div>
    <!-- row -->

    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="category_article_body">
                    <div class="top_article_img">
                        <a href="single.html" target="_self">
                            <img class="img-responsive" src="assets/img/foottunise.jpg" alt="feature-top">
                        </a>
                    </div>
                    <!-- top_article_img -->

                    <span class="tag blue"><a href="category.html" target="_self">رياضة</a></span>

                    <div class="category_article_title">
                        <h2><a href="single.html" target="_self">تونس تترشح إلى</a></h2>
                    </div>
                    <!-- category_article_title -->

                    <div class="category_article_date"><a href="#">10Aug- 2018</a>, by: <a href="#">saif</a></div>
                    <!----category_article_date------>
                    <!-- category_article_date -->

                    <div class="category_article_content">
                       تونس تترشح إلى
                    </div>
                    <!-- category_article_content -->

                    <div class="media_social">
                        <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
                    </div>
                    <!-- media_social -->

                </div>
                <!-- category_article_body -->

            </div>
            <!-- col-md-6 -->

            <div class="col-md-6">
                <div class="category_article_body">
                    <div class="top_article_img">
                        <a href="single.html" target="_self">
                            <img class="img-responsive" src="assets/img/foottunise1.jpg" alt="feature-top">
                        </a>
                    </div>
                    <!-- top_article_img -->

                    <span class="tag blue"><a href="category.html" target="_self">رياضة</a></span>

                    <div class="category_article_title">
                        <h2><a href="single.html" target="_self">تونس تترشح إلى </a></h2>
                    </div>
                    <!-- category_article_title -->

                    <div class="category_article_date"><a href="#">10Aug- 2018</a>, by: <a href="#">saif</a></div>
                    <!----category_article_date------>
                    <!-- category_article_date -->

                    <div class="category_article_content">
                        تونس تترشح إلى
                    </div>
                    <!-- category_article_content -->

                    <div class="media_social">
                        <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
                    </div>
                    <!-- media_social -->

                </div>
                <!-- category_article_body -->

            </div>
            <!-- col-md-6 -->

        </div>
        <!-- row -->

    </div>
    <!-- category_article_wrapper -->

    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="category_article_body">
                    <div class="top_article_img">
                        <a href="single.html" target="_self">
                            <img class="img-responsive" src="assets/img/foottunise2.jpg" alt="feature-top">
                        </a>
                    </div>
                    <!-- top_article_img -->

                    <span class="tag blue"><a href="category.html" target="_self">رياضة</a></span>

                    <div class="category_article_title">
                        <h2><a href="single.html" target="_self">=تونس تترشح إلى</a></h2>
                    </div>
                    <!-- category_article_title -->

                    <div class="category_article_date"><a href="#">10Aug- 2018</a>, by: <a href="#">saif</a></div>
                    <!----category_article_date------>
                    <!-- category_article_date -->

                    <div class="category_article_content">
                        تونس تترشح إلى
                    </div>
                    <!-- category_article_content -->

                    <div class="media_social">
                       <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
                    </div>
                    <!-- media_social -->

                </div>
                <!-- category_article_body -->

            </div>
            <!-- col-md-6 -->

            <div class="col-md-6">
                <div class="category_article_body">
                    <div class="top_article_img">
                        <img class="img-responsive" src="assets/img/foottunise3.jpg" alt="feature-top">
                    </div>
                    <!-- top_article_img -->

                    <span class="tag blue"><a href="category.html" target="_self">رياضة</a></span>

                    <div class="category_article_title">
                        <h2><a href="single.html" target="_self">تونس تترشح إلى</a></h2>
                    </div>
                    <!-- category_article_title -->

                    <div class="category_article_date"><a href="#">10Aug- 2018</a>, by: <a href="#">saif</a></div>
                    <!-- category_article_date -->

                    <div class="category_article_content">
                        تونس تترشح إلى
                    </div>
                    <!-- category_article_content -->

                    <div class="media_social">
                        <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
                    </div>
                    <!-- media_social -->

                </div>
                <!-- category_article_body -->

            </div>
            <!-- top_article_img -->

        </div>
        <!-- top_article_img -->

    </div>
    <!-- top_article_img -->

    <p class="divider"><a href="#">للمزيد من الأخبار&nbsp;&raquo;</a></p>
</div>
<!-- Design News Section -->
</div>
<!-- Left Section -->

<div class="col-md-4">
<div class="widget">
    <div class="widget_title widget_black">
        <h2><a href="#">الأكثر مشاهدة</a></h2>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right1.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">وأشار أردوغان، إلى أن المصفاة تعد أكبر مشروع توطين لتركيا.</a>
            </h3> <span class="media-date"><a href="#">10Aug- 2018</a>,  by: <a href="#">saif</a></span>

            <div class="widget_article_social">
                 <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right2.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">وأشار أردوغان، إلى أن المصفاة تعد أكبر مشروع توطين لتركيا.</a>
            </h3>
            <span class="media-date"><a href="#">10Aug- 2018</a>,  by: <a href="#">saif</a></span>

            <div class="widget_article_social">
             <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right3.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">وأشار أردوغان، إلى أن المصفاة تعد أكبر مشروع توطين لتركيا </a>
            </h3>
            <span class="media-date"><a href="#">10Aug- 2018</a>,  by: <a href="#">saif</a></span>

            <div class="widget_article_social">
                <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right4.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">وأشار أردوغان، إلى أن المصفاة تعد أكبر مشروع توطين لتركيا</a>
            </h3>
            <span class="media-date"><a href="#">10Aug- 2018</a>,  by: <a href="#">saif</a></span>

            <div class="widget_article_social">
               <span><i class="fa fa-share-alt"></i><a href="#">424</a>نشر</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>تعليق</span>
            </div>
        </div>
    </div>
    <p class="widget_divider"><a href="#" target="_self">للمزيد من الأخبار&nbsp;&raquo;</a></p>
</div>
<!-- Popular News -->

<div class="widget hidden-xs m30">
    <img class="img-responsive adv_img" src="assets/img/right_add1.jpg" alt="add_one">
    <img class="img-responsive adv_img" src="assets/img/right_add2.jpg" alt="add_one">
    <img class="img-responsive adv_img" src="assets/img/right_add3.jpg" alt="add_one">
    <img class="img-responsive adv_img" src="assets/img/right_add4.jpg" alt="add_one">
</div>
<!-- Advertisement -->

<div class="widget hidden-xs m30">
    <img class="img-responsive widget_img" src="assets/img/right_add5.jpg" alt="add_one">
</div>
<!-- Advertisement -->

<div class="widget reviews m30">
    <div class="widget_title widget_black">
        <h2><a href="#">مقالات</a></h2>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right1.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">مقال</a>
            </h3> 
            <span class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
            </span>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right2.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body"><h3 class="media-heading"><a href="single.html" target="_self">مقال</a></h3> <span class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
            </span></div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right3.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">مقال</a>
            </h3> 
            <span class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
            </span></div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right4.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">مقال</a>
            </h3> 
            <span class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
            </span></div>
    </div>
    <p class="widget_divider"><a href="#" target="_self">للمزيد من الأخبار&nbsp;&raquo;</a></p>
</div>
<!-- Reviews News -->

<div class="widget hidden-xs m30">
    <img class="img-responsive widget_img" src="assets/img/right_add6.jpg" alt="add_one">
</div>
<!-- Advertisement -->

<div class="widget m30">
    <div class="widget_title widget_black">
        <h2><a href="#">الأكثر تعليقا</a></h2>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right1.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">مقال 1</a>
            </h3>

            <div class="media_social">
                <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right2.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">مقال 1</a>
            </h3>

            <div class="media_social">
                <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right3.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">مقال 1</a>
            </h3>

            <div class="media_social">
                <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right4.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">مقال 1</a>
            </h3>

            <div class="media_social">
                <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
            </div>
        </div>
    </div>
    <p class="widget_divider"><a href="#" target="_self">للمزيد من الأخبار&nbsp;&raquo; </a></p>
</div>
<!-- Most Commented News -->

<div class="widget m30">
    <div class="widget_title widget_black">
        <h2><a href="#">الطقس</a></h2>
    </div>
    <div class="widget_body">
	<!-- weather widget start --><a target="_blank" href="https://hotelmix.fr/weather/tunis-4563"><img src="https://w.bookcdn.com/weather/picture/32_4563_1_3_34495e_250_2c3e50_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=581&anc_id=70317" alt="booked.net"/></a><!-- weather widget end -->

        <button class="btn pink">للمزيد من الأخبار&nbsp;&raquo;</button>
    </div>
</div>
<!-- Editor News -->

<div class="widget hidden-xs m30">
    <img class="img-responsive add_img" src="assets/img/right_add7.jpg" alt="add_one">
    <img class="img-responsive add_img" src="assets/img/right_add7.jpg" alt="add_one">
    <img class="img-responsive add_img" src="assets/img/right_add7.jpg" alt="add_one">
    <img class="img-responsive add_img" src="assets/img/right_add7.jpg" alt="add_one">
</div>
<!--Advertisement -->

<div class="widget m30">
    <div class="widget_title widget_black">
        <h2><a href="#">تحويل العملات</a></h2>
    </div>
    <div class="widget_body"><img class="img-responsive left" src="assets/img/money.jpg"
                                  alt="Generic placeholder image">

        <p><div id="powerd"><a href="https://www.transfermate.com/" target="_blank" id="tm_add146" class="tm_add146">Powered by TransferMate</a></div>
<div id="demo-rate-convert"></div>
<script>
    var apiTargetHtmlObj = document.getElementById("demo-rate-convert");
    var tmScript = document.createElement("script");
    tmScript.src = "https://www.transfermate.com/en/exchange_rates_api.asp";
    document.getElementsByTagName("head")[0].appendChild(tmScript);
</script>
<noscript><br/><span style="color: red;">Please enable your JavaScript.</span></noscript></p>

            </div>
</div> 



<!-- Poll corner -->

<?php

    //include and initialize Poll class 
    include 'Poll.php';
    $poll = new Poll;

    //get poll and options data
    $pollData = $poll->getPolls();
?>
<div class="pollContent">
    <?php echo !empty($statusMsg)?'<p class="stmsg">'.$statusMsg.'</p>':''; ?>
    <form action="" method="post" name="pollFrm">
    <h3><?php echo $pollData['poll']['subject']; ?></h3>
    <ul>
        <?php foreach($pollData['options'] as $opt){
            echo '<li><input type="radio" name="voteOpt" value="'.$opt['id'].'" >'.$opt['name'].'</li>';
        } ?>
    </ul>
    <input type="hidden" name="pollID" value="<?php echo $pollData['poll']['id']; ?>">
    <input type="submit" name="voteSubmit" class="button" value="Vote" class="btn info">

    <a href="results.php?pollID=<?php echo $pollData['poll']['id']; ?>">Results</a>
    </form>
</div>
<?php
//if vote is submitted
if(isset($_POST['voteSubmit'])){
    $voteData = array(
        'poll_id' => $_POST['pollID'],
        'poll_option_id' => $_POST['voteOpt']
    );
    //insert vote data
    $voteSubmit = $poll->vote($voteData);
    if($voteSubmit){
        //store in $_COOKIE to signify the user has voted
        setcookie($_POST['pollID'], 1, time()+60*60*24*365);

       echo "<script> swal('Good job!', 'Your vote have been send it !', 'success')</script>";
        $statusMsg = 'Your vote has been submitted successfully.';
    }else{
        $statusMsg = 'Your vote already had submitted.';
    }
	



}
?>
<style>

.crunchify-top {
    display: none;
    position: fixed;
    bottom: 40px;
    right: 15px;
    width: 30px;
    height: 30px;
    line-height: 30px;
    background-color: rgb(58, 200, 222);
    text-decoration: none;
    border-radius: 4px;
    color: #fff;
    font-size: 20px;
    text-align: center;
    cursor: pointer;
    z-index: 333;
}

.crunchify-top:hover {
    background-color: rgb(49, 160, 177);
    color: #fff;
}
.pollContent{
    float: left;
    width: 500px;
}
.pollContent h3 {
    font-size: 18px;
    color: #333;
    text-align: left;
    float: left;
    border-bottom: 2px solid #333;
    width: 100%;
    margin: 0 auto;
    padding-bottom: 10px;
}
.pollContent ul{
    list-style: none;
    float: left;
    width: 100%;
    padding: 10px;
}
.pollContent input[type="submit"], .pollContent a{
    border: none;
    font-size: 16px;
    color: #fff;
    border-radius: 3px;
    padding: 10px 15px 10px 15px; 
    background-color: #34a853;
    text-decoration: none;
    cursor: pointer;
}
.stmsg{font-size: 16px;color:#FBBC05;}










</style>

<!--Advertisement-->
</div>
<!-- Right Section -->

</div>
<!-- Row -->

</div>
<!-- Container -->

</section>
<!-- Category News Section -->

<section id="video_section" class="video_section">
    <div class="container">
        <div class="well">
            <div class="row">
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/MJ-jbFdUPns"
                                frameborder="0" allowfullscreen></iframe>
                    </div>
                    <!-- embed-responsive -->

                </div>
                <!-- col-md-6 -->

                <div class="col-md-3">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/h5Jni-vy_5M"></iframe>
                    </div>
                    <!-- embed-responsive -->

                    <div class="embed-responsive embed-responsive-4by3 m16">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wQ5Gj0UB_R8"></iframe>
                    </div>
                    <!-- embed-responsive -->

                </div>
                <!-- col-md-3 -->

                <div class="col-md-3">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UPvJXBI_3V4"></iframe>
                    </div>
                    <!-- embed-responsive -->

                    <div class="embed-responsive embed-responsive-4by3 m16">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/DTCtj5Wz6BM"></iframe>
                    </div>
                    <!-- embed-responsive -->

                </div>
                <!-- col-md-3 -->

            </div>
            <!-- row -->

        </div>
        <!-- well -->

    </div>
    <!-- Container -->

</section>
<!-- Video News Section -->

<section id="subscribe_section" class="subscribe_section">
    <div class="row">
        <form action="#" method="post" class="form-horizontal">
            <div class="form-group form-group-lg">
                <label class="col-sm-6 control-label" for="formGroupInputLarge">
                    <h1><span class="red-color">إشترك </span> معنا ليصلك كل جديد </h1>
                </label>

                <div class="col-sm-3">
                    <input type="text" id="subscribe" name="subscribe" class="form-control input-lg">
                </div>
                <div class="col-sm-1">
                    <input type="submit" value="إشترك" class="btn btn-large pink">
                </div>
                <div class="col-sm-2"></div>
            </div>
        </form>
    </div>
</section>
<!-- Subscriber Section -->

<section id="footer_section" class="footer_section">
    <div class="container">
        <hr class="footer-top">
        <div class="row">
            <div class="col-md-3">
                <div class="footer_widget_title"><h3><a href="category.html" target="_self">  معلومات عنا </a></h3></div>
                <div class="logo footer-logo">
                    <a title="fontanero" href="index.html">
                        <img src="assets/img/tech_about.jpg" alt="technews">
                    </a>

                    <p> موقع إخباري مستقل و إحترافي  </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="category.html" target="_self">للمزيد</a></h3>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <ul class="list-unstyled left">
                            <li><a href="#">رياضة </a></li>
                            <li><a href="#">ثقافة</a></li>
                            <li><a href="#">سياسة</a></li>
                            <li><a href="#">مسرح</a></li>
                            <li><a href="#">فن</a></li>
                            <li><a href="#">موسقي</a></li>
                            <li><a href="#">محلية</a></li>
                            <li><a href="#">أعمال</a></li>
                            <li><a href="#">مال</a></li>
                          
                    </div>
                    <div class="col-xs-8">
                        <ul class="list-unstyled">
                            <li><a href="#">تواصل معنا</a></li>
                            <li><a href="#">تبليغ عن عطل</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="#" target="_self">منوعات</a></h3>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="assets/img/editor_pic1.jpg"
                                         alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="single.html">أبل تنتج ساعة جديدة تعمل بنظام أندرود</a>
                        </h3> 
                        <span class="rating">
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star-half-full"></i> 
                        </span>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="assets/img/editor_pic2.jpg"
                                         alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="single.html">أبل تنتج ساعة جديدة تعمل بنظام أندرود</a>
                        </h3> 
                        <span class="rating">
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star-half-full"></i> 
                        </span>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="assets/img/editor_pic3.jpg"
                                         alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="single.html">أبل تنتج ساعة جديدة تعمل بنظام أندرود</a>
                        </h3> 
                        <span class="rating">
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star-half-full"></i> 
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="category.html" target="_self"> ألبوم صور</a></h3>
                </div>
                <div class="widget_photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo1.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo2.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo3.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo4.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo5.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo6.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo7.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo8.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo9.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo10.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo11.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo12.jpg" alt="Tech Photos">
                </div>

            </div>
        </div>
    </div>
	
	
	

   <?php  

    include "includes/footer.php" ;

   ?>