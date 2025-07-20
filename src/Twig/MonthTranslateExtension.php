<?php

namespace HanhanChen\UtilitiesBundle\Twig;

use Symfony\Contracts\Translation\TranslatorInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class MonthTranslateExtension extends AbstractExtension
{
    public function __construct(private TranslatorInterface $translator)
    {
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('translate_month', [$this, 'translateMonth']),
        ];
    }

    public function translateMonth(string $month, ?string $locale = null): string
    {
        return $this->translator->trans( $month, [], 'time', $locale);
    }
}
