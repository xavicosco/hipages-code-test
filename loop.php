<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Style-Type" content="text/css">
	<title>ntpages.com.au - Part 3 - php</title>
	<!--<link rel="stylesheet" type="text/css" href="css/styles2.css"  />-->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
	<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>-->
	
</head>
<body>

<div class="container">
	<div class="page-header">
		<h1><img src="http://www.naturaltherapypages.com.au/images/ntp-logo.png" /></h1>
	</div>

	<h3 class="lead">Featured Articles</h3>
	<?php
		$featured_articles = array(
			'category' => 'Naturopathy',
			'articles' => array(
				array(
					'article_name' => 'Study: Vitamin E for Alzheimer\'s',
					'article_url' => 'http://www.naturaltherapypages.com.au/article/study_vitamin_e_for_alzheimers'
				),
				array(
					'article_name' => 'Consulting a Holistic Doctor',
					'article_url' => 'http://www.naturaltherapypages.com.au/article/consulting_a_holistic_doctor'
				),
				array(
					'article_name' => 'Studying to be a Naturopath',
					'article_url' => 'http://www.naturaltherapypages.com.au/article/Studying_to_be_a_Naturopath'
				),
				array(
					'article_name' => 'What Natural Therapies Qualify for a...',
					'article_url' => 'http://www.naturaltherapypages.com.au/article/what_natural_therapies_qualify_for_a_medicare_reba'
				),
				array(
					'article_name' => 'Are Natural Therapies Safe for Kids?',
					'article_url' => 'http://www.naturaltherapypages.com.au/article/are_natural_therapies_safe_for_kids'
				)
			)
		);
		
		/* Place your loop and media block here */
		?>
		
		<div class="content">
			<div class="left col-desktop col-xs-fullwidth">
				<!--<img src="images/hero.jpg" width="140" height="120" />-->
				<div class="img-hero"></div>
				<div id="bg-txt" class="bg-txt-mobile">
					<strong><?php echo $featured_articles['category']  ?></strong>
				</div>
			</div>
			<div class="left marginleft50 col-xs-fullwidth col-offset-mobile">
				<ul>
					<?php
					foreach ($featured_articles as $innerArray) {
						if (is_array($innerArray)){
							foreach ($innerArray as $innerArray2) {
								if (is_array($innerArray2)){
					?>
						<li><a href="<?php echo $innerArray2['article_url'] ?>" target="_blank"><?php echo $innerArray2['article_name'] ?></a></li>
					<?php
								}						
							}
						}
					}
					?>
				</ul>
				<a href="#" class="strong left">More Naturopathy Articles</a>
			</div>			
		</div>
		<?php	
			/* End Place your loop and media block here */
		?>
	<small class="text-muted left clear">ntpages.com.au &copy; <?php echo date('Y'); ?></small>
</div>

<style type="text/css">
	.col-desktop { width:140px; position:relative; }
	.col-md-8 { width:66%; }

	/* 1 col & 2 rows: mobile resolution */
	@media (max-width: 768px) {
	  .col-xs-fullwidth { width: 100%!important; }
	  .col-offset-mobile { margin:20px 0 0 18px!important; }
	}
	* { margin: 0; padding: 0; }
	body { font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; font-size:13px; }
	ul { list-style: none; margin-top:-6px;  }
	/* triangular bullets */
	li:before { 
		content: "";
		border-color: transparent #38a5c6;
		border-style: solid;
		border-width: 0.3em 0 0.3em 0.3em;
		display: block;
		height: 0;
		width: 0;
		left: -1.5em;
		top: 0.7em;
		position: relative;
	}
	li { line-height:14px; }
	li a { color:black; }
	li a:hover { text-decoration:none; }
	strong { color:white; padding:0 10px; }
	.strong { font-weight:bold; }
	.left { float:left; }
	.clear { clear:left; } 
	a { text-decoration:none; color:#38a5c6; margin-top:10px; margin-left:-9px; }
	#bg-txt { background-color:#3e3e3e; padding:5px 0; margin-top:-20px; width:100%; }
	.img-hero { 
		background-image:url("../images/hero.jpg");
		background-repeat:no-repeat;
		width: 100%;
		height: 120px;
		background-size: 100% 100%, cover;
	}
	.marginleft50 { margin-left:50px; }
	small { margin-top:30px; }
</style>

</body>

</html>