<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Jawed Habib Salon Patna - Best Hair & Beauty Services | Mithapur Sabji Mandi, First Floor, Crystal Castle, Near ICICI Bank, Near Goriya Math, Patna, Bihar, India</title>

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
            <li><a href="index.php">Home</a></li>
            <li><a href="about-us.php">About Us</a></li>
            <li><a href="our-services.php">Our Services</a></li>
            <li><a href="package.php">Package</a></li>
            <li><a href="bridal.php">Bridal</a></li>
            <li><a href="photo-gallery.php">Photos</a></li>
            <li><a href="contact-us.php" class="active">Contact Us</a></li>
            </ul>
            <a href="#" id="pull"></a>
        </nav>
        <div class="logo"><img src="img/logo.png" alt="Jawed Habib Salon in Patna"></div>
	</header>

  <section id="featured">
    <!-- Slider -->
    <div id="main-slider" class="flexslider">
        <ul class="slides">
            <li>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14392.45450192246!2d85.12659480280524!3d25.601140287742606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed591acc409a0f%3A0x102f798b87409c55!2sjawed%20habib!5e0!3m2!1sen!2sin!4v1717244309951!5m2!1sen!2sin" width="930" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </li>
        </ul>
    </div>
    <!-- end slider -->
</section>


    
    <section id="content">
    	<div class="col-lg-1">
                
        </div>
        
        <div class="col-lg-1">
        <div class="col-md-2"><h3>Contact Us</h3>

        	<h5><i class="fa fa-map-marker" style="color:#d7b56d;"></i>
          First Floor, Crystal Castle,<br> Subji Market, near Goriya Math, near ICICI Bank, Jakkanpur, Mithapur, Patna, Bihar 800001</h5>
              <p><i class="fa fa-phone-square" style="color:#d7b56d;"></i> +91 7488343893<br>
             
             <i class="fa fa-envelope" style="color:#d7b56d;"></i> info@jawedhabibunisex.com<span style="color:#4d887e;font-weight:bold;"> <br> </span> 
             <i class="fa fa-globe" style="color:#d7b56d;"></i> jawedhabibunisex.com<span style="color:#4d887e;font-weight:bold;"> </span> </p>
            
        </div>
        <div class="col-md-3">
        <h3>Feedback</h3>
        <form id="contact-form" action="#">
        <input type="hidden" name="send-contact-mail" />
        <input name="name" type="text" placeholder="Enter Your Name" required="required">
        <input name="email" type="text" placeholder="Enter Your e-mail id" required="required">
        <input name="phone" type="text" placeholder="Enter Your phone number" required="required">
        <input name="subject" type="text" placeholder="Enter Your Subject" required="required">
        <textarea name="message" cols="" rows="" placeholder="Enter Your Comments" required></textarea>
        <input name="submit" type="submit" class="button" id="send" value="Send">
                                <div id="form-message-success" style="display:none;font-size:20px;margin-top:10px;"
                                  class="mb-4 text-center text-success">
                                  Your message was sent, Thank you!
                                </div>
                                <div id="form-message-danger" style="display:none;font-size:20px;margin-top:10px;"
                                  class="mb-4 text-center text-danger">
                                  Something went wrong!, please try again.
                                </div>
        </form>
        
        </div> 
        <!--Faceboo Likebox-->
      

        <div class="col-md-4">
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="fb-page" data-href="https://www.facebook.com/p/The-Jawed-Habib-Salon-Mithapur-100054324619113/" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
        <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/p/The-Jawed-Habib-Salon-Mithapur-100054324619113/">
                <a href="https://www.facebook.com/p/The-Jawed-Habib-Salon-Mithapur-100054324619113/">Jawed Habib Salon in Mithapur</a>
            </blockquote>
        </div>
    </div>
    <div class="fb-like" data-href="https://www.facebook.com/p/The-Jawed-Habib-Salon-Mithapur-100054324619113/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
</div>



    </section>
    
    <?php include 'footer.php'; ?>

</div>
<?php include 'foot.php'; ?>

<script>
      $("#contact-form").submit(function (event) {
        event.preventDefault();
        $(".submit-btn").html("<i class=`fa fa-circle-notch fa-spin`></i> Please wait...");
        $(".submit-btn").prop('disabled', true);
        $('#form-message-success').hide();
        $('#form-message-danger').hide();
        var formValues = $(this).serialize();
        $.post("mail-service.php", formValues, function (data) {
          $(".submit-btn").html("Submit");
          $(".submit-btn").prop('disabled', false);
          if (data) {
            $('#form-message-success').show().delay(5000).fadeOut(500);
            $("#contact-form")[0].reset();
          } else {
            $('#form-message-danger').show().delay(5000).fadeOut(500);
          }
        });
      });
    </script>

</body>

</html>