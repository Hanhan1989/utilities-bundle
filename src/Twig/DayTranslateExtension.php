<?php

namespace HanhanChen\UtilitiesBundle\Twig;

use Symfony\Contracts\Translation\TranslatorInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class DayTranslateExtension extends AbstractExtension
{
    public function __construct(private TranslatorInterface $translator)
    {
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('translate_day', [$this, 'translateDay']),
            new TwigFilter('translate_month', [$this, 'translateMonth']),
        ];
    }

    public function translateDay(string $day, ?string $locale = null): string
    {
        return $this->translator->trans( $day, [], 'time', $locale);
    }

    public function translateMonth(string $month, ?string $locale = null): string
    {
        return $this->translator->trans( $month, [], 'time', $locale);
    }
}
