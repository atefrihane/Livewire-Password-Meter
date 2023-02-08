# Livewire Password Meter

This repo can be used to easily integrate password strength feature to your livewire application

## Installation

You can install the package via composer:

```bash



composer require  atefrihane/livewire-password-meter



```

Optionally you can publish config files which can be used to override feedback messages

```bash

php artisan vendor:publish  --provider="Atef\LivewirePasswordMeter\LivewirePasswordMeterServiceProvider" --tag="livewire-password-config"


```

## Usage

```html
<livewire:password-field
    :class="'your-css-class'"
    :styles="'inline css styles'"
    :placeholder="'placeholder'"
    :eyeIcon="true"
    :wireKey="'password'"
/>
```

## ## Props

```html

```

| Prop        |                                                         Description                                                          |
| :---------- | :--------------------------------------------------------------------------------------------------------------------------: |
| wireKey     |                                 Key passed from the main livewire component ( eg: password)                                  |
| placeholder |                                                     Input's placeholder                                                      |
| eyeIcon     |                         Toggle the display of the password text between masked (hidden) and visible.                         |
| strength    | Provides feedback to the user on the strength or security of the password they have entered <mark>( default = false) </mark> |
| class       |                                              Pass css classes to the component                                               |
| styles      |                                               Pass inline css to the component                                               |

```

```

## Testing

```bash



composer test



```

## Credits

-   [Atef Rihane](https://github.com/atefrihane)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.m
