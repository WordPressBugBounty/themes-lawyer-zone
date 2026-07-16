<?php
/**
 * Adds Lawyer Zone Theme Widgets in SiteOrigin Pagebuilder Tabs
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return null
 *
 */
function lawyer_zone_siteorigin_widgets($widgets) {
    $theme_widgets = array(
        'Lawyer_Zone_About',
        'Lawyer_Zone_Accordion',
        'Lawyer_Zone_Posts_Col',
        'Lawyer_Zone_Contact',
	    'Lawyer_Zone_Gallery',
	    'Lawyer_Zone_Feature',
	    'Lawyer_Zone_Service',
        'Lawyer_Zone_Team',
        'Lawyer_Zone_Testimonial',
    );
    foreach($theme_widgets as $theme_widget) {
        if( isset( $widgets[$theme_widget] ) ) {
            $widgets[$theme_widget]['groups'] = array('lawyer-zone');
            $widgets[$theme_widget]['icon']   = 'dashicons dashicons-screenoptions';
        }
    }
    return $widgets;
}
add_filter('siteorigin_panels_widgets', 'lawyer_zone_siteorigin_widgets');

/**
 * Add a tab for the theme widgets in the page builder
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return null
 *
 */
function lawyer_zone_siteorigin_widgets_tab($tabs){
    $tabs[] = array(
        'title'  => esc_html__('AT Lawyer Zone Widgets', 'lawyer-zone'),
        'filter' => array(
            'groups' => array('lawyer-zone')
        )
    );
    return $tabs;
}
add_filter('siteorigin_panels_widget_dialog_tabs', 'lawyer_zone_siteorigin_widgets_tab', 20 );