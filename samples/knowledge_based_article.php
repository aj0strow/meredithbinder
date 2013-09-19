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
            Knowledge Based Article
					</h3>
					<p>
						This is an excerpt from a knowledge based article on writing code for localization. The article is intended for an audience of developers.
					</p>
					<br />
					Sample pages (click to enlarge):
					
					<div class="row">
						<ul class="unstyled pagination">
							<li id="0">
								<a>
									<img src="/img/knowledge_based_article/thumbnails/0.png" />
								</a>
							</li>
							<li id="1">
								<a>
									<img src="/img/knowledge_based_article/thumbnails/1.png" />
								</a>
							</li>
							<li id="2">
								<a>
									<img src="/img/knowledge_based_article/thumbnails/2.png" />
								</a>
							</li>
							<li id="2">
								<a>
									<img src="/img/knowledge_based_article/thumbnails/3.png" />
								</a>
							</li>
						</ul>
					</div>
					
					<div id="doc" class="row">
						<img src="/img/knowledge_based_article/docs/0.png" />
					</div>
					<br />
					<span class="alert alert-success download">
						Download: <a href="/pdf/knowledge_based_article.pdf">knowledge_based_article.pdf</a>
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
    	$('#doc').html('<img src="/img/knowledge_based_article/docs/' + i + '.png" />');
    	$.scrollTo('#doc', {'duration' : 500});
    }  
    
	</script>
</body>
</html>