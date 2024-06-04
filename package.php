<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="robots" content="index, follow">
<title>Jawed Habib Salon Patna - Best Hair & Beauty Services | Mithapur Sabji Mandi, First Floor, Crystal Castle, Near ICICI Bank, Near Goriya Math, Patna, Bihar, India</title>

<?php include 'head.php'; ?>
</head>
<body>
<div id="wrapper">
	<header>
        <nav class="clearfix">
            <ul class="clearfix">
            <li><a href="index.php">Home</a></li>
            <li><a href="about-us.php">About Us</a></li>
            <li><a href="our-services.php" class="active">Our Services</a></li>
            <li><a href="package.php">Package</a></li>
            <li><a href="bridal.php">Bridal</a></li>
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
                <img src="img/slider/1.jpg" class="img-responsive" alt="jawed habib patna &amp; Salon" />
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
    <div class="services-container">
        <h2>Our Service Rate Chart</h2>
        <button id="downloadBtn">Download Rate Chart PDF</button>
    </div>
</section>

<script>
    document.getElementById('downloadBtn').addEventListener('click', function() {
        // Create a link element
        var link = document.createElement('a');
        link.href = './jawedhabibunisex.pdf'; // Corrected file path
        link.download = 'jawedhabibunisex.pdf'; // Filename for the PDF file
        
        // Append the link to the document body
        document.body.appendChild(link);
        
        // Trigger a click event on the link to start the download
        link.click();
        
        // Remove the link from the document body
        document.body.removeChild(link);
    });
</script>







    
    <?php include 'footer.php'; ?>

</div>
<?php include 'foot.php'; ?>

</body>

</html>