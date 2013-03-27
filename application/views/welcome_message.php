<div id="container">
	<div class="message type4 success"><?php echo $this->lang->line('success');?></div>
	<article>    
		<section class="clearfix left-align">
			<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
			<?php
				foreach($form as $keys){
					echo $keys;
				}
			?>
			<p >If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
		<section class="clearfix">
		<footer><?=$this->config->item('language')?> <span>March 23th, 2013</span></footer>  
	</article>    
</div>