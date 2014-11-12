<?php
//Included Files
include 'quotes.php';
include 'config.php';


echo '
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>'.$meta['title'].'</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="'.$meta['description'].'" />
        <meta name="keywords" content="'.$meta['keywords'].'" />
        <meta name="author" content="'.$meta['author'].'" />
        <meta name="copyright" content="'.$meta['copyright'].'" />
        <meta name="ROBOTS" content="'.$meta['robots'].'" />
        <link rel="shortcut icon" href="'.$pacquotes['fav_icon_url'].'"> 
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <link rel="stylesheet" type="text/css" href="css/style_common.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
				<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/nav.css" />
		<link rel="stylesheet" type="text/css" href="css/icons.css" />
		<link rel="stylesheet" type="text/css" href="css/style_nav.css" />
		<script src="js/modernizr.custom.js"></script>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
		<!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    <body>
        <div class="container">
					
			<header>';
			
			
			if ($pacquotes['logo_use']=="false")
			{
				echo '<a href="'.$pacquotes['site_url'].'"><h1>Pac <span>Quotes</span></a></h1>';
			}
			elseif ($pacquotes['logo_use']=="true")
			{
			echo '<h1><a href="'.$pacquotes['site_url'].'"><img src="'.$pacquotes['logo_url'].'" alt="'.$pacquotes['site_name'].'" /></a></h1>';
			}
				echo '
				<h2>'.$pacquotes['tag_line'].'</h2>

				
				<div class="support-note"><!-- check browser support with modernizr -->
					<!--span class="no-cssanimations">CSS animations are not supported in your browser</span-->
					<span class="no-csstransforms">CSS transforms are not supported in your browser</span>
					<!--span class="no-csstransforms3d">CSS 3D transforms are not supported in your browser</span-->
					<!--span class="no-csstransitions">CSS transitions are not supported in your browser</span-->
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
			<section class="main">
			
				<div class="mb-wrap mb-style-1">
					<div class="mb-thumb"></div>
					<blockquote cite="http://www.gutenberg.org/ebooks/1257">
						<p>'.$array_q[$array_index_q].'</p>
					</blockquote>
					<div class="mb-attribution">
						<p class="mb-author">&copy; Pacquotes - '.date('Y').'</p>
						<cite><a href="http://www.pacquotes.cf/"><img src="images/quotes_foot.png" alt="quotes PHP Script"/></a></br><a href="http://www.shashwat.cf/">Designed By Shashwat Mishra</a></br></cite>
					</div>
					<div class="mb-socio">
						<cite></br>
						<center>
							<a href="http://www.facebook.com/pacquotesweb" target="_blank"><img src="images/fb-pacquotesweb.png" alt="FB/pacquotesweb" /></a>
							<a href="http://www.twitter.com/shashwat_me/" target="_blank"><img src="images/twitter-shashwat_me.png" alt="twitter/shashwat_me" /></a>
							<a href="http://plus.google.com/111297976065455551800/" target="_blank"><img src="images/gplus.png" alt="Google+" /></a>
							<a href="http://www.pinterest.com/secrethash/" target="_blank"><img src="images/pin-secrethash.png" alt="pinterest/secrethash" /></a>
							<a href="http://in.linkedin.com/pub/shashwat-mishra/81/b28/206/" target="_blank"><img src="images/linkedin.png" alt="linkedin" /></a>
							<a href="mailto:contact@shashwat.cf" target="_blank"><img src="images/email.png" alt="contact@shashwat.cf" /></a>
						</center>
						</cite>
					</div>
				</div>
				
			</section>
			
        </div>
		<script>
			var nav = responsiveNav(".nav-collapse");
		</script>
    </body>
</html>';


?>