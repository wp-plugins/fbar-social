<script>
jQuery(document).ready(function(){

	// hide #rs-back-top first
	jQuery("#rs-back-top").hide();
	
	// fade in #rs-back-top
	jQuery(function () {
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 100) {
				jQuery('#rs-back-top').fadeIn();
			} else {
				jQuery('#rs-back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		jQuery('#rs-back-top a').click(function () {
			jQuery('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});

</script>

<script type="text/javascript">
jQuery(function(){
       
		
		// hide #rs-header first
		jQuery("#rs-header").hide();
        windowWidth = jQuery(window).width();  
		
        jQuery(window).scroll(function(){
		
				var bardistance='<?php echo $bar_distance;?>';
				
                if( jQuery(window).scrollTop() > bardistance) {
						
						jQuery("#rs-header").show();
						
			
						<?php if($display_mode==1){ ?>
							mywidth=<?php echo $width;?>;
							if(windowWidth>mywidth){
							valwidth=(windowWidth-mywidth)/2;
	                        jQuery('#rs-header').css({position: 'fixed', top: '0px', left: valwidth+'px'});
							}
							else{
							jQuery('#rs-header').css({position: 'fixed', top: '0px'});
							}
					
						<?php 						
						}else{ ?>
							mywidth=<?php echo $newwidth;?>;
							jQuery('#rs-header').css({position: 'fixed', top: '0px',left:'0px'});
	                        jQuery('#headerfullwidth').css({'width' : mywidth+'px', 'margin-left' : 'auto','margin-right' : 'auto'});
						<?php } ?>
	
                }
				else{
				jQuery("#rs-header").hide();
				}		
        });
});
</script>