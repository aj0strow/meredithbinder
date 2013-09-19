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
             Process Flowchart
					</h3>
					<p>
						 I provided the technical content for a series of troubleshooting flowcharts for a data storage company. The primary audience for the  flowcharts is service engineers. Developers and post release engineers also use the the flowcharts as training tools. 
					</p>
          <p>
            This flowchart, <em>Troubleshooting Guide: Add Node</em>, provides a series of steps for service engineers to follow when a customer experiences difficulty adding a new storage node to an existing cluster of nodes. 
          </p>
					<br />
					Sample pages (click to enlarge):
					
					<div class="row">
						<ul class="unstyled pagination">
							<li id="0">
								<a>
									<img src="/img/process_flowchart/thumbnails/0.png" />
								</a>
							</li>
							<li id="1">
								<a>
									<img src="/img/process_flowchart/thumbnails/1.png" />
								</a>
							</li>
							<li id="2">
								<a>
									<img src="/img/process_flowchart/thumbnails/2.png" />
								</a>
							</li>
						</ul>
					</div>
					
					<div id="doc" class="row">
						<img src="/img/process_flowchart/docs/0.png" />
					</div>
					<br />
					<span class="alert alert-success download">
						Download: <a href="/pdf/process_flowchart.pdf">process_flowchart.pdf</a>
					</span>
					
				</div>
				
			</div>
			
		</div>
		
		<?php include($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.html'); ?>
		
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
    	$('#doc').html('<img src="/img/process_flowchart/docs/' + i + '.png" />');
    	$.scrollTo('#doc', {'duration' : 500});
    }  
    
	</script>
</body>
</html>