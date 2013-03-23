<!DOCTYPE html>
<link rel="stylesheet"  href="<?=base_url('resource/css/theme.css')?>" >
<link rel="stylesheet"  href="<?=base_url('resource/css/core.css')?>" >
<link href='http://fonts.googleapis.com/css?family=Luckiest+Guy' rel='stylesheet' type='text/css'> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="in">
    <head>
        <title><?= $title ?></title>
        <meta http-equiv="Content-Type" content="text/html"/>		
    </head>
    <body>
		<header> 
			<hgroup class="clearfix"> 
				<h1><a href="#">Barbe <span>Kost</span></a></h1> 
				<h2>Frame Plate For Barbe-Kost </h2> 
			</hgroup>
		</header>
		<div class="clearfix hd-bg"> 
			<hgroup class="clearfix"> 
				<img src="<?=base_url('resource/img/barbekost.png')?>" width="400px" height="auto" alt="Cloud Circle Technologi">
				<h1>Welcome To Barang Bekas Kost</h1>
				<p><?=$title_desc?></p> 
			</hgroup>
		</div>
		<div id="main" class="clearfix">
			<aside>
				<article>        
					<section class="clearfix">
						<figure>
						<img src="<?=base_url('resource/img/cloud circle.png')?>" width="100%" height="auto" alt="Cloud Circle Technologi">
						<figcaption>Modernizr's work group to change the world with our mind.</figcaption>    
						<h1 class="title">Cloud Circle Technologi </h1>						
						</figure>
					</section>      
				</article> 
				<nav class="clearfix">
					<?=$navigation?>
				</nav><br><br>
				<article>        
					<section class="clearfix">
						<h1 class="title">Others Content, Can use for Advertising or other </h1>
					</section>      
				</article> 
				<br>
				<article>        
					<section class="clearfix">
						<h1 class="title">Others Content, Can use for Advertising or other </h1>
					</section>      
				</article> 
				<br>
			</aside>
			
			<div id="content">
				<?= $content; ?>	
				<article>        
					<section class="clearfix">
						<h1 class="title">Page rendered in <strong>{elapsed_time}</strong> seconds</p></h1>
					</section>  
					<footer></footer>    
				</article> 						
			</div>
		</div>
		<br><br>
		<footer class="footer">
			©Copyright 2013 Barbe-Kost All Right Reserved. All content of their respective Cloud Circle Technology. 
			Use of this Web site constitutes acceptance of the Barberkost <a href='#Apple'>User Agreement</a> and <a href='#'>Privacy Policy</a>.
		</footer>
	</body>
</html>
		<script src="<?=base_url('resource/js/jquery.min.js')?>" ></script>  
		<script>
			var current=""; 
			function initMenu() {
			  $('#menu ul').hide(); 
			  if ($('#menu li').has('ul')) $('#menu ul').prev().addClass('expandable'); 
			  $('.expandable').click(
				function() {
					if(current!=$(this).html()){
						$('.current').next().slideToggle();
						$('.current').removeClass('expanded');
						$('.current').removeClass('current');
					}
					$(this).next().slideToggle();
					$(this).toggleClass('expanded');
					$(this).toggleClass('current');
					current=$(this).html();
				  }
				);
			  }
			$(document).ready(function() {
					initMenu();
				}
			);    
		</script>