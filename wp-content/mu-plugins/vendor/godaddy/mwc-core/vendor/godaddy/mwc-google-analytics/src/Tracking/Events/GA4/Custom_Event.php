<?php
/**
 * Google Analytics
 *
 * This source file is subject to the GNU General Public License v3.0
 * that is bundled with this package in the file license.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.html
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@skyverge.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Google Analytics to newer
 * versions in the future. If you wish to customize Google Analytics for your
 * needs please refer to https://help.godaddy.com/help/40882 for more information.
 *
 * @author      SkyVerge
 * @copyright   Copyright (c) 2015-2024, SkyVerge, Inc.
 * @license     http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
 */

namespace GoDaddy\WordPress\MWC\GoogleAnalytics\Tracking\Events\GA4;

use GoDaddy\WordPress\MWC\GoogleAnalytics\Tracking;
use GoDaddy\WordPress\MWC\GoogleAnalytics\Tracking\Events\GA4_Event;

defined( 'ABSPATH' ) or exit;

/**
 * Custom event, triggered by calling {@see Tracking\Event_Tracking::custom_event()}.
 *
 * This class should NOT be registered with {@see Tracking\Event_Tracking} class.
 *
 * @since 3.0.3
 */
class Custom_Event extends GA4_Event {


	/**
	 * @inheritdoc
	 */
	public function get_form_field_title(): string {

		return ''; // unused stub
	}


	/**
	 * @inheritdoc
	 */
	public function get_form_field_description(): string {

		return ''; // unused stub
	}


	/**
	 * @inheritdoc
	 */
	public function get_default_name(): string {

		return ''; // unused stub
	}


	/**
	 * Tracks the event.
	 *
	 * @since 3.0.3
	 *
	 * @param string|null $name event name
	 * @param array<string, mixed> $properties event properties
	 * @param bool $track_in_admin whether this event should be tracked in admin
	 */
	public function track( ?string $name = null, array $properties = [], bool $track_in_admin = false ): void {

		$this->admin_event = $track_in_admin;

		if ( ! $name ) {
			return;
		}

		$this->set_name( $name );
		$this->record_via_api( $properties );
	}


}
