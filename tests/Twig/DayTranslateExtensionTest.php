<?php

namespace HanhanChen\UtilitiesBundle\Tests\Twig;

use HanhanChen\UtilitiesBundle\Twig\DayTranslateExtension;
use PHPUnit\Framework\TestCase;
use Symfony\Contracts\Translation\TranslatorInterface;

class DayTranslateExtensionTest extends TestCase
{
    public function testGetFilters(): void
    {
        $translator = $this->createMock(TranslatorInterface::class);
        $extension = new DayTranslateExtension($translator);

        $filters = $extension->getFilters();

        $this->assertCount(1, $filters);
        $this->assertSame('translate_day', $filters[0]->getName());
    }

    public function testTranslateDay(): void
    {
        $translator = $this->createMock(TranslatorInterface::class);

        $translator->expects($this->once())
            ->method('trans')
            ->with('monday', [], 'time', 'es')
            ->willReturn('Lunes');

        $extension = new DayTranslateExtension($translator);

        $result = $extension->translateDay('monday', 'es');

        $this->assertSame('Lunes', $result);
    }
}
