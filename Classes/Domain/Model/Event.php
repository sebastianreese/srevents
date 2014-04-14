<?php
namespace TYPO3\Srevents\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Sebastian Reese <sebastian.reese@aoe.com>, AOE GmbH
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package srevents
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Event extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * date
	 *
	 * @var \DateTime
	 * @validate NotEmpty
	 */
	protected $date;

	/**
	 * eventname
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $eventname;

	/**
	 * location
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $location;

	/**
	 * information
	 *
	 * @var \string
	 */
	protected $information;

	/**
	 * link
	 *
	 * @var \string
	 */
	protected $link;

	/**
	 * Returns the date
	 *
	 * @return \DateTime $date
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * Sets the date
	 *
	 * @param \DateTime $date
	 * @return void
	 */
	public function setDate($date) {
		$this->date = $date;
	}

	/**
	 * Returns the eventname
	 *
	 * @return \string $eventname
	 */
	public function getEventname() {
		return $this->eventname;
	}

	/**
	 * Sets the eventname
	 *
	 * @param \string $eventname
	 * @return void
	 */
	public function setEventname($eventname) {
		$this->eventname = $eventname;
	}

	/**
	 * Returns the location
	 *
	 * @return \string $location
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * Sets the location
	 *
	 * @param \string $location
	 * @return void
	 */
	public function setLocation($location) {
		$this->location = $location;
	}

	/**
	 * Returns the information
	 *
	 * @return \string $information
	 */
	public function getInformation() {
		return $this->information;
	}

	/**
	 * Sets the information
	 *
	 * @param \string $information
	 * @return void
	 */
	public function setInformation($information) {
		$this->information = $information;
	}

	/**
	 * Returns the link
	 *
	 * @return \string $link
	 */
	public function getLink() {
		return $this->link;
	}

	/**
	 * Sets the link
	 *
	 * @param \string $link
	 * @return void
	 */
	public function setLink($link) {
		$this->link = $link;
	}

}
?>