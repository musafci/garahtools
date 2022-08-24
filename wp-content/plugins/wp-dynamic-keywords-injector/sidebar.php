<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

<?php
	$current_user = wp_get_current_user();
	$user_id 	= $current_user->ID;
	$user_email = $current_user->user_email;
	$user_f_name = get_user_meta($user_id,'first_name',true);
	$user_l_name = get_user_meta($user_id,'last_name',true);

	if (empty($user_f_name) && empty($user_l_name)) {
		$user_f_name = $current_user->user_login;
	}

?>

<div class="wpdki-plug-sidebar-content">
	
	<h1><b>Try WPDKI PRO with more features</b></h1>
	<div class="srx-wpdki-plug-sidebar-main-section">
		<div class="srx-wpdki-trial-form">
			<form method="POST" id="srx_wpdki_trial_form">
				<div class="srx-wpdki-tf-n">
					<label>Name</label>
					<input type="text" name="wpdki_trial_f_name" placeholder="First" value="<?php echo $user_f_name;?>" class="wpdki_trial_f_name">
					<input type="text" name="wpdki_trial_l_name" placeholder="Last" value="<?php echo $user_l_name;?>" class="wpdki_trial_l_name">
				</div>
				<div class="srx-wpdki-tf-e">
					<label>Email</label>
					<input type="text" name="wpdki_trial_email" value="<?php echo $user_email;?>" class="wpdki_trial_email">
				</div>
				<div class="srx-wpdki-tf-w">
					<label>Website</label>
					<input type="text" name="wpdki_trial_website" value="<?php echo site_url();?>" class="wpdki_trial_website">
				</div>
				<div class="srx-wpdki-tf-s">
					<input type="submit" name="wpdki_trial_f_sub" class="srx-banner-button button button-primary" value="Start Free 14 Day Trial">
				</div>
			</form>
			<div class="srx-wpdki-tf-m" id="srx_wpdki_tf_m"></div>
		</div>
	</div>
	
	<h1><b>Need help for Using this?</b></h1>
	<h4 class="srx-tagline"><b>Click below to watch Guidelines for this plugin</b></h4>
	<div class="srx-wpdki-plug-sidebar-main-section">
		<div id="srxwpdkivideoStory" class="mfp-hide" style="max-width: 75%; margin: 0 auto;">
		<?php	echo '<button id="srx-close-btn" name="srx-close-btn" class="srx-close-btn-style"><img src="' . esc_url( plugins_url( '/images/close-white.png', __FILE__ ) ) . '" width="20" height="20" /></button>'; ?>
			<center>
				<iframe class="srx-video-wpdki" width="900" height="500" src="https://www.youtube.com/embed/4DMTdlvIisY?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</center>
			<input type="hidden" id="srx_ajax_popup_url" value="<?php echo admin_url('admin-ajax.php'); ?>">
		</div>
		<?php 
		echo '<a href="https://wpdki.com/free-version-demonstration/" target="_blank"><img src="' . esc_url( plugins_url( '/images/banner-new-one.png', __FILE__ ) ) . '" alt="sidebar" width="100%" height="auto"></a> ';
		
		$popup_exist = get_option( 'srx_popup_open' );

		if(isset($_GET['page']) && ($_GET['page'] == 'seerox_wpdki_settings') && ($popup_exist == false)){
	  	?>
			<script>
				jQuery.magnificPopup.open({
				  items: {src: '#srxwpdkivideoStory'},
				  type: 'inline',
				  closeOnContentClick : false,
				  closeOnBgClick: false,
				}, 0);
			</script>
		<?php
			// add_option( 'srx_popup_open', true, );
  		}
		?>

	</div>
	<!-- old sidebar menu -->
	<h1><b>WP Dynamic Keywords Injector PRO</b></h1>
	<div class="srx-wpdki-plug-sidebar-main-section">
		<ul>
			<p>WPDKI Pro Launching Soon with following awesome features</p>
			<li class="srx-wpdki-plug-sidebar-widget-c-li">
				<strong>Unlimited Landing Pages</strong>
			</li>
			<li class="srx-wpdki-plug-sidebar-widget-c-li">
				<strong>Unlimited Multiple Sub Keywords</strong>
			</li>
			<li class="srx-wpdki-plug-sidebar-widget-c-li">
				<strong>Interface to Manage Keywords </strong>
			</li>
			<li class="srx-wpdki-plug-sidebar-widget-c-li">
				<strong>Perfect Quality Scores</strong>
			</li>
			<li class="srx-wpdki-plug-sidebar-widget-c-li">
				<strong>Dynamic Images</strong>
			</li>
			<li class="srx-wpdki-plug-sidebar-widget-c-li">
				<strong>Dynamic Videos</strong>
			</li>
			<li class="srx-wpdki-plug-sidebar-widget-c-li">
				<strong>Dynamic Spintax</strong>
			</li>
			<li class="srx-wpdki-plug-sidebar-widget-c-li">
				<strong>Keyword Groups</strong>
			</li>
			<li class="srx-wpdki-plug-sidebar-widget-c-li">
				<strong>HTML enabled Keyword Fields</strong>
			</li>
			<li class="srx-wpdki-plug-sidebar-widget-c-li">
				<strong>IFrame Support</strong>
			</li>
			<li class="srx-wpdki-plug-sidebar-widget-c-li">
				<strong>WP Shortcodes Support</strong>
			</li>
			<li class="srx-wpdki-plug-sidebar-widget-c-li">
				<strong>Generate Dynamic Links</strong>
			</li>
			<li class="srx-wpdki-plug-sidebar-widget-c-li">
				<strong>Download all possible Links</strong>
			</li>
			<li class="srx-wpdki-plug-sidebar-widget-c-li">
				<strong>Import and Export Keywords</strong>
			</li>
			<li class="srx-wpdki-plug-sidebar-widget-c-li">
				<strong>Relevant Posts Links list ShortCode</strong>
			</li>
			<li class="srx-wpdki-plug-sidebar-widget-c-li">
				<strong>Relevant Random Post Link ShortCode</strong>
			</li>
			<br>
			<a href="https://wpdki.com/14-days-free-trial/" target="_blank"><button class="srx-banner-button button button-primary">Free 14 Days Pro Upgrade</button></a>
		</ul>
	</div>
</div>
<script>
jQuery(document).ready(function(){
  	jQuery("#srx-close-btn").click(function(){
    	jQuery.magnificPopup.close();
    	var ajaxurl = jQuery('#srx_ajax_popup_url').val();
    	jQuery.ajax({ 
      		type: "post",
      		data:{
            	action:'srx_add_popup_option',
    		},
    		url: ajaxurl,

    		success:function(result){
    			console.log(result);
    		},
    		error:function(error){
    			console.log(error);
    		}
    	});
  	});

  	
});
</script>
<style type="text/css">
.srx-video-wpdki{
	border: 15px solid white;
}
.srx-close-btn-style{
	background-color: transparent !important;
	border: none;
	cursor: pointer;
	float: right;
}
.white-popup {
  position: relative;
  background: #FFF;
  padding: 20px;
  width: auto;
  max-width: 500px;
  margin: 20px auto;
}
.srx-tagline{
	margin-top: 7px !important;
}
/*end*/
.srx-wpdki-plug-sidebar-main-section{
	font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
}
.srx-wpdki-plug-sidebar-widget-c-li{
	color: #3c434a;
	font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
	font-size: 13px;
	line-height: 1.4em;
}
.srx-wpdki-plug-sidebar-widget-c-li strong{
	margin-left: -3px;
}
.srx-banner-button:focus {
  	box-shadow: 0 0 0 1px #fff,0 0 0 3px #fec228 !important;
}
.srx-banner-button{
	width: 100%;
	font-size: 19px !important;
	background-color: #fec228 !important;
	border: none !important;
	color: black !important;
	box-shadow: inset 0 -4px 0 rgba(0,0,0,.2);
	height: ;
	padding-bottom: 5px !important;
}
.srx-wpdki-plug-sidebar-main-section{
    box-shadow: 0 1px 6px 0 rgba(0,0,0,.3);
    border: 1px solid #dcdcdc;
    background-color: #fff;
    padding: 16px;
    margin: 20px 15px 20px;
    margin-left: 0px;
    margin-right: 0px;
}
.srx-wpdki-plug-sidebar-widget-c-li {
    padding: 0 8px 0 20px;
}
.srx-wpdki-plug-sidebar-widget-c-li:before {
    position: relative;
    left: -16px;
    margin-right: -10px;
    font-weight: 700;
    content: "+";
    top: -1px;
}

.wpdki-plug-sidebar-content {
    padding: 10px;
}
.wpdki-plug-sidebar-content .content {
    position: relative;
    text-align: center;
}
.srx-wpdki-plug-sidebar-main-section ul li{
    list-style: none !important;
}
.srx-wpdki-trial-form .srx-wpdki-tf-w label,
.srx-wpdki-trial-form .srx-wpdki-tf-e label,
.srx-wpdki-trial-form .srx-wpdki-tf-n label {
    display: block;
    font-size: 11px;
    font-weight: bold;
}
.srx-wpdki-trial-form .srx-wpdki-tf-n input {
    display: inline-block;
    width: 134px;
}
.srx-wpdki-trial-form .srx-wpdki-tf-w,
.srx-wpdki-trial-form .srx-wpdki-tf-e,
.srx-wpdki-trial-form .srx-wpdki-tf-n {
    margin-bottom: 10px;
}
.srx-wpdki-trial-form .srx-wpdki-tf-w input,
.srx-wpdki-trial-form .srx-wpdki-tf-e input {
    width: 100%;
}
.srx-wpdki-trial-form .srx-wpdki-tf-s input {
    font-size: 16px !important;
    min-height: unset !important;
    line-height: 32px !important;
    margin-top: 10px !important;
    padding: 0 !important;
}
div#srx_wpdki_tf_m {
    text-align: center;
    margin-top: 1em;
    font-size: 15px;
    font-weight: bold;
}
</style>