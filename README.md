
# Livewire Password Meter

This repo can be used to include strong password verification component to your livewire application

## Installation

  

You can install the package via composer:

  

```bash

composer require atefrihane/livewire-password-meter

```
Optionally you can publish view files
```bash

php artisan vendor:publish --tag=":package_slug-views"

```

  

## Usage

  

```html

<livewire:password-field
:class="'your-css-class'"
:styles="'inline css styles'"
:placeholder="'placeholder'"  
:eyeIcon="true"  
:wireKey="'password'" />

```

  

## Testing

  

```bash

composer test

```


## Credits

  

- [Atef Rihane](https://github.com/atefrihane)

  
  

## License

  

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.m