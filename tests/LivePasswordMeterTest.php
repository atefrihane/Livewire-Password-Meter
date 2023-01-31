<?php

namespace Atef\LivewirePasswordMeter\Tests;

use Livewire\Livewire;
use Atef\LivewirePasswordMeter\Tests\TestCase;
use Atef\LivewirePasswordMeter\Http\Livewire\PasswordField;


class LivePasswordMeterTest extends TestCase
{
    public function test_component_is_rendering()
    {
        Livewire::test(PasswordField::class)->assertSuccessful();
    }

    public function test_password_eye_is_not_visible()
    {
        Livewire::test(PasswordField::class)
            ->set('eyeIcon', true)
            ->set('hide', true)
            ->assertSee('<input type="password"',false)
            ->assertSee("icon-tabler-eye-off");
    }

    public function test_password_eye_is_visible()
    {
        Livewire::test(PasswordField::class)
            ->set('eyeIcon', true)
            ->set('hide', false)
            ->assertSee('<input type="text"',false)
            ->assertSee("icon-tabler-eye");
    }
}
