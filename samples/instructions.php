<!DOCTYPE html>
<html lang="en">

<?php include($_SERVER['DOCUMENT_ROOT'] . '/partials/head.html'); ?>

<body>
	<div class="container">
		
		<?php include($_SERVER['DOCUMENT_ROOT'] . '/partials/header.html'); ?>
		
		<div class="row main">
			
			<!-- Navigation -->
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/partials/nav.html'); ?>
			
			<div class="span9 content">
				<div id="home" class="wrapper">
					
					<h3>
						Class Assignment in Writing Software Instructions
					</h3>
					<p>
						These instructions show the user how to download a software application. They are targeted to a non-technical audience. 
						This assignment assumes that the instructions will be published in hard copy.
					</p>
					<br />
					Sample pages (click to enlarge):
					
					<div class="row">
						<ul class="unstyled pagination">
							<li id="0">
								<a>
									<img src="/img/instructions/thumbnails/0.png" />
								</a>
							</li>
							<li id="1">
								<a>
									<img src="/img/instructions/thumbnails/1.png" />
								</a>
							</li>
							<li id="2">
								<a>
									<img src="/img/instructions/thumbnails/2.png" />
								</a>
							</li>
							<li id="3">
								<a>
									<img src="/img/instructions/thumbnails/3.png" />
								</a>
							</li>
						</ul>
					</div>
					
					<div id="doc" class="row">
						<img src="/img/instructions/docs/0.png" />
					</div>
					<br />
					<span class="alert alert-success download">
						Download: <a href="/pdf/instructions.pdf">instructions.pdf</a>
					</span>
				</div>
				
			</div>
			
		</div>
		
		<?php include($_SERVER['DOCUMENT_ROOT'] . 'partials/footer.html'); ?>
		
	</div>

	<script type="text/javascript" src="/js/jquery.scrollTo.js"></script>
	<script type="text/javascript">
		$.ajaxSetup ({  
        cache: false  
    });  
        
    $('ul.pagination li').click(function(){
    	loadPage($(this).index());
    });  
    
    function loadPage(i)
    {
    	$('#doc').html('<img src="/img/instructions/docs/' + i + '.png" />');
    	$.scrollTo('#doc', {'duration' : 500});
    }  
    
    $('#sample-toggles').click();
    
	</script>
</body>
</html>