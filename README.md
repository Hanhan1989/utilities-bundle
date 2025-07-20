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

<form action="https://www.paypal.com/donate" method="post" target="_top">
<input type="hidden" name="hosted_button_id" value="P4L8SBXH34V2C" />
<input type="image" src="https://www.paypalobjects.com/en_US/ES/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
<img alt="" border="0" src="https://www.paypal.com/en_ES/i/scr/pixel.gif" width="1" height="1" />
</form>



### License

Utilities Bundle is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.