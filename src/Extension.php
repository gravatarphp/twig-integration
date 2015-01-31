<?php

/*
 * This file is part of the Gravatar Twig Integration package.
 *
 * (c) Márk Sági-Kazár <mark.sagikazar@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gravatar\Twig;

use Gravatar\UrlBuilder;

/**
 * Gravatar Twig extension
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class Extension extends \Twig_Extension
{
    /**
     * @var UrlBuilder
     */
    protected $urlBuilder;

    /**
     * @param UrlBuilder $urlBuilder
     */
    public function __construct(UrlBuilder $urlBuilder)
    {
        $this->urlBuilder = $urlBuilder;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'gravatar';
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('avatar', [$this->urlBuilder, 'avatar']),
            new \Twig_SimpleFilter('profile', [$this->urlBuilder, 'profile']),
            new \Twig_SimpleFilter('vcard', [$this->urlBuilder, 'vcard']),
            new \Twig_SimpleFilter('qrCode', [$this->urlBuilder, 'qrCode']),
        ];
    }
}
