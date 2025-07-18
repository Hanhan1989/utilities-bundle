# Symfony Utilities Bundle

A Symfony bundle that provides utilities for handling dates and time, such as Twig filters and reusable helpers.

# Usages

`````twig
{{ 'Monday' |translate_day('es') }}      {# → Monday translated to Spanish: "Lunes" #}
{{ 'Tuesday'|translate_day }}            {# → Automatically uses the current locale, e.g., "Martes" if locale is "es" #}
{{ 'January'|translate_month }}          {# → Automatically uses the current locale, e.g., "Enero" if locale is "es" #}

````