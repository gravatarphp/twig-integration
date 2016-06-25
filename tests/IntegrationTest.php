<?php

use Gravatar\Gravatar;
use Gravatar\Twig\GravatarExtension;

class IntegrationTest extends Twig_Test_IntegrationTestCase
{
    public function getExtensions()
    {
        return [new GravatarExtension(new Gravatar())];
    }

    public function getFixturesDir()
    {
        return __DIR__.'/Fixtures/';
    }
}
