<?php
/**
 * Display Primary Menu
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return void
 *
 */
if ( !function_exists('lawyer_zone_primary_menu') ) :

	function lawyer_zone_primary_menu() {
		global $lawyer_zone_customizer_all_values;
		?>
        <div class="search-woo desktop-only">
			<?php
			$lawyer_zone_menu_right_button_link_options = $lawyer_zone_customizer_all_values['lawyer-zone-menu-right-button-options'];
			$lawyer_zone_button_title = $lawyer_zone_customizer_all_values['lawyer-zone-menu-right-button-title'];
			$lawyer_zone_button_link = $lawyer_zone_customizer_all_values['lawyer-zone-menu-right-button-link'];
			if( 'disable' != $lawyer_zone_menu_right_button_link_options ){
				$lawyer_zone_button_title = !empty( $lawyer_zone_button_title )?$lawyer_zone_button_title:esc_html__('Request a Quote','lawyer-zone');
				if( 'booking' == $lawyer_zone_menu_right_button_link_options ){
					?>
                    <a class="featured-button btn btn-primary hidden-xs hidden-sm hidden-xs" href="#" data-toggle="modal" data-target="#at-shortcode-bootstrap-modal"><?php echo esc_html( $lawyer_zone_button_title ); ?></a>
					<?php
				}
				else{
					?>
                    <a class="featured-button btn btn-primary hidden-xs hidden-sm hidden-xs" href="<?php echo esc_url( $lawyer_zone_button_link ); ?>"><?php echo esc_html( $lawyer_zone_button_title ); ?></a>
					<?php
				}
			}
			$lawyer_zone_enable_woo_cart = $lawyer_zone_customizer_all_values['lawyer-zone-enable-cart-icon'];

			if( 1 == $lawyer_zone_enable_woo_cart && class_exists( 'WooCommerce' ) ) {
				$cart_url = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : WC()->cart->get_cart_url();
				?>
                <div class="cart-wrap">
                    <div class="acme-cart-views">
                        <a href="<?php echo esc_url( $cart_url ); ?>" class="cart-contents">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="cart-value"><?php echo wp_kses_post ( WC()->cart->cart_contents_count ); ?></span>
                        </a>
                    </div>
					<?php the_widget( 'WC_Widget_Cart', '' ); ?>
                </div>
				<?php
			}
			?>
        </div>
		<div class="main-navigation navbar-collapse collapse">
			<?php
			if( is_front_page() && !is_home() && has_nav_menu( 'one-page') ){
				wp_nav_menu(
					array(
						'theme_location' => 'one-page',
						'menu_id' => 'primary-menu',
						'menu_class' => 'nav navbar-nav  acme-one-page',
						'container' => false,
					)
				);
			}
			else{
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id' => 'primary-menu',
						'menu_class' => 'nav navbar-nav  acme-normal-page',
						'container' => false
					)
				);
			}
			?>
		</div><!--/.nav-collapse -->
		<?php
	}
endif;