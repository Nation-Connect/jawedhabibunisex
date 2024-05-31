<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Jawed Habib Salon offers the best spa, salon, massage, bridal makeup, and hair care services in Patna, India. Visit us for a rejuvenating experience." />
<meta name="keywords" content="Salon in Patna, Spa in Patna, Bridal Makeup in Patna, Hair Care in Patna, Massage in Patna, Best Salon in Patna, Best Spa in Patna" />
<link rel="shortcut icon" href="img/fav.png">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/boostrap.css" rel="stylesheet" type="text/css">
<link href="css/flexslider.css" rel="stylesheet" type="text/css">
<meta name="author" content="https://jawedhabibunisex.com" />
<!-- css -->

<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<script src="../ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
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