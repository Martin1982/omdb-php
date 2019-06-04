<?php

namespace Rooxie\Exception;

/**
 * Class InvalidResponseExceptiond
 */
class InvalidResponseException extends \Exception
{
    /**
     * InvalidResponseException constructor.
     *
     * @param int    $httpCode
     * @param string $value
     * @param string $output
     */
    public function __construct(int $httpCode, string $value, string $output)
    {
        $message = sprintf('Could not get movie data for "%s". Got response: "%s"', $value, $output);

        parent::__construct($message, $httpCode);
    }
}
