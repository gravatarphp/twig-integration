<?php

declare(strict_types=1);

namespace Gravatar\Twig\Tests;

use Gravatar\Gravatar;
use Gravatar\Twig\GravatarExtension;
use Twig\Test\IntegrationTestCase;

final class IntegrationTest extends IntegrationTestCase
{
    public function getExtensions(): array
    {
        return [new GravatarExtension(new Gravatar())];
    }

    public function getFixturesDir(): string
    {
        return __DIR__ . '/Fixtures/';
    }
}
