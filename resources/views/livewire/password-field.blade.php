<div style="width:250px;margin : 0 auto;" id="{{$wireKey}}-content">

    <div class="password-content" style="position: relative;">
        <input type="{{$hide ? 'password'  : 'text'}}" placeholder="{{$placeholder}}" class="{{$class}}"
            style="{{$styles}}" wire:keyup="validateField" wire:change="validateField" wire:model="value">
        @if($eyeIcon)
        @if($hide)
        <button class="absolute top-0 right-1 p-2 text-gray-500" aria-label="Show password">
            <svg wire:click="toggle()" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye-off"
                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <line x1="3" y1="3" x2="21" y2="21"></line>
                <path d="M10.584 10.587a2 2 0 0 0 2.828 2.83"></path>
                <path
                    d="M9.363 5.365a9.466 9.466 0 0 1 2.637 -.365c4 0 7.333 2.333 10 7c-.778 1.361 -1.612 2.524 -2.503 3.488m-2.14 1.861c-1.631 1.1 -3.415 1.651 -5.357 1.651c-4 0 -7.333 -2.333 -10 -7c1.369 -2.395 2.913 -4.175 4.632 -5.341">
                </path>
            </svg>
        </button>
        @else

        <button class="absolute top-0 right-1 p-2 text-gray-500" aria-label="Show password">
            <svg wire:click="toggle()" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye"
                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <circle cx="12" cy="12" r="2"></circle>
                <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7">
                </path>
            </svg>
        </button>
        @endif
        @endif
    </div>

    <div style=" width: 100%;
    height: 3px;
    background: #e2e8f0;
    position: relative;
    ">
        <div style="{{$progressCss}}"></div>
    </div>
 
</div>