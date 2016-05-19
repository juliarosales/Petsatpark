<!doctype html>
<html>
<head>

    <meta charset="utf-8">
   	<title>Pets at Park LLC</title>      
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap-->     
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
	<?php if(is_page("angels-reiky-therapy")) { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bootstrap/css/theme_reiky.css"  type="text/css" />
	<?php }?>
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>
<body>
<?php 
$postid = get_the_ID(); 
?>
<!---HEADER--->

<div class="navigation">
		<?php					
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container' => 'false',
					'menu_class' => '',
				)
			);
		?>	
</div>
<div class="header">	
	<div class="wrap">	
		<div class="logo">
			<?php if ( is_active_sidebar( 'logo' ) ) : ?>
			<?php if ( is_page ('angels-reiky-therapy' ) ) : ?>
			<?php dynamic_sidebar( 'logo_angels_reiky_therapy' ); ?>
			<?php else : ?>
			<?php dynamic_sidebar( 'logo' ); ?>
			<?php endif; ?>				
			<?php endif; ?>				
		</div>	
		<div class="appointment_banner hidden-xs">
			<?php if ( is_active_sidebar( 'appointment' ) ) : ?>
			<?php dynamic_sidebar( 'appointment' ); ?>
			<?php endif; ?>			
		</div>
                <?php if(! is_page('appointment-schedule')): ?>
                <div class="btn_appointment visible-xs">
                    <?php dynamic_sidebar( 'appointment_mobile' ); ?>
                </div>
                <?php endif; ?>
		<div class="clearfix"></div>			
	</div>	
</div>		

<div class="page_title">
	<div class="wrap">
		<div class="page_title_image"></div>
		<div class="page_title_text">
			<h1>
			<?php 
				if ( is_page ('home' ) )
				echo "Welcome to Pets at Park";
				else
				echo (is_child(13)) ? "Services" : get_the_title($postid);
			?>
			</h1>			
		</div>
		<div class="social_media">
		<?php
			if ( is_active_sidebar( 'social_media' ) ) : 
			dynamic_sidebar( 'social_media' ); 
			endif;	
		?>  		 		 	
		</div>			
	</div>	 		 	
</div>
<div class="shadow"></div>																							
<!---END HEADER--->
<!---CONTENT--->
<div class="wrap">
<div class="row">
<?php 
	if ( is_page ('home' ) )
		echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">';	
	else {
		get_sidebar();
		echo '<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">';
	}
?>