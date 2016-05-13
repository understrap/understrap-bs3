<?php
/**
 * The template for displaying search forms in Underscores.me
 *
 * @package understrap-bs3
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="s" class="assistive-text"><?php _e( 'Search', 'understrap-bs3' ); ?></label>
		<div class="input-group">
			<input type="text" class="field form-control" name="s" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'understrap-bs3' ); ?>" />
			<span class="input-group-btn">
				<input type="submit" class="submit btn btn-primary" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'understrap-bs3' ); ?>" />
			</span>
		</div>
	</form>
