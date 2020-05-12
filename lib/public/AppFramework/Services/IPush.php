<?php
declare(strict_types=1);
/**
 * @copyright Copyright (c) 2020, Roeland Jago Douma <roeland@famdouma.nl>
 *
 * @author Roeland Jago Douma <roeland@famdouma.nl>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCP\AppFramework\Services;

/**
 * Push helper for your Nextcloud apps
 *
 * @since 20.0.0
 */
interface IPush {

	/**
	 * Get if there is a backend to handle push at all
	 *
	 * @return bool
	 */
	public function hasPush(): bool;

	/**
	 * Publish the data to the app topic.
	 * The app topic will be APPID/$topid
	 *
	 * @param string $topic
	 * @param \JsonSerializable $data
	 */
	public function publish(string $topic, \JsonSerializable $data): void;

	/**
	 * Publish (via the initial state) the token for this user
	 *
	 * @param string $topic
	 */
	public function publishJWT(string $topic): void;
}
