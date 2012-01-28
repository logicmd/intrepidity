<?php
/*
Template Name: cse
*/
global $wp_version;

$body_css = '';
$body_css .= (get_option('tbf1_background_image_file')) ? 'background-image:url('.get_option('tbf1_background_image_file'). ');' : '';
$body_css .= (get_option('tbf1_background_color')) ? 'background-color:'.get_option('tbf1_background_color'). ';' : '';
$body_css .= (get_option('tbf1_background_repeat')) ? 'background-repeat:'.get_option('tbf1_background_repeat'). ';' : '';

$body_css .= (get_option('tbf1_font_size')) ? 'font-size:'.get_option('tbf1_font_size'). ';' : '';

$skin_folders = array('silver'=>'skin-silver', 'red'=>'skin-red', 'green'=>'skin-green');

foreach($skin_folders as $key=>$value) {
	if(get_option('tbf1_skin_color') == $key) {
		$skin_dir = $value;
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" >
<title>
	<?php if (is_home()) echo("瑶池西望·紫气东来"); else { wp_title(''); echo(" - 瑶池西望·紫气东来");} ?>
</title>

<meta name="author" content="logicmd" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> 全部评论 RSS Feed" href="<?php bloginfo('comments_rss2_url'); ?>" />
<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/apple_touch_icon.png" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel='index' title="<?php bloginfo('name'); ?>" href="http://logicmd.net" /> 
<!--[if IE 6]>
	<script type="text/javascript" src="http://letskillie6.googlecode.com/svn/trunk/letskillie6.bilingual.pack.js"></script>
<![endif]-->
<!--[if IE]>
	<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php if (is_singular()) wp_enqueue_script('comment-reply'); ?>
<?php wp_head(); ?>

<link href="<?php bloginfo('template_url'); ?>/style.css?ver=20101104" type="text/css" rel="stylesheet" />
<?php if(isset($skin_dir)):?>
<link href="<?php bloginfo('template_url'); ?>/images/<?php echo $skin_dir?>/style.css?ver=20101104" type="text/css" rel="stylesheet" />
<?php endif;?>
<!--[if gte IE 5.5]>
<style type="text/css">.post img, .page img, .customhtml img {width: expression(this.width > 505 ? 505: true) }</style>
<![endif]-->
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.lazyload.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/superfish.js?ver=201010"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/functions.js?ver=20101104"></script>
</head>

<body <?php echo (version_compare($wp_version, '2.8', '>=')) ? body_class() : ''?> <?php echo ($body_css) ? 'style="'.$body_css. '"' : ''?>>
<div id="bg" <?php echo (get_option('tbf1_header_image_file')) ? 'style="background-image:url('.get_option('tbf1_header_image_file'). ')"' : ''?>>
    <div id="shadow">
     
        <div id="header">
          <h1 id="logo">
					<?php if (get_option('tbf1_logo_header') == "yes" && get_option('tbf1_logo')) { ?>
                    <a href="<?php bloginfo('url'); ?>/"><img src="<?php echo get_option('tbf1_logo'); ?>" title="<?php bloginfo('name'); ?> - 
					<?php bloginfo('description'); ?>" alt="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" /></a>
            <?php } else { //If no logo, show the blog title and tagline by default ?>
            	<a href="<?php bloginfo('url'); ?>" id="blogname" style="background:none;text-indent:0;width:auto"><span class="blod"><?php bloginfo('name'); ?></span><br /><?php bloginfo('description'); ?></a>
            <?php } ?>
          </h1>
        </div>
        
         <div id="globalnav">
        	<div id="navpocket">
              <ul id="nav"<?php echo (get_option('tbf1_search_header') == "no") ? ' class="nav-wide"' : '';?>>
                
                <?php if(get_option('tbf1_nav_hide_home') != 'yes') : ?>
                <li><a href="<?php echo get_option('home'); ?>" rel="nofollow"><?php _e('Home')?></a></li>
                <?php endif; ?>

				<!-- #Delete a line-->
				<li class="page_item page-item-33791"><a href="http://logicmd.net/guestbook/">留言板</a></li> 
				<li><a href="#Logs" rel="nofollow">各种志</a> 
					<ul class="children">
						<li class="page_item page-item-35659"><a href="http://logicmd.net/lifestreams/">流志</a></li> 
						<li class="page_item page-item-38217"><a href="http://logicmd.net/gallery/">图志</a></li> 
					</ul> 
				</li>
				<li><a href="#Tools" rel="nofollow">工具</a> 
					<ul class="children">	 
						<li><a href="#ToolsGoogleApps">Google Apps</a>
							<ul class="children">
								<li><a href="http://logicmd.net/mail" title="Google Apps Mail" rel="nofollow">Mail</a></li>
								<li><a href="http://logicmd.net/docs" title="Google Apps Document" rel="nofollow">Document</a></li>
								<li><a href="http://logicmd.net/calendar" title="Google Apps Calendar" rel="nofollow">Calendar</a></li>
								<li><a href="http://logicmd.net/sites" title="Google Apps Site" rel="nofollow">Site</a></li>
							</ul>
						</li>		 
						<li><a href="http://forms.logicmd.net/">表单系统</a></li>
					</ul>
				</li>
				<li><a href="#Projects" rel="nofollow">项目</a> 
					<ul class="children">	 
						<li><a href="http://logicmd.net/mcv" title="Managed Computer Vision" rel="nofollow">MCV</a></li>
					</ul>
				</li>  
                
                <?php /* Uncomment this if you want to show categories in the top navigation
				<li><a rel="nofollow" href="#"><?php _e("Topics"); ?></a>
                    <ul><?php wp_list_categories('title_li=&depth=4&orderby=name'); ?></ul>
                </li>*/?>
              </ul>
                <?php //Search box 
                    if(get_option('tbf1_search_header') == "yes" || (isset($_GET['preview']) && isset($_GET['template']))) : ?>
                    <?php include(TEMPLATEPATH.'/cseform.php'); ?>
                <?php endif; ?>
        	</div>
        </div>
       
				<ul id="socialize-icons">
					<?php if(get_option('tbf1_icon_rss') || isset($_GET['preview'])):?>
		            	<!--RSS html-->
		            	<li id="icon-rss"><a href="<?php echo (get_option('tbf1_icon_rss')) ? get_option('tbf1_icon_rss') : bloginfo('rss2_url')?>">RSS Feed</a></li>      	
		            <?php endif;?>
					<?php if(get_option('tbf1_icon_facebook') || isset($_GET['preview'])):?>
		            	<li id="icon-facebook"><a href="<?php echo (get_option('tbf1_icon_facebook')) ? get_option('tbf1_icon_facebook') : '#'?>" rel="nofollow" target="_blank">facebook</a></li>
		            <?php endif;?>
		            <?php if(get_option('tbf1_icon_twitter') || isset($_GET['preview'])):?>
						<li id="icon-twitter"><a href="<?php echo (get_option('tbf1_icon_twitter')) ? get_option('tbf1_icon_twitter') : '#'?>" rel="nofollow" target="_blank">twitter</a></li>
		            <?php endif;?>
				</ul>
	        
	      <div id="container" style="background:#ffffff">
					<div id="container-shoulder">
		            	<div id="left-col">
		            		<div class="page">
										<div id="cse" style="width:100%;">Loading...</div>
										<script src="http://www.google.com/jsapi" type="text/javascript"></script>
												<script type="text/javascript">
							  					google.load('search', '1', {language : 'zh-CN'});
							  					google.setOnLoadCallback(function(){
							    				var customSearchControl = new google.search.CustomSearchControl('015203579196546369521:ozevgolscfo');
							    				customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
							    				var options = new google.search.DrawOptions();
		    									options.setSearchFormRoot('cse-search-form');
		    
		    									options.setAutoComplete(true);
		   									 	customSearchControl.draw('cse', options);
							    				var match = location.search.match(/q=([^&]*)(&|$)/);
		        							if(match && match[1]){
		            							var search = decodeURIComponent(match[1]);
		            							customSearchControl.execute(search);
							    				}
							  				}, true);
										</script>
									</div><!--End page-->
						<div class="recover"></div>
		        </div><!--End left-col-->
		              
					  <!--begin sidebar-->
					  <div id="sidebar">
					  	<ul style="padding:30px 58px">
					  		<li>
					  	<script type="text/javascript"><!--
								google_ad_client = "ca-pub-7662151708523775";
								/* search-ad */
								google_ad_slot = "8422591526";
								google_ad_width = 120;
								google_ad_height = 600;
								//-->
								</script>
								<script type="text/javascript"
								src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
								</script>
							</li>
						</ul>
					  </div>
				  <!--end sidebar-->
		              
		              <div class="recover"></div>
					</div><!-- #container-shoulder -->
	      </div><!-- #Container-->
         
	      <div id="footer" <?php echo (get_option('tbf1_footer_image_file')) ? 'style="background:url('.get_option('tbf1_footer_image_file'). ') no-repeat"' : ''?>>
						<div class="footer-content">
	        	<div class="footer-widget">
	                <ul class="footerlinks">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Left") ) : ?>
	                    <li><strong>Footer Left Content</strong><br />To replace this, go to "Widgets" page and add your own widgets to "Footer Left".<br /><br />Suggested widgets are: Categories, Recent Comments, Banners, Ads, Promotional Links etc.</li>
						<?php endif; ?>	
					</ul>
	            </div>
	        	<div class="footer-widget">
	                <ul class="footerlinks">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Middle") ) : ?>
	                    <li><strong>Footer Middle Content</strong><br />To replace this, go to "Widgets" page and add your own widgets "Footer Middle".<br /><br />Suggested widgets are: Categories, Recent Comments, Banners, Ads, Promotional Links etc.</li>
						<?php endif; ?>	
					</ul>
	            </div>
	        	<div class="footer-widget">
	                <ul class="footerlinks">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Right") ) : ?>
	                    <li><strong>Footer Right Content</strong><br />To replace this, go to "Widgets" page and add your own widgets "Footer Right".<br /><br />Suggested widgets are: Categories, Recent Comments, Banners, Ads, Promotional Links etc.</li>
						<?php endif; ?>	
					</ul>
	            </div>
	       	  <div class="recover"></div>
	          </div>
		
	         <span id="copyright"><span class="alignleft"><?php _e('Copyright &copy; ')?>
			  			<script type="text/javascript">
				/* <![CDATA[ */
				printCopyrightYears(2009);
				/* ]]> */
	            </script>
	            <a href="http://logicmd.net" target="_blank"><?php echo bloginfo('site_name')?></a></span><span id="footer-tag"> | &nbsp;Powered by WordPress | &nbsp; Intrepidity theme modified by @logicmd | &nbsp;Hosted by laoxuehost</span> | &nbsp;
							<?php if(is_user_logged_in()):?>
								<a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php echo _e('Log Out') ?>"><?php echo _e('Log Out'); ?></a>
							<?php else:?>
								<a href="<?php echo bloginfo('url')?>/wp-login.php"><?php _e('Log In'); ?></a>
							<?php endif;?>
						</span>
				</div>  
	    	</div>    
    </div><!--End shadow-->
</div><!--End bg-->


<?php //Login Bar at the top 
		if(get_option('tbf1_user_login') == "yes") { ?>
		 <div id="login">
    <?php
		global $user_identity, $user_level;
		if (is_user_logged_in()) { ?>
            <ul>
                <li><span style="float:left;"><?php _e('Logged in as:')?> <strong><?php echo $user_identity ?></strong></span></li>
				<li><a href="<?php bloginfo('url'); ?>/wp-admin">Control Panel</a></li>
                <?php if ( $user_level >= 1 ) { ?>
                <li class="dot"><a href="<?php bloginfo('url') ?>/wp-admin/post-new.php">New Post</a></li>
                <li class="dot"><a href="<?php bloginfo('url') ?>/wp-admin/page-new.php">New Page</a></li>
                <li class="dot"><a href="<?php bloginfo('url') ?>/wp-admin/widgets.php">Widgets</a></li>
                <li class="dot"><a href="<?php bloginfo('url') ?>/wp-admin/admin.php?page=tbf-design.php">Theme Setting</a></li>
			<?php } ?>
                <li class="dot"><a href="<?php bloginfo('url') ?>/wp-admin/profile.php">Profile</a></li>
				<li class="dot"><a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log Out') ?>"><?php _e('Log Out'); ?></a></li>
             </ul>
            <?php 
		} else {
			echo '<ul>';
			echo '<li><a href="'; echo bloginfo("url"); echo '/wp-login.php">Log In</a></li>';
			if (get_option('users_can_register')) { ?>
				<li class="dot"><a href="<?php echo site_url('wp-login.php?action=register', 'login') ?>"><?php _e('Register') ?></a> </li>
                
            <?php 
			}
			echo "</ul>";
		} ?> 
    </div>
<?php } ?>
<?php wp_footer(); ?>
</body>
</html>