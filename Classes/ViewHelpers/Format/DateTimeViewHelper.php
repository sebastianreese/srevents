<?php
namespace TYPO3\Srevents\ViewHelpers\Format;

class DateTimeViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {
	/**
	 * Render the supplied unix timestamp in a localized human-readable string.
	 *
	 * @param integer|string|\DateTime $timestamp unix timestamp, a DateTime object or type "date"
	 * @param string $format Formatting string to be parsed by strftime
	 * @return string Formatted date
	 * @author Sebastian Reese <sebastian.reese@aoe.com>
	 */
	public function render($timestamp = NULL, $format = '%Y-%m-%d') {
		$timestamp = $this->normalizeTimestamp($timestamp);
		return strftime($format, $timestamp);
	}

	/**
	 * handle all the different input formats and return a real timestamp
	 *
	 * @param $timestamp
	 * @return integer
	 */
	protected function normalizeTimestamp($timestamp) {
		if(is_null($timestamp)) {
			$timestamp = time();
		} elseif(is_numeric($timestamp)) {
			$timestamp = intval($timestamp);
		} elseif(is_string($timestamp)) {
			$timestamp = strtotime($timestamp);
		} elseif($timestamp instanceof \DateTime) {
			$timestamp = $timestamp->format('U');
		} else {
			throw new \InvalidArgumentException(sprintf('timestamp might be an integer, a string or a DateTimeObject only.'));
		}
		return $timestamp;
	}

}