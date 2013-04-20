<!DOCTYPE html>

<link rel="stylesheet" media="screen" href="<?php echo base_url('resource/bootstrap/css/bootstrap.css');?>" >
<link rel="stylesheet"  href="<?php echo base_url('resource/css/theme.css');?>" >
<link rel="stylesheet"  href="<?php echo base_url('resource/css/core.css');?>" >
<link href='http://fonts.googleapis.com/css?family=Luckiest+Guy' rel='stylesheet' type='text/css'> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="in">
    <head lang="en">
        <title><?php echo $title ?></title>
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
					<img src="<?php echo base_url('resource/img/barbekost.png')?>" width="400px" height="auto" alt="Cloud Circle Technologi">
				<h1>Welcome To Barang Bekas Kost</h1>
				<p><?php echo $title_desc?></p> 
			</hgroup>
		</div>
		<div id="main" class="clearfix">
			<aside>
				<article>        
					<section class="clearfix">
						<figure>
						<img src="<?php echo base_url('resource/img/cloud circle.png')?>" width="100%" height="auto" alt="Cloud Circle Technologi">
						<figcaption>Modernizr's work group to change the world with our mind.</figcaption>    
						<h1 class="title">Cloud Circle Technologi </h1>						
						</figure>
					</section>      
				</article> 

				<nav class="clearfix">
					<?php echo $navigation?>
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
				<?php echo $content; ?>	
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
				<?php echo $footer; ?>	
		</footer>
	</body>
</html>
<script src="<?php echo base_url('resource/js/jquery.js')?>" ></script>  
<script src="<?php echo base_url('resource/bootstrap/js/bootstrap.min.js')?>" ></script>  
<script src="<?php echo base_url('resource/js/bbk_deploy.js')?>" ></script>  
<script>
	$(document).ready(function() {
		initMenu();
	}); 
</script>