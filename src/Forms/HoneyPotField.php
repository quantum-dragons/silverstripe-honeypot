<?php

namespace CamSpiers\HoneyPot\Forms;

use SilverStripe\Forms\TextField;

class HoneyPotField extends TextField
{
    /**
     * @param $validator
     * 
     * @return boolean
     */
    public function validate($validator)
    {
        if (!(is_null($this->value) || $this->value === '')) {
            $validator->validationError(
                $this->name,
                "This field should not be completed",
                "validation"
            );

            return false;
        }

        return true;
    }

    /**
     * @param array $properties
     * 
     * @return string
     */
    public function FieldHolder($properties = [])
    {
        return $this->renderWith('CamSpiers\HoneyPot\Forms\HoneyPotField_holder');
    }

}