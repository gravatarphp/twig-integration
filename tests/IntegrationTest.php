<?php

use Gravatar\UrlBuilder;
use Gravatar\Twig\GravatarExtension;

class IntegrationTest extends Twig_Test_IntegrationTestCase
{
    public function getExtensions()
    {
        return [new GravatarExtension(new UrlBuilder())];
    }

    public function getFixturesDir()
    {
        return __DIR__.'/Fixtures/';
    }
}
