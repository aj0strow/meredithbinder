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
				<div id="home" class="wrapper">
					
					<img id="word-cloud" src="img/word_cloud.png" width="80%" />
					
				    <blockquote class="pull-right well">
				    	<p>
				    		Most of the fundamental ideas of science are essentially simple, and may, as a rule, 
				    		be expressed in a language comprehensible to everyone.
							</p>
				    	<small>Albert Einstein</small>	
				    </blockquote>

					
				</div>
				
			</div>
			
		</div>
		
		<?php include('partials/footer.html'); ?>
		
	</div>
	
	<script type="text/javascript">
		$('#word-cloud').css({opacity: 0.1});
		$('#word-cloud').animate({opacity: 1}, 2000);
		
	</script>

</body>
</html>