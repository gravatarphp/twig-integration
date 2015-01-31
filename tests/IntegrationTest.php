<?php

use Gravatar\UrlBuilder;
use Gravatar\Twig\Extension;

class IntegrationTest extends Twig_Test_IntegrationTestCase
{
    public function getExtensions()
    {
        return [new Extension(new UrlBuilder)];
    }

    public function getFixturesDir()
    {
        return __DIR__.'/Fixtures/';
    }
}
