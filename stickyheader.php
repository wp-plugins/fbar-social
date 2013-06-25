<?php
global $wpdb;
$query = 'SELECT * FROM wp_socialinfo_table';
$rows = $wpdb ->get_results($query);
 foreach ($rows as $key=> $value) {
$display_mode = $value->display_mode;
$width = $newwidth=$value->width;
$color_scheme  = $value->color_scheme;
$border_color = $value->border_color;
$bar_distance=$value->bar_distance;
$facebook  = $value->facebook;
$twitter = $value->twitter;
$googleplus  = $value->googleplus;
$linkedin  = $value->linkedin;
$pinterest  = $value->pinterest;
$instagram  = $value->instagram;
$youtube  = $value->youtube;
$rss  = $value->rss;

$show_search  = $value->show_search;
$show_scroll  = $value->show_scroll;
$show_content_bar  = $value->show_content_bar;
$text_msg  = $value->text_msg;
$text_color= $value->txtcolor ;

$facebook_check   = $value->facebook_check ;
$twitter_check  = $value->twitter_check;
$google_check  = $value->google_check;
$show_logo  = $value->show_logo;
$upload_img  = $value->upload_img;

}
?>
<!----main part of plugin---->
<!----fbar social wordpress plugin by geckoandfly.com---->	
<div id="rs-header"><!--Starting Of Header-->
	
	<div id="headerfullwidth">
	
	<?php if($show_logo==1){ ?>
		
		<!--Starting Of -STICKY LOGO-->
		<div id="rs-stickylogo">
			<a href="<?php echo site_url();?>"><img src="<?php echo $upload_img;?>" width="175px" height="45px"></a>
		</div>
		<!--Ending  Of STICKY LOGO-->
	<?php } ?>
	
	
	<!--Starting Of socialicon-->
	<div class="rs-socialicon">
		<?php if($facebook!=''){ ?><a target="_blank" href="<?php echo $facebook;?>"><img src="<?php echo plugins_url()?>/fbar/images/f.png"></a><?php } ?>
		<?php if($twitter!=''){ ?><a target="_blank" href="<?php echo $twitter;?>"><img src="<?php echo plugins_url()?>/fbar/images/t.png"></a><?php } ?>
		<?php if($googleplus!=''){ ?><a  target="_blank" href="<?php echo $googleplus;?>"><img src="<?php echo plugins_url()?>/fbar/images/g1.png"></a><?php } ?>
		<?php if($linkedin!=''){ ?><a  target="_blank" href="<?php echo $linkedin;?>"><img src="<?php echo plugins_url()?>/fbar/images/l.png"></a><?php } ?>
		<?php if($pinterest!=''){ ?><a  target="_blank" href="<?php echo $pinterest;?>"><img src="<?php echo plugins_url()?>/fbar/images/p.png"></a><?php } ?>
		<?php if($instagram!=''){ ?><a  target="_blank" href="<?php echo $instagram;?>"><img src="<?php echo plugins_url()?>/fbar/images/i.png"></a><?php } ?>
		<?php if($youtube!=''){ ?><a  target="_blank" href="<?php echo $youtube;?>"><img src="<?php echo plugins_url()?>/fbar/images/y.png"></a><?php } ?>
		<?php if($rss!=''){ ?><a  target="_blank" href="<?php echo $rss;?>"><img src="<?php echo plugins_url()?>/fbar/images/r.png"></a><?php } ?>
	</div>
	<!--Ending  socialicon-->
	
	<div class="rs-checked-icon">
	
	<!--Starting Of FB count-->

	<?php if($facebook_check==1){ ?>

<div class="rs-socialbox"><iframe src="//www.facebook.com/plugins/like.php?href=<?php echo site_url();?>&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=196465447070972" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe></div>


	<?php } ?>
	<!--Ending Of FB count-->
	
	<!--Starting Of Twittter count-->
	<?php if($twitter_check==1){ ?>
		<div class="rs-socialbox rs-teste">
		<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a></div>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

	<?php } ?>

	<!--Ending  Of Twitter count-->
	
	
	<!--Starting Google plus Code -->
	<?php if($google_check==1){ ?>
	
		<link rel="canonical" href="<?php echo get_permalink(); ?>" />
		<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
		</script>
		<div class="rs-socialbox"><g:plusone size="medium"></g:plusone></div>

	<?php } ?>
	<!--End of google plus code-->
	
	</div>

	<!-- AddThis Button END -->
	<div class="rs-contentsearch">
	<?php
	if($show_content_bar==1){?>
		<div class="rs-content">
			<?php echo $text_msg;?>
		</div>
	<?php } 
	
	if($show_search==1){?>
		<div class="rs-seachdesign">

<div class="searchbox"><form id="searchform" action="<?php echo home_url( '/' ); ?>" method="get"><input id="fbs" class="field" type="text" placeholder="Search" name="s"></input></form></div>
		</div>
	<?php } 
	
	if($show_scroll==1){?>
	
		<div class="rs-topdown" id="rs-back-top">
		<a title="Back to top" href="#top"><img src="<?php echo plugins_url()?>/fbar/images/top.png"></a>
		</div>
		
	<?php } ?>

	</div>

	</div><!--End Of Fullwidthheader-->
</div><!--Ending  Of Header-->	
<!----fbar social wordpress plugin by geckoandfly.com---->	
	<!--------//setting design--------->
	<?php
	$file = dirname(__FILE__).'/headercss.php';
			include($file);
			
	?>
	<!--INCLUDING JAVASCRIPT FILE-->
	<?php
	$file_js = dirname(__FILE__).'/stickyheaderjavascript.js';
			include($file_js);
	?>