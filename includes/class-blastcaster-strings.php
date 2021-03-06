<?php

namespace Terescode\BlastCaster;

require_once BC_PLUGIN_DIR . 'includes/interface-strings.php';

if ( ! class_exists( __NAMESPACE__ . '\BcStrings' ) ) {
	class BcStrings implements \Terescode\WordPress\TcStrings {
		// add blast label strings
		const ABF_BLAST_PAGE_TITLE = 'bc.abf.blast-page-title';
		const ABF_BLAST_MENU_TITLE = 'bc.abf.blast-menu-title';
		const ABF_BLAST_SCREEN_TITLE = 'bc.abf.blast-screen-title';
		const ABF_BLAST_BUTTON_LABEL = 'bc.abf.blast-button-label';
		const ABF_TITLE_LABEL = 'bc.abf.title-label';
		const ABF_CATEGORIES_LABEL = 'bc.abf.cat-label';
		const ABF_IMAGE_LABEL = 'bc.abf.img-label';
		const ABF_DESCRIPTION_LABEL = 'bc.abf.desc-label';
		const ABF_TAGS_LABEL = 'bc.abf.tags-label';
		// add blast form messages
		const ABF_BLAST_ADDED = 'bc.abf.blast-added';
		const ABF_VIEW_POST = 'bc.abf.view-post';
		const ABF_EDIT_POST = 'bc.abf.edit-post';
		const ABF_INVALID_PAGE_DATA = 'bc.abf.inv-page-data';
		const ABF_NO_ACCESS = 'bc.abf.no-access';
		const ABF_MISSING_BLAST_TITLE = 'bc.abf.missing-title';
		const ABF_MISSING_BLAST_DESCRIPTION = 'bc.abf.missing-desc';
		const ABF_INVALID_BLAST_IMAGE_TYPE = 'bc.abf.invalid-image-type';
		const ABF_MISSING_BLAST_IMAGE_URL = 'bc.abf.missing-image-url';
		const ABF_MISSING_BLAST_IMAGE_FILE = 'bc.abf.missing-image-file';
		const ABF_UPLOAD_IMAGE_FAILED = 'bc.abf.upload-image-failed';
		const ABF_INVALID_CATEGORY_TYPE = 'bc.abf.invalid-cat-type';
		const ABF_INVALID_CATEGORY = 'bc.abf.invalid-cat';
		const ABF_BUILD_ACTION_DATA_FAILED = 'bc.abf.build-action-data-failed';
		const ABF_LOAD_MEDIA_FAILED = 'bc.abf.load-media-failed';
		const ABF_INSERT_POST_FAILED = 'bc.abf.insert-post-failed';
		const ABF_INVALID_URL = 'bc.abf.invalid-url';
		const ABF_UNKNOWN_IMAGE_TYPE = 'bc.abf.unknown-img-type';

		private $bundle;

		function __construct() {
			$this->bundle = array(
				self::ABF_BLAST_PAGE_TITLE =>
					__( 'Add a blast', 'blastcaster' ),
				self::ABF_BLAST_MENU_TITLE =>
					__( 'Add a blast', 'blastcaster' ),
				self::ABF_BLAST_SCREEN_TITLE =>
					__( 'Add a blast', 'blastcaster' ),
				self::ABF_BLAST_BUTTON_LABEL =>
					__( 'Add a blast', 'blastcaster' ),
				self::ABF_TITLE_LABEL =>
					__( 'Title', 'blastcaster' ),
				self::ABF_CATEGORIES_LABEL =>
					__( 'Categories', 'blastcaster' ),
				self::ABF_IMAGE_LABEL =>
					__( 'Image', 'blastcaster' ),
				self::ABF_DESCRIPTION_LABEL =>
					__( 'Description', 'blastcaster' ),
				self::ABF_TAGS_LABEL =>
					__( 'Tags', 'blastcaster' ),
				self::ABF_BLAST_ADDED =>
					__( 'Blast added!' ),
				self::ABF_VIEW_POST =>
					__( 'View post' ),
				self::ABF_EDIT_POST =>
					__( 'Edit post' ),
				self::ABF_INVALID_PAGE_DATA =>
					__( 'The page data received from the original source could not be decoded. (%1$d - %2$s)', 'blastcaster' ),
				self::ABF_NO_ACCESS =>
					__( 'You do not have access to add blasts.', 'blastcaster' ),
				self::ABF_MISSING_BLAST_TITLE =>
					__( 'Please provide a title for the blast.', 'blastcaster' ),
				self::ABF_MISSING_BLAST_DESCRIPTION =>
					__( 'Please provide a description for the blast.', 'blastcaster' ),
				self::ABF_INVALID_BLAST_IMAGE_TYPE =>
					__( 'Oops! The image type was missing. Try submitting your request again. If that does not help, head to the nearest administrator.', 'blastcaster' ),
				self::ABF_MISSING_BLAST_IMAGE_URL =>
					__( 'Please select an image for the blast.', 'blastcaster' ),
				self::ABF_MISSING_BLAST_IMAGE_FILE =>
					__( 'Please choose an image for the blast.', 'blastcaster' ),
				self::ABF_BUILD_ACTION_DATA_FAILED =>
					__( 'Oops! The action data could not be generated. Try submitting your request again. If that does not help, head to the nearest administrator.', 'blastcaster' ),
				self::ABF_LOAD_MEDIA_FAILED =>
					__( 'Oops! The image could not be loaded into the media gallery. Try submitting your request again. If that does not help, head to the nearest administrator.', 'blastcaster' ),
				self::ABF_INVALID_URL =>
					__( 'The URL %1$s is not a valid URL.' ),
				self::ABF_UNKNOWN_IMAGE_TYPE =>
					__( 'The image at URL %1$s is not a supported image type.' ),
				self::ABF_UPLOAD_IMAGE_FAILED . '_1' =>
				 	__( 'The specified image could not be uploaded because it is too large. Use a different image.', 'blastcaster' ),
				self::ABF_UPLOAD_IMAGE_FAILED . '_2' =>
				 	__( 'The specified image could not be uploaded because it is too large. Use a different image.', 'blastcaster' ),
				self::ABF_UPLOAD_IMAGE_FAILED . '_3' =>
				 	__( 'The specified image was only partially uploaded. Try submitting your request again. If that does not help, head to the nearest administrator.', 'blastcaster' ),
				self::ABF_UPLOAD_IMAGE_FAILED . '_4' =>
				 	__( 'No file was uploaded. Try submitting your request again. If that does not help, head to the nearest administrator.', 'blastcaster' ),
				self::ABF_UPLOAD_IMAGE_FAILED . '_6' =>
				 	__( 'An internal error has occurred. Please contact an administrator. (6)', 'blastcaster' ),
				self::ABF_UPLOAD_IMAGE_FAILED . '_7' =>
				 	__( 'An error occurred saving the image. Try submitting your request again. If that does not help, head to the nearest administrator.', 'blastcaster' ),
				self::ABF_UPLOAD_IMAGE_FAILED . '_8' =>
				 	__( 'An internal error has occurred. Please contact an administrator. (8)', 'blastcaster' ),
			);
		}

		function get_string( $code, $args = array() ) {
			if ( isset( $this->bundle[ $code ] ) ) {
				return vsprintf( $this->bundle[ $code ], $args );
			}
			return '';
		}
	}
}
