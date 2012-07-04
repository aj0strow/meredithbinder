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
						Class Assignment in Software Help Documentation and Usability Testing
					</h3>
					<p>
						Each group picked a feature 
						from the UW intranet website, Catalyst, to redesign. The redesign included audience analysis, 
						designing, and testing. Each group presented their paper to the UW Catalyst software team. 
						We hope the team will implement some of our projects.
					</p>
					<p>
						My group chose to redesign the <em>File Manager</em> feature. <em>File Manager</em> is a free 
						cloud storage service for UW students. Our group worked together to develop a new design and a 
						usability test protocol. I was responsible for developing and analyzing the results of an online 
						survey to gather information on the audience needs. Each team member administered the usability 
						test and we collectively analyzed the results. Other group members designed the document and 
						edited together the written information.
					</p>
					<br />
					Sample pages (click to enlarge):
					
					<div class="row">
						<ul class="unstyled pagination">
							<li id="0">
								<a>
									<img src="img/usability_test/thumbnails/0.png" />
								</a>
							</li>
							<li id="1">
								<a>
									<img src="img/usability_test/thumbnails/1.png" />
								</a>
							</li>
							<li id="2">
								<a>
									<img src="img/usability_test/thumbnails/2.png" />
								</a>
							</li>
						</ul>
					</div>
					
					<div id="doc" class="row">
						<img src="img/usability_test/docs/0.png" />
					</div>
					<br />
					<span class="alert alert-success download">
						Download: <a href="pdf/usability_test.pdf">usability_test.pdf</a>
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
    	$('#doc').html('<img src="img/usability_test/docs/' + i + '.png" />');
    	$.scrollTo('#doc', {'duration' : 500});
    }  
    
	</script>
</body>
</html>