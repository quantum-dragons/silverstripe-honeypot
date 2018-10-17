<?php

namespace CamSpiers\HoneyPot\Forms;

use SilverStripe\Forms\TextField;

class HoneyPotField extends TextField
{
    /**
     * @param $validator
     * @return void
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
     * @return void
     */
    public function FieldHolder($properties = [])
    {
        return $this->renderWith('HoneyPotField_holder');
    }

}