<?php

namespace CamSpiers\HoneyPot\Protectors;

class HoneyPotSpamProtector implements SpamProtector {

	/**
	 * Returns the {@link HoneyPotField} associated with this protector
	 *
	 * @param [type] $name
	 * @param [type] $title
	 * @param [type] $value
	 * @return void
	 */
	public function getFormField($name = null, $title = null, $value = null) {
		return new HoneyPotField($name, $title, $value);
	}

	/**
	 * Not used by HoneyPotSpamProtector
	 */
	public function setFieldMapping($fieldMapping) {}

}
