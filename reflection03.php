<?php $title = "Reflection | First Web Application using Github and Heroku"; include 'navbar.php';?>

<section class="page-content">
	<?php $artdate = "26 JUL, 2019"; $arttitle = $ref3; include 'article-title.php';?>
	<div class="page-container">
		<div class="container">
			<div class="article">
				<p>Since I’ve been designing typical static webpages using HTML, CSS, and a little bit of JavaScript for a couple of years, I found the activity to be easy and I am proud of what I accomplished. It still needs a little furnishing to be an interactive one even if it is just a basic webpage.</p>

				<p>However, I found some of my classmates do not know how to create a basic static HTML webpage and to connect from Github to Heroku. Since this is somehow their first time creating a web application, I helped some of them in creating one and connecting it with the hosting service provider. It was one way for me to teach them of what I know and what I experienced throughout the activity. It was difficult at first since I, too, was experiencing some problems regarding how we should connect our HTML-based website to Heroku since Heroku doesn’t merely support just HTML-based website.</p>

				<p>Still, it was a fun activity to see how others designed their personal webpages and it’s a good start in being a web designer.</p>
			</div>
			<?php include('sidebar.php'); ?>
		</div>
	</div>
	<div class="comments-container">
		<div class="container">
			<div class="fb-comments" data-href="<?php echo $_SERVER['REQUEST_URI']; ?>" data-width="" data-numposts="5"></div>
		</div>
	</div>
</section>

<?php include "footer.php"; ?>