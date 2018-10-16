<?php

namespace CamSpiers\HoneyPot\Protectors;

use SilverStripe\SpamProtection\SpamProtector;
use CamSpiers\HoneyPot\Models\HoneyPotField;

class HoneyPotSpamProtector implements SpamProtector {

	/**
	 * Returns the {@link HoneyPotField} associated with this protector
	 *
	 * @param $name
	 * @param $title
	 * @param $value
	 * 
	 * @return void
	 */
	public function getFormField($name = null, $title = null, $value = null) {
		return new HoneyPotField($name, $title, $value);
	}

	/**
	 * Not used by HoneyPotSpamProtector
	 *
	 * @param $fieldMapping
	 * @return void
	 */
	public function setFieldMapping($fieldMapping) {}

}
