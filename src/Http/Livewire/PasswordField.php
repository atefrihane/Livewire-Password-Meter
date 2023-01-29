<?php
namespace VendorName\Skeleton\Http\Livewire;


use Livewire\Component;
use VendorName\Skeleton\Traits\ValidatePassword;

class PasswordField extends Component
{

    public $password;
    public $eyeIcon = false;
    public $hide = true;
    public $class = "";
    public $styles = "";
    public $score = null;

    use ValidatePassword;

    public function toggle()
    {
        $this->hide = !$this->hide;
    }
    public function render()
    {
        return view('livewire.password-field');
    }
}
