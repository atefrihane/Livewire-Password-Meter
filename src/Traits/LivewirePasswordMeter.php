<?php

namespace Atef\LivewirePasswordMeter\Traits;



trait LivewirePasswordMeter
{

    public function getListeners()
    {
        return $this->listeners + [
            'passwordValueChanged' => 'passwordValueChanged',
        ];
    }
    public function passwordValueChanged($array)
    {
    
        $this->{$array['key']} = $array['value'];
    }
}
