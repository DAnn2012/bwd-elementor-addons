<?php
namespace BWDEBCreativeElementorBundle;
define( "BWDEB_ASFSK_ASSETS_ADMIN_DIR_FILE",  plugin_dir_url( __FILE__ ) . "assets/admin" );

class BWDEBClassElementorBundle {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function bwdeb_admin_editor_scripts() {
		wp_enqueue_script( 'bwdeb_the_contact_form_editor', plugin_dir_url( __FILE__ ) . 'assets/public/js/empty-dummy.js', array(), '3.2.8', true );
		wp_script_add_data( 'bwdeb_the_contact_form_editor', 'type', 'module' );
	}

	private function include_widgets_files() {
		$widgetFileNames = ['team-bwdeb', 'bwdeb-teamcarousel-widget', 'bwdeb_testimonial', 'bwdeb-creative-buttons', 'bwdeb-accordion', 'bwdeb-masking', 'bwdeb-service', 'bwdeb-Promo-Box', 'bwdeb-service-flip-box', 'bwdeb-step-flip-box', 'bwdeb-team-flip-box', 'bwdeb-list', 'bwdeb-heading', 'bwdeb-iconbox', 'dual-button', 'bwdeb-fancy-heading', 'bwdeb-animated-heading', 'bwdeb-animatedlink', 'bwdeb-step', 'bwdeb-blockquote', 'bwdeb-businesshours', 'bwdeb-calltoaction', 'bwdeb-clickcall-widget', 'bwdeb-count-down', 'bwdeb-counter', 'bwdeb-coupon-code', 'bwdeb-filterable', 'bwdeb-imageaccordion', 'bwdeb-compare', 'bwdeb-imagehover', 'bwdeb-image-scroll', 'bwdeb-image-shape', 'bwdeb-imageswap', 'bwdeb-price', 'bwdeb-progressBar', 'bwdeb-timeline', 'bwdeb-social-icon', 'bwdeb-tabs', 'bwdeb-webinar-info', 'header_bwdeb', 'bwdeb-photoStack', 'bwdeb-imageStack', 'bwdeb-ihover-widgets', 'bwdeb-video-popup-widget', 'bwdeb-profile-card', 'back_to_top', 'bwdeb-masking-video', 'bwdeb-logo-carousel-widget', 'bwdeb-logo-grid-widget', 'bwdeb-logo-filter-widget', 'bwdeb-mflag-masking', 'bwdeb-authorbio', 'bwdeb-creativeTable', 'bwdeb-preloader-widget', 'unique-social-share-widget', 'greatest-breadcrumb-widget', 'bwdeb-switchBackground-widgets', 'bwdeb-circle-info-widgets', 'bwdeb-catproduct-widget', 'bwdeb-flipbox', 'bwdeb-button-widget', 'bwdeb-unfoldcontent', 'codentor-template', 'bwdeb-slider-widget', 'bwdeb-the-post-timeline', 'bwdeb-content-switcher', 'post-grid-w', 'bwdeb-accordion2', 'bwdeb-imageaccordion2', 'bwdeb-blog-post', 'post-tiles-w', 'bwdeb-newsticker-widgets', 'post-masonary', 'bwdeb-products', 'bwdeb-imageaccordion3', 'bwdeb-products2', 'bwdeb-product-widgets', 'bwdeb-products3', 'bwdeb-accordion3', 'bwdeb-catproduct-widget2', 'bwdeb-products4', 'bwdeb-product-widgets2', 'bwdeb-products5', 'bwdeb-catproduct-widget3', 'woocommerce-products-timeline', 'bwdadt-creativeTable'];
		foreach($widgetFileNames as $widget){
			require_once( __DIR__ . '/widgets/'.$widget.'.php' );
		}
	}

	public function bwdeb_register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();
		// Register Widgets
		$bwdeb_pp_meet_the_team = get_option( 'bwdeb-plugin-meet-the-team', 'off' );
    if ( $bwdeb_pp_meet_the_team == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_MTTMeetTheTeam() );
		}
		$bwdeb_pp_team_carousel = get_option( 'bwdeb-plugin-team-carousel', 'off' );
    if ( $bwdeb_pp_team_carousel == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDTMCTeamcarousel() );
		}
		$bwdeb_pp_testimonials = get_option( 'bwdeb-plugin-testimonials', 'off' );
    if ( $bwdeb_pp_testimonials == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_TBTTheBestTestimonials() );
		}
		$bwdeb_pp_creative_button = get_option( 'bwdeb-plugin-creative-button', 'off' );
    if ( $bwdeb_pp_creative_button == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_CBTNSCreativeButtons() );
		}
		$bwdeb_pp_accordion = get_option( 'bwdeb-plugin-accordion', 'off' );
    if ( $bwdeb_pp_accordion == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDACAccordionCreatoR() );
		}
		$bwdeb_pp_masking_effect = get_option( 'bwdeb-plugin-masking-effect', 'off' );
    if ( $bwdeb_pp_masking_effect == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDMEmasking() );
		}
		$bwdeb_pp_service_showcase = get_option( 'bwdeb-plugin-service-showcase', 'off' );
    if ( $bwdeb_pp_service_showcase == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDSSService() );
		}
		$bwdeb_pp_promo_box = get_option( 'bwdeb-plugin-promo-box', 'off' );
    if ( $bwdeb_pp_promo_box == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdeeo_promobox() );
		}
		$bwdeb_pp_service_flip_box = get_option( 'bwdeb-plugin-service-flip-box', 'off' );
    if ( $bwdeb_pp_service_flip_box == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDServiceFlipBox() );
		}
		$bwdeb_pp_step_flip_box = get_option( 'bwdeb-plugin-step-flip-box', 'off' );
    if ( $bwdeb_pp_step_flip_box == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDStepFlipBox() );
		}
		$bwdeb_pp_team_flip_box = get_option( 'bwdeb-plugin-team-flip-box', 'off' );
    if ( $bwdeb_pp_team_flip_box == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDTeamFlipBox() );
		}
		$bwdeb_pp_creative_list = get_option( 'bwdeb-plugin-creative-list', 'off' );
    if ( $bwdeb_pp_creative_list == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdblBundleList() );
		}
		$bwdeb_pp_dual_heading = get_option( 'bwdeb-plugin-dual-heading', 'off' );
    if ( $bwdeb_pp_dual_heading == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDDHHeading() );
		}
		$bwdeb_pp_icon_box = get_option( 'bwdeb-plugin-icon-box', 'off' );
    if ( $bwdeb_pp_icon_box == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDIBIconbox() );
		}
		$bwdeb_pp_dual_button = get_option( 'bwdeb-plugin-dual-button', 'off' );
    if ( $bwdeb_pp_dual_button == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDDBDualButtons() );
		}
		$bwdeb_pp_fancy_heading = get_option( 'bwdeb-plugin-fancy-heading', 'off' );
    if ( $bwdeb_pp_fancy_heading == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDSTfancyheading() );
		}
		$bwdeb_pp_animated_heading = get_option( 'bwdeb-plugin-animated-heading', 'off' );
    if ( $bwdeb_pp_animated_heading == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDAHAnimatedHeadingWidget() );
		}
		$bwdeb_pp_animated_link = get_option( 'bwdeb-plugin-animated-link', 'off' );
    if ( $bwdeb_pp_animated_link == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdalAnimatedLink() );
		}
		$bwdeb_pp_awesome_step = get_option( 'bwdeb-plugin-awesome-step', 'off' );
    if ( $bwdeb_pp_awesome_step == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDASAwesomeStep() );
		}
		$bwdeb_pp_blockquote = get_option( 'bwdeb-plugin-blockquote', 'off' );
    if ( $bwdeb_pp_blockquote == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdbkBlockquote() );
		}
		$bwdeb_pp_business_hours = get_option( 'bwdeb-plugin-business-hours', 'off' );
    if ( $bwdeb_pp_business_hours == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdbhBusinessHours() );
		}
		$bwdeb_pp_call_to_action = get_option( 'bwdeb-plugin-call-to-action', 'off' );
    if ( $bwdeb_pp_call_to_action == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDCTACallToAction() );
		}
		$bwdeb_pp_click_to_contact = get_option( 'bwdeb-plugin-click-to-contact', 'off' );
    if ( $bwdeb_pp_click_to_contact == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdctcclickcall_widgets() );
		}
		$bwdeb_pp_countdown = get_option( 'bwdeb-plugin-countdown', 'off' );
    if ( $bwdeb_pp_countdown == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdcdCountDownWidget() );
		}
		$bwdeb_pp_counter = get_option( 'bwdeb-plugin-counter', 'off' );
    if ( $bwdeb_pp_counter == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDCCounterWidget() );
		}
		$bwdeb_pp_coupon_code = get_option( 'bwdeb-plugin-coupon-code', 'off' );
    if ( $bwdeb_pp_coupon_code == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDCODCouponCode() );
		}
		$bwdeb_pp_filterable_gallery = get_option( 'bwdeb-plugin-filterable-gallery', 'off' );
    if ( $bwdeb_pp_filterable_gallery == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDFGfilterable() );
		}
		$bwdeb_pp_image_accordion = get_option( 'bwdeb-plugin-image-accordion', 'off' );
    if ( $bwdeb_pp_image_accordion == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdiaImageAccordion() );
		}
		$bwdeb_pp_image_compare = get_option( 'bwdeb-plugin-image-compare', 'off' );
    if ( $bwdeb_pp_image_compare == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDMEcompare() );
		}
		$bwdeb_pp_image_hover_effect = get_option( 'bwdeb-plugin-image-hover-effect', 'off' );
    if ( $bwdeb_pp_image_hover_effect == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDhbhimageHover() );
		}
		$bwdeb_pp_image_scroll = get_option( 'bwdeb-plugin-image-scroll', 'off' );
    if ( $bwdeb_pp_image_scroll == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdiscrImageScroll() );
		}
		$bwdeb_pp_image_shape = get_option( 'bwdeb-plugin-image-shape', 'off' );
    if ( $bwdeb_pp_image_shape == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDIMimageshape() );
		}
		$bwdeb_pp_image_swap = get_option( 'bwdeb-plugin-image-swap', 'off' );
    if ( $bwdeb_pp_image_swap == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdisimageSwap() );
		}
		$bwdeb_pp_pricing_table = get_option( 'bwdeb-plugin-pricing-table', 'off' );
    if ( $bwdeb_pp_pricing_table == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDPTPricingTable() );
		}
		$bwdeb_pp_progress_bar = get_option( 'bwdeb-plugin-progress-bar', 'off' );
    if ( $bwdeb_pp_progress_bar == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDPBProgressBarWidget() );
		}
		$bwdeb_pp_timeline = get_option( 'bwdeb-plugin-timeline', 'off' );
    if ( $bwdeb_pp_timeline == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDTLTimelineWidget() );
		}
		$bwdeb_pp_social_icon = get_option( 'bwdeb-plugin-social-icon', 'off' );
    if ( $bwdeb_pp_social_icon == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDSIsocialicon() );
		}
		$bwdeb_pp_creative_tab = get_option( 'bwdeb-plugin-creative-tab', 'off' );
    if ( $bwdeb_pp_creative_tab == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDTZTabs() );
		}
		$bwdeb_pp_webinar_info = get_option( 'bwdeb-plugin-webinar-info', 'off' );
    if ( $bwdeb_pp_webinar_info == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdWIwebinarinfo() );
		}
		$bwdeb_pp_unique_headers = get_option( 'bwdeb-plugin-unique-headers', 'off' );
    if ( $bwdeb_pp_unique_headers == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_THFTheHeader() );
		}
		$bwdeb_pp_photo_stack = get_option( 'bwdeb-plugin-photo-stack', 'off' );
    if ( $bwdeb_pp_photo_stack == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdps_photostack() );
		}
		$bwdeb_pp_image_stack_group = get_option( 'bwdeb-plugin-image-stack-group', 'off' );
    if ( $bwdeb_pp_image_stack_group == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdis_imagestack() );
		}
		$bwdeb_pp_ihover = get_option( 'bwdeb-plugin-ihover', 'off' );
    if ( $bwdeb_pp_ihover == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_wppih_iHover_widgets() );
		}
		$bwdeb_pp_video_popup = get_option( 'bwdeb-plugin-video-popup', 'off' );
    if ( $bwdeb_pp_video_popup == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDVPVideoPopupWidget() );
		}
		$bwdeb_pp_profile_card = get_option( 'bwdeb-plugin-profile-card', 'off' );
    if ( $bwdeb_pp_profile_card == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDPCProfileCard() );
		}
		$bwdeb_pp_back_to_top = get_option( 'bwdeb-plugin-back-to-top', 'off' );
    if ( $bwdeb_pp_back_to_top == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDBTTBackToTop() );
		}
		$bwdeb_pp_masking_video = get_option( 'bwdeb-plugin-masking-video', 'off' );
    if ( $bwdeb_pp_masking_video == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDMVMaskingVideoWidget() );
		}
		$bwdeb_pp_logo_carousel = get_option( 'bwdeb-plugin-logo-carousel', 'off' );
    if ( $bwdeb_pp_logo_carousel == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDLCLogoCarousel() );
		}
		
		$bwdeb_pp_logo_grid = get_option( 'bwdeb-plugin-logo-grid', 'off' );
    if ( $bwdeb_pp_logo_grid == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDLCLogoGrid() );
		}
		$bwdeb_pp_logo_filter = get_option( 'bwdeb-plugin-logo-filter', 'off' );
    if ( $bwdeb_pp_logo_filter == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDLCLogoFilter() );
		}
		$bwdeb_pp_map_masking = get_option( 'bwdeb-plugin-map-masking', 'off' );
    if ( $bwdeb_pp_map_masking == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDMFMasking() );
		}
		$bwdeb_pp_author_bio = get_option( 'bwdeb-plugin-author-bio', 'off' );
    if ( $bwdeb_pp_author_bio == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdabAuthorBio() );
		}
		$bwdeb_pp_data_table = get_option( 'bwdeb-plugin-data-table', 'off' );
    if ( $bwdeb_pp_data_table == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdct_creativetable() );
		}
		// First 
		$bwdeb_pp_effective_pre_loader = get_option( 'bwdeb-plugin-effective-pre-loader', 'off' );
    if ( $bwdeb_pp_effective_pre_loader == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_EPREL_Effective_widgets() );
		}
		$bwdeb_pp_social_share = get_option( 'bwdeb-plugin-social-share', 'off' );
    if ( $bwdeb_pp_social_share == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_USShareWidget() );
		}
		$bwdeb_pp_breadcrumb = get_option( 'bwdeb-plugin-breadcrumb', 'off' );
    if ( $bwdeb_pp_breadcrumb == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_GRSTBCMBreadcrumBWidget() );
		}
		$bwdeb_pp_background_switcher = get_option( 'bwdeb-plugin-background-switcher', 'off' );
    if ( $bwdeb_pp_background_switcher == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdsb_switchbackground_widgets() );
		}
		// Secound 
		$bwdeb_pp_unfold = get_option( 'bwdeb-plugin-unfold', 'off' );
    if ( $bwdeb_pp_unfold == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdufUnfoldcontent() );
		}
		$bwdeb_pp_code_highlighter = get_option( 'bwdeb-plugin-code-highlighter', 'off' );
    if ( $bwdeb_pp_code_highlighter == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_CodEntor_Code_Widgete() );
		}
		$bwdeb_pp_post_slider = get_option( 'bwdeb-plugin-single-post-slider', 'off' );
    if ( $bwdeb_pp_post_slider == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_TEPSThe_Effective_Post_Slider_widgets() );
		}
		$bwdeb_pp_post_timeline = get_option( 'bwdeb-plugin-post-timeline', 'off' );
    if ( $bwdeb_pp_post_timeline == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_THEPSTTMLNTimelineWidget() );
		}
		$bwdeb_pp_circle_info = get_option( 'bwdeb-plugin-circle-info', 'off' );
    if ( $bwdeb_pp_circle_info == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdci_circle_info_widgets() );
		}
		$bwdeb_pp_product_category_carousel = get_option( 'bwdeb-plugin-product-category-carousel', 'off' );
    if ( $bwdeb_pp_product_category_carousel == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdcpcatproduct_widgets() );
		}
		$bwdeb_pp_bwd_flip_box_carousel = get_option( 'bwdeb-plugin-flip-box-carousel', 'off' );
    if ( $bwdeb_pp_bwd_flip_box_carousel == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdfbFlipBox() );
		}
		$bwdeb_pp_dual_button = get_option( 'bwdeb-plugin-info-download-button', 'off' );
    if ( $bwdeb_pp_dual_button == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdidbbuttonwidgets() );
		}
		// Post Widget
		$bwdeb_pp_post_grid = get_option( 'bwdeb-plugin-post-grid', 'off' );
    if ( $bwdeb_pp_post_grid == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDBPBlog() );
		}
		$bwdeb_pp_post_accordion = get_option( 'bwdeb-plugin-post-accordion', 'off' );
    if ( $bwdeb_pp_post_accordion == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BPACCDNAccordionCreatoR() );
		}
		$bwdeb_pp_post_image_accordion = get_option( 'bwdeb-plugin-post-image-accordion', 'off' );
    if ( $bwdeb_pp_post_image_accordion == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bpiacrdnImageAccordion() );
		}
		$bwdeb_pp_post_list = get_option( 'bwdeb-plugin-post-list', 'off' );
    if ( $bwdeb_pp_post_list == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDBPLBlog() );
		}
		$bwdeb_pp_post_tiles = get_option( 'bwdeb-plugin-post-tiles', 'off' );
    if ( $bwdeb_pp_post_tiles == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BPTLS_Post_Tiles() );
		}
		$bwdeb_pp_news_ticker = get_option( 'bwdeb-plugin-news-ticker', 'off' );
    if ( $bwdeb_pp_news_ticker == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_ptnticker_newsticker_widgets() );
		}
		$bwdeb_pp_masonary_blog_post = get_option( 'bwdeb-plugin-masonary-blog-post', 'off' );
    if ( $bwdeb_pp_masonary_blog_post == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_MBPOST_Post_Masonry() );
		}
		// Woocommerce Product
		$bwdeb_pp_product_grid = get_option( 'bwdeb-plugin-product-grid', 'off' );
    if ( $bwdeb_pp_product_grid == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_CRTPProducts() );
		}
		$bwdeb_pp_product_image_accordion = get_option( 'bwdeb-plugin-product-image-accordion', 'off' );
    if ( $bwdeb_pp_product_image_accordion == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_woociapImageAccordion() );
		}
		$bwdeb_pp_product_tiles = get_option( 'bwdeb-plugin-featured-product', 'off' );
    if ( $bwdeb_pp_product_tiles == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_WOOFPTProducts() );
		}
		$bwdeb_pp_related_product = get_option( 'bwdeb-plugin-related-product', 'off' );
    if ( $bwdeb_pp_related_product == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_woocrp_product_widgets() );
		}
		$bwdeb_pp_product_timeline = get_option( 'bwdeb-plugin-product-tiles', 'off' );
    if ( $bwdeb_pp_product_timeline == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_WOOCPTProducts() );
		}
		$bwdeb_pp_product_accordion = get_option( 'bwdeb-plugin-product-accordion', 'off' );
    if ( $bwdeb_pp_product_accordion == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_WOOCPAAccordionCreatoR() );
		}
		$bwdeb_pp_product_category_tiles = get_option( 'bwdeb-plugin-product-category-tiles', 'off' );
    if ( $bwdeb_pp_product_category_tiles == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_woocptcCATproduct_TILES() );
		}
		$bwdeb_pp_product_list = get_option( 'bwdeb-plugin-product-list', 'off' );
    if ( $bwdeb_pp_product_list == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_CRTPLSTProductsList() );
		}
		$bwdeb_pp_product_carousel = get_option( 'bwdeb-plugin-product-carousel', 'off' );
    if ( $bwdeb_pp_product_carousel == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_wppgpc_product_widgets() );
		}
		$bwdeb_pp_product_list_carousel = get_option( 'bwdeb-plugin-product-list-carousel', 'off' );
    if ( $bwdeb_pp_product_list_carousel == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDCRTPLSTProductsListcarousel() );
		}
		$bwdeb_pp_product_category_grid = get_option( 'bwdeb-plugin-product-category-grid', 'off' );
    if ( $bwdeb_pp_product_category_grid == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_thecpgcatproduct_widgets() );
		}
		$bwdeb_pp_product_timeline = get_option( 'bwdeb-plugin-product-timeline', 'off' );
    if ( $bwdeb_pp_product_timeline == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_WOOCPTMLNProductsTimelineWidget() );
		}
		$bwdeb_pp_content_switcher = get_option( 'bwdeb-plugin-content-switcher', 'off' );
    if ( $bwdeb_pp_content_switcher == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_BWDCSContentSwitcher() );
		}
		// For new  widgets  10Dec2023
		if ( get_option( 'bwdeb-plugin-ajax-data-table', 'off' ) == 'on' ) {
			\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdadt_creativetable() );
		}
	}
	
	// Register Category
	function bwdeb_add_elementor_widget_categories( $elements_manager ) {
		$elements_manager->add_category(
			'bwdeb_general_category',
			[
				'title' => esc_html__( 'BWD General Group', 'bwd-elementor-addons' ),
				'icon' => 'eicon-person',
			]
		);
		$elements_manager->add_category(
			'bwdeb_post_category',
			[
				'title' => esc_html__( 'BWD Post Group', 'bwd-elementor-addons' ),
				'icon' => 'eicon-person',
			]
		);
		$elements_manager->add_category(
			'bwdeb_woocommerce_category',
			[
				'title' => esc_html__( 'BWD Woocommerce Group', 'bwd-elementor-addons' ),
				'icon' => 'eicon-person',
			]
		);
	}
	public function bwdeb_all_assets_for_the_public(){
		$script_paths = ['bwdeb.carousel.min3','prodlist-caro','main','testimonial','tmowl.carousel.min','imagesloaded.pkgd.min','isotope.pkgd.min','snake','min','bwdeb-main','bwdeb-custom','clicktocontact','countdown','counter','coupon','filterable-popup','filterable-gallery','imgcompare','progressbar','timeline','webinar','header','search_main','bwdeb-owl.carousel.min','team-carousel','video-popup','profile-card','bwdeb-bttop','masking-video','bwdeb-swiper','bwdeb-main2','author-bio','bwdeb-main3','bwdeb-owl.carousel.min4','bwdeb-main4','bwdeb.carousel.min2','bwdeb-product','bwdeb-main5','bwdeb.carousel.min3','woopgridcaro','bwdeb.carousel.min4','bwdeb.carousel.min5','bwdeb-caro','product-timeline','bwdeb_main','bwdeb-loader','bwdeb-loader.min','bwdeb-loader-extra-transition','bwdeb-loader-extra-transition.min','bwdeb-main7','bwdeb-owl.carousel.min3','bwdeb-main8','bwdeb-owl.carousel.min2','bwdeb-unfold-content','codentor-prism-toolbar','codentor-prism','bwdeb-main9','bwdeb-swiper-bundle.min','bwdeb-custom2','tab','bwdeb_min','datatables','responsive', 'ajax-DataTable/datatables.min', 'ajax-DataTable/dataTables.responsive.min', 'ajax-DataTable/main'];
		foreach($script_paths as $filepath){
			wp_enqueue_script( 'bwdcssk-content-'.$filepath, plugin_dir_url( __FILE__ ) . 'assets/public/js/'.$filepath.'.js', array('jquery'), '3.2.8', true );
		}
		$stylefile = ['bwdeb-caro','bwdeb.carousel.min4','bwdeb.theme.default.min4','tbt_main','tmowl.carousel.min','tmowl.theme.default.min','codentor-css/prism-default', 'codentor-css/prism-coy', 'codentor-css/prism-dark','bwdeb-main3','codentor-css/prism-funky', 'codentor-css/prism-okaidia', 'codentor-css/prism-solarized-light', 'codentor-css/solarized-dark-atom', 'codentor-css/prism-tomorrow-night', 'codentor-css/prism-twilight', 'codentor-css/prism-toolbar', 'codentor-css/cold-dark', 'codentor-css/colddark-dark', 'codentor-css/z-touch', 'codentor-css/zonokai-theme', 'codentor-css/vs-theme', 'codentor-css/nord-theme', 'codentor-css/holy-theme', 'codentor-css/laserwave-theme', 'codentor-css/lucario-theme', 'codentor-css/night-owl', 'codentor-css/atom-dark', 'codentor-css/dracula-theme', 'codentor-css/duotone-forest', 'codentor-css/duotone-dark', 'codentor-css/duotone-earth', 'codentor-css/duotone-light', 'codentor-css/duotone-sea', 'codentor-css/duotone-space', 'codentor-css/gruvbox-dark', 'codentor-css/gruvbox-light', 'codentor-css/ghcolors-theme', 'codentor-css/pojoaque', 'codentor-css/shades-of-purple', 'codentor-css/synthwave', 'codentor-css/a11y-dark-theme', 'codentor-css/material-dark', 'codentor-css/material-light', 'codentor-css/material-oceanic', 'bwdeb_style', 'bwdeb-main', 'bwdeb-animate.min', 'bwdeb-main2', 'bwdeb-owl.carousel.min', 'bwdeb-owl.theme.default.min', 'bwdeb-owl.carousel.min2', 'bwdeb-owl.theme.default.min2', 'bwdeb-style', 'bwdeb-unfold-content', 'info-downld-btn-animate.min', 'info-downld-btn-style', 'bwdeb-main4', 'bwdeb-swiper-bundle.min', 'bwdeb-style2', 'bwdeb-loader', 'bwdeb-loader.min', 'bwdeb_style2', 'bwdeb_style3', 'bwdeb_main', 'bootstrap.min', 'bwdeb-team-main', 'bwdeb_main','bwdeb.theme.default.min', 'bwdeb-main8', 'creative-buttons', 'bwdeb-masking', 'style', 'flip-style', 'creative-list-style', 'bwdeb-heading', 'icon-box-style', 'dual-buttons', 'main', 'swiper-bundle.min', 'animate.min', 'animated-heading-style', 'animated-link', 'step-style', 'blockquote', 'businesshours', 'calltoaction', 'countdown', 'counter', 'coupon', 'filterable-gallery-popup', 'filterable-gallery', 'imgaccordion', 'imgcompare', 'clicktocontact', 'imagehover', 'imgscroll', 'image-shape', 'imgswap', 'price-table', 'progressbar', 'timeline', 'social-icon', 'tab', 'webinar', 'search_style', 'header_social_icon', 'header-top', 'header', 'owl.carousel.min', 'owl.theme.default.min', 'photo-stack', 'imsgroup', 'ihover', 'video-popup', 'profile-card', 'bwdeb-team-main2', 'bwdeb-bttop', 'masking-video', 'bwdeb-swiper', 'bwdeb-masking2', 'author-bio', 'fancy-heading', 'data-table', 'bwdeb-main6', 'post-image-accordion', 'post-list', 'post-tiles', 'post-grid','bwdeb-style3', 'bwdeb-owl.carousel.min3', 'post-masonary', 'bwdeb_css', 'bwdeb-imgaccordion', 'bwdeb_css2', 'bwdeb.carousel.min3', 'bwdeb.theme.default.min3', 'bwdeb-product', 'bwdeb_css3', 'bwdeb-tilescat', 'product-list', 'bwdeb.carousel.min4', 'bwdeb.theme.default.min4', 'wooprogridcaro', 'bwdeb-caro', 'bwdeb.carousel.min5', 'bwdeb.theme.default.min5', 'wprodcatgrid', 'bwdeb-main7', 'product-timeline', 'cmn', 'ajax-DataTable/datatables.min', 'ajax-DataTable/main', 'ajax-DataTable/responsive.dataTables.min'];
		foreach($stylefile as $filepath){
			wp_enqueue_style( 'bwdeb-'.$filepath, plugin_dir_url( __FILE__ ) . 'assets/public/css/'.$filepath.'.css', null, '3.2.8', 'all' );
		}
		wp_enqueue_style( 'bwdeb-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', null, '6.5.0', 'all' );
	}
	public function bwdeb_all_assets_for_elementor_editor_admin(){
		$all_css_js_file = array(
			'admin-icon-style' => array('bwdeb_path_admin_define'=>BWDEB_ASFSK_ASSETS_ADMIN_DIR_FILE . '/css/icon.css'),
		);
		foreach($all_css_js_file as $handle => $fileinfo){
      wp_enqueue_style( $handle, $fileinfo['bwdeb_path_admin_define'], null, '3.2.8', 'all');
		}
	}

	public function bwdeb_all_assets_for_dashboard_admin(){
		$adCsAss = ['css/admin-basic', 'dashboard/style'];
		foreach($adCsAss as $pathCs){
			wp_enqueue_style( 'bwdeb-'.$pathCs,  plugin_dir_url( __FILE__ ) . 'assets/admin/'.$pathCs.'.css', null, '3.2.8', 'all' );
		}
		$adJsAss = ['dashboard/main', 'dashboard/widgets-cnt', 'js/checkbox-status'];
		foreach($adJsAss as $pathJs){
			wp_enqueue_script( 'bwdeb-'.$pathJs,  plugin_dir_url( __FILE__ ) . 'assets/admin/'.$pathJs.'.js', ['jquery'], '3.2.8', true );
		}
	}

	public function bwdeb_admin_menu_test(){
		if(current_user_can('manage_options')){
			$icon_url = plugins_url('bwd-elementor-addons/assets/admin/logo-header.png');
			add_menu_page(
				esc_html__('BWD Elementor Addons', 'bwd-elementor-addons'),
				esc_html__('BWD Elementor Addons', 'bwd-elementor-addons'),
				'manage_options',
				'bwdeb-plugin-main-menu',
				array($this, 'bwdeb_plugin_settings_page'),
				$icon_url,
				25
			);
			add_submenu_page(
				'bwdeb-plugin-main-menu',
				esc_html__('BWD Elementor Addons Submenu', 'bwd-elementor-addons'),
				esc_html__('Get Support', 'bwd-elementor-addons'),
				'manage_options',
				'get-support',
				array($this, 'bwdeb_plugin_submenu_about_plugin_page')
			);
		}
    add_action('admin_init', array($this, 'bwdeb_admin_controls'));
	}
  	public function bwdeb_admin_controls() {
		include 'includes/dashboard.php';
  	}
	public function bwdeb_plugin_settings_page() {
		include 'includes/dashboard_style.php';
  	}
	public function bwdeb_plugin_submenu_about_plugin_page() {
		include 'includes/get-support.php';
  	}
	public function bwdeb_plugin_function_for_datas_callback() {}

	public function bwdeb_plugin_settings_to_whitelist( $options ) {
		$options['bwdeb-plugin-settings'] = ['bwdeb-plugin-meet-the-team','bwdeb-plugin-testimonials','bwdeb-plugin-creative-button','bwdeb-plugin-accordion','bwdeb-plugin-masking-effect','bwdeb-plugin-service-showcase','bwdeb-plugin-promo-box','bwdeb-plugin-service-flip-box','bwdeb-plugin-flip-box-carousel','bwdeb-plugin-step-flip-box','bwdeb-plugin-team-flip-box','bwdeb-plugin-map-masking','bwdeb-plugin-creative-list','bwdeb-plugin-dual-heading','bwdeb-plugin-back-to-top','bwdeb-plugin-call-to-action','bwdeb-plugin-icon-box','bwdeb-plugin-dual-button','bwdeb-plugin-honeycombs','bwdeb-plugin-awesome-step','bwdeb-plugin-counter','bwdeb-plugin-image-hover-effect','bwdeb-plugin-countdown','bwdeb-plugin-animated-heading','bwdeb-plugin-filterable-gallery','bwdeb-plugin-pricing-table','bwdeb-plugin-social-icon','bwdeb-plugin-creative-tab','bwdeb-plugin-author-bio','bwdeb-plugin-animated-link','bwdeb-plugin-business-hours','bwdeb-plugin-image-shape','bwdeb-plugin-fancy-heading','bwdeb-plugin-progress-bar','bwdeb-plugin-image-accordion','bwdeb-plugin-image-compare','bwdeb-plugin-timeline','bwdeb-plugin-blockquote','bwdeb-plugin-video-popup','bwdeb-plugin-image-stack-group','bwdeb-plugin-masking-video','bwdeb-plugin-image-swap','bwdeb-plugin-profile-card','bwdeb-plugin-photo-stack','bwdeb-plugin-image-scroll','bwdeb-plugin-ihover','bwdeb-plugin-webinar-info','bwdeb-plugin-circle-info','bwdeb-plugin-coupon-code','bwdeb-plugin-unique-headers','bwdeb-plugin-click-to-contact','bwdeb-plugin-popup','bwdeb-plugin-data-table','bwdeb-plugin-advanced-slider','bwdeb-plugin-slide-anything','bwdeb-plugin-contact-form-7-styler','bwdeb-plugin-image-hotspot','bwdeb-plugin-logo-carousel','bwdeb-plugin-logo-grid','bwdeb-plugin-logo-filter','bwdeb-plugin-team-carousel','bwdeb-plugin-unfold','bwdeb-plugin-code-highlighter','bwdeb-plugin-lottie-animation','bwdeb-plugin-breadcrumb','bwdeb-plugin-brand-logo-showcase','bwdeb-plugin-info-download-button','bwdeb-plugin-effective-pre-loader','bwdeb-plugin-bar-chart','bwdeb-plugin-social-share','bwdeb-plugin-background-switcher','bwdeb-plugin-lord-icon','bwdeb-plugin-ajax-data-table','bwdeb-plugin-cart-flipper','bwdeb-plugin-con-swi-pls','bwdeb-plugin-img-rev-widg','bwdeb-plugin-img-unfold-kit','bwdeb-plugin-modern-feature-list','bwdeb-plugin-offcanvasmagic','bwdeb-plugin-privacy-content-locker','bwdeb-plugin-viewpdf','bwdeb-plugin-progress-master-kit','bwdeb-plugin-restaurant-price-menu','bwdeb-plugin-sales-promotion-offer','bwdeb-plugin-profile-showcas','bwdeb-product-features-w','bwdeb-plugin-tooltip-mastery','bwdeb-employee-profile-identity','bwdeb-horizontal-timeline-slider','bwdeb-threesixty-rotation-view','bwdeb-widget-template','bwdeb-pssx','bwdeb-blmx1','bwdeb-blmx2','bwdeb-blmx3','bwdeb-svpx','bwdeb-txsx','bwdeb-vsix','bwdeb-plugin-cv-builder','bwdeb-plugin-cv-about','bwdeb-plugin-cv-contact','bwdeb-plugin-cv-education','bwdeb-plugin-cv-experience','bwdeb-plugin-cv-footer','bwdeb-plugin-cv-header','bwdeb-plugin-cv-hobby','bwdeb-plugin-cv-language','bwdeb-plugin-cv-reference','bwdeb-plugin-cv-skill','bwdeb-check-hero-widget1','bwdeb-check-hero-widget2','bwdeb-check-hero-widget3','bwdeb-check-hero-widget4','bwdeb-check-hero-widget5','bwdeb-check-hero-widget6','bwdeb-check-hero-widget7','bwdeb-check-hero-widget8','bwdeb-check-hero-widget9','bwdeb-check-hero-widget10','bwdeb-check-hero-widget11','bwdeb-check-hero-widget12','bwdeb-check-hero-widget13','bwdeb-plugin-post-grid','bwdeb-plugin-post-list','bwdeb-plugin-post-tiles','bwdeb-plugin-post-accordion','bwdeb-plugin-post-timeline','bwdeb-plugin-masonary-blog-post','bwdeb-plugin-post-image-accordion','bwdeb-plugin-single-post-slider','bwdeb-plugin-news-ticker','bwdeb-plugin-creative-post-carousel','bwdeb-post-prestige-portfolio','bwdeb-apostst','bwdeb-plugin-product-grid','bwdeb-plugin-product-list','bwdeb-plugin-product-tiles','bwdeb-plugin-product-carousel','bwdeb-plugin-product-category-grid','bwdeb-plugin-product-category-tiles','bwdeb-plugin-product-accordion','bwdeb-plugin-product-image-accordion','bwdeb-plugin-product-list-carousel','bwdeb-plugin-product-timeline','bwdeb-plugin-content-switcher','bwdeb-plugin-related-product','bwdeb-plugin-product-category-carousel','bwdeb-plugin-featured-product','bwdeb-plugin-product-compare','bwdeb-plugin-woo-cat-gallery','bwdeb-plugin-woop-multi-action','bwdeb-plugin-woop-wish-cont','bwdeb-woop-vendors','bwdeb-twpx','bwdeb-extn-tooltip','bwdeb-extn-link','bwdeb-extn-protctn','bwdeb-csstrnsm','bwdeb-flanime','bwdeb-duplicate','bwdeb-3d-text','bwdeb-notation','bwdeb-confetti-effects','bwdeb-cursor-effects','bwdeb-reveal-effects','bwdeb-tile-scroll','bwdeb-section-sticky','bwdeb-scroll-box','bwdeb-background-particles','bwdeb-xd-copy','bwdeb-custom-jscss','bwdeb-section-parallax','bwdeb-gra-anim-bg','bwdeb-backdrop-filter','bwdeb-line-grid','bwdeb-cursor-img-parallax','bwdeb-live-copy'];
		return $options;
	}

	public function __construct() {
		add_filter( 'whitelist_options', [$this,'bwdeb_plugin_settings_to_whitelist'] );
		add_action('admin_menu', [$this,'bwdeb_admin_menu_test']);
		if (isset($_GET['page']) && $_GET['page'] === 'bwdeb-plugin-main-menu' || 'get-support') {
			add_action('admin_enqueue_scripts', [$this, 'bwdeb_all_assets_for_dashboard_admin']);
		}
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'bwdeb_all_assets_for_elementor_editor_admin']);
		add_action( 'elementor/elements/categories_registered', [ $this, 'bwdeb_add_elementor_widget_categories' ] );
		// Load the hook after pro plugin is loaded
		add_action( 'after_setup_theme', function() {
			// Check if the pro plugin activated
			if ( !class_exists( 'ProbwdelementorBundle' ) ) {
				add_action('wp_enqueue_scripts', [$this, 'bwdeb_all_assets_for_the_public']);
				add_action( 'elementor/widgets/register', [ $this, 'bwdeb_register_widgets' ] );
			}
		});
		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'bwdeb_admin_editor_scripts' ] );
	}
}
// Instantiate Plugin Class
BWDEBClassElementorBundle::instance();