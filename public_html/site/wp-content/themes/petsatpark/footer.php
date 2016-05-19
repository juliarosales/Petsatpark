	</div>	
	</div>
</div>	
<!---END CONTENT--->	
<!---FOOTER--->
<div class="grass"></div>
<div class="footer">
	<div class="wrap">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div id="footer_logo">
				<?php if ( is_active_sidebar( 'default_footer_logo' ) ) : ?>
				<?php if ( is_page ('angels-reiky-therapy' ) ) : ?>
				<?php dynamic_sidebar( 'reiky_footer_logo' ); ?>
				<?php else : ?>
				<?php dynamic_sidebar( 'default_footer_logo' ); ?>
				<?php endif; ?>				
				<?php endif; ?>	
				</div>
				<div>								
				<?php if ( is_active_sidebar( 'column1' ) ) : ?>
				<?php dynamic_sidebar( 'column1' ); ?>
				<?php endif; ?>	
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<?php if ( is_active_sidebar( 'column2' ) ) : ?>
				<?php dynamic_sidebar( 'column2' ); ?>
				<?php endif; ?>	
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 xs-12">
				<?php if ( is_active_sidebar( 'column3' ) ) : ?>
				<?php dynamic_sidebar( 'column3' ); ?>
				<?php endif; ?>	
			</div>						
		</div>
	</div>			
</div>
<div class="copyright">
	<?php if ( is_active_sidebar( 'copyright' ) ) : ?>
	<?php dynamic_sidebar( 'copyright' ); ?>
	<?php endif; ?>	
</div>
<?php wp_footer(); ?>
	
<!---END FOOTER--->
</body>
</html>

