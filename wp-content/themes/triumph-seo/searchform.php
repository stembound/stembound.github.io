<form method="get" id="searchform" class="search-form" action="<?php echo esc_url( home_url() ); ?>" _lpchecked="1">
	<fieldset>
		<input type="text" name="s" id="s" value="<?php esc_attr_e('Search this site...','triumph-seo'); ?>" onblur="if (this.value == '') {this.value = '<?php esc_attr_e('Search this site...','triumph-seo'); ?>';}" onfocus="if (this.value == '<?php esc_attr_e('Search this site...','triumph-seo'); ?>') {this.value = '';}" >
		<input type="submit" value="<?php esc_attr_e( 'Search', 'triumph-seo' ); ?>" />
	</fieldset>
</form>
