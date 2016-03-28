

                    <div id="videoid" style="margin-top:12px;">
					<video id="example" class="video-js vjs-default-skin vjs-big-play-centered" controls width="100%" height="100%">
					<?php $postid = $wp_query->post->ID; 
				$qualitythree = get_post_meta($postid, '360P', true); if( ! empty( $qualitythree ) ) {
				?>
		<source src="<?php echo $qualitythree; ?>" type="video/mp4" data-res="360" />
		<?php }  else {  }?>
		<?php $postid = $wp_query->post->ID; 
				$qualityseven = get_post_meta($postid, '720P', true); if( ! empty( $qualityseven ) ) {
				?>
		<source src="<?php echo $qualityseven; ?>" type="video/mp4" data-res="720" />
		<?php }  else {  }?>
		<?php $postid = $wp_query->post->ID; 
				$qualityten = get_post_meta($postid, '1080P', true); if( ! empty( $qualityten ) ) {
				?>
		<source src="<?php echo $qualityten; ?>" type="video/mp4" data-res="1080" />
		<?php }  else {  }?>
	</video>
					
					</div>
	
              <div class="clr"></div><!--Clear-->      
                    
                    
                    <div style="padding-bottom:10px; padding-top:10px;text-align: center;font-size: 12px;display:block;">
<center><p>If you want a better playback, please use Google Chrome to browse our site</p></center>
</div>
                    
                    
                    
                    <table class="serinfo">
                    <tbody>
                        
                        <tr>
                            <th>Added</th>
                            <td><p><?php the_time('F j, Y') ?></p></td>
                        </tr><tr>
                            <th>Hentai</th>
                            <td><?php the_category('<a>,</a>'); ?></td>
                        </tr><tr class="genss">
                            <th>Genre</th>
                        <td><?php  the_tags('','<a>,</a>','');  ?></td>
                        </tr><tr>
                            <th>Download</th>
                            <td>
							<?php $postid = $wp_query->post->ID; 
				$qualitythree = get_post_meta($postid, '360L', true); if( ! empty( $qualitythree ) ) {
				?>
					   <a href="<?php echo $qualitythree; ?>" target="_blank">360P</a><?php }  else {  }?>
					   
				<?php $postid = $wp_query->post->ID; 
				$qualityseven = get_post_meta($postid, '720L', true); if( ! empty( $qualityseven ) ) {
				?>
				<a>,</a><a href="<?php echo $qualityseven; ?>" target="_blank">720P</a><?php }  else {  }?>
                       
					   <?php $postid = $wp_query->post->ID; 
				$qualityten = get_post_meta($postid, '1080L', true); if( ! empty( $qualityten ) ) {
				?><a>,</a><a href="<?php echo $qualityten; ?>" target="_blank">1080P</a><?php }  else {  }?>
					   </td>
                        </tr>
						<tr>
                            <th>Viewer</th>
                            <td><?php echo getPostViews(get_the_ID()); ?></td>
                        </tr>
                        </tbody>
                    </table>
                    
                    
                    
               
                
<div class="clr"></div><!--Clear-->