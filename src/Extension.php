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
     * @var string
     */
    protected $prefixFilterNames;

    /**
     * @param UrlBuilder $urlBuilder
     * @param boolean    $prefixFilterNames
     */
    public function __construct(UrlBuilder $urlBuilder, $prefixFilterNames = false)
    {
        $this->urlBuilder = $urlBuilder;
        $this->prefixFilterNames = (bool) $prefixFilterNames;
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
            new \Twig_SimpleFilter($this->prefixFilterName('avatar'), [$this->urlBuilder, 'avatar']),
            new \Twig_SimpleFilter($this->prefixFilterName('profile'), [$this->urlBuilder, 'profile']),
            new \Twig_SimpleFilter($this->prefixFilterName('vcard'), [$this->urlBuilder, 'vcard']),
            new \Twig_SimpleFilter($this->prefixFilterName('qrCode'), [$this->urlBuilder, 'qrCode']),
        ];
    }

    /**
     * Prefix filter names to avoid any collision if necessary
     *
     * @param string $name
     *
     * @return string
     */
    protected function prefixFilterName($name)
    {
        if ($this->prefixFilterNames) {
            $name = $this->getName().'_'.$name;
        }

        return $name;
    }
}
