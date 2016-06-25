<?php

namespace Gravatar\Twig;

use Gravatar\Gravatar;

/**
 * Gravatar Twig extension.
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class GravatarExtension extends \Twig_Extension
{
    /**
     * @var Gravatar
     */
    protected $gravatar;

    /**
     * @param Gravatar $gravatar
     */
    public function __construct(Gravatar $gravatar)
    {
        $this->gravatar = $gravatar;
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('gravatar_avatar', [$this->gravatar, 'avatar']),
            new \Twig_SimpleFilter('gravatar_profile', [$this->gravatar, 'profile']),
            new \Twig_SimpleFilter('gravatar_vcard', [$this->gravatar, 'vcard']),
            new \Twig_SimpleFilter('gravatar_qrCode', [$this->gravatar, 'qrCode']),
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
