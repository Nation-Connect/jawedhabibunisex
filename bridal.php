<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Jawed Habib Salon &amp; Salon - Best Salon in Patna for Spa, Massage, Bridal Makeup, Hair Care</title>

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
            <li><a href="index-2.html">Home</a></li>
            <li><a href="about-us.html">About Us</a></li>
            <li><a href="products.html">Products</a></li>
            <li><a href="package.html">Package</a></li>
            <li><a href="bridal.html" class="active">Bridal</a></li>
            <li><a href="photo-gallery.html">Photos</a></li>
            <li><a href="contact-us.html">Contact Us</a></li>
            </ul>
            <a href="#" id="pull"></a>
        </nav>
        <div class="logo"><img src="img/logo.png" alt="kayla"></div>
	</header>
    
    <section id="featured">
    <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="img/slider/4.jpg" class="img-responsive" alt="KAYLA Spa &amp; Salon" />
              </li>
              <li>
                <img src="img/slider/2.jpg" class="img-responsive" alt="KAYLA Spa &amp; Salon" />
              </li>
              <li>
                <img src="img/slider/3.jpg" class="img-responsive" alt="KAYLA Spa &amp; Salon" />
              </li>
              <li>
                <img src="img/slider/5.jpg" class="img-responsive" alt="Kayla Spa &amp; Salon" />
              </li>
              <li>
                <img src="img/slider/6.jpg" class="img-responsive" alt="Kayla Spa &amp; Salon" />
              </li>
              <li>
                <img src="img/slider/7.jpg" class="img-responsive" alt="Kayla Spa &amp; Salon" />
              </li>
            </ul>
        </div>
	<!-- end slider -->
    </section>
    
    <section id="content">
    	<div class="col-lg-1">
        <h3>Bridal</h3>
                <p>It is never a cake walk being a bride. Not only everyone expects you to look beautiful on the day itself, but also the results must stand up to scrutiny for years afterwards, in photos and on video. So every effort is worth to perfect your ravishing appearance. We ensure you look radiant with exquisite hair and makeup, Stunning with a hint of Glamour on <br><br>

Our consultation prior to the wedding day ensures there is nothing left towards anxiety about stealing the spotlight on the big day.

</p>
        </div>
        
        
    </section>
    
    <?php include 'footer.php'; ?>

</div>
<?php include 'foot.php'; ?>

</body>

</html>