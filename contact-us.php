<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Jawed Habib Salon &amp; Salon - Best Salon in Patna for Spa, Massage, Bridal Makeup, Hair Care</title>

<?php include 'head.php'; ?>
	
	<!-- Captcha -->
<script>
		$('form').submit(function(e) {
   if ($("#g-recaptcha-response").val() === '') {
      e.preventDefault();
      alert("Please check the recaptcha");
   }
});
	   </script>         
<script src='../www.google.com/recaptcha/api.js'></script>	
</head>
<body>
   
<div id="wrapper">
	<header>
        <nav class="clearfix">
            <ul class="clearfix">
            <li><a href="index-2.html">Home</a></li>
            <li><a href="about-us.html">About Us</a></li>
            <li><a href="loyalty-package.html">Loyalty Package</a></li>
            <li><a href="package.html">Package</a></li>
            <li><a href="bridal.html">Bridal</a></li>
            <li><a href="photo-gallery.html">Photos</a></li>
            <li><a href="contact-us.html" class="active">Contact Us</a></li>
            </ul>
            <a href="#" id="pull"></a>
        </nav>
        <div class="logo"><img src="img/logo.png" alt="kayla"></div>
	</header>
    
    <section id="featured">
    <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <!--<li>
                <img src="img/slider/1.jpg" class="img-responsive" alt="KAYLA Spa &amp; Salon" />
              </li>
              <li>
                <img src="img/slider/2.jpg" class="img-responsive" alt="KAYLA Spa &amp; Salon" />
              </li>
              <li>
                <img src="img/slider/3.jpg" class="img-responsive" alt="KAYLA Spa &amp; Salon" />
              </li>-->
              
                            
              <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:300px;width:100%;"><div id="gmap_canvas" style="height:300px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://wordpress-hosting.me/" id="get-map-data">http://wordpress-hosting.me</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(13.031493144772085,77.57001356004935),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(13.031493144772085, 77.57001356004935)});infowindow = new google.maps.InfoWindow({content:"<b> KAYLA Spa &amp; Salon</b><br/>NO 17, 1ST FLOOR, NEW BEL ROAD JALADHARSHINI LAYOUT, <br/> BANGALORE-560054" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
            </ul>
        </div>
	<!-- end slider -->
    </section>
    
    <section id="content">
    	<div class="col-lg-1">
                
        </div>
        
        <div class="col-lg-1">
        <div class="col-md-2"><h3>Contact Us</h3>
        <img src="img/logo-small.png" alt="Kayla">
        	<h5><i class="fa fa-map-marker" style="color:#d7b56d;"></i>
              No 17, 1st Floor, New bel road<br> Jaladharshini layout, Bangalore - 560054.</h5>
              <p><i class="fa fa-phone-square" style="color:#d7b56d;"></i> +91 9740044588<br>
             <i class="fa fa-phone-square" style="color:#d7b56d;"></i> +91 80 40944388<br>
             <i class="fa fa-envelope" style="color:#d7b56d;"></i> info@ka<span style="color:#4d887e;font-weight:bold;">y</span>laspansalon.com<br>
             <i class="fa fa-globe" style="color:#d7b56d;"></i> www.ka<span style="color:#4d887e;font-weight:bold;">y</span>laspansalon.com</p>
            
        </div>
        <div class="col-md-3">
        <h3>Feedback</h3>
        <form id="frmContact" action="https://www.kaylaspansalon.com/sendmail.php" method="post">
        <input name="name" type="text" placeholder="Enter Your Name" required="required" onChange="getdetails(this.value);">
        <input name="email" type="text" placeholder="Enter Your e-mail id" required="required" onChange="getdetails(this.value);">
        <input name="phone" type="text" placeholder="Enter Your phone number" required="required" onChange="getdetails(this.value);">
        <input name="country" type="text" placeholder="Enter Your Country" required="required" onChange="getdetails(this.value);">
        <input name="city" type="text" placeholder="Enter Your City" required="required" onChange="getdetails(this.value);">
        <textarea name="comments" cols="" rows="" placeholder="Enter Your Comments" required onChange="getdetails(this.value);"></textarea>
        <div class="g-recaptcha" data-sitekey="6LfK_9sZAAAAAHMxboVZfcgwN7pIKDFKbi0vpChB"></div>
        <input name="send" type="submit" class="button" id="send" value="Send">
        </form>
        
        </div> 
        <!--Faceboo Likebox-->
        <div class="col-md-4">
     <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "../connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page" data-href="https://www.facebook.com/kaylaspansalon" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/kaylaspansalon"><a href="https://www.facebook.com/kaylaspansalon">KAYLA SPA N SALON</a></blockquote></div></div>
        
        </div>   
            
        </div>
    </section>
    
    <?php include 'footer.php'; ?>

</div>
<?php include 'foot.php'; ?>

</body>

</html>