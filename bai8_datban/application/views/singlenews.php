
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Artica - Restaurant HTML Template | Blog Single</title>
<!-- Stylesheets -->
<link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/revolution-slider.css" rel="stylesheet">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo base_url(); ?><?php echo base_url(); ?><?php echo base_url(); ?>images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo base_url(); ?><?php echo base_url(); ?><?php echo base_url(); ?>images/favicon.ico" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
<!-- <h1>SESSION: <?php echo $this->session->userdata('pass'); ?></h1>

<?php if($this->session->has_userdata('user') && $this->session->userdata('pass') == '123456') { ?>
    <h2>Chào mừng</h2>
<?php } ?> -->

    <!-- Main Header -->
    <header class="main-header">
    	<!-- Header Top -->
    	<div class="header-top">
        	<div class="auto-container">
            	<div class="clearfix">
                    
                    <!--Top Left-->
                    <div class="top-left">
                    	<!--social-icon-->
                        <div class="social-icon">
                        	<a href="#"><span class="fa fa-facebook"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa fa-skyatlas"></span></a>
                            <a href="#"><span class="fa fa fa-tumblr"></span></a>
                            
                        </div>
                        
                    	<ul class="clearfix">
                        	<li>Call for reservation: +011 29 345 678</li>
                        </ul>
                    </div>
                    
                    <!--Top Right-->
                    <div class="top-right">
                    
                    	<ul>
                        	<li>Opening Hours : 9:00am - 10:00pm</li>
                            <li class="eng-dropdown dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="icon"></span> Eng <span class="arow-icon fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">Arabic</a></li>
                                    <li><a href="#">Bengali</a></li>
                                    <li><a href="#">Hindi</a></li>
                                </ul>
                            </li>
                            <!--Cart Btn-->
                            <li class="cart-btn"><a href="shopping-cart.html"><span class="icon flaticon-bag"></span><span class="count">2</span></a></li>
                        </ul>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
        <!-- Header Top End -->
        
        <!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="<?php echo base_url(); ?>images/logo.png" alt="Artica"></a></div>
                    </div>
                    
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->    	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="dropdown"><a href="#">Home</a>
                                    	<ul>
                                            <li><a href="index.html">Homepage One</a></li>
                                            <li><a href="index-2.html">Homepage Two</a></li>
                                            <li><a href="index-3.html">Homepage Three</a></li>
                                            <li class="dropdown"><a href="#">Header Styles</a>
                                                <ul>
                                                    <li><a href="index.html">Header Style One</a></li>
                                                    <li><a href="index-2.html">Header Style Two</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="reservation.html">Reservation</a></li>
                                    <li class="dropdown"><a href="#">Menu</a>
                                    	<ul>
                                            <li><a href="menu-style-one.html">Menu Style One</a></li>
                                            <li><a href="menu-style-two.html">Menu Style Two</a></li>
                                            <li><a href="menu-style-three.html">Menu Style Three</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li class="current dropdown"><a href="#">Blog</a>
                                    	<ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-single.html">Shop Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Shop</a>
                                    	<ul>
                                            <li><a href="shop.html">Shop Fullwidth</a></li>
                                            <li><a href="shop-sidebar.html">Shop with Sidebar</a></li>
                                            <li><a href="shop-single.html">Shop Single</a></li>
                                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                 </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        
                        <!--Reserv Box Btn-->
                        <div class="btn-outer"><a href="reservation.html" class=" reserv-box-btn">Reservation</a></div>
                        
                    </div><!--Nav Outer End-->
                    
                    <!-- Hidden Nav Toggler -->
                    <div class="nav-toggler">
                    	<button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                    </div><!-- / Hidden Nav Toggler -->
                    
            	</div>    
            </div>
        </div>
    
    </header>
    <!--End Main Header -->
    
    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar right-align">
        
        <div class="hidden-bar-closer">
            <button class="btn"><i class="fa fa-close"></i></button>
        </div>
        
        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">
        
            <!-- .logo -->
            <div class="logo text-center">
                <a href="index.html"><img src="<?php echo base_url(); ?>images/logo-2.png" alt="Artica"></a>			
            </div><!-- /.logo -->
            
            <!-- .Side-menu -->
            <div class="side-menu">
            	<!-- .navigation -->
                <ul class="navigation clearfix">
                    <li class="dropdown"><a href="#">Home</a>
                        <ul>
                            <li><a href="index.html">Homepage One</a></li>
                            <li><a href="index-2.html">Homepage Two</a></li>
                            <li><a href="index-3.html">Homepage Three</a></li>
                            <li class="dropdown"><a href="#">Header Styles</a>
                                <ul>
                                    <li><a href="index.html">Header Style One</a></li>
                                    <li><a href="index-2.html">Header Style Two</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="reservation.html">Reservation</a></li>
                    <li class="dropdown"><a href="#">Menu</a>
                        <ul>
                            <li><a href="menu-style-one.html">Menu Style One</a></li>
                            <li><a href="menu-style-two.html">Menu Style Two</a></li>
                            <li><a href="menu-style-three.html">Menu Style Three</a></li>
                        </ul>
                    </li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li class="current dropdown"><a href="#">Blog</a>
                        <ul>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-single.html">Shop Single</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Shop</a>
                        <ul>
                            <li><a href="shop.html">Shop Fullwidth</a></li>
                            <li><a href="shop-sidebar.html">Shop with Sidebar</a></li>
                            <li><a href="shop-single.html">Shop Single</a></li>
                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                 </ul>
            </div><!-- /.Side-menu -->
        
            <div class="social-icons">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        
        </div><!-- / Hidden Bar Wrapper -->
    </section>
    <!-- / Hidden Bar -->
    
    <!--Sidebar Page-->
    <div class="sidebar-page-container right-side-bar">

        <?php foreach ($dulieutin as $value) { ?>
        <div class="auto-container">
        
            <!--Sec Title One-->
            <div class="sec-title-one">
                <h2><?php echo $value['tieude']; ?></h2>
                <h4>News Details</h4>
            </div>
        
            <div class="row clearfix">
                
                <!--Content Side--> 
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    
                    <!--Blog Section / Classic View-->
                    <section class="blog-news-section classic-view">
                        
                        <!--News Block-->
                        <div class="news-block">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="<?php echo $value['anhtin']; ?>" alt="" />
                                </figure>
                                <div class="lower-content">
                                    <!--Post Header-->
                                    <div class="post-header">
                                        <div class="meta"><?php echo date('d/m/Y',$value['ngaytao']); ?> By <span> <?php echo $value['tendanhmuc'] ?></span></div>
                                    </div>
                                    <div class="text">
                                        <?php echo $value['noidungtin'] ?>
                                    </div>
                                    
                                   
                                    
                                    
                                    
                                    <!--Post Option-->
                                    <div class="post-option">
                                        <div class="clearfix">
                                            <!--Tags-->
                                            <div class="pull-left tags"><strong>Tags :</strong> 
                                                <a href="#">Food,</a> <a href="#">Cereals,</a> <a href="#">Others</a>
                                            </div>
                                            
                                            <!--Comments-->
                                            <div class="pull-right comments">10 Comments</div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- TIN LIÊN QUAN -->
                        <h3>Tin liên quan</h3>
                        <div class="card-deck">
                          <div class="row">
                            <?php foreach ($tinlienquan as $key => $lienquan) { ?>
                              <div class="col-sm-4">
                               <div class="card">
                                    <a href="<?php echo base_url() ?>index.php/tintuc/detail/<?php echo $lienquan['id'];?>"><img class="card-img-top" src="<?php echo $lienquan['anhtin']; ?>" alt="Card image cap"></a>
                                    <div class="card-block">
                                      <h4 class="card-title"><?php echo $lienquan['tieude']; ?></h4>
                                      <p class="card-text"><?php echo $lienquan['trichdan']; ?></p>
                                      <p class="card-text"><small class="text-muted"><?php echo date('d/m/Y',$lienquan['ngaytao']); ?></small></p>
                                    </div>
                                  </div>   
                              </div>
                            <?php } ?>
                          </div>
                          
                        </div>


                        <!--Comments Area-->
                        <div class="comments-area">
                            <div class="group-title"><h2>Comments(03)</h2></div>
                            
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="<?php echo base_url(); ?>images/resource/author-1.jpg" alt=""></div>
                                    <div class="comment-inner">
                                        <div class="comment-info clearfix"><strong>Billu Manson</strong><div class="comment-time">June 25, 2016</div></div>
                                        <div class="text">Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo marvl inven tore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </div>
                                        <a class="comment-reply" href="#">Reply <span class="arrow fa fa-long-arrow-down"></span></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="comment-box reply-comment">
                                <div class="comment">
                                    <div class="author-thumb"><img src="<?php echo base_url(); ?>images/resource/author-2.jpg" alt=""></div>
                                        <div class="comment-inner">
                                            <div class="comment-info clearfix"><strong>Brick Donald</strong><div class="comment-time">June 25, 2016</div></div>
                                            <div class="text">Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo marvl inven tore veritatis et quasi architect.</div>
                                            <a class="comment-reply" href="#">Reply <span class="arrow fa fa-long-arrow-down"></span></a>
                                        </div>
                                </div>
                            </div>
                                
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="<?php echo base_url(); ?>images/resource/author-3.jpg" alt=""></div>
                                    <div class="comment-inner">
                                        <div class="comment-info clearfix"><strong>Neova Shara</strong><div class="comment-time">June 25, 2016</div></div>
                                        <div class="text">Incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam quis nostrum exerquis nostrum exercitationem ullam corporis suscipit laboriosam </div>
                                        <a class="comment-reply" href="#">Reply <span class="arrow fa fa-long-arrow-down"></span></a>
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                        
                        <!-- Comment Form -->
                        <div class="comment-form wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            
                        <div class="group-title"><h2>Leave a Comment</h2></div>
                        
                            <!--Comment Form-->
                            <form method="post" action="contact.html">
                                <div class="row clearfix">
                                    <div class="column col-md-6 col-sm-6 col-xs-12">
                                        <!--Form Group-->
                                        <div class="form-group">
                                            <div class="field-label">Name <sup>*</sup></div>
                                            <input type="text" name="username" placeholder="" required>
                                        </div>
                                        <!--Form Group-->
                                        <div class="form-group">
                                            <div class="field-label">E-mail <sup>*</sup></div>
                                            <input type="email" name="email" placeholder="" required>
                                        </div>
                                        <!--Form Group-->
                                        <div class="form-group">
                                            <div class="field-label">Phone Number <sup>*</sup></div>
                                            <input type="text" name="phone" placeholder="" required>
                                        </div>
                                    </div>
                                    
                                    <div class="column col-md-6 col-sm-6 col-xs-12">
                                    
                                        <div class="form-group">
                                            <div class="field-label">Comments</div>
                                            <textarea name="message"></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <button class="theme-btn btn-style-one" type="submit" name="submit-form">Post Comment</button>
                                        </div>
                                        
                                    </div>
                                    
                                 </div>
                            </form>
                            
                        </div>
                        <!--End Comment Form -->
                        
                    </section>
                
                </div>
                <!--Content Side-->
                
                <!--Sidebar-->  
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <aside class="sidebar">
                    
                        <!-- Search Form -->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="blog.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search Here">
                                    <button type="submit"><span class="icon flaticon-magnifying-glass-1"></span></button>
                                </div>
                            </form>
                        </div>
                        
                        <!-- Categories -->
                        <div class="sidebar-widget categories wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h2>Categories</h2></div>
                            <ul class="list">
                                <?php foreach ($danhmuc as $dm) {?>
                                    <li><a href="<?php echo base_url(); ?>index.php/tintuc/danhmuc/<?php echo $dm['id']; ?>"><?php echo $dm['tendanhmuc'] ?></a></li>
                                <?php } ?>
                                
 
                            </ul>
                        </div>
                        
                        <!-- Top Rated -->
                        <div class="sidebar-widget popular-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h2>Top Rated</h2></div>
                            
                            <article class="post">
                                <figure class="post-thumb"><a href="#"><img src="<?php echo base_url(); ?>images/resource/post-thumb-4.jpg" alt=""></a></figure>
                                <h4><a href="#">Mexican Cuisine</a></h4>
                                <div class="post-price">$ 90.00 <span class="discount">$100</span></div>
                            </article>
                            
                            <article class="post">
                                <figure class="post-thumb"><a href="#"><img src="<?php echo base_url(); ?>images/resource/post-thumb-5.jpg" alt=""></a></figure>
                                <h4><a href="#">House Market Indicators</a></h4>
                                <div class="post-price">$ 80.00 <span class="discount">$100</span></div>
                            </article>
                            
                            <article class="post">
                                <figure class="post-thumb"><a href="#"><img src="<?php echo base_url(); ?>images/resource/post-thumb-6.jpg" alt=""></a></figure>
                                <h4><a href="#">Is Condo Life For You?</a></h4>
                                <div class="post-price">$ 75.00 <span class="discount">$100</span></div>
                            </article>
                        </div>
                        
                        <!-- Archives -->
                        <div class="sidebar-widget archives wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h2>Archives</h2></div>
                            <ul class="list">
                                <li><a href="#">June 2016</a></li>
                                <li><a href="#">July 2016</a></li>
                                <li><a href="#">August 2016</a></li>
                                <li><a href="#">September 2016</a></li>
                                <li><a href="#">November 2016</a></li>
                            </ul>
                        </div>
                                
                    </aside>
                </div>
                <!--Sidebar-->  
                
                      
                
            </div>
        </div>            
        <?php } ?>

    </div>
    
    <!--Main Footer-->
    <footer class="main-footer">
    	<div class="auto-container">
        
            <!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	<!--Big Column-->
                	<div class="big-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                            
                            <!--Footer Column-->
                        	<div class="footer-column col-md-7 col-sm-6 col-xs-12">
                            	<div class="footer-widget about-widget">
                                	<div class="footer-logo"><figure><a href="index.html"><img src="<?php echo base_url(); ?>images/footer-logo.png" alt=""></a></figure></div>
                                    <div class="widget-content">
                                    	<div class="text">Marsh mallow muffin soufflé jelly-o tart cake Marshmallow macaroon jelly jubes dont tiramisu croissant cake.</div>
                                        <!--Contact Info-->
                                        <ul class="contact-info">
                                            <li><span class="icon flaticon-arrows-6"></span>Address : 44 New Design Street,<br>Melbourne 005</li>
                                            <li><span class="icon flaticon-technology"></span>Phone : (01) 800 433 633</li>
                                        	<li><span class="icon flaticon-empty-email"></span>Email : info@Example.com</li>
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                        	<div class="footer-column col-md-5 col-sm-6 col-xs-12">
                            	<div class="footer-widget links-widget">
                                	<h2>usefull links</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="#">About Company</a></li>
                                            <li><a href="#">Reservation</a></li>
                                            <li><a href="#">Help Center</a></li>
                                            <li><a href="#">Our Blog</a></li>
                                            <li><a href="#">Careers</a></li>
                                            <li><a href="#">Contact us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                    <!--Big Column-->
                	<div class="big-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                            
                            <!--Footer Column-->
                        	<div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="footer-widget posts-widget">
                                	<h2>Latest Blog Post</h2>
                                    <div class="widget-content">
                                    	<div class="posts">
                                            <div class="post">
                                                <figure class="post-thumb"><img src="<?php echo base_url(); ?>images/resource/post-thumb-1.jpg" alt=""><a href="blog-single.html" class="overlay-link"><span class="fa fa-link"></span></a></figure>
                                                <div class="desc-text"><a href="blog-single.html">Peaceful Hostel</a></div>
                                                <div class="time">25th June 2016</div>
                                            </div>
                                            <div class="post">
                                                <figure class="post-thumb"><img src="<?php echo base_url(); ?>images/resource/post-thumb-2.jpg" alt=""><a href="blog-single.html" class="overlay-link"><span class="fa fa-link"></span></a></figure>
                                                <div class="desc-text"><a href="blog-single.html">Chicken Caesar</a></div>
                                                <div class="time">25th June 2016</div>
                                            </div>
                                            <div class="post">
                                                <figure class="post-thumb"><img src="<?php echo base_url(); ?>images/resource/post-thumb-3.jpg" alt=""><a href="blog-single.html" class="overlay-link"><span class="fa fa-link"></span></a></figure>
                                                <div class="desc-text"><a href="blog-single.html">Portobello Pizza</a></div>
                                                <div class="time">25th June 2016</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                        	<div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="footer-widget opening-widget">
                                	<h2>Opening Hours</h2>
                                    <div class="widget-content">
                                    	
                                    	<ul>
                                        	<li class="clearfix"><div class="day pull-left">Mon — Fri</div><span class="dots">................</span><div class="time pull-right">9:00 am - 23:00 pm</div></li>
                                            <li class="clearfix"><div class="day pull-left">Saturday</div><span class="dots">................</span><div class="time pull-right">10:00 am - 22:00 pm</div></li>
                                            <li class="clearfix"><div class="day pull-left">Sunday</div><span class="dots">................</span><div class="time pull-right">10:00 am - 21:00 pm</div></li>
                                            <li class="note">Note: Arctica Restaurant is closed on holidays.</li>
                                        </ul>
                                    
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                 </div>
             </div>
        
        </div>
        
        <!--Footer Bottom-->
         <div class="footer-bottom">
         	<div class="auto-container">
            	<div class="copyright-text">Copyright &copy; 2016. All Rights Reserved </div>
            </div>
        </div>
    </footer>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>

<!--Gallery Popup-->
<div class="gallery-box" id="gallery-popup">
	<!--Bg Fade Layer-->
    <div class="bg-fade-layer"></div>
    
    <div class="popup-container">
        <div class="popup-content">
        
            <div class="popup-header">
                <button type="button" class="btn-close"><span class="fa fa-close"></span></button>
                <h3>Fresh And Hot Burgers</h3>
            </div>
            
            <div class="content-outer">
            	
                <!--Vertical Slider-->
                <div class="vertical-slider">
                	
                    <!-- template -->
                    <div class="ms-vertical-template  ms-tabs-vertical-template">
                        <!-- masterslider -->
                        <div class="master-slider ms-skin-default" id="masterslider">
                        
                            <div class="ms-slide">
                                <img src="css/masterslider/style/blank.gif" data-src="<?php echo base_url(); ?>images/gallery/13.jpg" alt=""/>  
                                <img class="ms-thumb" src="<?php echo base_url(); ?>images/gallery/gallery-thumb-1.jpg" alt="thumb" />
                            </div>
                            
                            <div class="ms-slide">
                                <img src="css/masterslider/style/blank.gif" data-src="<?php echo base_url(); ?>images/gallery/13.jpg" alt=""/>  
                                <img class="ms-thumb" src="<?php echo base_url(); ?>images/gallery/gallery-thumb-2.jpg" alt="thumb" />
                            </div>
                            
                            <div class="ms-slide">
                                <img src="css/masterslider/style/blank.gif" data-src="<?php echo base_url(); ?>images/gallery/13.jpg" alt=""/>  
                                <img class="ms-thumb" src="<?php echo base_url(); ?>images/gallery/gallery-thumb-3.jpg" alt="thumb" />
                            </div>
                            
                            <div class="ms-slide">
                                <img src="css/masterslider/style/blank.gif" data-src="<?php echo base_url(); ?>images/gallery/13.jpg" alt=""/>  
                                <img class="ms-thumb" src="<?php echo base_url(); ?>images/gallery/gallery-thumb-4.jpg" alt="thumb" />
                            </div>
                            
                            <div class="ms-slide">
                                <img src="css/masterslider/style/blank.gif" data-src="<?php echo base_url(); ?>images/gallery/13.jpg" alt=""/>  
                                <img class="ms-thumb" src="<?php echo base_url(); ?>images/gallery/gallery-thumb-1.jpg" alt="thumb" />
                            </div>
                            
                            <div class="ms-slide">
                                <img src="css/masterslider/style/blank.gif" data-src="<?php echo base_url(); ?>images/gallery/13.jpg" alt=""/>  
                                <img class="ms-thumb" src="<?php echo base_url(); ?>images/gallery/gallery-thumb-2.jpg" alt="thumb" />
                            </div>
                            
                        </div>
                        <!-- end of masterslider -->
                    </div>
                    <!-- end of template -->
    
                </div>
                
            </div>
            
        </div>
    
    </div>
<!-- popup-container -->
</div>
<!-- Gallery Box -->

<script src="<?php echo base_url(); ?>js/jquery.js"></script> 
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>js/revolution.min.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.fancybox-media.js"></script>
<script src="<?php echo base_url(); ?>js/owl.js"></script>
<script src="<?php echo base_url(); ?>js/wow.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>js/script.js"></script>
</body>
</html>