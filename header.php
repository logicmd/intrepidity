<?php
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
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>
	<?php if (is_home()) echo("瑶池西望·紫气东来"); else { wp_title(''); echo(" - 瑶池西望·紫气东来");} ?>
</title>
<script language="Javascript"> 
var tit = document.title;
var c = 0;
function writetitle() {
if (document.all || document.getElementById) {
 document.title = tit.substring(0,c);
 if (c==tit.length) {
 c = 0;
 setTimeout("writetitle()", 400) // 
 }
 else {
 c++;
 setTimeout("writetitle()", 200) // 
 }
}
}
writetitle()
</script> 
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

<?php if (is_single()) {
    $custom_external = get_post_meta($post->ID, 'custom_external', true);
    if (!empty($custom_external)) { ?>
    		<!-- Custom external js/css library for this article -->
        <?php echo $custom_external; ?>
        <!-- Custom external js/css library for this article -->
    <?php }
} ?>
<link href="<?php bloginfo('template_url'); ?>/style.css?ver=20111214" type="text/css" rel="stylesheet" />
<?php if(isset($skin_dir)):?>
<link href="<?php bloginfo('template_url'); ?>/images/<?php echo $skin_dir?>/style.css" type="text/css" rel="stylesheet" />
<?php endif;?>
<!--[if gte IE 5.5]>
<style type="text/css">.post img, .page img, .customhtml img {width: expression(this.width > 505 ? 505: true) }</style>
<![endif]-->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/functions.js?ver=20101223"></script>
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
        

        
        <div id="container">
			<div id="container-shoulder">
            	<div id="left-col">