<?php
/**
 * WP Kraken API (https://pixabay.com/api/docs/)
 *
 * @package WP-Kraken-API
 */

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* Check if class exists. */
if ( ! class_exists( 'KrakenAPI' ) ) {

	/**
	 * KrakenAPI class.
	 */
	class KrakenAPI {

		/**
		 * API Key.
		 *
		 * @var string
		 */
		static private $api_key;

		 /**
		 * API Secret.
		 *
		 * @var string
		 */
		static private $api_secret;

		 /**
		 * __construct function.
		 *
		 * @access public
		 * @param mixed $api_key API Key.
		 * @param mixed $api_secret API Secret.
		 * @return void
		 */
		public function __construct( $api_key, $api_secret ) {

			static::$api_key = $api_key;
			static::$api_secret = $api_secret;

		}

		/**
		 * Fetch the request from the API.
		 *
		 * @access private
		 * @param mixed $request Request URL.
		 * @return $body Body.
		 */
		private function fetch( $request ) {

			$response = wp_remote_get( $request );
			$code = wp_remote_retrieve_response_code( $response );

			if ( 200 !== $code ) {
				return new WP_Error( 'response-error', sprintf( __( 'Server response code: %d', 'text-domain' ), $code ) );
			}

			$body = wp_remote_retrieve_body( $response );

			return json_decode( $body );

		}


		/**
		 * direct_upload function.
		 *
		 * @access public
		 * @param mixed $file
		 * @param string $wait (default: '')
		 * @param string $callback_url (default: '')
		 * @return void
		 */
		public function direct_upload( $file, $wait = '', $callback_url = '' ) {

		}

		/**
		 * image_url function.
		 *
		 * @access public
		 * @param mixed $url
		 * @param mixed $wait
		 * @param mixed $lossy
		 * @param $preserve_meta
		 * @param $auto_orient
		 * @param mixed $resize
		 * @param mixed $webp
		 * @param mixed $sampling_scheme
		 * @param mixed $convert
		 * @param mixed $quality
		 * @param mixed $s3_store
		 * @param mixed $cf_store
		 * @param mixed $azure_store
		 * @param mixed $sl_store
		 * @return void
		 */
		public function image_url( $url, $wait, $lossy, $preserve_meta, $auto_orient, $resize, $webp, $sampling_scheme, $convert, $quality, $s3_store, $cf_store, $azure_store, $sl_store ) {

		}


	}
}
