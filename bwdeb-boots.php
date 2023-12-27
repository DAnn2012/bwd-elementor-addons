<?php
namespace BWDEBCreativeElementorBundle;

use BWDEBCreativeElementorBundle\PageSettings\Page_Settings;
define( "BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE",  plugin_dir_url( __FILE__ ) . "assets/public" );
define( "BWDEB_ASFSK_ASSETS_PUBLIC_CSS",  plugin_dir_url( __FILE__ ) . "assets/public/css/" );
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
		wp_enqueue_script( 'bwdeb_the_contact_form_editor', plugin_dir_url( __FILE__ ) . 'assets/public/js/empty-dummy.js', array(), '1.3.6', true );
		wp_script_add_data( 'bwdeb_the_contact_form_editor', 'type', 'module' );
	}

	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/team-bwdeb.php' );
		require_once( __DIR__ . '/widgets/bwdeb-teamcarousel-widget.php' );
		require_once( __DIR__ . '/widgets/bwdeb_testimonial.php' );
		require_once( __DIR__ . '/widgets/bwdeb-creative-buttons.php' );
		require_once( __DIR__ . '/widgets/bwdeb-accordion.php' );
		require_once( __DIR__ . '/widgets/bwdeb-masking.php' );
		require_once( __DIR__ . '/widgets/bwdeb-service.php' );
		require_once( __DIR__ . '/widgets/bwdeb-Promo-Box.php' );
		require_once( __DIR__ . '/widgets/bwdeb-service-flip-box.php' );
		require_once( __DIR__ . '/widgets/bwdeb-step-flip-box.php' );
		require_once( __DIR__ . '/widgets/bwdeb-team-flip-box.php' );
		require_once( __DIR__ . '/widgets/bwdeb-list.php' );
		require_once( __DIR__ . '/widgets/bwdeb-heading.php' );
		require_once( __DIR__ . '/widgets/bwdeb-iconbox.php' );
		require_once( __DIR__ . '/widgets/dual-button.php' );
		require_once( __DIR__ . '/widgets/bwdeb-fancy-heading.php' );
		require_once( __DIR__ . '/widgets/bwdeb-animated-heading.php' );
		require_once( __DIR__ . '/widgets/bwdeb-animatedlink.php' );
		require_once( __DIR__ . '/widgets/bwdeb-step.php' );
		require_once( __DIR__ . '/widgets/bwdeb-blockquote.php' );
		require_once( __DIR__ . '/widgets/bwdeb-businesshours.php' );
		require_once( __DIR__ . '/widgets/bwdeb-calltoaction.php' );
		require_once( __DIR__ . '/widgets/bwdeb-clickcall-widget.php' );
		require_once( __DIR__ . '/widgets/bwdeb-count-down.php' );
		require_once( __DIR__ . '/widgets/bwdeb-counter.php' );
		require_once( __DIR__ . '/widgets/bwdeb-coupon-code.php' );
		require_once( __DIR__ . '/widgets/bwdeb-filterable.php' );
		require_once( __DIR__ . '/widgets/bwdeb-imageaccordion.php' );
		require_once( __DIR__ . '/widgets/bwdeb-compare.php' );
		require_once( __DIR__ . '/widgets/bwdeb-imagehover.php' );
		require_once( __DIR__ . '/widgets/bwdeb-image-scroll.php' );
		require_once( __DIR__ . '/widgets/bwdeb-image-shape.php' );
		require_once( __DIR__ . '/widgets/bwdeb-imageswap.php' );
		require_once( __DIR__ . '/widgets/bwdeb-price.php' );
		require_once( __DIR__ . '/widgets/bwdeb-progressBar.php' );
		require_once( __DIR__ . '/widgets/bwdeb-timeline.php' );
		require_once( __DIR__ . '/widgets/bwdeb-social-icon.php' );
		require_once( __DIR__ . '/widgets/bwdeb-tabs.php' );
		require_once( __DIR__ . '/widgets/bwdeb-webinar-info.php' );
		require_once( __DIR__ . '/widgets/header_bwdeb.php' );
		require_once( __DIR__ . '/widgets/bwdeb-photoStack.php' );
		require_once( __DIR__ . '/widgets/bwdeb-imageStack.php' );
		require_once( __DIR__ . '/widgets/bwdeb-ihover-widgets.php' );
		require_once( __DIR__ . '/widgets/bwdeb-video-popup-widget.php' );
		require_once( __DIR__ . '/widgets/bwdeb-profile-card.php' );
		require_once( __DIR__ . '/widgets/back_to_top.php' );
		require_once( __DIR__ . '/widgets/bwdeb-masking-video.php' );
		require_once( __DIR__ . '/widgets/bwdeb-logo-carousel-widget.php' );
		require_once( __DIR__ . '/widgets/bwdeb-logo-grid-widget.php' );
		require_once( __DIR__ . '/widgets/bwdeb-logo-filter-widget.php' );
		require_once( __DIR__ . '/widgets/bwdeb-mflag-masking.php' );
		require_once( __DIR__ . '/widgets/bwdeb-authorbio.php' );
		require_once( __DIR__ . '/widgets/bwdeb-creativeTable.php' );
		// First 
		require_once( __DIR__ . '/widgets/bwdeb-preloader-widget.php' );
		require_once( __DIR__ . '/widgets/unique-social-share-widget.php' );
		require_once( __DIR__ . '/widgets/greatest-breadcrumb-widget.php' );
		require_once( __DIR__ . '/widgets/bwdeb-switchBackground-widgets.php' );
		// Secound 
		require_once( __DIR__ . '/widgets/bwdeb-circle-info-widgets.php' );
		require_once( __DIR__ . '/widgets/bwdeb-catproduct-widget.php' );
		require_once( __DIR__ . '/widgets/bwdeb-flipbox.php' );
		require_once( __DIR__ . '/widgets/bwdeb-button-widget.php' );
		require_once( __DIR__ . '/widgets/bwdeb-unfoldcontent.php' );
		require_once( __DIR__ . '/widgets/codentor-template.php' );
		require_once( __DIR__ . '/widgets/bwdeb-slider-widget.php' );
		require_once( __DIR__ . '/widgets/bwdeb-the-post-timeline.php' );
		require_once( __DIR__ . '/widgets/bwdeb-content-switcher.php' );
		// Post Widget
		require_once( __DIR__ . '/widgets/post-grid-w.php' );
		require_once( __DIR__ . '/widgets/bwdeb-accordion2.php' );
		require_once( __DIR__ . '/widgets/bwdeb-imageaccordion2.php' );
		require_once( __DIR__ . '/widgets/bwdeb-blog-post.php' );
		require_once( __DIR__ . '/widgets/post-tiles-w.php' );
		require_once( __DIR__ . '/widgets/bwdeb-blogpost-widgets.php' );
		require_once( __DIR__ . '/widgets/bwdeb-newsticker-widgets.php' );
		require_once( __DIR__ . '/widgets/post-masonary.php' );
		// Woocommerce Product
		require_once( __DIR__ . '/widgets/bwdeb-products.php' );
		require_once( __DIR__ . '/widgets/bwdeb-imageaccordion3.php' );
		require_once( __DIR__ . '/widgets/bwdeb-products2.php' );
		require_once( __DIR__ . '/widgets/bwdeb-product-widgets.php' );
		require_once( __DIR__ . '/widgets/bwdeb-products3.php' );
		require_once( __DIR__ . '/widgets/bwdeb-accordion3.php' );
		require_once( __DIR__ . '/widgets/bwdeb-catproduct-widget2.php' );
		require_once( __DIR__ . '/widgets/bwdeb-products4.php' );
		require_once( __DIR__ . '/widgets/bwdeb-product-widgets2.php' );
		require_once( __DIR__ . '/widgets/bwdeb-products5.php' );
		require_once( __DIR__ . '/widgets/bwdeb-catproduct-widget3.php' );
		require_once( __DIR__ . '/widgets/woocommerce-products-timeline.php' );
		// For new  widgets  10Dec2023
		require_once( __DIR__ . '/widgets/bwdadt-creativeTable.php' );




	}

	public function bwdeb_register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();
		// Register Widgets
		$bwdeb_pp_meet_the_team = get_option( 'bwdeb-check-meet-the-team-widget', 'off' );
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
		$bwdeb_pp_bwd_flip_box_carousel = get_option( 'bwdeb-plugin-bwd-flip-box-carousel', 'off' );
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
		$bwdeb_pp_creative_post_carousel = get_option( 'bwdeb-plugin-creative-post-carousel', 'off' );
    if ( $bwdeb_pp_creative_post_carousel == 'on' ) {
		\Elementor\Plugin::instance()->widgets_manager->register( new Widgets\BWDEB_bwdbpc_blogpost_widgets() );
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
	
	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/bwdeb-elementor-bundle-manager.php' );
		new Page_Settings();
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
		// This styles for CodEntor Syntax Highlighter
		wp_register_style( 'codentor-code-default', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/prism-default.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-code-coy', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/prism-coy.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-code-dark', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/prism-dark.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-code-funky', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/prism-funky.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-code-okaidia', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/prism-okaidia.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-code-solarized-light', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/prism-solarized-light.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-solarized-dark-atom', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/solarized-dark-atom.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-code-tomorrow-night', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/prism-tomorrow-night.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-code-twilight', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/prism-twilight.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-code-toolbar', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/prism-toolbar.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-cold-dark', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/cold-dark.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-colddark-dark', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/colddark-dark.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-z-touch', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/z-touch.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-zonokai-theme', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/zonokai-theme.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-vs-theme', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/vs-theme.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-nord-theme', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/nord-theme.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-holy-theme', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/holy-theme.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-laserwave-theme', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/laserwave-theme.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-lucario-theme', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/lucario-theme.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-night-owl', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/night-owl.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-atom-dark', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/atom-dark.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-dracula-theme', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/dracula-theme.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-duotone-forest', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/duotone-forest.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-duotone-dark', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/duotone-dark.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-duotone-earth', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/duotone-earth.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-duotone-light', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/duotone-light.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-duotone-sea', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/duotone-sea.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-duotone-space', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/duotone-space.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-gruvbox-dark', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/gruvbox-dark.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-gruvbox-light', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/gruvbox-light.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-ghcolors-theme', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/ghcolors-theme.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-pojoaque', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/pojoaque.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-shades-of-purple', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/shades-of-purple.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-synthwave', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/synthwave.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-a11y-dark-theme', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/a11y-dark-theme.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-material-dark', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/material-dark.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-material-light', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/material-light.css', null, '1.3.6', 'all' );
		wp_register_style( 'codentor-material-oceanic', plugin_dir_url( __FILE__ ) . 'assets/public/css/codentor-css/material-oceanic.css', null, '1.3.6', 'all' );
		// Meet The Team
		wp_enqueue_script( 'bwdeb_the_js_image_load', plugin_dir_url( __FILE__ ) . 'assets/public/js/imagesloaded.pkgd.min.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'bwdeb_the_js_isotop', plugin_dir_url( __FILE__ ) . 'assets/public/js/isotope.pkgd.min.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'bwdeb_the_js_snake', plugin_dir_url( __FILE__ ) . 'assets/public/js/snake.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'bwdeb_the_js_min', plugin_dir_url( __FILE__ ) . 'assets/public/js/min.js', array('jquery'), '1.3.6', true );
		// Accordion
		wp_enqueue_script( 'bwdeb_accordion_main_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb-main.js', array('jquery'), '1.3.6', true );
		// Animated Heading
		wp_enqueue_script( 'bwdeb_animated_heading_custom_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb-custom.js', array('jquery'), '1.3.6', true );
		// Click To Contact
		wp_enqueue_script( 'bwdeb_clickcall_main_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/clicktocontact.js', array('jquery'), '1.3.6', true );
		// Countdown
		wp_enqueue_script( 'bwdeb_count_down_custom_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/countdown.js', array('jquery'), '1.3.6', true );
		// Counter
		wp_enqueue_script( 'bwdeb_counter_custom_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/counter.js', array('jquery'), '1.3.6', true );
		// Coupon Code
		wp_enqueue_script( 'bwdeb_coupon_code_min_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/coupon.js', array('jquery'), '1.3.6', true );
		// Filterable Gallery
		wp_enqueue_script( 'bwdfg_filterable_mgPopup_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/filterable-popup.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'bwdeb_filterable_main_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/filterable-gallery.js', array('jquery'), '1.3.6', true );
		// Image Compare
		wp_enqueue_script( 'bwdeb_compare_custom_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/imgcompare.js', array('jquery'), '1.3.6', true );
		// Progress Bar
		wp_enqueue_script( 'bwdeb_progressBar_custom_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/progressbar.js', array('jquery'), '1.3.6', true );
		// Timeline
		wp_enqueue_script( 'bwdeb_timeline_custom_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/timeline.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'bwdeb_count_down_main_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/main.js', array(), '1.3.6', true );
		// Webinar Info
		wp_enqueue_script( 'bwdeb_interactive', plugin_dir_url( __FILE__ ) . 'assets/public/js/webinar.js', array('jquery'), '1.3.6', true );
		// Header
		wp_enqueue_script( 'bwdeb_the_js_main', plugin_dir_url( __FILE__ ) . 'assets/public/js/header.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'bwdeb_the_js_search_main', plugin_dir_url( __FILE__ ) . 'assets/public/js/search_main.js', array('jquery'), '1.3.6', true );
		// Team Carousel
		wp_enqueue_script( 'bwdeb-teamcarousel-owljs', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb-owl.carousel.min.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'bwdeb-teamcarousel-mainjs', plugin_dir_url( __FILE__ ) . 'assets/public/js/team-carousel.js', array('jquery'), '1.3.6', true );
		// Video Popup
		wp_enqueue_script( 'bwdeb_video_popup_custom_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/video-popup.js', array('jquery'), '1.3.6', true );
		// Profile Card
		wp_enqueue_script( 'bwdeb_profile_card_min_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/profile-card.js', array('jquery'), '1.3.6', true );
		// Bact To Top
		wp_enqueue_script( 'bwdeb_back_top_main_one_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb-bttop.js', array('jquery'), '1.3.6', true );
		// Masking Video
		wp_enqueue_script( 'bwdeb_masking_video_custom_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/masking-video.js', array('jquery'), '1.3.6', true );
		// Brand Logo
		wp_enqueue_script( 'brand-logo-swiper-interactive', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb-swiper.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'brand-logo-main', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb-main2.js', array('jquery'), '1.3.6', true );
		// Author Bio
		wp_enqueue_script( 'bwdeb_author_bio_min_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/author-bio.js', array('jquery'), '1.3.6', true );
		// Post Accordion
		wp_enqueue_script( 'bwdeb_accordion_main2_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb-main3.js', array('jquery'), '1.3.6', true );
		// Post Carousel
		wp_enqueue_script( 'blogpost-owl-interactive', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb.carousel.min.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'blogpost-main-interactive', plugin_dir_url( __FILE__ ) . 'assets/public/js/post-carousel.js', array('jquery'), '1.3.6', true );
		// News Ticker
		wp_enqueue_script( 'ptnticker_newsticker_owljs', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb-owl.carousel.min4.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'ptnticker_newsticker_mainjs', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb-main4.js', array('jquery'), '1.3.6', true );
		// Related Product Carousel
		wp_enqueue_script( 'woo-relapro-interactive', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb.carousel.min2.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'woo-relapro-main-style', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb-product.js', array('jquery'), '1.3.6', true );
		// Product Accordion
		wp_enqueue_script( 'bwdeb_accordion_main3_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb-main5.js', array('jquery'), '1.3.6', true );
		// Testimonial
		wp_enqueue_script( 'bwdeb_testimonials_the_main_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/testimonial.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'bwdeb_testimonials_owl', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb.carousel.min3.js', array('jquery'), '1.3.6', true );
		// Product Grid Carousel
		wp_enqueue_script( 'product-interactive', plugin_dir_url( __FILE__ ) . 'assets/public/js/woopgridcaro.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'product-owl-interactive', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb.carousel.min4.js', array('jquery'), '1.3.6'
		, true );
		// Prodcut List Carousel
		wp_enqueue_script( 'bwdeb-owlcarousel-script', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb.carousel.min5.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'bwdeb-main-script', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb-caro.js', array('jquery'), '1.3.6', true );
		// Timeline
		wp_enqueue_script( 'bwdeb-timeline-custom', plugin_dir_url( __FILE__ ) . 'assets/public/js/product-timeline.js', array('jquery'), '1.3.6', true );
		// bwdsb-switch-background
		wp_enqueue_script( 'bwdeb_main', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb_main.js', array('jquery'), '1.3.6', true );
		// effective-pre-loader
		wp_enqueue_script( 'bwdeb-eprel-loader', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb-loader.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'bwdeb-loader', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb-loader.min.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'bwdeb-loader-extra-transit-sk', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb-loader-extra-transition.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'bwdeb-loader-extra-transition', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb-loader-extra-transition.min.js', array('jquery'), '1.3.6', true );
		// Secound 
		wp_enqueue_script( 'bwdeb-main2', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb-main7.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'bwdeb-owl.carousel.min', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb-owl.carousel.min3.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'bwdeb-main3', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb-main8.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'bwdeb-owl.carousel.min2', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb-owl.carousel.min2.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'bwdeb-unfold-content', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb-unfold-content.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'codentor-prism-toolbar', plugin_dir_url( __FILE__ ) . 'assets/public/js/codentor-prism-toolbar.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'codentor-prism', plugin_dir_url( __FILE__ ) . 'assets/public/js/codentor-prism.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'teps-main', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb-main9.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'teps-swiper-bundle.min', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb-swiper-bundle.min.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'bwdeb-custom2', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb-custom2.js', array('jquery'), '1.3.6', true );
		// Tab
		wp_enqueue_script( 'bwdeb-tab', plugin_dir_url( __FILE__ ) . 'assets/public/js/tab.js', array('jquery'), '1.3.6', true );
		// Content Switcher 
		wp_enqueue_script( 'bwdeb-content-switcher', plugin_dir_url( __FILE__ ) . 'assets/public/js/bwdeb_min.js', array('jquery'), '1.3.6', true );
		// For new  widgets  10Dec2023
		// Ajax Data Table
		wp_enqueue_script( 'bwdcssk-content-switcher-dataTablesdatatables', plugin_dir_url( __FILE__ ) . 'assets/public/ajax-DataTable/datatables.min.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'bwdcssk-content-switcher-dataTables-responsive', plugin_dir_url( __FILE__ ) . 'assets/public/ajax-DataTable/dataTables.responsive.min.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'bwdcssk-content-switcher-ajax-DataTable-script', plugin_dir_url( __FILE__ ) . 'assets/public/ajax-DataTable/main.js', array('jquery'), '1.3.6', true );





		$all_css_js_file = array(
			// Content Switcher  
			'bwdeb-content-switcher-style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb_style.css'),
			// Honeycombs 
			'bwdeb-honeycombs' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-main.css'),
			// Secound 
			'bwdeb-animate.min' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-animate.min.css'),
			'bwdeb-main' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-main2.css'),
			'bwdeb-main2' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-main3.css'),
			'bwdeb-owl.carousel.min' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-owl.carousel.min.css'),
			'bwdeb-owl.theme.default.mine' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-owl.theme.default.min.css'),
			'bwdeb-owl.carousel.min2' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-owl.carousel.min2.css'),
			'bwdeb-owl.theme.default.min' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-owl.theme.default.min2.css'),
			'bwdeb-style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-style.css'),
			'bwdeb-unfold-content' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-unfold-content.css'),
			'info-downld-btn-animate.min' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/info-downld-btn-animate.min.css'),
			'info-downld-btn-style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/info-downld-btn-style.css'),
			'bwdeb-main3' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-main4.css'),
			'bwdeb-swiper-bundle.min' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-swiper-bundle.min.css'),
			'bwdeb-style2' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-style2.css'),
			// effective-pre-loader
			'bwdeb-style-loader' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-loader.css'),
			'bwdeb-loader-min' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-loader.min.css'),
			// unique-social-share
			'bwdeb_style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb_style2.css'),
			// greatest-breadcrumb
			'bwdeb_style3' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb_style3.css'),
			// bwdsb-switch-background
			'bwdeb_main.css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb_main.css'),
			// Meet The Team
			'bwdeb_team_plugin_bootstrap_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bootstrap.min.css'),
			'bwdeb_team_plugin_main_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-team-main.css'),
			// Testimonial
			'bwdeb_testimonials_the_tbt_main_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb_main.css'),
			'bwdeb_testimonials_owl_style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb.carousel.min.css'),
			'bwdeb_testimonials_owl_theme' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb.theme.default.min.css'),
			// Accordion
			'bwdeb_accordion_main_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-main8.css'),
			// Button
			'bwdeb_buttons_creative-buttons_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/creative-buttons.css'), //Conflict with others
			// Masking Effect
			'bwdeb_masking_main_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-masking.css'),
			// Service
			'bwdeb_service_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/style.css'),
			// Flip Box
			'bwdeb_flipflop_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/flip-style.css'),
			// Creative List
			'bwdeb_budle_list_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/creative-list-style.css'),
			// Dual Heading
			'bwdeb_heading_main_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-heading.css'),
			// Icon Box
			'bwdeb_icon_box_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/icon-box-style.css'),
			// Dual Button
			'bwdeb_buttons-buttons_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/dual-buttons.css'),
			// promo Box
			'bwdeb_promobox_plugin_main_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/main.css'),
			'swiperslider-plugin-swiper-style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/swiper-bundle.min.css'),
			'swiperslider-plugin-animated' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/animate.min.css'),
			// Animated Heading
			'bwdeb_animated_heading_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/animated-heading-style.css'),
			// Animated Link
			'bwdeb_animatedlink_plugin_main_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/animated-link.css'),
			// Step
			'bwdeb_step_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/step-style.css'),
			// Blockquote
			'bwdeb_blockquote_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/blockquote.css'),
			// Business Hours
			'bwdeb_business_plugin_main_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/businesshours.css'),
			// Call to Action
			'bwdeb_call_to_action_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/calltoaction.css'),
			// Count Down
			'bwdeb_count_down_main_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/countdown.css'),
			// Counter
			'bwdeb_counter_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/counter.css'),
			// Coupon
			'bwdeb_coupon_code_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/coupon.css'),
			// Filterable Gallery
			'bwdfg_filterable_mgPopup_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/filterable-gallery-popup.css'),
			'bwdeb_filterable_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/filterable-gallery.css'),
			// Image Accordion
			'bwdeb_image_accordion_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/imgaccordion.css'),
			// Image Compare
			'bwdeb_compare_main_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/imgcompare.css'),
			// Click To Contact
			'bwdeb_clickcall_plugin_main_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/clicktocontact.css'),
			// Image Hover
			'bwdeb_img_hover_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/imagehover.css'),
			// Image Scroll
			'bwdeb_image_scroll_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/imgscroll.css'),
			// Image Shape
			'bwdeb_image-shape' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/image-shape.css'),
			// Image Swap
			'bwdeb_image_swap_main_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/imgswap.css'),
			// Pricing Table
			'bwdeb_pricing_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/price-table.css'),
			// Progress Bar
			'bwdeb_progressBar_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/progressbar.css'),
			// Timeline
			'bwdeb_timeline_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/timeline.css'),
			// Social Icon
			'bwdeb_social-icon' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/social-icon.css'),
			// Tab
			'bwdeb_tabs_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/tab.css'),
			// Webinar Info
			'bwdeb_webinar_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/webinar.css'),
			// Header
			'bwdeb_hf_search_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/search_style.css'),
			'bwdeb_hf_social_icon_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/header_social_icon.css'),
			'bwdeb_hf_header_top_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/header-top.css'),
			'bwdeb_hf_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/header.css'),
			// Team carousel
			'team-plugin-owlcarousel-style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/owl.carousel.min.css'),
			'team-plugin-owltheme-style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/owl.theme.default.min.css'),
			// Photo Stack
			'bwdeb_photostack_plugin_main_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/photo-stack.css'),
			// Image Stack Group
			'bwdeb_imagestack_plugin_main_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/imsgroup.css'),
			// IHover
			'bwdeb_iHover_plugin_main_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/ihover.css'),
			// Video Popup
			'bwdeb_video_popup_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/video-popup.css'),
			// Profile Card
			'bwdeb_profile_card_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/profile-card.css'),
			'team-main2-style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-team-main2.css'),
			// Back to Top
			'bwdeb_back_top_plugin_main_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-bttop.css'),
			// Masking Video
			'bwdeb_masking_video_main_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/masking-video.css'),
			// Logo Carousel
			'brand-logo-swiper' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-swiper.css'),
			'bwdeb_masking_main_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-masking2.css'),
			// Author Bio
			'bwdeb_author_bio_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/author-bio.css'),
			// Fancy Heading
			'bwdeb_fancy_heading_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/fancy-heading.css'),
			// Data Table
			'creativetable-plugin-main-style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/data-table.css'),
			// Post Accordion
			'bwdeb_accordion_style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-main6.css'), //Conflict with others
			// Post Image Accordion
			'image-accordion-style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/post-image-accordion.css'),
			// Post List
			'bwdeb-blog-blog-main' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/post-list.css'),
			// Post Tiles
			'bwdeb-posttiles-plugin-main-one' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/post-tiles.css'),
			// Post Grid
			'bwdeb_blog_main_style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/post-grid.css'),
			// Post Carousel
			'blogpost-plugin-owl-style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb.carousel.min2.css'),
			'blogpost-plugin-owltheme' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb.theme.default.min2.css'),
			'blogpost-plugin-main-style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/post-carousel.css'),
			// News Ticker
			'ptnticker_newsticker_plugin_main' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-style3.css'),
			'ptnticker_newsticker_plugin_owl_carousel' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-owl.carousel.min3.css'),
			//  Post Masonry
			'bwdeb-posttiles-plugin-main-masonary' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/post-masonary.css'),
			'bwdeb-style-css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb_css.css'),
			// Product Image Accordion
			'bwdeb_image_accordion_style_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-imgaccordion.css'),
			// Featured Product
			'bwdeb-style-2cs' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb_css2.css'),
			// Related Product
			'owl-product-plugin-owl-style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb.carousel.min3.css'),
			'theme-product-plugin-owltheme' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb.theme.default.min3.css'),
			'product-plugin-main-style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-product.css'),
			// Product Tiles
			'bwdeb-style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb_css3.css'),
			// Product Tiles Category
			'bwdeb-catproduct-plugin-main' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-tilescat.css'),
			// Product List
			'bwdeb-main-style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/product-list.css'),
			// Product Grid Carousel
			'bwdeb-product-plugin-owl-style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb.carousel.min4.css'),
			'bwdeb-product-plugin-owltheme' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb.theme.default.min4.css'),
      		'bwdeb-product-plugin-main-style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/wooprogridcaro.css'),
			// Product List Carousel
      		'bwdeb-main-style2' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-caro.css'),
			'bwdeb-owlcarousel-style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb.carousel.min5.css'),
			'bwdeb-owltheme-style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb.theme.default.min5.css'),
			// Product Grid
			'bwdeb_catproduct_plugin_main_css' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/wprodcatgrid.css'),
			'bwdeb_accordion_main_7' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bwdeb-main7.css'), //Conflict with others
			// Product Timeline
			'bwdeb-timeline-style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/product-timeline.css'),
			'bwdeb-cmn-style' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/cmn.css'),
			// For new  widgets  10Dec2023
			// Ajax Data Table
			'bwdeb-cmn-ajax-DataTable-datatables' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/ajax-DataTable/datatables.min.css'),
			'bwdeb-cmn-ajax-DataTable-main' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/ajax-DataTable/main.css'),
			'bwdeb-cmn-ajax-DataTable-responsive' => array('bwdeb_path_define'=>BWDEB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/ajax-DataTable/responsive.dataTables.min.css'),



		);
		foreach($all_css_js_file as $handle => $fileinfo){
      		wp_enqueue_style( $handle, $fileinfo['bwdeb_path_define'], null, '1.3.6', 'all');
		}
	}
	public function bwdeb_all_assets_for_elementor_editor_admin(){
		$all_css_js_file = array(
			'admin-icon-style' => array('bwdeb_path_admin_define'=>BWDEB_ASFSK_ASSETS_ADMIN_DIR_FILE . '/css/icon.css'),
		);
		foreach($all_css_js_file as $handle => $fileinfo){
      wp_enqueue_style( $handle, $fileinfo['bwdeb_path_admin_define'], null, '1.3.6', 'all');
		}
	}
	public function bwdeb_all_assets_for_dashboard_admin(){
		wp_enqueue_style( 'bwdeb-dashboard-admin',  plugin_dir_url( __FILE__ ) . 'assets/admin/css/admin-basic.css', null, '1.3.6', 'all' );
		// For dashboard
		wp_enqueue_style( 'bwdeb-index-dashboard-admin',  plugin_dir_url( __FILE__ ) . 'assets/admin/dashboard/style.css', null, '1.3.6', 'all' );
		wp_enqueue_script( 'bwdeb-index-dashboard-admin-script',  plugin_dir_url( __FILE__ ) . 'assets/admin/dashboard/main.js', ['jquery'], '1.3.6', true );
		// For Check Box Status
		wp_enqueue_script( 'bwdeb-index-dashboard-checkbox-status',  plugin_dir_url( __FILE__ ) . 'assets/admin/js/checkbox-status.js', ['jquery'], '1.3.6', true );
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
		$options['bwdeb-plugin-settings'] = array(
			'bwdeb-check-meet-the-team-widget',
			'bwdeb-plugin-testimonials',
			'bwdeb-plugin-creative-button',
			'bwdeb-plugin-accordion',
			'bwdeb-plugin-masking-effect',
			'bwdeb-plugin-service-showcase',
			'bwdeb-plugin-promo-box',
			'bwdeb-plugin-service-flip-box',
			'bwdeb-plugin-bwd-flip-box-carousel',
			'bwdeb-plugin-step-flip-box',
			'bwdeb-plugin-team-flip-box',
			'bwdeb-plugin-map-masking',
			'bwdeb-plugin-creative-list',
			'bwdeb-plugin-dual-heading',
			'bwdeb-plugin-back-to-top',
			'bwdeb-plugin-call-to-action',
			'bwdeb-plugin-icon-box',
			'bwdeb-plugin-dual-button',
			'bwdeb-plugin-honeycombs',
			'bwdeb-plugin-awesome-step',
			'bwdeb-plugin-counter',
			'bwdeb-plugin-image-hover-effect',
			'bwdeb-plugin-countdown',
			'bwdeb-plugin-animated-heading',
			'bwdeb-plugin-filterable-gallery',
			'bwdeb-plugin-pricing-table',
			'bwdeb-plugin-social-icon',
			'bwdeb-plugin-creative-tab',
			'bwdeb-plugin-author-bio',
			'bwdeb-plugin-animated-link',
			'bwdeb-plugin-business-hours',
			'bwdeb-plugin-image-shape',
			'bwdeb-plugin-fancy-heading',
			'bwdeb-plugin-progress-bar',
			'bwdeb-plugin-image-accordion',
			'bwdeb-plugin-image-compare',
			'bwdeb-plugin-timeline',
			'bwdeb-plugin-blockquote',
			'bwdeb-plugin-video-popup',
			'bwdeb-plugin-image-stack-group',
			'bwdeb-plugin-masking-video',
			'bwdeb-plugin-image-swap',
			'bwdeb-plugin-profile-card',
			'bwdeb-plugin-photo-stack',
			'bwdeb-plugin-image-scroll',
			'bwdeb-plugin-ihover',
			'bwdeb-plugin-webinar-info',
			'bwdeb-plugin-circle-info',
			'bwdeb-plugin-coupon-code',
			'bwdeb-plugin-unique-headers',
			'bwdeb-plugin-click-to-contact',
			'bwdeb-plugin-popup',
			'bwdeb-plugin-data-table',
			'bwdeb-plugin-advanced-slider',
			'bwdeb-plugin-slide-anything',
			'bwdeb-plugin-contact-form-7-styler',
			'bwdeb-plugin-image-hotspot',
			'bwdeb-plugin-logo-carousel',
			'bwdeb-plugin-logo-grid',
			'bwdeb-plugin-logo-filter',
			'bwdeb-plugin-team-carousel',
			'bwdeb-plugin-unfold',
			'bwdeb-plugin-code-highlighter',
			'bwdeb-plugin-lottie-animation',
			'bwdeb-plugin-breadcrumb',
			'bwdeb-plugin-brand-logo-showcase',
			'bwdeb-plugin-info-download-button',
			'bwdeb-plugin-effective-pre-loader',
			'bwdeb-plugin-bar-chart',
			'bwdeb-plugin-social-share',
			'bwdeb-plugin-background-switcher',
			'bwdeb-plugin-lord-icon',
			'bwdeb-plugin-ajax-data-table',
			'bwdeb-plugin-cart-flipper',
			'bwdeb-plugin-con-swi-pls',
			'bwdeb-plugin-img-rev-widg',
			'bwdeb-plugin-img-unfold-kit',
			'bwdeb-plugin-modern-feature-list',
			'bwdeb-plugin-nft',
			'bwdeb-plugin-offcanvasmagic',
			'bwdeb-plugin-privacy-content-locker',
			'bwdeb-plugin-viewpdf',
			'bwdeb-plugin-progress-master-kit',
			'bwdeb-plugin-restaurant-price-menu',
			'bwdeb-plugin-sales-promotion-offer',
			'bwdeb-plugin-profile-showcas',
			'bwdeb-product-features-w',
			'bwdeb-plugin-tooltip-mastery',
			'bwdeb-employee-profile-identity',
			'bwdeb-horizontal-timeline-slider',
			'bwdeb-threesixty-rotation-view',
			'bwdeb-widget-template',
			'bwdeb-pssx',
			'bwdeb-plugin-cv-builder',
			'bwdeb-plugin-cv-about',
			'bwdeb-plugin-cv-contact',
			'bwdeb-plugin-cv-education',
			'bwdeb-plugin-cv-experience',
			'bwdeb-plugin-cv-footer',
			'bwdeb-plugin-cv-header',
			'bwdeb-plugin-cv-hobby',
			'bwdeb-plugin-cv-language',
			'bwdeb-plugin-cv-reference',
			'bwdeb-plugin-cv-skill',
			'bwdeb-check-hero-widget1',
			'bwdeb-check-hero-widget2',
			'bwdeb-check-hero-widget3',
			'bwdeb-check-hero-widget4',
			'bwdeb-check-hero-widget5',
			'bwdeb-check-hero-widget6',
			'bwdeb-check-hero-widget7',
			'bwdeb-check-hero-widget8',
			'bwdeb-check-hero-widget9',
			'bwdeb-check-hero-widget10',
			'bwdeb-check-hero-widget11',
			'bwdeb-check-hero-widget12',
			'bwdeb-check-hero-widget13',
			'bwdeb-plugin-post-grid',
			'bwdeb-plugin-post-list',
			'bwdeb-plugin-post-tiles',
			'bwdeb-plugin-post-accordion',
			'bwdeb-plugin-post-timeline',
			'bwdeb-plugin-masonary-blog-post',
			'bwdeb-plugin-post-image-accordion',
			'bwdeb-plugin-single-post-slider',
			'bwdeb-plugin-news-ticker',
			'bwdeb-plugin-creative-post-carousel',
			'bwdeb-post-prestige-portfolio',
			'bwdeb-apostst',
			'bwdeb-plugin-product-grid',
			'bwdeb-plugin-product-list',
			'bwdeb-plugin-product-tiles',
			'bwdeb-plugin-product-carousel',
			'bwdeb-plugin-product-category-grid',
			'bwdeb-plugin-product-category-tiles',
			'bwdeb-plugin-product-accordion',
			'bwdeb-plugin-product-image-accordion',
			'bwdeb-plugin-product-list-carousel',
			'bwdeb-plugin-product-timeline',
			'bwdeb-plugin-content-switcher',
			'bwdeb-plugin-related-product',
			'bwdeb-plugin-product-category-carousel',
			'bwdeb-plugin-featured-product',
			'bwdeb-plugin-woo-cat-gallery',
			'bwdeb-plugin-woop-multi-action',
			'bwdeb-plugin-woop-wish-cont',
			'bwdeb-woop-vendors',
		);
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
		$this->add_page_settings_controls();
	}
}
// Instantiate Plugin Class
BWDEBClassElementorBundle::instance();