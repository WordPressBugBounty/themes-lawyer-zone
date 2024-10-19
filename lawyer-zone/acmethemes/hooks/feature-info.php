<?php
/**
 * Display Feature Columns
 * @since Lawyer Zone 1.0.0
 *
 * @return void
 *
 */
if ( !function_exists('lawyer_zone_feature_info') ) :
	function lawyer_zone_feature_info() {
		global $lawyer_zone_customizer_all_values;
		$lawyer_zone_feature_info_number = $lawyer_zone_customizer_all_values['lawyer-zone-feature-info-number'];
		echo '<div class="info-icon-box-wrapper">';
		$number = $lawyer_zone_feature_info_number;

		$lawyer_zone_basic_info_data = array();

		$lawyer_zone_first_info_icon = $lawyer_zone_customizer_all_values['lawyer-zone-first-info-icon'] ;
		$lawyer_zone_first_info_title = $lawyer_zone_customizer_all_values['lawyer-zone-first-info-title'];
		$lawyer_zone_first_info_desc = $lawyer_zone_customizer_all_values['lawyer-zone-first-info-desc'];
		$lawyer_zone_basic_info_data[] = array(
			"icon"  => $lawyer_zone_first_info_icon,
			"title" => $lawyer_zone_first_info_title,
			"desc"  => $lawyer_zone_first_info_desc
		);

		$lawyer_zone_second_info_icon = $lawyer_zone_customizer_all_values['lawyer-zone-second-info-icon'] ;
		$lawyer_zone_second_info_title = $lawyer_zone_customizer_all_values['lawyer-zone-second-info-title'];
		$lawyer_zone_second_info_desc = $lawyer_zone_customizer_all_values['lawyer-zone-second-info-desc'];
		$lawyer_zone_basic_info_data[] = array(
			"icon"  => $lawyer_zone_second_info_icon,
			"title" => $lawyer_zone_second_info_title,
			"desc"  => $lawyer_zone_second_info_desc
		);

		$lawyer_zone_third_info_icon = $lawyer_zone_customizer_all_values['lawyer-zone-third-info-icon'] ;
		$lawyer_zone_third_info_title = $lawyer_zone_customizer_all_values['lawyer-zone-third-info-title'];
		$lawyer_zone_third_info_desc = $lawyer_zone_customizer_all_values['lawyer-zone-third-info-desc'];
		$lawyer_zone_basic_info_data[] = array(
			"icon"  => $lawyer_zone_third_info_icon,
			"title" => $lawyer_zone_third_info_title,
			"desc"  => $lawyer_zone_third_info_desc
		);

		$lawyer_zone_forth_info_icon = $lawyer_zone_customizer_all_values['lawyer-zone-forth-info-icon'] ;
		$lawyer_zone_forth_info_title = $lawyer_zone_customizer_all_values['lawyer-zone-forth-info-title'];
		$lawyer_zone_forth_info_desc = $lawyer_zone_customizer_all_values['lawyer-zone-forth-info-desc'];
		$lawyer_zone_basic_info_data[] = array(
			"icon"  => $lawyer_zone_forth_info_icon,
			"title" => $lawyer_zone_forth_info_title,
			"desc"  => $lawyer_zone_forth_info_desc
		);

		$col = " init-animate zoomIn";

		$i=0;
		foreach ( $lawyer_zone_basic_info_data as $base_basic_info_data) {
			if( $i >= $number ){
				break;
			}
			?>
            <div class="info-icon-box <?php echo $col;?>">
				<?php
				if( !empty( $base_basic_info_data['icon'])){
					?>
                    <div class="info-icon">
                        <i class="fa <?php echo esc_attr( $base_basic_info_data['icon'] );?>"></i>
                    </div>
					<?php
				}
				if( !empty( $base_basic_info_data['title']) || !empty( $base_basic_info_data['desc']) ){
					?>
                    <div class="info-icon-details">
						<?php
						if( !empty( $base_basic_info_data['title']) ){
							echo '<h6 class="icon-title">'.esc_html( $base_basic_info_data['title'] ).'</h6>';
						}
						if( !empty( $base_basic_info_data['desc']) ){
							echo '<span class="icon-desc">'.wp_kses_post( $base_basic_info_data['desc'] ).'</span>';
						}
						?>
                    </div>
					<?php
				}
				?>
            </div>
			<?php
			$i++;
		}
		echo "</div>";/*.infowrapper*/
	}
endif;
add_action( 'lawyer_zone_action_feature_info', 'lawyer_zone_feature_info', 20 );