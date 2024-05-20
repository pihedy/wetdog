<?php declare(strict_types=1);

namespace App\Components\Integration;

class Gravatar
{
    /**
     * Retrieve the Gravatar URL for a given email address.
     *
     * @param string    $email  The email address to retrieve the Gravatar for.
     * @param int       $size   Optional. The size of the Gravatar image in pixels.
     *
     * @return string The Gravatar URL.
     */
    public static function url(string $email, int $size = 80): string
    {
        return sprintf(
            'https://www.gravatar.com/avatar/%s?s=%s&d=identicon',
            md5(strtolower(trim($email))),
            $size
        );
    }
}
