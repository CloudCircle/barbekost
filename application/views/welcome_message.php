<div id="container">
	<div class=" message type4 success fade in"><?php echo $this->lang->line('success');?>
		<button type="button" class="close" data-dismiss="alert">×</button>
	</div>
	<article>    
		<section class="clearfix left-align">
			<div class="media">
              <span class="pull-left">
              	<img class="media-object img-circle " src="<?php echo base_url("resource/img/cloud circle.png");?>" style="width:64px;height:64px;" >
              </span>
              <div class="media-body">
              	<h2 class="media-heading">Ex-Koster Registration</h2>
              	<span>There is form for buyer </span>
          	  </div>
            </div>
            <br>
			<?php
				foreach($form as $keys){
					echo $keys;
				}
			?>
		<section class="clearfix">
		<footer><?=$this->config->item('language')?> <span>March 23th, 2013</span></footer>  
	</article>    
</div>