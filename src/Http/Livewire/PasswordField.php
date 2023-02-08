<?php

namespace Atef\LivewirePasswordMeter\Http\Livewire;


use Livewire\Component;
use Atef\LivewirePasswordMeter\Traits\ValidatePassword;

class PasswordField extends Component
{
    public $placeholder = "";
    public $value = "";
    public $eyeIcon = false;
    public $showStrength = false;
    public $hide = true;
    public $class = "";
    public $styles = "";
    public $progressCss = '';
    public $wireKey = "";
    public $score = null;
    public $strength = "";
    protected $listeners = ['setBackground'];

    use ValidatePassword;

    public function toggle()
    {
        $this->hide = !$this->hide;
    }


    public function render()
    {
        return view('livewire-password::livewire.password-field');
    }
}
