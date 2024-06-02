<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Jawed Habib Salon Patna - Best Hair & Beauty Services | Mithapur Sabji Mandi, First Floor, Crystal Castle, Near ICICI Bank, Near Goriya Math, Patna, Bihar, India</title>

<?php include 'head.php'; ?>
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
    
    
    
    
</head>
<body>
<div id="wrapper">
	<header>
        <nav class="clearfix">
            <ul class="clearfix">
            <li><a href="index.php">Home</a></li>
            <li><a href="about-us.php">About Us</a></li>
            <li><a href="our-services.php">Our Services</a></li>
            <li><a href="package.php">Package</a></li>
            <li><a href="bridal.php" class="active">Bridal</a></li>
            <li><a href="photo-gallery.php">Photos</a></li>
            <li><a href="contact-us.php">Contact Us</a></li>
            </ul>
            <a href="#" id="pull"></a>
        </nav>
        <div class="logo"><img src="img/logo.png" alt="jawed habib patna"></div>
	</header>
    
    <section id="featured">
    <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="img/slider/4.jpg" class="img-responsive" alt="jawed habib patna &amp; Salon" />
              </li>
              <li>
                <img src="img/slider/2.jpg" class="img-responsive" alt="jawed habib patna &amp; Salon" />
              </li>
              <li>
                <img src="img/slider/3.jpg" class="img-responsive" alt="jawed habib patna &amp; Salon" />
              </li>
              <li>
                <img src="img/slider/5.jpg" class="img-responsive" alt="jawed habib patna &amp; Salon" />
              </li>
              <li>
                <img src="img/slider/6.jpg" class="img-responsive" alt="jawed habib patna &amp; Salon" />
              </li>
              <li>
                <img src="img/slider/7.jpg" class="img-responsive" alt="jawed habib patna &amp; Salon" />
              </li>
            </ul>
        </div>
	<!-- end slider -->
    </section>
    
    <section id="content">
    	<div class="col-lg-1">
        <h3>Bridal</h3>
                <p>  At Jawed Habib Salon in Patna, we understand that your wedding day is one of the most important days of your life, and we're here to make it even more memorable. Our bridal makeup services are tailored to suit your individual preferences and personality, ensuring that you feel confident and beautiful as you walk down the aisle. Whether you prefer a natural, soft glam look or something more dramatic and bold, our experienced makeup artists will work with you to create the perfect bridal look that reflects your unique style. With attention to detail and the highest quality products, we guarantee you'll look and feel your best on your wedding day. Trust Jawed Habib Salon in Patna to bring your bridal vision to life and make your dreams a reality.<br><br>

Our consultation prior to the wedding day ensures there is nothing left towards anxiety about stealing the spotlight on the big day. 
<br>
<br>
At Jawed Habib Salon in Patna, we believe that every groom deserves to look and feel his best on his wedding day. Our dedicated team of grooming experts specializes in creating sophisticated and tailored looks that enhance your natural features and complement your personal style. Whether you're aiming for a traditional, classic look or something more modern and trendy, we're here to bring your vision to life. From expert hair styling to precise grooming and skincare treatments, we offer a range of services designed specifically for grooms. With our attention to detail and commitment to excellence, you can trust Jawed Habib Salon to ensure you look sharp, confident, and ready to say "I do" on your special day. Schedule your grooming appointment with us today and let us help you make a lasting impression as you embark on this new chapter of your life.
<p>
        </div>
        
        
    </section>
    
    <?php include 'footer.php'; ?>

</div>
<?php include 'foot.php'; ?>

</body>

</html>