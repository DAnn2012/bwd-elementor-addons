<?php
namespace BWDEBCreativeElementorBundle\PageSettings;

use Elementor\Controls_Manager;
use Elementor\Core\DocumentTypes\PageBase;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class Page_Settings {

	const PANEL_TAB = 'new-tab';

	public function __construct() {
		add_action( 'elementor/init', [ $this, 'bwdeb_elementor_bundle_add_panel_tab' ] );
		add_action( 'elementor/documents/register_controls', [ $this, 'bwdeb_elementor_bundle_register_controls' ] );
	}

	public function bwdeb_elementor_bundle_add_panel_tab() {
		Controls_Manager::add_tab( self::PANEL_TAB, esc_html__( 'BWD Elementor Addons', 'bwd-elementor-addons' ) );
	}

	public function bwdeb_elementor_bundle_register_controls( $document ) {
		if ( ! $document instanceof PageBase || ! $document::get_property( 'has_elements' ) ) {
			return;
		}

		$document->start_controls_section(
			'bwdeb_elementor_bundle_new_section',
			[
				'label' => esc_html__( 'Settings', 'bwd-elementor-addons' ),
				'tab' => self::PANEL_TAB,
			]
		);

		$document->add_control(
			'bwdeb_elementor_bundle_text',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Title', 'bwd-elementor-addons' ),
			]
		);

		$document->end_controls_section();
	}
}
