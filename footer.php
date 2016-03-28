<div class="clr"></div><!--Clear-->
<footer class="footer">
<div class="menu_bottom"><nav class="menu_bottom">
                        <div class="menu-footer-container"><ul id="menu-footer-1" class="menu"><?php 
            $args = array(
                    'theme_location' => 'footer'
                );
            ?>
            <?php wp_nav_menu(  $args); ?>
			</ul></div></nav>
	</div>
        <div class="clr"></div>
	<div class="copyright">
                <p>Copyright &copy; <?php echo date('Y'); ?> by </p><p><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></p>
            </div>
    </footer>
<div class="clr"></div><!--Clear-->
    </div><!--End Canvas-->   
<!--Scripts-->
   <script type="text/javascript">
	
		// Initialize video.js and activate the resolution selector plugin
		videojs( '#example', { plugins : { resolutionSelector : {
			
			// Pass any options here
			default_res : '360'
		
		// Define an on.ready function
		} } }, function() {
			
			// "this" will be a reference to the player object
			var player = this;
			
			// Listen for the changeRes event
			player.on( 'changeRes', function() {
				
				// player.getCurrentRes() can be used to get the currently selected resolution
				console.log( 'Current Res is: ' + player.getCurrentRes() );
			});
		});
		
	</script>	
	<script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
	function changeImage(element) {
     element.src = element.bln ? "<?php bloginfo('template_directory'); ?>/img/menu.png" : "<?php bloginfo('template_directory'); ?>/img/menu2.png";
     element.bln = !element.bln;
    }
	
	var $div1 = $('#wel')
	$('#menu a').click(function() {
 	 $div1.toggleClass('isOut')
  	var isOut = $div1.hasClass('isOut')
  	$div1.css({marginTop: isOut ? '40px' : '0'}, 300)
	})
	
//-->

</script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-56494e294c0bee74" async="async"></script>
<?php wp_footer(); ?>

</body>
</html>