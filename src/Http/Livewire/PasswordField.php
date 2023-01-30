<?php

namespace Atef\LivewirePasswordMeter\Http\Livewire;


use Livewire\Component;
use Atef\LivewirePasswordMeter\Traits\ValidatePassword;

class PasswordField extends Component
{
    public $placeholder = "";
    public $password = "";
    public $eyeIcon = false;
    public $hide = false;
    public $class = "";
    public $styles = "";
    public $progressCss = '';
    public $score = null;
    protected $listeners = ['setBackground'];

    use ValidatePassword;
  
    public function toggle()
    {
        $this->hide = !$this->hide;
    }


    public function render()
    {
        return view('skeleton::livewire.password-field');
    }
}
