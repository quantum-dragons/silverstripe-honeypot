<?php

namespace CamSpiers\HoneyPot\Protectors;

use SilverStripe\SpamProtection\SpamProtector;
use CamSpiers\HoneyPot\Models\HoneyPotField;

class HoneyPotSpamProtector implements SpamProtector {

	/**
	 * Returns the {@link HoneyPotField} associated with this protector
	 *
     * @param string $name
     * @param string $title
     * @param mixed $value
     * @return FormField The resulting field
	 * 
	 * @return void
	 */
	public function getFormField($name = null, $title = null, $value = null) {
		return new HoneyPotField($name, $title, $value);
	}

	/**
	 * Not used by HoneyPotSpamProtector
	 *
	 * @param array $fieldMapping
	 */
	public function setFieldMapping($fieldMapping) {}

}
