<?php

namespace Atef\LivewirePasswordMeter\Traits;

use ZxcvbnPhp\Zxcvbn;

trait ValidatePassword
{

    public function validateField(Zxcvbn $zxcvbn)
    {
        $this->score =  $this->value ? $zxcvbn->passwordStrength($this->value)['score']  : null;
        $this->emitSelf('setBackground');

        $this->emit(
            'passwordValueChanged',
            [
                'key' => $this->wireKey,
                'value' => $this->value
            ]

        );
    }

    public function setBackground()
    {

        switch ($this->score) {
            case NULL:
                return  $this->progressCss = "position: absolute;top: 0;left: 0;height: 3px;background: #e2e8f0;width: 100%;";
                break;
            case 0:
                return $this->progressCss = "position: absolute;top: 0;left: 0;height: 3px;background: red;width: 100%;";

            case 1:
                return $this->progressCss = "position: absolute;top: 0;left: 0;height: 3px;background: #ff4500;width: 40%;";
            case 2:
                return $this->progressCss = "position: absolute;top: 0;left: 0;height: 3px;background: orange;width: 60%;";
            case 3:
                return $this->progressCss = "position: absolute;top: 0;left: 0;height: 3px;background: yellowgreen;width: 80%;";
            case 4:
                return $this->progressCss = "position: absolute;top: 0;left: 0;height: 3px;background: green;width: 100%;";
        }
    }
}
