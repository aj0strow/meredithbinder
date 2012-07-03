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
						Class Assignment in Document Design
					</h3>
					<p>
						The instructor handed out a poorly formatted back and white installation manual and 
						asked each student to design a new layout. The audience was defined as installation 
						technicians, IT professionals, and non-technical employees such as secretaries. An 
						audience analysis revealed that most audience members would use the manual for a 
						reference. Reference users need be able to easily scan a document and pick out points 
						of interest. To make a reference document that would be easy for users to navigate, I 
						used of a variety of headings, indentations, and colors. I used Latin filler text for 
						content.
					</p>
					<br />
					Sample pages:
					
					<div class="row">
						<ul class="unstyled pagination">
							<li id="0">
								<a>
									<img src="img/document_design/thumbnails/0.png" />
								</a>
							</li>
							<li id="1">
								<a>
									<img src="img/document_design/thumbnails/1.png" />
								</a>
							</li>
							<li id="2">
								<a>
									<img src="img/document_design/thumbnails/2.png" />
								</a>
							</li>
							<li id="3">
								<a>
									<img src="img/document_design/thumbnails/3.png" />
								</a>
							</li>
						</ul>
					</div>
					
					<div id="doc" class="row">
						<img src="img/document_design/docs/0.png" />
					</div>
					<br />
					<span class="alert alert-success download">
						Download: <a href="pdf/instructions.pdf">instructions.pdf</a>
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
    	$('#doc').html('<img src="img/document_design/docs/' + i + '.png" />');
    	$.scrollTo('#doc', {'duration' : 500});
    }  
    
	</script>
</body>
</html>