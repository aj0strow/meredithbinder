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
					
					<h3>
						Class Assignment in White Papers
					</h3>
					<p>
						I wrote a white paper for a fictitious cloud storage provider 
						named <em>Silver Lining</em>. My target audience is technical and non-technical managers and software engineers 
						who work for web retailers. My paper presents factual information on cloud computing, the history of 
						the <em>Silver Lining</em> company, and a gentle sales pitch.
					</p>
					<br />
					Sample pages (click to enlarge):
					
					<div class="row">
						<ul class="unstyled pagination">
							<li id="0">
								<a>
									<img src="img/white_paper/thumbnails/0.png" />
								</a>
							</li>
							<li id="1">
								<a>
									<img src="img/white_paper/thumbnails/1.png" />
								</a>
							</li>
							<li id="2">
								<a>
									<img src="img/white_paper/thumbnails/2.png" />
								</a>
							</li>
							<li id="3">
								<a>
									<img src="img/white_paper/thumbnails/3.png" />
								</a>
							</li>
						</ul>
					</div>
					
					<div id="doc" class="row">
						<img src="img/white_paper/docs/0.png" />
					</div>
					<br />
					<span class="alert alert-success download">
						Download: <a href="pdf/white_paper.pdf">white_paper.pdf</a>
					</span>
					&nbsp; &nbsp;
					<span class="alert alert-success download">
						Download: <a href="pdf/fact_sheet.pdf">fact_sheet.pdf</a>
					</span>
				</div>
				
			</div>
			
		</div>
		
		<?php include('partials/footer.html'); ?>
		
	</div>

	<script type="text/javascript" src="js/jquery.scrollTo.js"></script>
	<script type="text/javascript">
		$.ajaxSetup ({  
        cache: false  
    });  
        
    $('ul.pagination li').click(function(){
    	loadPage($(this).index());
    });  
    
    function loadPage(i)
    {
    	$('#doc').html('<img src="img/white_paper/docs/' + i + '.png" />');
    	$.scrollTo('#doc', {'duration' : 500});
    }  
    
	</script>
</body>
</html>