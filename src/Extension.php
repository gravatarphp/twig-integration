<?php

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
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('gravatar_avatar', [$this->urlBuilder, 'avatar']),
            new \Twig_SimpleFilter('gravatar_profile', [$this->urlBuilder, 'profile']),
            new \Twig_SimpleFilter('gravatar_vcard', [$this->urlBuilder, 'vcard']),
            new \Twig_SimpleFilter('gravatar_qrCode', [$this->urlBuilder, 'qrCode']),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'gravatar';
    }
}
