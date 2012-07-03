<!DOCTYPE html>
<html lang="en">

<?php include('partials/head.html'); ?>

<body>
	<div class="container">
		
		<?php include('partials/header.html'); ?>
		
		<div class="row main">
						
			<!-- Navigation -->
			<?php include('partials/nav.html'); ?>
			
			<div class="span9 content">
				<div class="wrapper">
					
					<div id="blog">
						
					<!-- Insert Blog using AJAX here depending on passed in php params -->
					<?php 
						## To add an article use the example line below, 
						## and add a new html page in the blog folder. 
						
						## To include images in a new blog, save the image file in
						## img / blog / NAME_OF_IMAGE.png
						
						## To have a link on the home page go to partials/nav.html
						## And find the commented-out region
						
						$articles = array(
							0 => "accepting-blame"
							,1 => "collaborative-writing"
							# ,2 => "NAME-GOES-HERE" #delete the '#' at the beginning of this line and this message itself.
						);
						
						$key = array_search($_GET["page"], $articles);
						if($key == FALSE) $key = 0;
						
						include('blog/' . $articles[$key] . '.html'); 
						
						echo('<div class="blog-nav">');						
						if($key > 0) {
							echo('<a href="blog.php?page=' . $articles[$key-1] . '">&lt;&lt; prev</a>');
						}
						if($key < sizeof($articles)-1) {
							echo('<a class="pull-right" href="blog.php?page=' . $articles[$key+1] . '">next &gt;&gt;</a>');
						}
						
						echo('</div>')						

					?>
					
					</div>

				</div>
			</div>
			
			
		</div>
		
		<?php include('partials/footer.html'); ?>
		
	</div>

</body>
</html>