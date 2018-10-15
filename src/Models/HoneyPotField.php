<?php

namespace CamSpiers\HoneyPot\Models;

class HoneyPotField extends TextField
{
    /**
     * @param [type] $validator
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