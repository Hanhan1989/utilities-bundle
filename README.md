# Symfony Utilities Bundle

A Symfony bundle that provides utilities for handling dates and time, such as Twig filters and reusable helpers, including translating day and month names.

## Installation

Install the latest version with

```bash
composer require hanhan-chen/utilities-bundle
```

## Basic Usage

````twig
{{ 'Monday' |translate_day('es') }}      {# → Monday translated to Spanish: "Lunes" #}
{{ 'Tuesday'|translate_day }}            {# → Automatically uses the current locale, e.g., "Martes" if locale is "es" #}
{{ 'January'|translate_month }}          {# → Automatically uses the current locale, e.g., "Enero" if locale is "es" #}

````

### Author

Hanhan Chen (Stack Overflow) - <https://stackoverflow.com/users/4097889/chen-hanhan> 


### Support Utilities Bundle Financially

[![Donate](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/donate/?hosted_button_id=P4L8SBXH34V2C)




### License

Utilities Bundle is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.