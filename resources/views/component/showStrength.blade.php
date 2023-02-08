<div class="display-score">

    @if($score !== null)
    @switch($score)

    @case(0)

    <span class="weak">{{config('livewire-password-meter.weak')}}</span>
    @break
    @case(1)

    <span class="weak">{{config('livewire-password-meter.weak')}}</span>
    @break
    @case(2)
    <span class="moderate"> {{config('livewire-password-meter.moderate')}}</span>
    @break

    @case(3)
    <span class="strong">{{config('livewire-password-meter.strong')}}</span>

    @break

    @case(4)
    <span class="very-strong"> {{config('livewire-password-meter.very_strong')}}</span>

    @break

    @endswitch
    @endif






</div>