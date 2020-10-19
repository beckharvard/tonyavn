<div class="center">
</header>
<h2>We wander.</h2>
<h2 style="margin-left: 3.0em;">We take some pictures.</h2>

<!-- Add jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo base_url(); ?>public/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url(); ?>public/fancybox/source/jquery.fancybox.pack.js"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="<?php echo base_url(); ?>public/fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url(); ?>public/fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/fancybox/source/helpers/jquery.fancybox-media.js"></script>

<!-- Add Thumbnail helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
<script type="text/javascript" src="<?php echo base_url(); ?>public/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<link rel="stylesheet" href="<?php echo base_url(); ?>public/fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url(); ?>public/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		window.onload = function() {

		}
	})

	$('.fancybox').fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 1000,
				nextEffect : 'fade',
				nextSpeed :  500,
        		prevEffect : 'none',
				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeBtn  : true,
				arrows    : true,
				nextClick : true,

				helpers : {
					title : {
						type : 'inside'
					}
				}
			});
</script>
  <section id="sidebar1">
    <!-- sidebar content goes in here -->
  </section>

  <section id="main" style="font-family:avenir,arial,helvetica,sans-serif;margin:15px 4%;">
    <!-- main page content goes in here -->
    <div class="gallery"> 
    <style type="text/css" scoped>
    .gallery img {}
	</style>
	<!--Let's replace this with php-->
    <a title="Las vendedores de los flores" class="fancybox" rel="prefetch" href="<?php echo base_url(); ?>public/images/gto.jpg"><img src="<?php echo base_url(); ?>public/images/gto_thumb.jpg" alt="Las vendedores de los flores" /></a>
  	<a title="Carlos and Tony on Teo" class="fancybox" rel="prefetch" href="<?php echo base_url(); ?>public/images/teo.jpg"><img src="<?php echo base_url(); ?>public/images/teo_thumb.jpg" alt="Carlos and Tony on Teo" /></a>
	<a title="Alto" class="fancybox" rel="prefetch" href="<?php echo base_url(); ?>public/images/drid.jpg"><img src="<?php echo base_url(); ?>public/images/drid_thumb.jpg" alt="Stop" /></a>
	<a title="Solarize" class="fancybox" rel="prefetch" href="<?php echo base_url(); ?>public/images/beach.jpg"><img src="<?php echo base_url(); ?>public/images/beach_thumb.jpg" alt="Solarize" /></a>
	<a title="Truck in 'tucky" class="fancybox" rel="prefetch" href="<?php echo base_url(); ?>public/images/tucky.jpg"><img src="<?php echo base_url(); ?>public/images/tucky_thumb.jpg" alt="Truck in Tucky"  /></a>
	<a title="Kirstie and me at Monte" class="fancybox" rel="prefetch" href="<?php echo base_url(); ?>public/images/Wanderlust110.jpg"><img src="<?php echo base_url(); ?>public/images/Wanderlust110_thumb.jpg" alt="Kirstie and tony at Monte" /></a><br/>
	<a title="Line of site" class="fancybox" rel="prefetch" href="<?php echo base_url(); ?>public/images/casaazul.jpg"><img src="<?php echo base_url(); ?>public/images/casaazul_thumb.jpg" alt="Line of site"  /></a>
	<a title="i on Granada" class="fancybox" rel="prefetch" href="<?php echo base_url(); ?>public/images/gran.jpg"><img src="<?php echo base_url(); ?>public/images/gran_thumb.jpg" alt="i on Granada"  /></a>
	<a title="Frowning Tower" class="fancybox" rel="prefetch" href="<?php echo base_url(); ?>public/images/segovia.jpg"><img src="<?php echo base_url(); ?>public/images/segovia_thumb.jpg" alt="Frowning Tower"   /></a>
	<a title="My new 'do" class="fancybox" rel="prefetch" href="<?php echo base_url(); ?>public/images/barca.jpg"><img src="<?php echo base_url(); ?>public/images/barca_thumb.jpg" alt="My new 'do" /></a>
	<a title="Work ahead" class="fancybox" rel="prefetch" href="<?php echo base_url(); ?>public/images/oax.jpg"><img src="<?php echo base_url(); ?>public/images/oax_thumb.jpg" alt="Work ahead" /></a>
	<a title="The University" class="fancybox" rel="prefetch" href="<?php echo base_url(); ?>public/images/istanbul.jpg"><img src="<?php echo base_url(); ?>public/images/istanbul_thumb.jpg" alt="The University" /></a>
	<a title="Tony in Toledo" class="fancybox" rel="prefetch" href="<?php echo base_url(); ?>public/images/toledo.jpg"><img src="<?php echo base_url(); ?>public/images/toledo_thumb.jpg" alt="Tony in Toledo"  /></a>

    </div>

  </section>

    <a href="<?php echo base_url(); echo index_page();?>/home" title="Home">then we go home</a>

</div>