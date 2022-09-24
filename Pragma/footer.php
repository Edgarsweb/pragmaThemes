<?php
    wp_footer();
?>

	<!-- FOOTER -->

	

	<footer >
		
		
		  <div class="row">
			<div class="footerBlock">				
			  	<h6><?php bloginfo('name');?></h6>
			  	<p class="footerDescription"><?php bloginfo('description'); ?></p>
				
                <div class="socialMedia">                    
                    <a href="https://www.instagram.com/edgarsblog/" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
					
					<a href="https://www.linkedin.com/in/edgar-hvh-aa97b6200/" target="_blank">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>

                    <a href="https://www.facebook.com/edx126" target="_blank">
                        <i class="fa-brands fa-facebook"></i>
                    </a>

                    <a href="https://twitter.com/edgarsblog" target="_blank">
                        <i class="fa-brands fa-twitter"></i>
                    </a>

                    <a href="#" target="_blank">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div> 
			</div>
			  
			  <div class="footerBlock">
			  <h6>MENU</h6>
			  
			<?php 
		 
		 wp_nav_menu( [
			'theme_location'  => 'mobile-menu',
			'menu'            => 'Main',
			'container'       => '',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'footerBlock',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<div class="footerBlock">%3$s</div>',
			'depth'           => 1,
			'walker'          => '',
		] );
		 
		 ?>
			</div>

	  
			<div class="footerBlock">
			  <h6>CODE</h6>
				<a href="https://github.com/Edgarsweb" target="_blank"> 
                	<i class="fa-brands fa-github"></i> GitHub
                </a>
				
				<a href="https://codepen.io/Edgarweb" target="_blank">
                    <i class="fa-brands fa-codepen"></i> Codepen
                </a>
				
				<a href="https://www.edgarsblog.com/refund_returns/" target="_blank">
                   Refund and Returns Policy
                </a>
			 
			</div>
	  
			

			<div class="footerBlock">
			  <h6>VIA</h6>
				<a href="mailto:edgarwyn@gmail.com"><i class="fa-solid fa-envelope"></i> Email</a>				
			   	<a href="https://wa.me/+79253807313"><i class="fa-brands fa-whatsapp"></i> Whatsapp</a>
                			
			</div>
		  </div>
		  
		
		
		<div class="copyright">
            <p>Powered by <a href="https://www.edxweb.com/" target="_blank">Pragma Themes</a></p>
            <p class="copyright-text"> Copyright © <?php echo date("Y"); ?> <?php the_author(); ?></p>
        </div>
		
	  </footer>



</body>
</html>