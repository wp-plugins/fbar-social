<!-- the .wrap-class is required by WP to style the h2 like others in the admin (again, WP ftw!) -->

<section id="social plugin" class="wrap" >

<!-- this ludacris display is how WP renders an icon -->

<div id="icon-themes" class="icon32"><br></div>

<form method="post" action="<?php echo site_url();?>/wp-admin/admin.php?page=slugesetting">
<?php
if(count($name_data)):
foreach($name_data as $data):
$id=$data['id'];
$display_mode=$data['display_mode'];
$width =$data['width'];
$bar_distance = $data['bar_distance'];
$color_scheme = $data['color_scheme'];
$border_color = $data['border_color'];
$show_scroll  = $data['show_scroll'];
$show_search  = $data['show_search'];
$facebook = $data['facebook'];
$twitter = $data['twitter'];
$googleplus = $data['googleplus'];
$linkedin = $data['linkedin'];
$pinterest = $data['pinterest'];
$instagram = $data['instagram'];
$youtube = $data['youtube'];
$rss = $data['rss'];
$show_content_bar = $data['show_content_bar'];
$text_msg = $data['text_msg'];
$text_color = $data['txtcolor'];
$facebook_check = $data['facebook_check'];
$twitter_check = $data['twitter_check'];
$google_check = $data['google_check'];
$show_logo = $data['show_logo'];
$upload_img  = $data['upload_img'];
endforeach; 
endif;
?>
<h2>FBar Social Settings</h2>
<p>A magical bar that appears when scrolled down at a specific height, not anonying and amazingly helpful in reducing bounce rate with the search bar, and increase social engagement with the social bar.</p>
<p>Visit 'FBar Social' author's blog at <a href="http://www.geckoandfly.com">www.geckoandfly.com</a></p>
<p>If you find this free wordpress plugin - FBar Social awesome, do blog about it. It means alot to us, thanks!</p>

<div class="rs-wrap">
<div class="rs-genaral">
General Settings
</div>
<div class="rs-settingContent">
<table border="0">

<tr><td><p><label>Display Mode:</td>
<td>
<input type="radio" name="display_mode" id="fixedwidth" value="1"<?php if(isset($display_mode)&&($display_mode)=='1') echo "checked"; ?>>Fixed Width
&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="display_mode" id="fullwidth" value="2"<?php if(isset($display_mode)&&($display_mode)=='2') echo "checked"; ?>>Full Width</td>
</label></p></tr>

<tr><td><p><label>Enter FBar Social content's width for fixed and full:<br/>(If possible, follow the width of your theme's content <br/>so that it fits nicely on an iPad and other tablets)</td>
<td><input type="text" name="width" id="pixelwidth" value="<?php echo $width; ?>">in pixel</td>
</label></p></tr>

<tr><td><p><label>Distance to make your FBar Social magically appear and sticky, <br/>meaning it’ll stick to the same spot in the viewport<br/>as your users scroll down your page.</td>
<td><input type="text" name="distance"  value="<?php echo $bar_distance;?>">in pixel</td>
</label></p></tr>


<tr><td><p><label>Bar Background Color:</td>
<td><input type="text" name="scheme" value="<?php echo $color_scheme; ?>" class="minicolors"></td>
</label></p></tr>


<tr><td><p><label>Color for 1px Border at Bottom of FBar:</td>
<td><input type="text" name="border" class="minicolors" value="<?php echo $border_color ?>" ></td>
</label></p></tr>
</table>
</div>

<div class="clear"></div>

<div class="clear">
<div class="rs-genaral">
Display Settings
</div>
<div class="rs-settingContent">
<table border="0">
<tr><td><p><label>
Upload Logo image</td>

<td colspan="2"><input type="checkbox" name="logo" value="1"<?php if(isset($show_logo)&&($show_logo)=='1') echo "checked"; ?>> Show Logo On The Bar(175x45px):</td></tr>
<tr><td><input id="mediaprojectid" type="text" size="36" name="mediafile" value="<?php echo $upload_img;?>" /></td>

<td><input type="button" value="Upload Image" class="media_upload_image_button" /></label></p></td></tr>

<!--Commented For FUTURE OPtions DO NOT REMOVE THIS-->
<tr><td><p><label>
<!--Show Content On The Bar:--></td>

<td><input type="hidden" name="content" value="1"<?php //if(isset($show_content_bar)&&($show_content_bar)=='1') echo "checked"; ?>><!--Text Message-->
<!--<input type="hidden" name="content" value="2"<?php //if(isset($show_content_bar)&&($show_content_bar)=='2') echo "checked"; ?>><!---Custom--></br><label></td></tr>

<!--Commented For FUTURE OPtions DO NOT REMOVE THIS-->

<tr><td>Text Message (add links, custom codes and etc):</td><td><textarea name="msg" rows="5" cols="40"><?php echo$text_msg; ?></textarea></td>
<tr><td>Text Color:</td><td><input type="text" name="txtcolor" class="minicolors" value="<?php echo $text_color; ?>" ></td>


</p>
<tr><td><p><label>
Scroll to Top button:</td>
<td><input type="checkbox" name="scroll" value="1"<?php if(isset($show_scroll)&&($show_scroll)=='1') echo "checked"; ?>>Check it to show scroll to top button</td>
</label></p></tr>

<tr><td><p><label>
Search Box:</td>
<td><input type="checkbox" name="search" value="1"<?php if(isset($show_search)&&($show_search)=='1') echo "checked"; ?>>Check it to show search form</td>
</label></p></tr>
</table>
</div>
<div class="clear"></div>
<div class="rs-genaral">
Social Network Profile
</div>
<div class="rs-settingContent">
<table border="0">
<td>Facebook Page</td><td><input type="text" size="100" name="fb" value="<?php echo $facebook ?>"/></br></td><tr>
<tr><td>Twitter Profile</td><td><input type="text" size="100" name="twi" value="<?php echo $twitter ?>"/></br></td><tr>
<tr><td>Google+ Page</td><td><input type="text" size="100" name="goo" value="<?php echo $googleplus ?>"/></br></td></tr>
<tr><td>Linkedin</td><td><input type="text" size="100" name="lin" value="<?php echo $linkedin ?>"/></br></td></tr>
<tr><td>Pinterest</td><td><input type="text" size="100" name="pin" value="<?php echo $pinterest ?>"/></br></td></tr>
<tr><td>Instagram</td><td><input type="text" size="100" name="ins" value="<?php echo $instagram ?>"/></br></td></tr>
<tr><td>YouTube</td><td><input type="text" size="100" name="you" value="<?php echo $youtube ?>"/></br></td></tr>
<tr><td>RSS</td><td><input type="text" size="100" name="rss" value="<?php echo $rss ?>"/></br></td></tr>
</label></p>
</table>
</div>
<div class="clear"></div>
<div class="rs-genaral">
Social Network Sharing (Add additional buttons via the 'Text Message' feature above)
</div>

<div class="rs-settingContent">
<table border="0">
<tr><td>Facebook Like Button (Doesn't work well with cache):</td>
<td><input type="checkbox" name="fb_check" value="1"<?php if(isset($facebook_check)&&($facebook_check)=='1') echo "checked"; ?>>Check it to show facebook like button</br></td></tr>
<tr><td>Twitter Button:</td>
<td><input type="checkbox" name="twi_check" value="1"<?php if(isset($twitter_check)&&($twitter_check)=='1') echo "checked"; ?>>Check it to show Twitter share</br></td></tr>
<tr><td>Google+ Button: </td>
<td><input type="checkbox" name="plus_check" value="1"<?php if(isset($google_check)&&($google_check)=='1') echo "checked"; ?>>Check it to show G+ share</br></td></tr>
</label></p>
</table>
</div>
<div class="clear"></div>
<p>

<input type="hidden" name="social_insert_data" value="1">
<input type="hidden" name="social_update_id" value="<?php echo $id;?>">
<input type="submit" value="Save Settings" class="n-button">
</p>
</div>
</form>
</div>
<br/><br/><br/><br/>
<h2>Geckoandfly</h2>
<p>Please Support by Liking Our Facebook Page, Thanks</p>
<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FGeckoandfly%2F229390020415207&amp;width=730&amp;height=590&amp;show_faces=true&amp;colorscheme=light&amp;stream=true&amp;show_border=true&amp;header=true&amp;appId=196465447070972" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:730px; height:590px;" allowTransparency="true"></iframe>

<script language="JavaScript">
        jQuery(document).ready(function() {
           
            jQuery('.media_upload_image_button').click(function() {
                
                tb_show('Media Upload', 'media-upload.php?type=image&TB_iframe=true');
                return false;
            });

            window.send_to_editor = function(html) {
                imgurl = jQuery('img',html).attr('src');
                //alert(imgid);
                jQuery('#mediaprojectid').val(imgurl);
                tb_remove();
            }

        });
    </script>
 <script>

        jQuery(document).ready( function() {
            
            var consoleTimeout;
            
            jQuery('.minicolors').each( function() {
                //
                // Dear reader, it's actually much easier than this to initialize 
                // miniColors. For example:
                //
                //  jQuery(selector).minicolors();
                //
                // The way I've done it below is just to make it easier for me 
                // when developing the plugin. It keeps me sane, but it may not 
                // have the same effect on you!
                //
                jQuery(this).minicolors({
                    control: jQuery(this).attr('data-control') || 'hue',
                    defaultValue: jQuery(this).attr('data-default-value') || '',
                    inline: jQuery(this).hasClass('inline'),
                    letterCase: jQuery(this).hasClass('uppercase') ? 'uppercase' : 'lowercase',
                    opacity: jQuery(this).hasClass('opacity'),
                    position: jQuery(this).attr('data-position') || 'default',
                    styles: jQuery(this).attr('data-style') || '',
                    swatchPosition: jQuery(this).attr('data-swatch-position') || 'left',
                    textfield: !jQuery(this).hasClass('no-textfield'),
                    theme: jQuery(this).attr('data-theme') || 'default',
                    change: function(hex, opacity) {

                        // Generate text to show in console
                        text = hex ? hex : 'transparent';
                        if( opacity ) text += ', ' + opacity;
                        text += ' / ' + jQuery(this).minicolors('rgbaString');
                        
                        // Show text in console; disappear after a few seconds
                      
                        
                    }
                });
                
            });
            
        });
        
    </script>
	
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('#fullwidth').click(function(){
	jQuery('#pixelwidth').val("1200");
		
	});
	jQuery('#fixedwidth').click(function(){
	jQuery('#pixelwidth').removeAttr("disabled");
	jQuery('#pixelwidth').val("980");
	
	});
});

</script>