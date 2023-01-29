<?php
namespace VendorName\Skeleton\Traits;
use ZxcvbnPhp\Zxcvbn;

trait ValidatePassword
{

    public function validateField(Zxcvbn $zxcvbn)
    {
        $weak = $zxcvbn->passwordStrength('password', $this->password);
        $this->score =  $weak['score'];
    }
}
