<?php

declare(strict_types=1);

namespace Gravatar\Twig;

use Gravatar\Gravatar;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
final class GravatarExtension extends AbstractExtension
{
    /**
     * @var Gravatar
     */
    private $gravatar;

    public function __construct(Gravatar $gravatar)
    {
        $this->gravatar = $gravatar;
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('gravatar_avatar', [$this->gravatar, 'avatar']),
            new TwigFilter('gravatar_profile', [$this->gravatar, 'profile']),
            new TwigFilter('gravatar_vcard', [$this->gravatar, 'vcard']),
            new TwigFilter('gravatar_qrCode', [$this->gravatar, 'qrCode']),
        ];
    }

    public function getName(): string
    {
        return 'gravatar';
    }
}
